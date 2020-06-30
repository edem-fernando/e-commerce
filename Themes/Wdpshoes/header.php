<header class="main_header">
    <div class="container">
        <div class="main_header_nav">
            <div class="main_header_nav_logo">
                <a href="<?= $configBase; ?>" title="WDPShoes | Home" alt="WDPShoes | Home">
                    <img title="WDPShoes | Home" alt="WDPShoes | Home" src="<?= $configThemeLink ?>/Images/wdpshoes_logo_white.png"/>
                </a>
            </div>
            <div class="main_header_nav_search">
                <form action="" method="post" class="radius">
                    <input type="text" name="search" placeholder="Pesquisar na WdpShoes" />
                    <button class="icon-notext icon-search transition"></button>
                </form>
            </div>
            <div class="main_header_nav_menu">
                <a href="<?= $configBase . "/checkout"; ?>" title="" class="main_header_nav_menu_cart icon-notext icon-cart transition"><span>3</span></a>
                <div class="main_header_nav_menu_user">
                    <a href="#" title="" class="icon-user radius transition main_header_nav_menu_user_a jtheme_login">Login</a>
                    <nav class="radius">
                        <a href="<?= "{$configBase}/conta"; ?>" title="">Meus pedidos</a>
                        <a href="<?= "{$configBase}/conta/meus-dados"; ?>" title="">Meus dados</a>
                        <a href="<?= "{$configBase}/conta/enderecos"; ?>" title="">Meus endereços</a>
                        <a href="<?= "{$configBase}"; ?>" title="">Sair</a>
                    </nav>
                </div>
            </div>
        </div>
        <!-- departamentos -->
        <ul class="main_header_departments">
            <?php for ($i = 1; $i < 6; $i++): ?>
                <li class="main_header_departments_li">Departamento <?= $i; ?>
                    <ul class="main_header_departments_li_ul">
                        <?php for ($ii = 1; $ii < 6; $ii++): ?>
                            <li class="main_header_departments_li_ul_li">
                                <a href="<?= "{$configBase}/categoria"; ?>" title="">Categoria <?= "{$i}/{$ii}"; ?></a>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </li>
            <?php endfor; ?>
        </ul>
    </div>
</header>