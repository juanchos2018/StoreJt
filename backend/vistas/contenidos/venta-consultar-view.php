
<?php 

	if($_SESSION['tipoUsuario_spm'] != "Admin"){ 

		echo $lc->forzar_cierre_sesions_controlador();
		exit();
	}

?>
