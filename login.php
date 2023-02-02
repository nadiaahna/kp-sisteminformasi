<html>
<head>
    <title>Desain Form Login Dengan Css</title>
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
    <div class="konten">
        <div class="kepala">
            <img src="logo_pusri.jpg" width="300px" height="100px" valign="center">
        </div>
        <div class="artikel">
            <form action="proseslogin.php" method="post">
                <div class="grup">
                    <label>E-mail Address</label>
                    <input name="email" type="text" placeholder="Masukkan Alamat Email Anda">
                </div>
                <div class="grup">
                    <label>Password</label>
                    <input name="password" type="password" placeholder="Masukkan password Anda">
                </div>
                <div class="grup">
                    <input type="submit" value="Login">
                </div>
            </form>
        </div>
    </div>
</body>
</html>