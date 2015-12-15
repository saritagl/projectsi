<?php
	$usuario = $POST["user"];
	$contraseña = $POST["pwd"];
	
	$link =mysql_connect("localhost","root","dios");
	//mysql_select_db("projectsi",$link) OR DIE ("Error: No es posible establecer la conexión");
	mysql_select_db("projectsi",$link);
	
	$sql = "SELECT Contrasena FROM Usuarios WHERE CI_Profesor = '$usuario'";
	$validar = mysql_query($sql);
	
	if (mysql_num_rows($validar) > 0)
	{
		$clave = mysql_result($validar,0);
		setcookie("pwd_user","$clave", time()+3600);
		header ("file:///home/saritagl/Escritorio/WEB/Login.php");
	}
	echo "Usuario o Contraseña Invalido";
	
?>
