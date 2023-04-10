<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $titulo = "LanchoNET";
        global $tituloPagina;
        if($tituloPagina != ''){
            $titulo .= ' | '. $tituloPagina;
        }
    ?>
    <title><?php echo $titulo ?></title>
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
    <link rel="shortcut icon" href="IMG/favicon.png">
</head>

<body class="pagina-sobre">
    <header class="cabecalho">
        <div class="container">
            <?php if($tituloPagina == ""):?> <!--Utilizando if para tornar o logo como link apenas se estiver fora do Index-->
                <h1 class="logo">Design Responsivo</h1>
            <?php else:?>
                <a href="index.php" class="logo">Design Responsivo</a>
            <?php endif;?>

            <nav class="menu-principal menu-principal--fechado">
                <!--A classe tem dois underlines, pois e um padrao do BEM (Block element modifier)-->
                <button class="menu-principal__btn">Abrir/Fechar menu</button>
                <ul class="menu-principal__lista">
                    <li><a class="menu-principal__item  <?php echo $tituloPagina == '' ? 'menu-principal__item--atual' : '' ?>" href="index.php">Home</a></li>
                    <li><a class="menu-principal__item  <?php echo $tituloPagina == 'Sobre nós' ? 'menu-principal__item--atual' : '' ?>" href="SobreNos.php">Sobre nós</a>
                    </li>
                    <li><a class="menu-principal__item  <?php echo $tituloPagina == 'Portfólio' ? 'menu-principal__item--atual' : '' ?>" href="Portfolio.php">Portfólio</a>
                    </li>
                    <li><a class="menu-principal__item  <?php echo $tituloPagina == 'Contato' ? 'menu-principal__item--atual' : '' ?>" href="Contato.php">Contato</a>
                    </li>
                </ul>
            </nav>
        </div>
        <!--Fim container-->
    </header>

    <main>