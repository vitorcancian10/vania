<?php
	class Professor extends Pessoa
	{
		public function __construct(private string $Titulo = "",$Nome, $Cpf, private array $Modalidade = array())
		{parent:: __construct($Nome, $Cpf);}
		
		
		public function getTitulo()
		{
			return $this->Titulo;
		}
		
		public function getmodalidade()
		{
			return $this->Modalidade;
		}
		
		//hhhhhhh
	}
?>