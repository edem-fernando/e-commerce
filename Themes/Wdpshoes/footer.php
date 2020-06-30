<footer class="main_footer">
    <div class="container">
        <!-- optin -->
        <article class="main_footer_optin">
            <header class="main_footer_optin_header">
                <h3>Quer 20% de desconto?</h3>
                <p>Informe, abaixo, o seu melhor e-mail e receba um cupom com 20% de desconto na primeira compra!</p>
            </header>
            <form class="main_footer_optin_form">
                <input class="radius" type="email" name="email" placeholder="Informe seu melhor e-mail" />
                <button class="btn radius transition icon-mail">Quero meu desconto!</button>
            </form>
        </article>

        <div class="main_footer_nav flex">
            <?php for ($m = 1; $m < 4; $m++): ?>
                <nav class="flex-4">
                    <h4>Nome do Menu: <?= "{$m}"; ?></h4>
                    <?php for ($mm = 1; $mm < 6; $mm++): ?>
                        <a href="<?= $configBase; ?>" title="">Link de rodapé: <?= "{$m}/{$mm}"; ?></a>
                    <?php endfor; ?>
                </nav>
            <?php endfor; ?>
            <nav class="flex-4">
                <h4>Pagamento Seguro</h4>
                <ul class="main_footer_nav_pays flex">
                    <li class="flex-4"><img alt="" title="" src="<?= $configBase; ?>/Assets/carts/elo.png"/></li>
                    <li class="flex-4"><img alt="" title="" src="<?= $configBase; ?>/Assets/carts/dinners.png"/></li>
                    <li class="flex-4"><img alt="" title="" src="<?= $configBase; ?>/Assets/carts/mastercard.png"/></li>
                    <li class="flex-4"><img alt="" title="" src="<?= $configBase; ?>/Assets/carts/discover.png"/></li>
                    <li class="flex-4"><img alt="" title="" src="<?= $configBase; ?>/Assets/carts/visa.png"/></li>
                    <li class="flex-4"><img alt="" title="" src="<?= $configBase; ?>/Assets/carts/aura.png"/></li>
                    <li class="flex-4"><img alt="" title="" src="<?= $configBase; ?>/Assets/carts/hiper.png"/></li>
                    <li class="flex-4"><img alt="" title="" src="<?= $configBase; ?>/Assets/carts/jcb.png"/></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="main_footer_bottom">
        <div class="container flex">
            <div class="main_footer_bottom_copy">
                <img alt="WdpShoes" title="WdpShoes" src="<?= $configThemeLink ?>/Images/wdpshoes_logo_black.png">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <nav class="main_footer_bottom_social">
                <a href="<?= $configBase; ?>" title="" class="icon-notext icon-facebook transition"></a>
                <a href="<?= $configBase; ?>" title="" class="icon-notext icon-instagram transition"></a>
                <a href="<?= $configBase; ?>" title="" class="icon-notext icon-youtube transition"></a>
            </nav>
        </div>
    </div>
</footer>