<?php
	class Matricula
	{
		public function __construct(private string $Data_matricula = "",private $Modalidade = null, private $Aluno = null){}
		
		
		public function getData_matricula()
		{
			return $this->Data_matricula;
		}

		public function getModalidade()
		{
			return $this->Modalidade;
		}

		public function getaluno()
		{
			return $this->Aluno;
		}
		
		
	}
?>