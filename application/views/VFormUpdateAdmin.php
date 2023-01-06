<form action="<?php echo site_url('Welcome/UpdateDataAdmin'); ?>" method="post">
<table>
    <tr>
        <td>
        <h1>Update Data Admin</h1>
            <br>
            <label>NIS</label>
            <input type="text"  name="txt_nis" value="<?php echo $detail['nis'];?>"  readonly>
        </td>
    </tr>
    <tr>
        <td>
            <label>Username</label>
            <input type="text" name="txt_username" value="<?php echo $detail['username'];?>">
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
        <a href="<?php echo site_url('Welcome/DataAdmin'); ?>">Kembali</a>
    </td>                   
</table>
</form>