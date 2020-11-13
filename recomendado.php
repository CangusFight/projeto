
<?php
    session_start();

    if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
    $adm = $_SESSION["usuario"][1];
    $nome = $_SESSION["usuario"][0];
    }else{
    echo "<script>window.location = 'login.html'</script>";
    }
?>
<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400&display=swap" rel="stylesheet">
        <title>Cangus Fight</title>
        <style>
            html,body{
                margin: 0;
                padding: 0;
                width: 100%; 
                height: 100%;
            }
            header{
                height: 100%;
            }
            .align-plat-info-top{
                width: 100%;
                height: 10%;
                background-color: black;
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
            }
            .div-1-plat-info-top{
                width: 20%;
                height: 100%;
                float: left;
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
            }
            .div-2-plat-info-top{
                width: 60%;
                height: 100%;
                float: left;
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
            }
            .div-2-plat-info-top h1{
                font-family: 'montserrat',sans-serif;
                font-size: 15pt;
                color: black;
                
            }
            .div-3-plat-info-top{
                width: 20%;
                height: 100%;
                float: left;
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
            }
            .div-3-plat-info-top h1{
                font-family: 'montserrat', sans-serif;
                font-size: 12pt;
                color: rgb(255,255,255);
                float:left;
                line-height: 1%;
            }
            .align-plat-edge-menu{
                width: 20%;
                height: 90%;
                background-color: black;
                float: left;
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
            }
            .align-plat-view{
                width: 80%;
                height: 90%;
                background-color: black;
                float: right;
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
            }
            .plat-info-top{
                width: 98%;
                height: 65%;
                background-color: #FF4500;
                border-radius: 8px;
            }
            .plat-edge-menu{
                width: 90%;
                height: 97%;
                background-color: rgb(30,30,30);
                border-radius: 8px;
                text-align: center;
            }
            .plat-edge-menu h1{
                color: #FF4500;
                font-size: 12pt;
                font-family: 'montserrat', sans-serif;
            }
            .d-side-menu-1,.d-side-menu-2,.d-side-menu-3,.d-side-menu-4{
                cursor: default;
                list-style: none;
                padding: 0;
                margin: 0px;
            }
            .d-side-menu-1 li a,.d-side-menu-2 li a,.d-side-menu-3 li a{
                display: inline-block;
                padding: 5px 20px 20px 20px;
                margin: 8px 0px 2px 0px;
                width: 150px;
                height: 7px;
                text-decoration: none;
                color:black;
                font-family:'montserrat', sans-serif;
                border: 2px solid black;
                border-radius: 100px;
            }
            .d-side-menu-1 li a:hover,.d-side-menu-2 li a:hover,.d-side-menu-3 li a:hover{
                display: inline-block;
                padding: 5px 20px 20px 20px;
                margin: 8px 0px 2px 0px;
                width: 150px;
                height: 7px;
                text-decoration: none;
                color: rgb(255, 255, 255);
                font-family:'montserrat', sans-serif;
                border: 2px solid #FF4500;
                border-radius: 100px;
                background-color: #FF4500;
            }
            .d-side-menu-4 li a{
                display: inline-block;
                padding: 5px 20px 20px 20px;
                margin: 8px 0px 2px 0px;
                width: 150px;
                height: 7px;
                text-decoration: none;
                color: rgb(220, 220, 220);
                font-family:'montserrat', sans-serif;
                border: 2px solid rgb(0, 0, 0);
                border-radius: 100px;
                background-color: #FF4500;
            }
            .d-side-menu-4 li a:hover{
                display: inline-block;
                padding: 5px 20px 20px 20px;
                margin: 8px 0px 2px 0px;
                width: 150px;
                height: 7px;
                text-decoration: none;
                color: rgb(0, 0, 0);
                font-family:'montserrat', sans-serif;
                border: 2px solid rgb(0,0,0);
                border-radius: 100px;
                background-color: rgb(30,30,30);
            }
            .plat-view{
                width: 97%;
                height: 97%;
                background-color: rgb(30,30,30);
                border-radius: 8px;                
            }
           
            #boxe,#karate,#jiuj,#muay{
            width: 100%;
            height: 22%;
            background-color: rgb(30,30,30);
            border-radius: 8px;
            text-align: center;
            }
            #boxe img,#karate img,#jiuj img,#muay img{
             float:left;
            }
            #boxe h2,#karate h2{
            text-align:left;
            padding: 0 0 0 20px;                      
            }
            #jiuj h2,#muay h2{
            text-align:left;
            padding: 0 0 0 5px;            
            
            }
            #img{
                float:left;                
            }
           #txt p{
            text-align:justify;
            padding: 0px 0px 0px 30px;            
            float:left;
           }
           #txt{
            width:90%;
            float:left;            
           }
        </style>
    </head>
    <body>
        <?php if($adm): ?>
        <?php endif; ?>
        <div class="align-plat-info-top">
            <div class="plat-info-top">
                <div class="div-1-plat-info-top">
                    <a class="link" href="index.html">
                    <img src="img/escudo.png" height="40px" width="40px">
                    </a>
                </div>
                <div class="div-2-plat-info-top">                     
                    <h1>Página Inicial</h1>                    
                </div>
                <div class="div-3-plat-info-top">
                    <a class="link" href="index.html">
                    <img src="img/cang.png" width="40px" height="40px" >
                  </a>
                </div>
            </div>
        </div>
        <div class="align-plat-edge-menu">
            
            <div class="plat-edge-menu">
                <div class="align-d-side-menu-1">
                    <ul class="d-side-menu-1">
                        <li><a href="dashboard.php">Página Inícial</a></li>
                    </ul>
                </div>
                <div class="align-d-side-menu-2">
                <h1>Recomendações</h1>
                    <ul class="d-side-menu-2">
                        <li><a href="recomendado.php">Recomendado</a></li>                                       
                    </ul>
                </div>
                <div class="align-d-side-menu-3">
                <h1>Fisico</h1>
                    <ul class="d-side-menu-3">
                        <li><a href="avaliacoes.php">Alunos</a></li>                        
                    </ul>   
                </div>
                <div class="align-d-side-menu-4">
                <h1>Sistema</h1>
                    <ul class="d-side-menu-4">
                        <li><a href="ajuda.php">Ajuda</a></li>
                        <!-- <li><a href="suaconta.php">Sua Conta</a></li> -->
                        <li><a href="acoes/logout.php">Desconectar</a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="align-plat-view">
          
            <div class="plat-view">
            <div id="boxe">
                <div id="img">
                <img src="img/MT.png" width="100" height="100"><br><br><br><br><br>
                <h2>Boxe</h2>
            </div>
                <div id="txt">
                <p>
                O boxe é uma das modalidades mais conhecidas de luta. Uma aula pode queimar cerca de 700 c
                 Por trabalhar bastante a região abdominal, 
                 é recomendada para pessoas que querem ficar com a famosa “barriga chapada”.Quais são os benefícios da prática?
                Promoção da capacidade de defesa pessoal. 
                Os movimentos e golpes aprendidos durantes as aulas podem ser
                utilizados para determinadas eventualidades. 
                Aumento da coordenação.
                Emagrecimento progressivo. 
                Melhora na composição física. 
                Redução do estresse.
                Elevação da autoestima.
                Mas o boxe traz muitos outros benefícios para a saúde e bem-estar do praticante.
                 É uma ótima opção para corrigir desvios da coluna,
                 melhorar a tonificação dos músculos, aumentar o condicionamento físico e cardiorrespiratório.
                 Além dos benefícios de o boxe serem inúmeros, ele ainda possui ensinamentos que rodeiam a disciplina, 
                 e que podem ser colocados em pratica não somente durante as aulas, mas também no seu dia a dia.
                 Melhora a coordenação motora; os golpes ensinados nos treinos de boxe, desafiam a coordenação motora, 
                 então é necessário que o aluno se dedique e faça os movimentos repetidas vezes.</p>
            </div>
        </div>
        <div id="karate">
        <div id="img">
        <img src="img/muaythai.png" width="100" height="100">
        <h2>Karate</h2>
        </div>
        <div id="txt">
            <p> Karate é uma palavra japonesa que significa “mãos vazias”. Consiste em uma arte marcial japonesa e um método de 
                ataque e defesa pessoal que inclui diversas técnicas executadas com as mãos desarmadas.
                Fisicamente, o Karatê é bom para o coração, fortalece ossos e músculos, cria resistência, desenvolve 
                coordenação motora e visual, e torna o organismo menos suscetível à ferimentos e doença. Mentalmente,
                o Karatê ajuda a desenvolver paciência, disciplina, perseverança e compreensão, bem como a concentração e foco.
                Karatê é atividade aeróbica, que demanda movimento de todo o corpo, da cabeça aos dedos dos pés. Quem quer cuidar 
                da forma física encontra nessa prática uma excelente opção. Nos treinos, você trabalha e 
                fortalece membros superiores e inferiores, ganhando definição muscular e melhora no seu preparo físico.
                Desenvolve a capacidade cardiovascular e a respiração.
                O coração é um músculo e, como tal, precisa ser exercitado para manter seu pleno funcionamento, prevenindo problemas.
                A prática do Karatê garante isso, pois proporciona o bombeamento eficiente do sangue e o transporte do oxigênio para todo o corpo. Também há o desenvolvimento da parte respiratória, uma vez que ela é um ponto muito importante do treino do Karatê, inclusive com exercícios voltados para a respiração correta. 
                Tudo isso ajuda o praticante a ter mais energia e disposição, pois o organismo funciona melhor.
                </p>
            </div>
        <p></p>
        </div>
        <div id="jiuj">
        <div id="img">
        <img src="img/JJ.png" width="100" height="100">
        <h2>Jiu-Jitsu</h2>
        </div>
        <div id="txt">
                <p>
                O Jiu Jitsu é uma ótima arte marcial e um dos benefícios é o desenvolvimento da defesa pessoal. 
                 Principalmente para mulheres, já que o Jiu Jitsu usa mais técnica do que a força.
                 Você pode imobilizar uma pessoa com um peso maior que o seu, por exemplo.
                 Qualquer atividade física tem o poder de diminuir o stress. Esse também é um benefício do Jiu Jitsu.
                  Isso porque o nosso cérebro libera um hormônio chamado endorfina durante e após uma atividade. 
                 Esse hormônio regula a emoção e a percepção da dor, relaxando e trazendo bem estar ao praticante.
                 O Jiu Jitsu apesar de não necessitar de tanta força é um ótimo esporte para definir o corpo, isso porque algumas posições 
                 necessitam do movimento de vários músculos, e manter essas posições ajuda a tonificar o corpo.
                 Melhora a capacidade cardiovascular e trabalha a respiração
