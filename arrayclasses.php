<?php

$turmas = array(

    "3DSD"=>array("161117"=>"Aline Benedicto",
                  "16557"=>"Ana Julia Gazano",
                  "201281"=>"Ana Julia Sentinella",
                  "201136"=>"Bianca",
                  "12367"=>"Catarina"),
    
    "2DSD"=>array("141117"=>"Davie",
                  "16897"=>"Felipe",
                  "205281"=>"Guilherme",
                  "206736"=>"Gilmar",
                  "12369"=>"Gabriel"),

    "1DSD"=>array("141917"=>"Heitor",
                  "16890"=>"Laura",
                  "202281"=>"Luan",
                  "204336"=>"Luanna",
                  "12869"=>"Matheus"),

);

if (!isset($_GET["turma"]) || (trim($_GET["turma"]) == "")){
    echo "Informe a Turma!";
} else {

    $turma = strtoupper($_GET["turma"]);

    echo "<h1>Alunos da Turma " . $turma . "</h1>";

    echo "<table border='1px'>";

    foreach($turmas[$turma] as $aluno){
    echo "<tr><td>" . $aluno . "</td></tr>"; 
}
    echo "</table>";
}




?>