
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
            </div>
        </div>
    </body>
</html>