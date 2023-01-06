<Style>
			*{
    margin: 0px;
    padding: 0px;
}
.btn-warning {
  background: #f1c40f;
  color: #ffffff;
}

.btn-warning:hover {
  background: #f39c12;
  color: #ffffff;
}

.btn-warninga {
  background: #f10f0f;
  color: #ffffff;
}

.btn-warninga:hover {
  background: #f39c12;
  color: #ffffff;
}

btn {
  appearance: none;
    -webkit-appearance: none;
  font-family: sans-serif;
  cursor: pointer;
  padding: 12px;
  min-width: 100px;
  border: 0px;
    -webkit-transition: background-color 100ms linear;
    -ms-transition: background-color 100ms linear;
     transition: background-color 100ms linear;
}

body {
    font-size: 14px;
    font-family: verdana;

}
#heading{
    float: left;
    width: 640px;
}
#heading a {
    line-height: 65px;
    text-decoration: none;
    padding-left: 60px;
    color:#FFF;
    font-family: aardvark cafe;
    font-size: 40px;
}
#menu {
    background:#3d0856;
    width: 100%;
    height: 70px;
    margin: 0px;
    padding: 0px;
    
}
#menu ul {
    list-style: none;

}
#menu ul li {
    float: left;
    line-height: 65px
}
#menu ul li a {
    float:left; 
    width:100px; 
    display:block; 
    text-align:center; 
    color:#FFF; 
    text-decoration:none; 
}
#menu ul ul {
    display:none; 
    list-style:none; 
    position:absolute; 
    background-color:#553d67;
    float: none;
    top:65px; 
    width:190px;
}
#menu ul li a:hover {
    background-color:#2E9EA2; 
    display:block;
}
#menu ul li:hover ul {
    display:block;
}
#menu ul ul li a {
    display:block;
    padding-left:30px; 
    text-align:left; 
    width:160px;
    height: 60px;
    line-height: 60px;
}
#menu ul ul li a:hover {
    color:#fff;
}
	 th
    {
	
      background-color:#123c69;
      color:white;
	}

	.button {
  appearance: none;
  background: none;
  border: none;
  outline: none;

  padding: 1px 1px;
  border-radius: 8px;
  color: #212121;
  font-size: 10px;
  font-weight: 600;
  margin: 0 15px;
  cursor: pointer;
  transition: 0.4s;
}

.button-1 {
  color: #FFCE00;
  border: 3px solid #FFCE00;
}

.button-1:hover {
  color: #FFF;
  background-color: #FFCE00;
}

</style>
				<br>
<Center><table width="1153"  border="2" cellspacing="3" rules="" >
	<tr>
			<center><a href="<?php echo site_url('Welcome/VFormAddWarga'); ?>" title="menu tambah" class="link-button_biru">+ Data Warga</a></center>
			<br>
</tr>
	<tr>
	<th>No</th>
	<th>Nama</th>
		<th>NIK</th>
		<th>Alamat</th>
		<th>email</th>
		<th>password</th>
		<th>Tools</th>
	</tr>
	<?php
		if(!empty($DataWarga))
		{
			foreach($DataWarga as $ReadDS)
			{
	?>
	<tr>
	<td><?php echo $ReadDS->id_warga; ?></td>
	<td><?php echo $ReadDS->nama; ?></td>
	<td><?php echo $ReadDS->nik; ?></td>
		<td><?php echo $ReadDS->alamat; ?></td>
		<td><?php echo $ReadDS->email; ?></td>
		<td><?php echo $ReadDS->password; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataWarga/'.$ReadDS->id_warga.'/view') ?>" class="btn btn-warning">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataWarga/'.$ReadDS->id_warga) ?>" class="btn btn-warninga">Delete</a>
		</td>
	</tr>
	<?php		
		}
	}
	?>
</table>