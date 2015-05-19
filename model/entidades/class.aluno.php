<?php 

Class Aluno{

	private $id;
	private $nome;
	private $cpf;
	private $dataNascimento;
	private $tipoLogradouro;
	private $nomeLogradouro;
	private $bairro;
	private $cidade;

	function __construct($id, $nome, $cpf, $dataNascimento, $tipoLogradouro, $nomeLogradouro, $bairro, $cidade){

		$this->id = $id;
		$this->nome = $nome;
		$this->cpf = $cpf;
		$this->dataNascimento = $dataNascimento;
		$this->tipoLogradouro = $tipoLogradouro;
		$this->nomeLogradouro = $nomeLogradouro;
		$this->bairro = $bairro;
		$this->cidade = $cidade;

	}

	function __construct1(){
	}
	

	function getId(){
		return $this->id;
	}

	function setId($id){
		$this->id = $id;
	}

	function getNome(){
		return $this->nome;
	}

	function setNome($nome){
		$this->nome = $nome;
	}

	function getCpf(){
		return $this->cpf;
	}

	function setCpf($cpf){
		$this->cpf = $cpf;
	}

	function getDataNascimento(){
		return $this->dataNascimento;
	}

	function setDataNascimento($dataNascimento){
		$this->dataNascimento = $dataNascimento;
	}

	function getTipoLogradouro(){
		return $this->tipoLogradouro;
	}

	function setTipoLogradouro($tipoLogradouro){
		$this->tipoLogradouro = $tipoLogradouro;
	}

	function getNomeLogradouro(){
		return $this->nomeLogradouro;
	}

	function setNomeLogradouro($nomeLogradouro){
		$this->nomeLogradouro = $nomeLogradouro;
	}

	function getBairro(){
		return $this->bairro;
	}

	function setBairro($bairro){
		$this->bairro = $bairro;
	}

	function getCidade(){
		return $this->cidade;
	}

	function setCidade($cidade){
		$this->cidade = $cidade;
	}



}

 ?>