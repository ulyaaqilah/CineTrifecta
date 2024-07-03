@extends('layout.admin')

@section('content')
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h1>Pengantar API Data Film</h1>
    <p>Selamat datang di API Data Film kami, solusi canggih untuk mengakses informasi film terbaru dan terperinci. API ini dirancang untuk memberikan akses mudah dan cepat ke berbagai data film yang disimpan dalam enam tabel utama: Title, Genre, Premiere, Runtime, Language, dan IMDB_Score.</p>

    <h2>Struktur Tabel</h2>
    <ul>
        <li><strong>Title</strong>: Menyimpan judul film.</li>
        <li><strong>Genre</strong>: Menyimpan genre atau kategori film.</li>
        <li><strong>Premiere</strong>: Menyimpan tanggal rilis film.</li>
        <li><strong>Runtime</strong>: Menyimpan durasi film.</li>
        <li><strong>Language</strong>: Menyimpan bahasa yang digunakan dalam film.</li>
        <li><strong>IMDB_Score</strong>: Menyimpan skor penilaian film dari IMDB.</li>
        <li><strong>Rating_film</strong>: Menyimpan penilaian atau rating yang diberikan oleh pengguna untuk film tersebut.</li>
    </ul>

    <h2>Endpoint yang Tersedia</h2>
    <p>API ini menyediakan tiga endpoint utama untuk mempermudah pengaksesan data:</p>
    <ul>
        
            <h3>1. Select</h3>
            <p>Endpoint ini memungkinkan pengguna untuk menampilkan semua data film yang tersedia di dalam database. Pengguna dapat memfilter data berdasarkan title, genre, premiere, runtime, IMDB_score, atau language untuk mendapatkan subset data yang diinginkan. Parameter filter opsional dapat digunakan untuk menyaring hasil berdasarkan kriteria yang ditentukan.</p>
            <p><strong>Metode HTTP:</strong> GET</p>
            <h3>2. Insert Film</h3>
            <p>Endpoint ini digunakan untuk menambahkan data film ke dalam database. Pengguna dapat mengirimkan informasi tentang film yang ingin ditambahkan, seperti judul, genre, tanggal premiere, durasi runtime, skor IMDB, dan bahasa. Data film baru akan disimpan dalam database setelah permintaan POST berhasil dieksekusi.</p>
            <p><strong>Metode HTTP:</strong> POST</p>
       
            <h3>3. Insert Rating</h3>
            <p>Endpoint ini berfungsi untuk menambahkan rating untuk suatu film yang telah ada dalam database. Pengguna dapat mengirimkan data rating yang terdiri dari ID film dan nilai rating. Rating akan ditambahkan ke entri film yang sesuai dalam database dan dapat digunakan untuk mengevaluasi popularitas atau kualitas film.</p>
            <p><strong>Metode HTTP:</strong> POST</p>
    </ul>

    <h2>Proses Autentikasi</h2>
    <p>Untuk mengakses endpoint yang tersedia, pengguna harus terlebih dahulu melakukan login untuk mendapatkan token autentikasi. Token ini digunakan untuk mengamankan akses dan memastikan hanya pengguna terverifikasi yang dapat mengakses data film.</p>
    <p>Proses autentikasi ini melibatkan:</p>
    <ul>
        <li><strong>Login</strong>: Pengguna memasukkan kredensial mereka untuk mendapatkan token.</li>
        <li><strong>Penggunaan Token</strong>: Setiap permintaan ke endpoint harus menyertakan token yang telah diberikan untuk memverifikasi dan mengizinkan akses.</li>
    </ul>

    <p>Dengan API ini, kami berharap dapat menyediakan platform yang andal dan mudah digunakan bagi pengembang yang membutuhkan data film untuk berbagai keperluan, mulai dari pengembangan aplikasi hingga penelitian dan analisis data.</p>
    @endsection