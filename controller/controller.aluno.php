<?php 

	if(isset($_POST['acao'])){
		if(!empty($_POST['acao'])){

			switch ($_POST['acao']) {
				case 'nome':
					echo "Nome";	
					break;
				default:
					echo "Default";
					break;
			}

		}
	}


 ?>