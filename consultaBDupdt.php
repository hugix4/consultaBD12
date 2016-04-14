<HTML>
<HEAD>
<TITLE>consultaBDupdt.php</TITLE>
</HEAD>
<BODY>
<div align="center">
<h1>Hugix</h1>
<br>
<?
//Conexion con la base
$link = mysql_connect("mysql6.000webhost.com", "a6831370_hugi1", "h0lamund0");

//selección de la base de datos con la que vamos a trabajar 
mysql_select_db("a6831370_exa5",$link); 

echo '<FORM METHOD="POST" ACTION="actualizar2.php">Nombre<br>';

//Creamos la sentencia SQL y la ejecutamos ConsultaAlfa Nombre,Telefono,Edad,Sexo,mail
$sSQL="Insert into ConsultaAlfa (Nombre, Telefono, Edad, Sexo, mail)  Values ('Luigi',55951039, 25, 'M','mariobros@nintendo.com')";
mysql_query($sSQL);
?>
<h1><div align="center">Renglón agregado</div></h1>

</BODY>
</HTML>