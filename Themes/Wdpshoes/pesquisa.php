<?php
$search = (!empty($configUrl[1]) ? trim(strip_tags($configUrl[1])) : null);

if (empty($search)) {
    header("Location : {$configBase}");
    exit;
}
?>
<main class="main_content">
    <div class="container main_category">
        <section class="main_category_products">
            <header class="main_category_products_header">
                <div>
                    <h1>Sua pesquisa:</h1>
                    <p>Encontramos X resultados para <strong><?= $search; ?></strong></p>
                </div>
                <form>
                    <p>Ordenar por:</p>
                    <select>
                        <option>Mais vendidos</option>
                        <option>Ofertas especiais</option>
                        <option>Lançamentos</option>
                        <option>Menor preço</option>
                        <option>Maior preço</option>
                    </select>
                </form>
            </header>

            <div class="main_category_products_content">
                <?php for ($pdt = 1; $pdt < 16; $pdt++): ?>
                    <?php require "{$configThemePath}/Templates/product.php"; ?>
                <?php endfor; ?>
            </div>

            <nav class="paginator">
                <a class="radius transition active" href="#">1</a>
                <a class="radius transition" href="#">2</a>
                <a class="radius transition" href="#">3</a>
                <a class="radius transition" href="#">4</a>
                <a class="radius transition" href="#">5</a>
            </nav>
        </section>

        <!-- sidebar -->
        <aside class="main_category_sidebar">
            <h2 class="main_category_sidebar_title">Filtrar resultados:</h2>
            <?php for ($m = 1; $m < 4; $m++): ?>
                <nav class="main_category_sidebar_widget">
                    <h3 class="main_category_sidebar_widget_title">Menu de filtro:</h3>
                    <a href="#" title="" class="transition radius active">Filtro (tamanho/cor/etc)</a>
                    <a href="#" title="" class="transition radius">Filtro (tamanho/cor/etc)</a>
                    <a href="#" title="" class="transition radius">Filtro (tamanho/cor/etc)</a>
                    <a href="#" title="" class="transition radius">Filtro (tamanho/cor/etc)</a>
                    <a href="#" title="" class="transition radius">Filtro (tamanho/cor/etc)</a>
                    <a href="#" title="" class="transition radius">Filtro (tamanho/cor/etc)</a>
                </nav>
            <?php endfor; ?>
        </aside>
    </div>
</main>