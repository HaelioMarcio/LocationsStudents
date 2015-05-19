<?php 


class ServicosAluno{

	function __construct(){

	}

	function consultarPorNome($nome){
		global $servicosDao;
		$sql = "SELECT * FROM aluno WHERE nome LIKE '%".$nome."%'";
		$result = $servicosDao->consultar($sql);
		return json_encode($result);
	}
	function consultarPorCpf(){}
	function consultarPorEndereco(){}
	function consultarPorIdade(){}
	function consultarPorTipoLogradouro(){}
	function consultarPorLogradouro(){}
	function consultarPorBairro(){}
	function consultarPorCidade(){}

		
}

 ?>
