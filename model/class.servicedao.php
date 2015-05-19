<?php 


class ServicosDao{

	function _construct(){

	}

	function adicionar($sql){
		$retorno = false;
		if(mysql_query($sql)){
			$retorno = true;
		}
		return $retorno;
	}

	function consultar($sql){
		$result = mysql_query($sql);
		return $result;
	}

	function deletar($sql){		
		$retorno = false;
		if(mysql_query($sql)){
			$retorno = true;
		}
		return $retorno;
	}

	function atualizar($sql){
		$retorno = false;
		if(mysql_query($sql)){
			$retorno = true;
		}
		return $retorno;
	}

}


 ?>