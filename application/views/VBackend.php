<html>
	<head>
		<Style>
			*{
    margin: 0px;
    padding: 0px;
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
	
.link-button_biru{
	text-decoration: none;
	background-color: #61892f;
	color: white;
	padding: 4px 8px 4px 8px;
	border: 1px solid #c2c2c2;
	border-radius:2px;
}
.link-button_biru:hover{
	background-color: #139ff0;
}
.link-button_merah{
	text-decoration: none;
	background-color: #BC4639;
	color: white;
	padding: 4px 8px 4px 8px;
	border: 1px solid #c2c2c2;
	border-radius:2px;
}
.link-button_merah:hover{
	background-color: #139ff0;
}
.link-button_kuning{
	text-decoration: none;
	background-color: #D79922;
	color: white;
	padding: 4px 8px 4px 8px;
	border: 1px solid #c2c2c2;
	border-radius:2px;
}
.link-button_kuning:hover{
	background-color: #139ff0;
}
			</style>
		<title>BATAS</title>
	</head>
	<body>
	<nav id="menu">
     <ul>
        <div id="heading">
                        <a href="#"><img src=" <?php echo base_url('/assets/images/logo-batas.png');  ?>" alt="user" width="150" height="50"></a></li>
        </div>
     
        <li><<a href="<?php echo site_url('Welcome/DataAdmin'); ?>">Data Admin</a></li>
        <li><<a href="<?php echo site_url('Welcome/DataWarga'); ?>">Data Warga</a></li>
        <li><<a href= "<?php echo site_url('Welcome/Logout'); ?>">Logout</a></li>
        </li>
    </ul>
</nav>
		
				
			</tr>
			<tr>
				<td>
					<?php $this->load->view($content); ?>
				</td>
			</tr>
		</table>
	</body>
</html>