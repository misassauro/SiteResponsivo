<?php 
    global $tituloPagina;
    $tituloPagina = "Portfólio";
    include_once('Partes/Cabecalho.php') 
?>
        <header class="pagina-cabecalho">
            <h1 class="pagina-cabecalho__titulo">Portfólio</h1>
        </header>
        <section class="pagina-conteudo">
            <p class="text-center">
                Aqui você poderá ver parte do alcance de nosso serviço.<br>Ficamos felizes em divulgar a satisfação de nossos clientes.
            </p>
            <nav>
                <ul class="lista-trabalhos">
                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="IMG/miniaturas/vaca-burguer.jpg">
                            <img class="lista-trabalhos__img" src="IMG/miniaturas/vaca-burguer.jpg" alt="Vaca Burguer">
                            <h2 class="lista-trabalhos__titulo">Vaca Burguer</h2>
                        </a>
                    </li>
                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="IMG/miniaturas/pobrs.jpg">
                            <img class="lista-trabalhos__img" src="IMG/miniaturas/pobrs.jpg" alt="Pobr's">
                            <h2 class="lista-trabalhos__titulo">Pobr's</h2>
                        </a>
                    </li>
                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="IMG/miniaturas/weslley-salgadao.jpg">
                            <img class="lista-trabalhos__img" src="IMG/miniaturas/weslley-salgadao.jpg" alt="Weslley Salgadão">
                            <h2 class="lista-trabalhos__titulo">Weslley Salgadão</h2>
                        </a>
                    </li>
                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="IMG/miniaturas/gullas.jpg">
                            <img class="lista-trabalhos__img" src="IMG/miniaturas/gullas.jpg" alt="Gulla's">
                            <h2 class="lista-trabalhos__titulo">Gulla's</h2>
                        </a>
                    </li>
                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="IMG/miniaturas/jiga-baite.jpg">
                            <img class="lista-trabalhos__img" src="IMG/miniaturas/jiga-baite.jpg" alt="Jiga Baite">
                            <h2 class="lista-trabalhos__titulo">Jiga Baite</h2>
                        </a>
                    </li>
                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="IMG/miniaturas/ambulanche.jpg">
                            <img class="lista-trabalhos__img" src="IMG/miniaturas/ambulanche.jpg" alt="Ambulanche">
                            <h2 class="lista-trabalhos__titulo">Ambulanche</h2>
                        </a>
                    </li>
            </nav>
        </section>
        <?php include_once('Partes/Rodape.php'); ?>