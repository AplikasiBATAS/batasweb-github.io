<form action="<?php echo site_url('Welcome/UpdateDataWarga'); ?>" method="post">
<table>
    <tr>
        <td>
            <h1>Update Data Warga</h1>
            <br>
            <label>ID Warga</label>
            <input type="text" name="txt_id_warga" value="<?php echo $detail['id_warga'];?>" readonly>
        </td>
    </tr>
    
    
    <tr>
        <td>
            <label>Nama</label>
            <input type="text" name="txt_nama" value="<?php echo $detail['nama'];?>">
        </td>
    </tr>
    <tr>
        <td>
            <label>NIK</label>
            <input type="text" name="txt_nik" value="<?php echo $detail['nik'];?>">
        </td>
    </tr>
    <tr>
        <td>
            <label>Alamat</label>
            <input type="text" name="txt_alamat" value="<?php echo $detail['alamat'];?>">
        </td>
    </tr>
    <tr>
        <td>
            <label>Email</label>
            <input type="text" name="txt_email" value="<?php echo $detail['email'];?>">
        </td>
    </tr>
    <tr>
        <td>
            <label>Password</label>
            <input type="text" name="txt_password" value="<?php echo $detail['password'];?>">
        </td>
    </tr>
    <td>
        <input type="submit" name="simpan" value="Simpan">
        <br>
        <a href="<?php echo site_url('Welcome/DataWarga'); ?>">Kembali</a>
    </td>                   
</table>
</form>