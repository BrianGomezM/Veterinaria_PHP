<?php
header("Content-Type: text/html; charset=iso-8859-1");
	require_once('../../herramientas/configuracion/vars.php'); // ruta relativa a include/config.php
	require_once('../../herramientas/configuracion/connect.php'); // ruta relativa a include/config.php
	$db=conectar();
	session_name($session_name);
	session_start();
	$var_usu=$_POST[action];
	switch ($var_usu)
	{
	case 'reg':
		$var_ident=$_POST[des];
		//echo "<script>alert('regitrar');</script>";
		echo "Ident : $var_ident<BR>";
		$sql="SELECT sintoma.id_sin,descripcion_sin, localizacion_sin	FROM  sintoma WHERE sintoma.id_sin = '$var_ident'";
		echo "SQL: $sql<BR>";
		$res=mysql_query($sql);
		while($row=mysql_fetch_array($res))
			{
				$var_tt=$row[id_sin];
			}
		if($var_tt>0)
				{
					echo "<script>alert('usuario ya existe');</script>";
				}
			else
				{
					$var_sintoma=$_POST[des];
					echo "Nom: $var_sintoma<br>";
					$var_lugar=$_POST[luga];
					echo "lugar: $var_lugar<br>";
					
					$sql="insert into sintoma(descripcion_sin, localizacion_sin)
					                 values  ('$var_sintoma', '$var_lugar')";
					ECHO "$sql<BR>";
					$est=mysql_query($sql);
					if(!$est)
						{
							echo "<script>alert('error al isnertar en la base de datos');</script>";
						}
						else
						{
							echo "<script>alert('datos insertados correctamente');</script>";
							//echo"<script>parent.location.href='$UrlApp/modelos/vista/crear_usu.php'</script>";
							ECHO " <script>parent.document.register_form.des.value=''</script> ";
							ECHO " <script>parent.document.register_form.luga.value=''</script> ";
						
						}
				}
	break;
	case 'updt':
	
		$sql="UPDATE sintoma SET
		id_sin='".$_POST[id]."',
		descripcion_sin='".$_POST[des]."',
		localizacion_sin='".$_POST[luga]."'
		
		WHERE id_sin='".$_POST[id]."' ";
		
		
		if($res=mysql_query($sql))
			{
				echo "<script>alert('Se actualizo correctamente');</script>";
				echo "<script>parent.parent.limpiar();</script>";
				echo "<script>parent.parent.document.form_nuevo_usu.num_docu.disabled=true;</script>";
			}
		else
			{
				echo "<script>alert('Error al actualizar');</script>";
			}

	break;
	case 'query':
		echo "<script>alert('consultar');</script>";
	break;
	case 'dell':
			$sql="DELETE from sintoma where id_sin ='$_POST[id]'";		
		if($res=mysql_query($sql))
			{
			//$conex=CommitTrans();
			echo "<script>alert('Se elimino correctamente');</script>";
			echo "$sql<br>";
			ECHO " <script>parent.document.register_form.des.value=''</script> ";
			ECHO " <script>parent.document.register_form.luga.value=''</script> ";

								
			
			//ECHO "parent.document.form_nuevo_usu.num_docu.disabled=none;";
			}
		else
			{
			//$conex->RollbackTrans();	
			echo "<script>alert('No se puedo eliminar');</script>";
			}

	break;
	}
	mysql_close($db);
?>
