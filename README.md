<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLOWUP SALON</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; margin: 20px; }
        h1, h2, h3 { color: #333366; }
        table { width: 100%; border-collapse: collapse; margin: 20px 0; }
        th, td { border: 1px solid #cccccc; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
    
</head>
<body>
    <h1>GLOWUP SALON</h1>
    <p><em>Platform Online untuk Layanan Salon</em></p>
    <p><strong>Nuraeni</strong><br>
    D0223036<br>
    Framework Web Based<br>
    2025</p>
    <h2>Role dan Fitur-fiturnya</h2>
    <ul>
        <li><strong>Admin:</strong> Mengelola platform dan memastikan semua data valid dan sistem berjalan aman.</li>
        <li><strong>Salon Partner:</strong> Menambahkan layanan dan memantau pemesanan.</li>
        <li><strong>Customer:</strong> Melakukan booking layanan salon sesuai pilihan dan jadwal.</li>
    </ul>
    <h2>Tabel-tabel Database</h2>
    <h3>Tabel: users</h3>
    <table>
        <tr><th>Nama Field</th><th>Tipe Data</th><th>Keterangan</th></tr>
        <tr><td>Id</td><td>Bigint (auto)</td><td>Primary key</td></tr>
        <tr><td>Name</td><td>Varchar</td><td>Nama pengguna</td></tr>
        <tr><td>Email</td><td>Varchar (unique)</td><td>Alamat email unik</td></tr>
        <tr><td>Password</td><td>Varchar</td><td>Kata sandi terenkripsi</td></tr>
        <tr><td>Role</td><td>ENUM (admin, partner, customer)</td><td>Peran pengguna</td></tr>
        <tr><td>Created_at</td><td>Timestamp</td><td>Tanggal dibuat</td></tr>
        <tr><td>Updated_at</td><td>Timestamp</td><td>Tanggal update</td></tr>
    </table>
    <h3>Tabel: salons</h3>
    <table>
        <tr><th>Nama Field</th><th>Tipe Data</th><th>Keterangan</th></tr>
        <tr><td>Id</td><td>Bigint (auto)</td><td>Primary key</td></tr>
        <tr><td>User_id</td><td>Bigint</td><td>Foreign key ke users.id</td></tr>
        <tr><td>Name</td><td>Varchar</td><td>Nama salon</td></tr>
        <tr><td>Address</td><td>Text</td><td>Alamat lengkap salon</td></tr>
        <tr><td>Phone</td><td>Varchar</td><td>Nomor telepon salon</td></tr>
        <tr><td>Description</td><td>Text (null)</td><td>Deskripsi tambahan</td></tr>
        <tr><td>Created_at</td><td>Timestamp</td><td>Tanggal dibuat</td></tr>
        <tr><td>Updated_at</td><td>Timestamp</td><td>Tanggal update</td></tr>
    </table>
    <h3>Tabel: service</h3>
    <table>
        <tr><th>Nama Field</th><th>Tipe Data</th><th>Keterangan</th></tr>
        <tr><td>Id</td><td>Bigint (auto)</td><td>Primary key</td></tr>
        <tr><td>Salon_id</td><td>Bigint</td><td>Foreign key ke salons.id</td></tr>
        <tr><td>Name</td><td>Varchar</td><td>Nama layanan</td></tr>
        <tr><td>Description</td><td>Text (null)</td><td>Deskripsi layanan</td></tr>
        <tr><td>Price</td><td>Decimal(10,2)</td><td>Harga layanan</td></tr>
        <tr><td>Duration</td><td>Integer</td><td>Lama layanan dalam menit</td></tr>
        <tr><td>Created_at</td><td>Timestamp</td><td>Tanggal dibuat</td></tr>
        <tr><td>Updated_at</td><td>Timestamp</td><td>Tanggal update</td></tr>
    </table>
    <h3>Tabel: bookings</h3>
    <table>
        <tr><th>Nama Field</th><th>Tipe Data</th><th>Keterangan</th></tr>
        <tr><td>Id</td><td>Bigint (auto)</td><td>Primary key</td></tr>
        <tr><td>User_id</td><td>Bigint</td><td>Foreign key ke users.id</td></tr>
        <tr><td>Service_id</td><td>Bigint</td><td>Foreign key ke services.id</td></tr>
        <tr><td>Booking_date</td><td>Date</td><td>Tanggal pemesanan</td></tr>
        <tr><td>Booking_time</td><td>Time</td><td>Jam layanan</td></tr>
        <tr><td>Status</td><td>Enum (pending, confirmed, done, cancelled)</td><td>Status pemesanan</td></tr>
    </table>
    <h2>Relasi Tabel</h2>
    <table>
        <tr><th>Tabel Asal</th><th>Tabel Tujuan</th><th>Jenis Relasi</th><th>Penjelasan</th></tr>
        <tr><td>Users</td><td>Salons</td><td>One to many (1:m)</td><td>User partner bisa memiliki banyak salon</td></tr>
        <tr><td>Salons</td><td>Services</td><td>One to many (1:m)</td><td>Satu salon bisa punya banyak layanan</td></tr>
        <tr><td>Users</td><td>Bookings</td><td>One to many (1:m)</td><td>Customer bisa melakukan banyak pemesanan</td></tr>
        <tr><td>Services</td><td>Bookings</td><td>One to many (1:m)</td><td>Layanan bisa dipesan berkali-kali</td></tr>
        <tr><td>Bookings</td><td>Transactions</td><td>One to one (1:1)</td><td>Satu booking memiliki satu transaksi</td></tr>
    </table>
</body>
</html>
