<?php
	
	class vistasModelo{

		/*--------- Modelo obtener vistas ---------*/
		protected static function obtener_vistas_modelo($vistas){
			
			$listaBlanca=["cliente-list","cliente-new","cliente-search","cliente-update","home","producto-list","producto-new","producto-search","producto-update","categoria-list","categoria-new", "categoria-search","categoria-update","subcategoria-list","subcategoria-new", "subcategoria-search","subcategoria-update","marca-list","marca-new", "marca-search","marca-update","usuario-list","usuario-new","usuario-search","usuario-update","promocion-list","promocion-new","promocion-search","promocion-update"];

			if(in_array($vistas, $listaBlanca)){
				if(is_file("./vistas/contenidos/".$vistas."-view.php")){
					$contenido="./vistas/contenidos/".$vistas."-view.php";
				}else{
					$contenido="404";
				}
			}elseif($vistas=="login" || $vistas=="index"){
				$contenido="login";
			}else{
				$contenido="404";
			}
			return $contenido;
		}
	}