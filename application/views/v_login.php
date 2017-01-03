<html>
    <head>
        <title>Login Form</title>
    </head>
    <body>
        <?php echo form_open('login_validation'); ?><!-- ini hampir sama dengan <form action="login_validation"></form> -->
        <h5>Username</h5>
        <input type="text" name="username" value="" size="50" />
        <h5>Password</h5>
        <input type="text" name="password" value="" size="50" />
        <div><input type="submit" value="Login" /></div>
        <?php 
            if($this->input->get('gagal')==1){
        ?>
        <span>username atau password salah</span>
        <?php
            }
        ?>
        <?php echo form_close(); ?> <!-- pada bagian ini pun sama menghasilkan </form> -->

    </body>
</html>