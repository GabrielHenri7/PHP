<?php 

    $nome = $_POST['nome'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $nota4 = $_POST['nota4'];

    $media = ($nota1 + $nota2 + $nota3 + $nota4) /4;


    echo "Meu nome é $nome e o Papai tirou $media";
    echo "<br><br>";

    if ($media>=6) {
        echo "O Aluno $nome, está Aprovado!";
    }

    elseif ($media>=4) {
        echo "Recuperação, Jogador caro só decide na ultima hora!!";
    }

    else{
        echo "O Aluno $nome, está Reprovado!";
    }

?>