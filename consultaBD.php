<HTML>
<HEAD>
<TITLE>consultaBD.php</TITLE>
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

echo '<FORM METHOD="POST" ACTION="consultaBDupdt.php">Nombre<br>';//Esto es para mandarlo a la siguiente página, puede no ser tan importante, por ahora.
$sSQL="Select Nombre from ConsultaAlfa";//Sentencia SQL a ejecutar
$result=mysql_query($sSQL);
echo '<select name="Nombre">';
//Generamos el menu desplegable
while ($row=mysql_fetch_array($result))
{echo '<option>'.$row["Nombre"];}
?>
</select>

<?
$s1SQL="Select Edad from ConsultaAlfa";//Sentencia SQL a ejecutar
$r1result=mysql_query($s1SQL);
echo '<select name="Edad">';
//Generamos el menu desplegable
while ($row=mysql_fetch_array($r1result))
{echo '<option>'.$row["Edad"];}
?>
</select>

<?
$s2SQL="Select Telefono from ConsultaAlfa";//Sentencia SQL a ejecutar
$r2result=mysql_query($s2SQL);
echo '<select name="Telefono">';
//Generamos el menu desplegable
while ($row=mysql_fetch_array($r2result))
{echo '<option>'.$row["Telefono"];}
?>
</select>
</br>
<input type="submit" value="Actualizar">


</FORM>
</div>

</BODY>
</HTML>
