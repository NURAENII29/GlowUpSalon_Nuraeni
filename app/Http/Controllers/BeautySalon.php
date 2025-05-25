<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\service;
use App\Models\salon;
use Illuminate\Support\Facades\Auth;

class BeautySalon extends Controller
{
    //NAVBAR HOME
     public function home(){
        $query = service::limit(4)->get();
        foreach ($query as $salon) {
            $salon->description = Str::limit($salon->description,50);
        }
        return view('dashboard',compact('query'));
    }

    //NAVBAR SERVICE
    public function service(){
        $query = service::paginate(4);
        return view('service',compact('query'));
    }

    //TEAM
    public function team(){
        $query = salon::paginate(4);
        return view('team',compact('query'));
    }

    //TAMBAH PROFIL
    public function profilPekerjaSalon(){
        $menu = service::all();
        $user = auth()->user()->id;
        return view('profil',compact('menu','user'));
    }

    //SIMPAN PROFIL
    public function profilSimpan(Request $request){
        // dd($request->all());
        $validate_profil = $request->validate([
            'image' => ['image','file','max:2048'],
            'address' => ['required'],
            'phone' => ['required','numeric'],
            'name' => ['required'],
            'description' => ['required']
        ]);

        $validate_profil['user_id'] = auth()->user()->id;
        // dd($validate_profil['user_id']);
        $validate_profil['image'] = $request->file('image')->store('img-profil','public');
        // dd($validate_profil);        
        $salon = salon::create($validate_profil);

         if($request->name){
            $salon->services()->sync($request->name);
        }else{
            return redirect('/profil')->with('gagal','anda gagal menambahkan pilihan keahlian anda');
        } 

        return redirect('/profil')->with('sukses','anda berhasil menambahkan pilihan keahlian anda');
        
    }


}
