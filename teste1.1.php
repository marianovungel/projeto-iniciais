<!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8"/>
       <title>Saiba se é amor</title>
        <style>
            body{
                background-image: url("q.jpg");
            }
            #f{
                
    width:680px;
    margin:auto auto auto auto;
    padding:50px;
    background-color:rgba(245, 74, 74, 0.5);
    display:block;
    border-radius: 3pt;
    padding: 30pt;
    box-shadow:100pt;
    width: 390pt;
    text-align:center;
    position: absolute;
    top:170pt;
    left:400pt;
    color:seashell;
    }
            #a{
                text-align:center; 
                font-family:arial;
            }
            .musica{position: absolute;
            top: 500pt;
            left: -2pt;
            }
            #v{width: 40pt;}
            .c{
                position: absolute;
                top: 500pt;
                left: 950pt;
                display:flex;
                background-color: red;
                color:seashell;
                font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
                border-radius: 20pt;
            }
            #fiel{
                border-radius: 10pt;
                border-color: rgba(245, 74, 74, 0.5);
            }
            #field{
                border-radius: 10pt;
                border-color: rgba(245, 74, 74, 0.5);
            #vv{
                margin-bottom: 0%;
                position: absolute;
                left: -2pt;
            }
            section{
                display: block;
                float: left;
                
            }
            aside{
                display: block;
                position: absolute;
                top: auto;
                left:569pt;
            }
            footer{
                clear:both;
            }
            #num{
                border-radius: 15pt;
            }
            aside button {
            background-color: aquamarine;
            font-size: 2em;
            line-height: 50px;
        }

        </style>
    </head>
    <body>
    <div id="f">
    <a href="teste1.php"><div id="vv"><img src="abc.png"/></div></a>
<?php

//este códico eu comentei porque notei que estava a dar volta.

//pegar os valores do formulário.
$nu= isset($_GET["po"])?$_GET["po"]:"não está definido";
$num= isset($_GET["pi"])?$_GET["pi"]:"não foi definido";
$nome= isset($_GET["seunome"])?$_GET["seunome"]:"não foi definido";
$nome1= isset($_GET["nomedela"])?$_GET["nomedela"]:"não foi definido";
/*echo "<br/> <h1>este é o número $nu</h1><br/>";
echo " <h1>este é o número $num</h1>";*/

//criar uma fórmula.
function soma ($nu, $num){
$s= intval(($nu + $num)/10);
return $s;
}
//fórmula para dar a percentagem
function percentagem ($nu, $num){
    $u= ($nu + $num)/2;
    return $u;}

//esta é a forma parapoder conseguir fazer com que a variavel $s receba o valor das soma dos dígitos do formulários...foi difícil mais deu certo.
$s = soma($nu= isset($_GET["po"])?$_GET["po"]:"não está definido", $num= isset($_GET["pi"])?$_GET["pi"]:"não foi definido");
$u = percentagem($nu= isset($_GET["po"])?$_GET["po"]:"não está definido", $num= isset($_GET["pi"])?$_GET["pi"]:"não foi definido");
//vamos mandar escrever na tela usando o comando (echo "");


/*echo "<br/> <h1>este é o número $nu</h1><br/>";
echo " <h1>este é o número $num</h1>";*/


echo " <h1>$nome</h1> <h2> as chances desse relação dar certo é de $u % </h1><br/>";
//vamos tentar fazer uma estrutura swetch.
switch($s){
    case 1:
        echo " <h1>$nome1</h1> <h2>pensa que, te amo bastante</h2>";
    break;
    case 2:
        echo " <h1>$nome1</h1> <h2>pensa que, tu não fazes o seu tipo</h2>";
    break;
    case 3:
        echo " <h1>$nome1</h1> <h2>pensa que, não vai te decepssionar se ter uma oportunidade de te amar</h2>";
    break;
    case 4:
        echo "<h1>$nome1</h1> <h2>pensa que, Felicidade é uma palavra de dez letras mas a minha se resume em quatro você</h2>";
    break;
    case 5:
        echo "<h1>$nome1</h1> <h2>pensa que, Não sinte nada por ti</h2>";
    break;
    case 6:
        echo "<h1>$nome1</h1> <h2>pensa que, So  serves para  ficar e não para ter um relacionamento sério</h2>";
    break;
    default:
    echo "<h2>seja feliz</h2>";
}


?>



        </div>
        
<footer>
        <audio class="musica"controls="controls">
            <source src="as.mp3" type="audio/mpeg">
        </audio>
        <div class="c">
            <img id="v" src="v.jpg" alt="o tipo de que todos queriam ter">
            <h1 id="d">Casal Feliz</h1>
        </div>
    </footer>
   
    </div>
    
    </body>
</html>