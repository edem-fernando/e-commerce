<?php
ob_start();

define("URL_BASE", "https://www.localhost/e-commerce");
define("THEME", "Wdpshoes");
define("THEME_PATH", __DIR__ . "/Themes/" . THEME);
define("THEME_LINK", URL_BASE . "/Themes/" . THEME);

$configBase = URL_BASE;
$configThemePath = THEME_PATH;
$configThemeLink = THEME_LINK;
$configSiteName = "E commerce";

$configUrl = explode("/", strip_tags(filter_input(INPUT_GET, "url", FILTER_DEFAULT)));
$configUrl[0] = (!empty($configUrl[0]) ? $configUrl[0] : "index");
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800&display=swap" rel="stylesheet" />
        <link href="<?= $configBase; ?>" rel="base" />

        <link rel="stylesheet" href="<?= $configBase; ?>/Assets/Styles/fonts.css" />
        <link rel="stylesheet" href="<?= $configBase; ?>/Assets/Styles/boot.css" />
        <link rel="stylesheet" href="<?= $configThemeLink; ?>/styles.css" />
        <link rel="shortcut icon" href="<?= $configThemeLink; ?>/Images/favicon.png" />
        <title><?= $configSiteName; ?> | Home</title>
        <script src="<?= $configBase; ?>/Assets/scripts/jquery.js"></script>
        <script src="<?= $configBase; ?>/Assets/scripts/script.js"></script>
        <script src="<?= $configThemeLink; ?>/script.js"></script>
    </head>
    <body>
        <?php
        // SEARCH
        $searchForm = strip_tags(trim(filter_input(INPUT_POST, "search", FILTER_DEFAULT)));
        
        if (!empty($searchForm)) {
            header("Location: {$configBase}/pesquisa/{$searchForm}");
            exit;
        }

        // HEADER
        require "{$configThemePath}/header.php";

        // QUERY STRING
        if (file_exists("/{$configThemePath}/{$configUrl[0]}.php") && !is_dir("/{$configThemePath}/{$configUrl[0]}.php")) {
            // theme root
            require "/{$configThemePath}/{$configUrl[0]}.php";
        } elseif (!empty($configUrl[1]) && is_file("/{$configThemePath}/{$configUrl[0]}/{$configUrl[1]}.php") && !is_dir("/{$configThemePath}/{$configUrl[0]}/{$configUrl[1]}.php")) {
            // theme folder
            require "/{$configThemePath}/{$configUrl[0]}/{$configUrl[1]}.php";
        } else {
            // 404
            if (file_exists("/{$configThemePath}/404.php")) {
                require "/{$configThemePath}/404.php";
            } else {
                echo "<div class='container'><div class='trigger trigger-error icon-error radius'>Página não encontrada...</div></div>";
            }
        }

        // FOOTER
        require "/{$configThemePath}/footer.php";
        ?>
    </body>
</html>
<?php ob_end_flush(); ?>