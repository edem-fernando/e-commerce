<main class="main_content">
    <!-- banner slides -->
    <div class="main_content_slide j_slide">
        <a class="j_slide_item" href="<?= "{$configBase}/produto"; ?>" title=""><img alt="" title="" src="<?= $configBase; ?>/Uploads/features/featured-01.jpg"/></a>
        <a class="j_slide_item" href="<?= "{$configBase}/produto"; ?>" title=""><img alt="" title="" src="<?= $configBase; ?>/Uploads/features/featured-02.jpg"/></a>
        <a class="j_slide_item" href="<?= "{$configBase}/produto"; ?>" title=""><img alt="" title="" src="<?= $configBase; ?>/Uploads/features/featured-03.jpg"/></a>
        <div class="j_slide_nav"></div>
    </div>

    <!-- ofertas -->
    <section class="pdt_galery">
        <div class="container">
            <header class="main_content_header">
                <h1 class="main_content_header_title">Ofertas da semana:</h1>
            </header>
            <div class="flex">
                <!-- promoção destaque -->
                <div class="pdt_galery_list pdt_galery_featured flex-2">
                    <?php
                    $pdt = "06";
                    require "{$configThemePath}/Templates/product.php";
                    ?>
                </div>
                <!-- promoções sub -->
                <div class="pdt_galery_list flex flex-2">
                    <?php
                    $pdt = 0;
                    for ($pdt = 1; $pdt < 5; $pdt++) {
                        require "{$configThemePath}/Templates/product.php";
                    }
                    ?>
                </div>
            </div>
            <!-- banner -->
            <div class="pdt_galery_normalize">
                <a href="<?= "{$configBase}/produto"; ?>" title="">
                    <img class="pdt_galery_item pdt_galery_banner" alt="" title="" src="<?= $configBase; ?>/Uploads/features/featured-01.jpg"/>
                </a>
            </div>
            <!-- pos banner promoções-->
            <div class="pdt_galery_normalize flex">
                <?php
                $pdt = 0;
                for ($pdt = 5; $pdt < 9; $pdt++) {
                    require "{$configThemePath}/Templates/product.php";
                }
                ?>
            </div>
        </div>
    </section>

    <!-- mais vendidos (ele/ela) -->
    <section class="pdt_galery pdt_select">
        <div class="container">
            <header class="pdt_select_header">
                <h1>
                    <span class="j_tabs_nav transition radius transition">Eles</span>
                    <span class="j_tabs_nav transition radius transition">Elas</span>
                </h1>
            </header>
            <div class="j_tabs">
                <!-- Eles -->
                <div class="j_tabs_item">
                    <div class="flex">
                        <div class="pdt_galery_list pdt_galery_featured flex-2">
                            <?php
                            $pdt = "15";
                            require "{$configThemePath}/Templates/product.php";
                            ?>
                        </div>
                        <!-- eles promoção sub -->
                        <div class="pdt_galery_list flex flex-2">
                            <?php
                            $pdt = 0;
                            for ($pdt = 11; $pdt < 15; $pdt++) {
                                require "{$configThemePath}/Templates/product.php";
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Elas -->
                <div class="j_tabs_item">
                    <div class="flex">
                        <div class="pdt_galery_list pdt_galery_featured flex-2">
                            <?php
                            $pdt = "09";
                            require "{$configThemePath}/Templates/product.php";
                            ?>
                        </div>
                        <!-- Elas promoção sub -->
                        <div class="pdt_galery_list flex flex-2">
                            <?php
                            $pdt = 0;
                            for ($pdt = 5; $pdt < 9; $pdt++) {
                                require "{$configThemePath}/Templates/product.php";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php require "{$configThemePath}/Templates/blog.php"; ?>
</main>
