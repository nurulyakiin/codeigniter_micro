<html>
    <head>
        <title>Login Form</title>
    </head>
    <body>
        Selamat datang <?php echo $nama;?><!-- variable nama adalah array dengan nama = 'nama' menghasilkan variable di view dari controller tadi.-->
		<?php 
			if ($active)
				echo "Akun anda telah aktif";
			else
				echo "Akun belum aktif, silahkan cek email : <b>$email</b>";
		?>
        <a href="login/logout">Logout</a> <!-- link untuk logout -->
    </body>
</html>