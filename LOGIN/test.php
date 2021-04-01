<?php 	
	$db='C:\Users\thagana\Desktop\artom_art_gallery.accdb';
	if (!file_exists($db)) {
		die('could not find database');
	}
		$db=new PDO('odbc:DRIVER={Microsoft Access Driver(*.accdb)}; Dbq='.$db.'; Uid=; Pwd=;'); 

 ?>