</main>


<footer class="rodape">
    <div class="rodape__linha-1">
        <div class="container">
            <div class="rodape__coluna">
                <a href="index.php" class="logo logo--branco"> Design Responsivo</a>
                <!--Classe logo e um exemplo de componentizacao, classe que serve
                    para varios componentes-->
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur ut at dolor eligendi.
                    Tempora
                    consequatur repudiandae nesciunt voluptatibus nihil incidunt eveniet reprehenderit quidem
                    harum
                    molestiae, dolorem, temporibus repellat accusantium non?</p>
            </div>
            <div class="rodape__coluna">
                <h2 class="rodape__titulo">Social</h2>
                <ul class="rodape__lista-links">
                    <li><a class="rodape__lista-links__item" href="https://twitter.com" target="_blank">Twitter</a>
                    </li>
                    <li><a class="rodape__lista-links__item" href="https://facebook.com"
                            target="_blank">Facebook</a>
                    </li>
                    <li><a class="rodape__lista-links__item" href="https://instagram.com"
                            target="_blank">Instagram</a>
                    </li>
                    <li><a class="rodape__lista-links__item" href="https://youtube.com" target="_blank">Youtube</a>
                    </li>
                </ul>
            </div>
            <div class="rodape__coluna">
                <h2 class="rodape__titulo">Links</h2>
                <ul class="rodape__lista-links">
                    <li><a class="rodape__lista-links__item " href="index.php">Home</a></li>
                    <li><a class="rodape__lista-links__item" href="SobreNos.php">Sobre nós</a></li>
                    <li><a class="rodape__lista-links__item" href="Portfolio.php">Portfólio</a></li>
                    <li><a class="rodape__lista-links__item" href="Contato.php">Contato</a></li>
                </ul>
            </div>
        </div>
        <!--Fim container-->
    </div>

    <div class="rodape__linha-2">
        © <?php echo date('Y') //Funcao para encontrar ano ?> - Todos os direitos reservados - Pedro Torini
    </div>
</footer>
<!--<script src="JS/Jquery.js"></script>
<script src="JS/slick.js"></script>
<script src="JS/jquery.validate.min.js"></script>
<script src="JS/jquery.fancybox.min.js"></script>
<script src="JS/Main.js"></script>--><!--Colocando depois de footer, pois a ordem importa. Nao da pra carregar o script ante de ter conteudo no script :) -->
<script src="JS/app.min.js"></script>
</body>

</html>