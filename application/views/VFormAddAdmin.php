<style>
    body {
  font-family: sans-serif;
  background: #aec6cf;
}

h1 {
  text-align: center;
  /*ketebalan font*/
  font-weight: 300;
}


.kotak_login {
  width: 350px;
  background: white;
  border-radius: 10px;
  /*meletakkan form ke tengah*/
  margin: 80px auto;
  padding: 30px 20px;
}

label {
  font-size: 11pt;
}

.form_login {
  /*membuat lebar form penuh*/
  box-sizing: border-box;
  width: 100%;
  padding: 10px;
  font-size: 11pt;
  margin-bottom: 20px;
}

.tombol_login {
  background: #779ecb;
  color: white;
  font-size: 11pt;
  width: 100%;
  border: none;
  border-radius: 3px;
  padding: 10px 20px;
}

</style>

<form action="<?php echo site_url('Welcome/AddDataAdmin'); ?>" method="post">
<div class="kotak_login">
<h1>Tambah Data Admin</h1>
<br>
<form action="/action_page.php">
<div class="container">
  <!--
  <label for="NIS"><b>NIS</b></label>
  <input class="form_login" type="text" placeholder="NIS . . ." name="txt_nis" >
-->
  <label for="Username"><b>Email</b></label>
  <input class="form_login" type="text" placeholder="Username . . ." name="txt_username" >

  <label for="Password"><b>Password</b></label>
  <input class="form_login" type="password" placeholder="Password . . ." name="txt_password" >
  
    <button type="submit" class="tombol_login">Tambah Data Admin</button>
   <center> <a href="<?php echo site_url('Welcome/DataAdmin'); ?>">Kembali</a> </center>
</div>
</form>

</div>
<!--
<table>
    <tr>
        <td>
            <label>NIS</label>
            <input type="text" name="txt_nis">
        </td>
    </tr>
    <tr>
        <td>
            <label>Username</label>
            <input type="text" name="txt_username">
        </td>
    </tr>
    <tr>
        <td>
            <label>password</label>
            <input type="text" name="txt_password">
        </td>
    </tr>
    <td>
        <input type="submit" name="simpan" value="Simpan">
    </td>                   
</table>
-->
</form>