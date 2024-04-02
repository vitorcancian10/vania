<?php
    require_once "Pessoa.class.php";
    require_once "Aluno.class.php";
    require_once "Professor.class.php";
    require_once "Matricula.class.php";
    require_once "Modalidade.class.php";

    $professor = new professor("renshi" , "yamamoto" ,"222222-22" );

    $modalidade = new modalidade("karate",array($Professor));
    
    $aluno = new aluno("21/12/2002", "carlos da silva","333333-33");

    $matricula = new matricula("01/04/2024",$modalidade, $aluno);

    echo "<h1>matricula</h1>";
    echo "data: {$matricula->getData_matricula()}<br>";
    echo "<h2>aluno</h2>";
    echo "data: {$matricula->getAluno()->getNome()}<br>";
    echo "Cpf: {$matricula->getAluno()->getCpf()}<br>";
    echo "Data de Nascimento: {$matricula->getAluno()->getData_nascimento()}<br>";
    echo "<h2>modalidade</h2>";
    echo "descritivo: {$matricula->getModalidade()->getDescritivo()}<br>";
   
    echo "<h3>modalidade</h3>";

    echo "nome: {$matricula->getModalidade()->getProfessor()[0]->getNome}<br>";
    echo "cpf: {$matricula->getModalidade()->getProfessor()[0]->getCpf}<br>";
    echo "titulo: {$matricula->getModalidade()->getProfessor()[0]->getTitulo}<br>";
   














?>