Por aliar exercícios no chão junto a exercícios aeróbicos, o Jiu Jitsu proporciona uma grande melhoria na respiração e faz bem para o coração.
 Melhora essa que o praticante não vai querer ficar sem depois de descobrir.
                </p>
            </div>
        <p></p>
        </div>
        <div id="muay">
        <div id="img">
        <img src="img/kk.png" width="100" height="100">
        <h2>Muay-Thai</h2>
        </div>
        <div id="txt">
                <p>
                O Muay Thai é uma arte marcial de origem Tailandesa conhecida como Thai Boxe ou Boxe Tailandês e revela 
                um método de combate corpo a corpo (full contact) muito agressivo. Nesse sentido, Muay Thai é a arte da 
                luta tailandesa e 
                reflete os valores culturais de um povo que lutou pela sua sobrevivência.
                O Muay Thai é uma atividade física muito intensa. Por isso, é ideal para quem quer perder algumas gordurinhas
                 e ganhar massa magra. 
                Isso ocorre porque a arte marcial estimula a velocidade do metabolismo, acelerando a queima de calorias.
                A luta tailandesa trabalha todas as partes do corpo, resultando em pernas, glúteos, barriga e braços firmes.
                 O Muay Thai melhora também o condicionamento físico, a coordenação motora, a agilidade,
                 a flexibilidade e trabalha grupos musculares de forma mais dinâmica do que uma aula de ginástica localizada
                </p>
            </div>
        <p></p>
        </div>
            </div>

        

            </div>
        </div>
    </body>
</html> 