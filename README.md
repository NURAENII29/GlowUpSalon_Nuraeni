<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>
<h2 align="center" style="margin-bottom: 0px;">GLOWUP SALON</h2>
<h2 align="center" style="margin-top: 0;">Platform Online untuk Layanan Salon</h2></br>

<h2 align="center">
  <img src="unsulbar.jpeg" width="300" alt="Deskripsi gambar" />
</h2>

<h2 align="center">NURAENI</h2>
<h2 align="center">D0223036</h2></br>
<h2 align="center">Framework Web Based</h2>
<h2 align="center">2025</h2>

  <h3>Role dan Fitur-fiturnya</h3>
  <ul>
    <li><strong>Admin:</strong> Mengelola platform, memastikan data valid dan sistem aman.</li>
    <li><strong>Salon Partner:</strong> Dapat menambahkan layanan dan memantau pemesanan.</li>
    <li><strong>Customer:</strong> Melakukan booking layanan dengan memilih salon dan jadwal.</li>
  </ul>

  <h3>Tabel-tabel Database</h3>

  <h3>Tabel <code>users</code></h3>
  <table>
    <tr><th>Nama Field</th><th>Tipe Data</th><th>Keterangan</th></tr>
    <tr><td>id</td><td>bigint (auto)</td><td>Primary key</td></tr>
    <tr><td>name</td><td>varchar</td><td>Nama pengguna</td></tr>
    <tr><td>email</td><td>varchar (unique)</td><td>Alamat email</td></tr>
    <tr><td>password</td><td>varchar</td><td>Kata sandi</td></tr>
    <tr><td>role</td><td>enum</td><td>Role pengguna</td></tr>
    <tr><td>created_at</td><td>timestamp</td><td>Tanggal dibuat</td></tr>
    <tr><td>updated_at</td><td>timestamp</td><td>Tanggal update</td></tr>
  </table>

  <h3>Tabel <code>salons</code></h3>
  <table>
    <tr><th>Nama Field</th><th>Tipe Data</th><th>Keterangan</th></tr>
    <tr><td>id</td><td>bigint (auto)</td><td>Primary key</td></tr>
    <tr><td>user_id</td><td>bigint</td><td>Foreign key ke users.id</td></tr>
    <tr><td>name</td><td>varchar</td><td>Nama salon</td></tr>
    <tr><td>address</td><td>text</td><td>Alamat lengkap</td></tr>
    <tr><td>phone</td><td>varchar</td><td>Nomor telepon</td></tr>
    <tr><td>description</td><td>text (null)</td><td>Deskripsi tambahan</td></tr>
    <tr><td>created_at</td><td>timestamp</td><td>Tanggal dibuat</td></tr>
    <tr><td>updated_at</td><td>timestamp</td><td>Tanggal update</td></tr>
  </table>

  <h3>Tabel <code>services</code></h3>
  <table>
    <tr><th>Nama Field</th><th>Tipe Data</th><th>Keterangan</th></tr>
    <tr><td>id</td><td>bigint (auto)</td><td>Primary key</td></tr>
    <tr><td>salon_id</td><td>bigint</td><td>Foreign key ke salons.id</td></tr>
    <tr><td>name</td><td>varchar</td><td>Nama layanan</td></tr>
    <tr><td>description</td><td>text (null)</td><td>Deskripsi layanan</td></tr>
    <tr><td>price</td><td>decimal(10,2)</td><td>Harga layanan</td></tr>
    <tr><td>duration</td><td>integer</td><td>Lama dalam menit</td></tr>
    <tr><td>created_at</td><td>timestamp</td><td>Tanggal dibuat</td></tr>
    <tr><td>updated_at</td><td>timestamp</td><td>Tanggal update</td></tr>
  </table>

  <h3>Tabel <code>bookings</code></h3>
  <table>
    <tr><th>Nama Field</th><th>Tipe Data</th><th>Keterangan</th></tr>
    <tr><td>id</td><td>bigint (auto)</td><td>Primary key</td></tr>
    <tr><td>user_id</td><td>bigint</td><td>Foreign key ke users.id</td></tr>
    <tr><td>service_id</td><td>bigint</td><td>Foreign key ke services.id</td></tr>
    <tr><td>booking_date</td><td>date</td><td>Tanggal pemesanan</td></tr>
    <tr><td>booking_time</td><td>time</td><td>Jam layanan</td></tr>
    <tr><td>status</td><td>enum</td><td>Status pemesanan</td></tr>
  </table>

  <h3>Relasi Antar Tabel</h3>
  <table>
    <tr><th>Tabel Asal</th><th>Tabel Tujuan</th><th>Jenis Relasi</th><th>Penjelasan</th></tr>
    <tr><td>users</td><td>salons</td><td>1 : m</td><td>Partner dapat memiliki banyak salon</td></tr>
    <tr><td>salons</td><td>services</td><td>1 : m</td><td>Satu salon punya banyak layanan</td></tr>
    <tr><td>users</td><td>bookings</td><td>1 : m</td><td>Pelanggan bisa memesan banyak layanan</td></tr>
    <tr><td>services</td><td>bookings</td><td>1 : m</td><td>Satu layanan bisa dipesan banyak kali</td></tr>
    <tr><td>bookings</td><td>transactions</td><td>1 : 1</td><td>Satu booking punya satu transaksi</td></tr>
  </table>

</body>
</html>
