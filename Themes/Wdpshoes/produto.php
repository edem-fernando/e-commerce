<main class="main_content">
    <div class="container">
        <article class="main_product">
            <div class="main_product_gallery">
                <ul class="main_product_gallery_list">
                    <?php for ($img = 1; $img < 5; $img++): ?>
                        <?php $active = ($img == 1 ? "active" : ""); ?>
                        <li class="radius transition <?= $active; ?> j_gallery_item">
                            <img src="<?= $configBase; ?>/Uploads/products/16-<?= $img; ?>.jpg" alt="" title="" />
                        </li>
                    <?php endfor; ?>
                </ul>
                <div class="main_product_gallery_cover">
                    <img class="radius j_gallery_home" src="<?= $configBase; ?>/Uploads/products/16-1.jpg" alt="" title="" />
                </div>
            </div>
            <div class="main_product_checkout">
                <p class="main_product_checkout_stars"><?= str_repeat("<span class='icon-notext icon-star'></span>", 5) ?></p>
                <h1 class="main_product_checkout_title">Top Gonew c/ Bojo Removível Mármore Tule Média Sustentação - Estampado</h1>
                <p class="main_product_checkout_headline">
                    Exercite-se com estilo usando o Top Gonew Mármore Detalhe Tule! 
                    Trazendo um design moderno e uma estampa exclusiva ... 
                    <strong class="j_anchor transition" data-anchor=".main_product_description">ver mais</strong>
                </p>
                <p class="main_product_checkout_price">R$ 59,00 <span>R$ 79,00</span></p>
                <p class="main_product_checkout_economy">Economia de R$ 20,00</p>
                <p class="main_product_checkout_parcels">Em até 4x de R$ 14,75</p>
                <form class="main_product_checkout_cart" action="<?= $configBase . "/checkout"; ?>">
                    <h2>SELECIONE O <strong>TAMANHO: </strong></h2>
                    <span class="radius transition">P</span>
                    <span class="radius transition">M</span>
                    <span class="radius transition">G</span>
                    <span class="radius transition">GG</span>

                    <div class="main_product_checkout_cart_act">
                        <div class="radius">
                            <span class="icon-plus icon-notext"></span>
                            <input type="text" value="1" name="" />
                            <span class="icon-minus icon-notext"></span>
                        </div>

                        <button class="btn icon-cart radius transition">COMPRAR</button>
                    </div>
                </form>

                <aside class="main_product_checkout_related">
                    <h2>OUTRAS <strong>CORES: </strong></h2>
                    <div>
                        <a class="radius transition active"><img src="<?= $configBase; ?>/Uploads/products/16-1.jpg" title="" alt="" /></a>
                        <a class="radius transition"><img src="<?= $configBase; ?>/Uploads/products/17-1.jpg" title="" alt="" /></a>
                    </div>
                </aside>
            </div>
        </article>
    </div>

    <section class="main_product_related">
        <div class="container">
            <header class="main_content_header">
                <h2 class="main_content_header_title">Produtos Relacionados:</h2>
            </header>

            <div class="pdt_galery pdt_galery_normalize flex">
                <?php for ($pdt = 5; $pdt < 13; $pdt++): ?>
                    <?php require "{$configThemePath}/Templates/product.php"; ?>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <article class="main_product_description">
        <div class="container">
            <header class="main_product_description_header">
                <span class="main_product_description_header_tag">DESCRIÇÃO:</span>
                <h4>Top Gonew c/ Bojo Removível Mármore Tule Média Sustentação - Estampado</h4>
                <p>
                    Exercite-se com estilo usando o Top Gonew Mármore Detalhe Tule! 
                    Trazendo um design moderno e uma estampa exclusiva,
                    este Top Esportivo da Gonew entra em cena apara oferecer ótima sustentação ao busto
                    durante seus treinos e corridas. Ele é confeccionado em tecido elástico,
                    e conta com detalhe em tule na parte da frente, que deixa o visual da peça mais sensual
                    e muito mais respirável. Não perca tempo e compre já o seu Top Gonew Mármore Detalhe Tule Média Sustentação!
                </p>

                <form class="main_product_checkout_cart" action="<?= $configBase . "/checkout"; ?>">
                    <h2>SELECIONE O <strong>TAMANHO: </strong></h2>
                    <span class="radius transition">P</span>
                    <span class="radius transition">M</span>
                    <span class="radius transition">G</span>
                    <span class="radius transition">GG</span>

                    <div class="main_product_checkout_cart_act">
                        <div class="radius">
                            <span class="icon-plus icon-notext"></span>
                            <input type="text" value="1" name="" />
                            <span class="icon-minus icon-notext"></span>
                        </div>

                        <button class="btn icon-cart radius transition">COMPRAR</button>
                    </div>
                </form>
            </header>
            <div class="main_product_description_thumb">
                <img class="radius" src="<?= $configBase; ?>/Uploads/products/16-1.jpg" title="" alt="" />
            </div>
        </div>
    </article>
</main>