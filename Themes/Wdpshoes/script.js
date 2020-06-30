$(function () {
	// Url base do projeto
	getBase = $("link[rel='base']").attr("href");

    $(".jtheme_login").on("click", function (e) {
        e.preventDefault();
        if (!$(".theme_login").length) {
        	var loginBox = '<div class="theme_login">';
    		loginBox += '<div class="theme_login_box">';
        	loginBox += '<header> <h1>Fazer Login</h1><p>Informe o seu e-mail e sua senha.</p></header>';
        	loginBox += '<form><input class="radius" type="email" id="email" placeholder="E-mail:"/>';
            loginBox += '<input class="radius" type="password" id="password" placeholder="Senha:"/>';
            loginBox += '<a class="btn transition radius icon-success" href="' + getBase + '/conta" title="Minha Conta">Fazer Login</a></form>';
        	loginBox += '<a href="#" title="Recuperar Senha" class="theme_login_box_recover transition icon-alert">Recuperar minha senha</a>';
        	loginBox += '</div></div>';

        	$("body").prepend(loginBox);
        	$(".theme_login").fadeIn(300).css("display", "flex");

        	$("body").on("click", function (e) {
        		if ($(e.target).attr("class") === "theme_login") {
        			$(".theme_login").fadeOut(300, function () {
        				$(this).remove();
        			});
        		}
        	});
        }
    });
});