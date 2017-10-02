<?php
	// router
	if(isset($_GET['url']) && !empty($_GET['url'])){
		$url = addslashes($_GET['url']).'.php';
		$folder = addslashes($_GET['url']);
		//on vérifie si un controller existe pour cette url
		if(file_exists(__DIR__.'/controller/'.$url)){
			if(isset($_GET['variables'])){
				$variables = addslashes($_GET['variables']);
				$path = __DIR__.'/controller/'.$url.'?variables = $variables';
				
			}else {
				$path = __DIR__.'/controller/'.$url;
			}	
		}
		//ou si un dossier dans controller existe pour cette url
		elseif(file_exists(__DIR__.'/controller/'.$folder.'/index.php')){
			if(isset($_GET['variables'])){
				$variables = addslashes($_GET['variables']);
				$path = __DIR__.'/controller/'.$folder.'/index.php?variables = $variables';
			} else{
				$path = __DIR__.'/controller/'.$folder.'/index.php';
			}
		}
		//s'il n'existe pas de controller pour cet url on charge le controller de l'index
		else{
			$path = __DIR__.'/controller/index.php';
		}
	}

	//si aucune url n'est appelée, on charge le controller de l'index
	else {
		$path = __DIR__.'/controller/index.php';
	}

	require_once($path);
?>