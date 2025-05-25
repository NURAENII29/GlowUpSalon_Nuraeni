<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil Bidan</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        background-color: #f999ac;
        color: #333;
        line-height: 1.6;
        height: 100vh;
        overflow: hidden;
        display: flex;
        align-items: center;

    }

    .container {
        max-width: 500px;
        height: 95vh;
        margin: 0 auto;
        padding: 30px;
        background: white;
        overflow-y: auto;
        display: flex;
        flex-direction: column;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.7);
        border-radius: 15px;
    }

    .img {
        text-align: center;
        flex-shrink: 0;
    }



    .isi-form {
        padding: 10px 20px;
        flex-grow: 1;
        overflow-y: auto;
    }

    .inputan {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: 500;
        color: #ff6b9d;
    }

    input[type="text"],
    input[type="number"],
    input[type="file"],
    textarea {
        width: 100%;
        padding: 5px 15px;
        border: 2px solid #ffd6e7;
        border-radius: 8px;
        font-size: 16px;
        transition: all 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="number"]:focus,
    input[type="file"]:focus,
    textarea:focus {
        border-color: #ff6b9d;
        outline: none;
        box-shadow: 0 0 0 3px rgba(255, 107, 157, 0.2);
    }

    .texarea {
        margin-bottom: 20px;
    }

    textarea {
        min-height: 120px;
        resize: vertical;
    }

    .inputan label {
        display: inline-block;
        margin-right: 15px;
        margin-bottom: 10px;
        font-weight: 400;
    }

    input[type="checkbox"] {
        margin-right: 5px;
        accent-color: #ff6b9d;
    }

    .btn {
        text-align: center;
        margin-top: 20px;
        padding-bottom: 20px;
        flex-shrink: 0;
    }

    button {
        background-color: #ff6b9d;
        color: white;
        border: none;
        padding: 12px 30px;
        font-size: 16px;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    button:hover {
        background-color: #ff4785;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 107, 157, 0.3);
    }

    @media (max-width: 768px) {
        .container {
            padding: 15px;
        }

        .isi-form {
            padding: 10px;
        }
    }
</style>

<body>
    <div class="container">
        <div class="img">
            <img src="{{ asset('img/logooo.png') }}" alt="Logo" width="200" height="200">
        </div>
        <div class="isi-form">
            <form action="{{ route('profil') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="inputan">
                    <label for="profil">Tambah Profil Anda</label>
                    <input type="file" name="image" id="profil" placeholder="Masukkan Keahlian Anda">
                    @error('image')
                        <p style="color: red">{{ $message }}</p>
                    @enderror
                </div>

                <div class="inputan">
                    <label for="nomor">Masukkan Nomor Telepon anda</label>
                    <input type="number" name="phone" id="nomor" placeholder="Masukan Nomor Telepon Anda" value="{{ old('phone') }}">
                    @error('phone')
                        <p style="color: red">{{ $message }}</p>
                    @enderror
                </div>

                <div class="inputan">
                    <label for="alamat">Tambahkan Alamat Anda</label>
                    <input type="text" name="address" id="alamat" placeholder="Masukkan Alamat Anda" value="{{ old('address') }}">
                    @error('address')
                        <p style="color: red">{{ $message }}</p>
                    @enderror
                </div>

                <div class="inputan">
                    <label for="profil">Pilih Bidang Keahlian Anda</label>
                    <div class="checkbox-group">
                        @foreach ($menu as $a)
                            <label><input type="checkbox" name="name[]"
                                    value="{{ $a->id }}">{{ $a->name }}</label>
                        @endforeach
                        @error('name')
                            <p style="color: red">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="texarea">
                    <label for="description">Deskripsi Pengalaman Anda</label>
                    <textarea name="description" id="description" cols="30" rows="10" placeholder="Masukkan keterangan Anda"></textarea>
                     @error('description')
                        <p style="color: red">{{$message}}</p>
                    @enderror
                </div>

                <div class="btn">
                    <button type="submit">Kirim</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        @if(session()->has('gagal'))
            alert('{{ session('gagal') }}');
        @endif

        @if(session()->has('sukses'))
            alert('{{ session('sukses') }}');
        @endif


    </script>
</body>

</html>
