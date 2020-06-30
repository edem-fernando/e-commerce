<article class="main_content">
    <div class="container main_checkout">
        <header class="main_checkout_header">
            <div>
                <h1><?= $configSiteName; ?></h1>
                <p>3 produtos em seu carrinho.</p>
            </div>
            <span class="btn transition radius icon-cart">Finalizar compra</span>
        </header>

        <section class="main_checkout_products radius">
            <?php for ($ch = 1; $ch < 4; $ch++): ?>
                <article class="main_checkout_products_item">
                    <div class="main_checkout_products_item_thumb">
                        <img class="radius" src="<?= $configBase . "/Uploads/products/0{$ch}.jpg" ?>" alt="" title=""/>
                    </div>

                    <div class="main_checkout_products_item_desc">
                        <h1>Calça Moletom Confort Mama Latina</h1>
                        <p class="main_checkout_products_item_desc_price">R$ 59,00 <span>R$ 79,00</span></p>
                        <p>Tamanho G | Cor: Preto</p>
                        <p class="main_checkout_products_item_desc_qtd">
                            Quantitdade: 1
                            <span class="icon-plus transition icon-notext radius"></span>
                            <span class="icon-minus transition icon-notext radius"></span>
                        </p>
                    </div>
                </article>
            <?php endfor; ?>
        </section>

        <footer class="main_checkout_footer">
            <div class="main_checkout_footer_calc">
                <input type="text" class="radius" placeholder="Informe seu CEP:" />
                <button class="transition radius">Calcular Frete</button>
            </div>

            <div class="main_checkout_footer_price">
                <p>Sub Total: R$ 177,00</p>
                <p>Frete: R$ 44,00</p>
                <p><strong>Total: R$ 221,00</strong></p>
            </div>

            <button class="btn radius transition icon-cart">Finalizar compra</button>
        </footer>
    </div>
</article>