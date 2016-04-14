<HTML>
<HEAD>
<TITLE>consultaBD.php</TITLE>
</HEAD>
<BODY>
<div align="center">
<h1>Actualizar un registro</h1>
<br>
<?
$link = mysql_connect("mysql6.000webhost.com", "a6831370_hugi1", "h0lamund0");

//selección de la base de datos con la que vamos a trabajar 
mysql_select_db("a6831370_exa5",$link) or die ('El recurso al que intenta acceder no está disponible');
?>

<?
    $sentencia="SELECT * FROM ConsultaAlfa";
    $res=mysql_query($sentencia) or die("Error en la consulta");
?>
    <form action="" method="post">
    Nombre<br>
    <select name="Nombre">
<?
 
    while($datos=mysql_fetch_array($res))
    {
?>
    <option value="<? echo $datos[0]; ?>"><? echo $datos[0]; ?></option>
<?
    }
?>
    </select>
	
	</FORM>
</div>

</BODY>
</HTML>
	