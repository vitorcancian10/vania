<?php
	class Funcionario extends Pessoa
	{
		public function __construct(private string $Cargo = "", $Nome, $Cpf){parent:: __construct($Nome, $Cpf);}
		
		
		public function getCargo()
		{
			return $this->Cargo;
		}
		
	}
?>