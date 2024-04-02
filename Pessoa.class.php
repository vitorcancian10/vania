<?php
	class Pessoa
	{
		public function __construct(private string $Nome = "", private string $Cpf = ""){}
		
		
		public function getNome()
		{
			return $this->Nome;
		}
		public function getCpf()
		{
			return $this->Cpf;
		}
		
	}
?>