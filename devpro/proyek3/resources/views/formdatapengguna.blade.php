<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>
    <link rel="stylesheet" href="cssfile/style.css">
</head>
<body>
    <!-- Header -->
    <div class="header">
        <a href="#">Cravitae</a>
        <a href="#">Home</a>
        <a href="#">About Us</a>
        <a href="#" style="float: right;">Sign Out</a>
    </div>
    
    <!-- Personal Information Form -->
    <div class="container">
        <h1>Personal Information</h1>
        <form action="/insertdata" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Deskripsi -->
            <div class="form-group">
                <label for="description">Deskripsi:</label>
                <textarea id="description" name="deskripsi" rows="4" cols="50"></textarea>
            </div>
            
            <!-- Nama Lengkap dan Email -->
            <div class="form-group">
                <div class="input-group">
                    <label for="fullName">Nama Lengkap:</label>
                    <input type="text" id="fullName" name="full_Name">
                </div>
                <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                </div>
            </div>
            
            <!-- Alamat dan Nomor Telepon -->
            <div class="form-group">
                <div class="input-group">
                    <label for="address">Alamat:</label>
                    <input type="text" id="address" name="address">
                </div>
                <div class="input-group">
                    <label for="phoneNumber">Nomor Telepon:</label>
                    <input type="tel" id="phoneNumber" name="telephone_number">
                </div>
            </div>
            
            <!-- Kota dan Link Profil -->
            <div class="form-group">
                <div class="input-group">
                    <label for="city">Kota:</label>
                    <input type="text" id="city" name="city">
                </div>
                <div class="input-group">
                    <label for="profileLink">Link Profil:</label>
                    <input type="url" id="profileLink" name="link_profile">
                </div>
            </div>
            
            <!-- Tombol Next -->
            <div class="button-container">
                <button type="submit">Next</button>
            </div>
        </form>
    </div>

</body>
</html>
