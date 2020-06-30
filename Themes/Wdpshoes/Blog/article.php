<article class="main_content">
    <div class="container main_article">
        <header class="main_article_header">
            <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h1>
            <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <img class="main_article_header_thumb" alt="" title="" src="<?= "{$configBase}/Uploads/blog/01.jpg"; ?>"/>
        </header>

        <div class="main_article_content">
            <?php for ($p = 0; $p < 6; $p++): ?>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Nulla et risus non sem consequat fermentum. 
                    Nunc finibus massa diam, eget porta nunc faucibus a. 
                    Curabitur est massa, tincidunt at tristique eget, accumsan nec augue. 
                    Nam id nunc risus. 
                    Integer lobortis, metus ut tristique mollis, ligula libero varius dui, a accumsan ante lorem at nisl. 
                    Aenean ullamcorper justo at risus posuere, eu accumsan nunc bibendum. 
                    Donec sodales sodales magna ut facilisis.
                </p>
            <?php endfor; ?>
        </div>
    </div>
</article>
<?php require "{$configThemePath}/Templates/blog.php"; ?>