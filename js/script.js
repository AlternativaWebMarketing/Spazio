$(document).ready(function(){
/*Legenda das variáveis
    h = altura da tela
    w = largura da tela
    t = relação topo da tela / topo do documento
*/
    var h = $(window).height();
    var w = $(window).width();
    //Função de slide do menu superior
    $('.navbg').hide();
    $(window).scroll(function(){
        var t = $(window).scrollTop();
        if(t >= 150){
            $('.navbg').fadeIn();
        }
        if(t < 150){
            $('.navbg').fadeOut();
        }
    });
    if(w > 767){
        $('.nav-mobile').hide();
    }
    if(w <= 767){
        $('.nav-desktop').hide();
    }

    // Scroll ao clicar em link
    $("a").click(function(){
        $("html, body").animate({
            scrollTop: $($(this).attr("href")).offset().top
        });
        return false;
    });

    // Previne que o WOW.js carregue a animação se não estiver no topo da página
    if( $(window).scrollTop() < 50){
        new WOW().init();
    }

    //Formulário de contato
    $('div.form').on("mouseover", function(){
        $(this).find('label').animate({
            top:'5px',
            transform:'scale(0.8)'
        })
    });
    $('div.form').on("mouseout", function(){
        $(this).find('label')
    });
    $('div.form').on("focusin", function(){
        if($('form[type="text"]').val().length != 0){
            $(this).find('label').animate({
                'transform':'scale(.8)',
                'top':'0',
                'transition':'.3s',
            });
        }
    });


});

/*
.fil1 {fill:#373435;fill-rule:nonzero}
.fil0 {fill:#872F31;fill-rule:nonzero}
*/
