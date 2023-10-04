<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
    <!-- Include CSS styling here -->
    <link rel="stylesheet" href="/cssfile/stylescv.css">
</head>

<body>
    @foreach ($data as $isi)
    <header>
        <!-- Deskripsi -->
        <div class="cv-item">
            <h2>Nama</h2>
            <p>{{$isi->full_name}}</p>
        </div>
    </header>

    <section class="cv-section">
        <!-- Deskripsi -->
        <div class="cv-item">
            <h2>Deskripsi</h2>
            <p>{{$isi->deskripsi}}</p>
        </div>

        <!-- Alamat -->
        <div class="cv-item">
            <h2>Alamat</h2>
            <p>{{$isi->address}}</p>
        </div>

        <!-- Kota -->
        <div class="cv-item">
            <h2>Kota</h2>
            <p>{{$isi->city}}</p>
        </div>

        <!-- Link Profil -->
        <div class="cv-item">
            <h2>Link Profil</h2>
            <p><a href="[Link Profil Anda]">{{$isi->link_profile}}</a></p>
        </div>

        <!-- Nomor Telepon -->
        <div class="cv-item">
            <h2>Nomor Telepon</h2>
            <p>{{$isi->telephone_number}}</p>
        </div>
    </section>
    @endforeach
    <!-- Include footer or additional sections as needed -->

</body>

</html>
