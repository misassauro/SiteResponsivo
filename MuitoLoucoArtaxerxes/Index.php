<?php 
    global $tituloPagina;
    $tituloPagina = "";
    include_once('Partes/Cabecalho.php') 
?>
        <header class="cabecalho-home">
            <h2 class="cabecalho-home__titulo">Bem-vindo(a) ao LanchoNET</h2>
            <p  class="cabecalho-home__subtitulo">Agilizando para quem pede!</p>
            <a  class="cabecalho-home__role"href="#servicos">Role para ver mais</a>
        </header>

        <section id="servicos" class="servicos">
            <!--Seção serviços-->
            <div class="container">
                <h2 class="home__titulo">O que proporcionamos</h2>
                <section class="servicos__item">
                    <img id="image1" src="IMG/icone-smartphone.png" alt="Ícone de Dev Web">
                    <h3>Pedidos on-line</h3>
                    <p class="servicos__texto">O aplicativo LanchoNET permite que você realize compras dentro de cantinas e lanchonetes que também utilizam de nossa plataforma.</p>
                </section>
                <section class="servicos__item">
                    <img src="IMG/icone-caderninho.png" alt="Ícone de carrinho">
                    <h3>Recursos de gerenciamento</h3>
                    <p class="servicos__texto">Facilitamos não só a vida dos clientes, mas também dos donos de empreendimentos e seus funcionários. Ao usar o app LanchoNET, você conta com diversos recursos que ajudam a organizar e gerenciar melhor o seu negócio.</p>
                </section>
                <section class="servicos__item">
                    <img src="IMG/relogio.png" alt="Ícone de café">
                    <h3>Conforto e economia de tempo</h3>
                    <p class="servicos__texto">O LanchoNET engloba o melhor dos dois mundos: agilidade e conforto para quem pede; organização e eficiência para quem entrega!</p>
                </section>
            </div><!--Fim container-->
        </section>

        <!--Fim seção serviços-->

        <section class="depoimentos">
            <!--Seção depoimentos-->
            <div class="container">
                <h2 class="home__titulo home__titulo--branco">O QUE FALAM DE NÓS</h2>
                <div class="depoimentos__caixa">
                    <section class="depoimentos__item">
                        <img class="depoimentos__img" src="IMG/woman.jpg" alt="Roberta">
                        <p class="depoimentos__texto">Desde que começamos a usar o aplicativo da LanchoNET em nossa escola, tudo ficou mais fácil! Fazer um pedido na cantina nunca foi tão rápido e confortável.</p>
                        <p class="depoimentos__pessoa">Roberta Dantas - Diretora da escola EMEF Prof.ª Dalva Fogaça</p>
                    </section>

                    <section class="depoimentos__item">
                        <img class="depoimentos__img" src="IMG/ailton.jpg" alt="Ailton">
                        <p class="depoimentos__texto">Com a ajuda dos recursos de gerenciamento que o aplicativo LanchoNET oferece, a organização do nosso trabalho na cantina alcançou outro patamar.</p>
                        <p class="depoimentos__pessoa">Ailton Gonsalves - Dono da cantina Rango Bão</p>
                    </section>
                    
                    <section class="depoimentos__item">
                        <img class="depoimentos__img" src="IMG/faustinho.jpg" alt="Faustão">
                        <p class="depoimentos__texto">Eu já estava cansado de pegar filas enormes só para fazer um pedido. Agora, com o app da LanchoNET, fila virou coisa do passado.</p>
                        <p class="depoimentos__pessoa">Fausto Silva - Cliente da cantina Rango Bão</p>
                    </section>
                </div>
            </div><!--Fim container-->
        </section>
        <!--Fim seção depoimentos-->
<?php include_once('Partes/Rodape.php'); ?>
