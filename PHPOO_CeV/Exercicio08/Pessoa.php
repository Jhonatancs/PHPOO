<?php
	class Pessoa{
		private $nome;
		private $idade;
		private $sexo;
		//method construct
		public function __construct(){
			
		}
		//getters and setters
		public function getNome(){
			return $this->nome;
		}
		public function setNome($n){
			$this->nome = $n;
		}
		public function getIdade(){
			return $ths->idade;
		}
		public function setIdade($i){
			$this->idade = $i;
		}
		public function getSexo(){
			return $this->sexo;
		}
		public function setSexo($s){
			$this->sexo = $s;
		}
		//metodos da classe
		public function fazAniv(){
			$this->setIdade($this->getIdade()+1);
		}
	}