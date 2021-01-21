<!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8"/>
       <title>Saiba se é amor</title>
        <style>
            body{
                background-image: url("q.jpg");
            }
            #f{width:680px;
    margin:auto auto auto auto;
    padding:50px;}
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
        <a href="amor.html"><div id="vv"><img src="vvv.png"/></div></a>
        <h1 id="a">Saiba se é a pessoa certa</h1>


        </div>

        
        <audio class="musica"controls="controls">
            <source src="as.mp3" type="audio/mpeg">
        </audio>
        <div class="c">
            <img id="v" src="v.jpg" alt="o tipo de que todos queriam ter">
            <h1 id="d">Casal Feliz</h1>
        </div>
    
    <?php
    //guardar códigos kkkkk
    case 4:
        echo "Felicidade é uma palavra de dez letras, mas a minha se resume em quatro: você!"
    break ;
    case 5:
        echo "Você é tudo o que eu sonhei para mim."
    break;
    case 6:
        echo "O amor não é feito de trocas de olhares, mas de olhares juntos na mesma direção."
    break;
    case 7:
        echo "O único momento em que não penso em você é quando estou dormindo, porque aí não estou pensando, e sim, sonhando."
    break;
    case 8:
        echo "Você sabe qual é o motivo do meu sorriso todos os dias? A primeira palavra dessa frase."
    break;
    case 9:
        echo "O melhor lugar do mundo é dentro do seu abraço."
    break;
    case 10:
        echo "Fomos feitos um para o outro."
    break;
    case 11:
        echo "Quero estar com você em um momento chamado: sempre!"
    break;
    case 12:
        echo "Palavras não conseguem descrever o tamanho do meu amor por você."
    break;
    case 13:
        echo "Todos os dias eu me imagino ao seu lado."
    break;
    case 14:
        echo "Meu amor por você supera os limites vitais, quero você por toda a eternidade!"
    break;
    case 15:
        echo "O amor não faz sentido, o amor dá sentido a tudo."
    break;
    case 16:
        echo "Ao seu lado sou tão feliz! Sinto isso tão forte e tão verdadeiro em mim."
    break;
    case 17:
        echo "Você me inspira a ser melhor a cada dia."
    break;
    case 18:
        echo "O que mais amo em você é o mundo maravilhoso que encontro ao seu lado."
    break;
    case 19:
        echo "O sentimento que nos une é mais forte do que qualquer obstáculo que possa surgir."
    break;
    case 20:
        echo "Você é a melhor coisa que aconteceu na minha vida."
    break;
    //obter os valores apartir do formulário pelo nome
        $num1 = (int)isset ($_GAT["num1"]) ? $_GAT["num1"]: 3;  
        $num2 = (int)isset ($_GAT["num2"]) ? $_GAT["num2"]: "desculpa";
    //criação de uma função para somar os valores
       function soma ($num1, $num2){
           $up = $num1 + $num2
            return $up;
        };
    //criar uma estrutura de seleção
        switch ($up) {
            case 1:
            echo "i love you";
            break;

            case 2:
            echo "i mess you";
            break;

            case 3:
            echo "i will naver fogat you";
            break;

            case 4:
            echo "never lat me down";
            break;

            default:
            echo "sorry daer";
                }
        
    ?>
    </div>
    
    </body>
</html> 