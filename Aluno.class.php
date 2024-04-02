<?php
	class Aluno extends Pessoa
	{
		public function __construct(private string $Data_nascimento = ""){}
		
		public function getData_nascimento()
		{
			return $this->Data_nascimento;
		}
		
	}
?>