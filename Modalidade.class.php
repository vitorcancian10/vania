<?php
	class Modalidade
	{
		public function __construct(private string $Descritivo = "",private array $Professor = array()){}
		
		
		
		public function getDescritivo()
		{
			return $this->Descritivo;
		}
		public function getprofessor()
		{
			return $this->Professor;
		}
		
	}
?>