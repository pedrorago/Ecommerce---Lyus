$(function(){

	var FiltroBox = $("#filtroBox");
	var FormularioFiltro = $(".filtro-formulario");
	var Seta = $(".seta-filtro");
	var AreaClick = $(".iconsMeio");
	var AreaClick2 = $ (".seta-box");
	AreaClick.on("click", function(){
		FiltroBox.toggleClass("Box-ativo");
		setTimeout(function(){
			FormularioFiltro.toggle();
			Seta.toggleClass("seta-inversa");
		},100);
	});
	AreaClick2.on("click", function(){
		FiltroBox.toggleClass("Box-ativo");
		setTimeout(function(){
			FormularioFiltro.toggle();
			Seta.toggleClass("seta-inversa");
		},100);
	});
  $("body").on("click", '.blur', function(){
    $(".content").removeClass("blur");
    $(".carrinho-box").show();
    $(".formLogin").removeClass("formLoginOn");
    $(".formLogin").removeClass("formLoginSmall");
    $(".formRecuperar").removeClass("formRecuperarOn");
    $(".formCadastro").removeClass("formCadastroOn");
    $(".formLogin").find("#email").val('');
    $(".formLogin").find("#senha").val('');
    $('.formCarrinho').removeClass("formCarrinhoOn");
    $(".formLogado").removeClass("formLogadoOn");
    $('.minhaContaLinkDisable').show();
    $('.minhaContaLink').show();
    $('.orcamento-modal').removeClass("modalOn");
});

  $(".minhaContaLink").on("click", function(){
    $(".content").toggleClass("blur");
    $(".formCarrinho").removeClass("formCarrinhoOn");
    $(".formLogin").toggleClass("formLoginOn");
    $(".formLogin").removeClass("formLoginSmall");
    $(".formRecuperar").removeClass("formRecuperarOn");
    $(".formCadastro").removeClass("formCadastroOn");
    $(".formLogin").find("#email").val('');
    $(".formLogin").find("#senha").val('');
        //$("form").addClass('invisible').removeClass('visible');
        $(".formLogin").addClass('visible').removeClass('invisible');
        $(".formLogado").addClass('visible').removeClass('invisible');
        return false;
    });

  $(".minhaContaLinkDisable").on("click", function(){
    $(".content").toggleClass("blur");
    $(".formLogin").removeClass("formLoginOn");
    $(".formRecuperar").removeClass("formRecuperarOn");
    $(".formCadastro").removeClass("formCadastroOn");
    $(".formLogin").find("#email").val('');
    $(".formLogin").find("#senha").val('');
    $(".formLogado").toggleClass("formLogadoOn");
    $('.formCarrinho').removeClass("formCarrinhoOn");
    return false;
});

  $(".recuperarSenha").on("click", function() {
    $(".formRecuperar").toggleClass("formRecuperarOn");
    $(".formLogin").addClass("formLoginSmall");
    $(".formLogin").find("#email").val('');
    $(".formLogin").find("#senha").val('');
        //$("form").addClass('invisible').removeClass('visible');
        $(".formRecuperar").addClass('visible').removeClass('invisible');
        $(".formLogin").addClass('invisible').removeClass('visible');

        $(".formCarrinho").removeClass("formCarrinhoOn");
        $(".formLogin").removeClass("formLoginOn");
        $(".formLogin").removeClass("formLoginSmall");
        $(".formCadastro").removeClass("formCadastroOn");
        $(".formLogin").removeClass('visible');
        $(".formLogado").removeClass('visible');
    });

  $(".recuperarVoltar").on("click",function(){
    $(".formRecuperar").removeClass("formRecuperarOn");
    $(".formLogin").removeClass("formLoginSmall");
    $(".formRecuperar").find("#email").val('');
        //$("form").addClass('invisible').removeClass('visible');
        $(".formLogin").addClass('visible').removeClass('invisible');
        $(".formLogado").addClass('visible').removeClass('invisible');
    });

  $(".cadastrarMe").on("click", function(){
    $(".formCadastro").addClass("formCadastroOn");
    $(".formRecuperar").removeClass("formRecuperarOn");
    $(".formLogin").find("#email").val('');
    $(".formLogin").find("#senha").val('');
        //$("form").addClass('invisible').removeClass('visible');
        $(".formCadastro").addClass('visible').removeClass('invisible');
    });

  $(".cadastrarVoltar").on("click", function(){
    $(".formCadastro").removeClass("formCadastroOn");
    $(".formCadastro").find("#email").val('');
    $(".formCadastro").find("#nome").val('');
    $(".formCadastro").find("#senha").val('');
        //$("form").addClass('invisible').removeClass('visible');
        $(".formLogin").addClass('visible').removeClass('invisible');
        $(".formLogado").addClass('visible').removeClass('invisible');
    });

  /*Carrinho */

  $(".carrinho-box").on("click", function(){
    $(".formCadastro").removeClass("formCadastroOn");
    $(".formRecuperar").removeClass("formRecuperarOn");
    $(".formLogin").removeClass('visible').removeClass('invisible');
    $(".formLogado").removeClass('visible').removeClass('invisible');
    $(".formLogin").removeClass("formLoginOn");
    $(".formLogin").removeClass("formLoginSmall");
    $(".formCarrinho").toggleClass("formCarrinhoOn");
    $("#cepCarrinho").val('');

    $(".formCadastro").removeClass("formCadastroOn");

});

  /* Meus pedidos e dados */
  var email = $(".perfil-dados-form").find("#email");
  var nome = $(".perfil-dados-form").find("#nome");
  var cpf = $(".perfil-dados-form").find("#cpf");
  var telefone = $(".perfil-dados-form").find("#telefone");
  var cep = $(".perfil-dados-form").find("#cep");
  var endereco = $(".perfil-dados-form").find("#endereco");
  var numero = $(".perfil-dados-form").find("#numero");
  var complemento = $(".perfil-dados-form").find("#complemento");
  var bairro = $(".perfil-dados-form").find("#bairro");
  var lugar = $(".perfil-dados-form").find("#lugar");
  var senhaAntiga = $(".perfil-dados-form").find("#senhaAntiga");
  var senhaNova = $(".perfil-dados-form").find("#senhaNova");
  var dia = $(".perfil-dados-form").find("#dia");
  var mes = $(".perfil-dados-form").find("#mes");
  var ano = $(".perfil-dados-form").find("#ano");

  $(".meusPedidosLink").on("click", function() {
    $(".perfil-dados").hide();
    $(".perfil-pedidos").fadeIn(500);
    $(".perfil-pedidos").addClass("perfilOn");
    $(this).addClass("activeLink");
    $(".meusDadosLink").removeClass("activeLink");
});

  $(".meusDadosLink").on("click", function() {
    $(".perfil-dados").fadeIn(500);
    $(".perfil-pedidos").hide();
    $(".perfil-pedidos").removeClass("perfilOn");
    $(this).addClass("activeLink");
    $(".meusPedidosLink").removeClass("activeLink");
});


  /* Checkout */ 


  $(".meusDadosPessoais").on("click", function() {
    $(".box-esquerdaE").fadeOut(10);
    $(".box-esquerdaP").fadeOut(10);
    $(".box-esquerdaC").fadeIn(1500);
        // $(".perfil-pedidos").addClass("perfilOn");
        $(this).addClass("activeLink");
        $(".minhasEntregas").removeClass("activeLink");
        $(".meusPagamentos").removeClass("activeLink");
    });
  $(".minhasEntregas").on("click", function() {
    $(".box-esquerdaP").fadeOut(10);
    $(".box-esquerdaC").fadeOut(10);
    $(".box-esquerdaE").fadeIn(1500);
        // $(".perfil-pedidos").removeClass("perfilOn");
        $(this).addClass("activeLink");
        $(".meusDadosPessoais").removeClass("activeLink");
        $(".meusPagamentos").removeClass("activeLink");
    });
  $(".meusPagamentos").on("click", function() {
    $(".box-esquerdaC").fadeOut(10);
    $(".box-esquerdaE").fadeOut(10);
    $(".box-esquerdaP").fadeIn(1500);
        // $(".perfil-pedidos").removeClass("perfilOn");
        $(this).addClass("activeLink");
        $(".meusDadosPessoais").removeClass("activeLink");
        $(".minhasEntregas").removeClass("activeLink");
    });

  $(".inputBoleto").on('click', function(){
    $(".cartaoForm").fadeOut(200);
    $(".cartaoForm").removeClass('flexbox');
    $(".btnConfirmar").addClass('flexbox');
    $(".desc-boleto").fadeIn(200);
    $(".btnConfirmar").fadeIn(200);

    $(".#nomeCartao").val('');
    $(".#cpfTitular").val('');
    $(".#numeroCartao").val('');
    $(".#codCarta").val('');

});
  $(".inputCartao").on('click', function(){
    $(".btnConfirmar").removeClass('flexbox');
    $(".cartaoForm").addClass('flexbox');
    $(".desc-boleto").fadeOut(200);
    $(".btnConfirmar").fadeOut(200);
    $(".cartaoForm").fadeIn(200);

});

  $(".frete-checkout").on("click", ".calculaCEP", function(){

    $('.cupomForm').hide();
    $('.cupomForm').removeClass('cepFormOn');
    $('.cupomResumo').hide();
    $('.btnCupom').hide();
    $('.box-direitaC').removeClass('cupomOn');

    $('.calculaCEPForm').toggle();
    $('.calculaCEPForm').toggleClass('cepFormOn');
    $('.box-direitaC').toggleClass('cepOn');
    $('.cepResumo').toggle();
    $('.btnCep').toggle();


});


  $(".adicionaCupom").on('click', function(){
    $('.calculaCEPForm').hide();
    $('.calculaCEPForm').removeClass('cepFormOn');
    $('.cepResumo').hide();
    $('.btnCep').hide();
    $('.box-direitaC').removeClass('cepOn');


    $('.cupomForm').toggle();
    $('.cupomForm').toggleClass('cepFormOn');
    $('.box-direitaC').toggleClass('cupomOn');
    $('.cupomResumo').toggle();
    $('.btnCupom').toggle();
});

  /*------------------------------------------------------ */

  $(".box1").on('click', function(){
    $('.mapa1').fadeIn();
    $('.mapa2').fadeOut();
    $('.mapa3').fadeOut();
    $('.mapa4').fadeOut();
    $(this).addClass('boxActive');
    $('.box2').removeClass('boxActive');
    $('.box3').removeClass('boxActive');
    $('.box4').removeClass('boxActive');
});
  $(".box2").on('click', function(){
    $('.mapa2').fadeIn();
    $('.mapa1').fadeOut();
    $('.mapa3').fadeOut();
    $('.mapa4').fadeOut();
    $(this).addClass('boxActive');
    $('.box1').removeClass('boxActive');
    $('.box3').removeClass('boxActive');
    $('.box4').removeClass('boxActive');
});
  $(".box3").on('click', function(){
    $('.mapa3').fadeIn();
    $('.mapa2').fadeOut();
    $('.mapa1').fadeOut();
    $('.mapa4').fadeOut();
    $(this).addClass('boxActive');
    $('.box2').removeClass('boxActive');
    $('.box1').removeClass('boxActive');
    $('.box4').removeClass('boxActive');
});
  $(".box4").on('click', function(){
    $('.mapa4').fadeIn();
    $('.mapa2').fadeOut();
    $('.mapa3').fadeOut();
    $('.mapa1').fadeOut();
    $(this).addClass('boxActive');
    $('.box2').removeClass('boxActive');
    $('.box3').removeClass('boxActive');
    $('.box1').removeClass('boxActive');
});
  $('.salvadorBtn').on('click', function(){
    $('.cruz').removeClass('containerActive');
    $('.salvador').addClass('containerActive');
});
  $('.cruzBtn').on('click', function(){
    $('.salvador').removeClass('containerActive');
    $('.cruz').addClass('containerActive');
});

  
    /* Single */
    
    $("#photos-1").on("click", function(){
        $("#photos-view2").fadeOut(); 
        $("#photos-view3").fadeOut();
        $("#photos-view1").fadeIn();

        $("#photos-1").addClass('produtos-photos-active');
        $("#photos-2").removeClass('produtos-photos-active');
        $("#photos-3").removeClass('produtos-photos-active');
    });

    $("#photos-2").on("click", function(){
        $("#photos-view1").fadeOut();
        $("#photos-view3").fadeOut();
        $("#photos-view2").fadeIn();

        $("#photos-2").addClass('produtos-photos-active');
        $("#photos-1").removeClass('produtos-photos-active');
        $("#photos-3").removeClass('produtos-photos-active');
    });

    $("#photos-3").on("click", function(){
        $("#photos-view2").fadeOut();
        $("#photos-view1").fadeOut();
        $("#photos-view3").fadeIn();

        $("#photos-3").addClass('produtos-photos-active');
        $("#photos-1").removeClass('produtos-photos-active');
        $("#photos-2").removeClass('produtos-photos-active');
    });

    $(".corSelect").on("click", function(){
        $(".corOptions").toggle();
    });
    document.documentElement.onclick = function(event) {
        if (event.target === document.documentElement) {
            document.documentElement.classList.remove('corOptions');
        }
    };


    /* Tons de Cinza */
    var i000000 = $(".corOptions").find('.000000');
    var i696969 = $(".corOptions").find('.696969');
    var iC0C0C0 = $(".corOptions").find('.C0C0C0');
    var iDCDCDC = $(".corOptions").find('.DCDCDC');

    i000000.on('click', function(){$(".corSelecionada").css("background-color",'#000000');});
    i696969.on('click', function(){$(".corSelecionada").css("background-color",'#696969');});
    iC0C0C0.on('click', function(){$(".corSelecionada").css("background-color",'#C0C0C0');});
    iDCDCDC.on('click', function(){$(".corSelecionada").css("background-color",'#DCDCDC');});

    /* Tons de azul */
    var i0000FF = $(".corOptions").find('.0000FF');
    var i6A5ACD = $(".corOptions").find('.6A5ACD');
    var i6495ED = $(".corOptions").find('.6495ED');
    var i00BFFF = $(".corOptions").find('.00BFFF');

    i0000FF.on('click', function(){$(".corSelecionada").css("background-color",'#0000FF');});
    i6A5ACD.on('click', function(){$(".corSelecionada").css("background-color",'#6A5ACD');});
    i6495ED.on('click', function(){$(".corSelecionada").css("background-color",'#6495ED');});
    i00BFFF.on('click', function(){$(".corSelecionada").css("background-color",'#00BFFF');});

    /* Tons de cyano */

    var i00CED1 = $(".corOptions").find('.00CED1');
    var i008B8B = $(".corOptions").find('.008B8B');
    var i7FFFD4 = $(".corOptions").find('.7FFFD4');
    var i48D1CC = $(".corOptions").find('.48D1CC');

    i00CED1.on('click', function(){$(".corSelecionada").css("background-color",'#00CED1');});
    i008B8B.on('click', function(){$(".corSelecionada").css("background-color",'#008B8B');});
    i7FFFD4.on('click', function(){$(".corSelecionada").css("background-color",'#7FFFD4');});
    i48D1CC.on('click', function(){$(".corSelecionada").css("background-color",'#48D1CC');});

    /* Tons de verde */

    var i00FF7F = $(".corOptions").find('.00FF7F');
    var i90EE90 = $(".corOptions").find('.90EE90');
    var i006400 = $(".corOptions").find('.006400');
    var i00FF00 = $(".corOptions").find('.00FF00');

    i00FF7F.on('click', function(){$(".corSelecionada").css("background-color",'#00FF7F');});
    i90EE90.on('click', function(){$(".corSelecionada").css("background-color",'#90EE90');});
    i006400.on('click', function(){$(".corSelecionada").css("background-color",'#006400');});
    i00FF00.on('click', function(){$(".corSelecionada").css("background-color",'#00FF00');});

    /* Tons de marrom */

    var i8B4513 = $(".corOptions").find('.8B4513');
    var iDAA520 = $(".corOptions").find('.DAA520');
    var iBDB76B = $(".corOptions").find('.BDB76B');
    var iD2691E = $(".corOptions").find('.D2691E');
    var iFFDEAD = $(".corOptions").find('.FFDEAD');
    var iF4A460 = $(".corOptions").find('.F4A460');
    var iD2B48C = $(".corOptions").find('.D2B48C');

    i8B4513.on('click', function(){$(".corSelecionada").css("background-color",'#8B4513');});
    iDAA520.on('click', function(){$(".corSelecionada").css("background-color",'#DAA520');});
    iBDB76B.on('click', function(){$(".corSelecionada").css("background-color",'#BDB76B');});
    iD2691E.on('click', function(){$(".corSelecionada").css("background-color",'#D2691E');});
    iFFDEAD.on('click', function(){$(".corSelecionada").css("background-color",'#FFDEAD');});
    iF4A460.on('click', function(){$(".corSelecionada").css("background-color",'#F4A460');});
    iD2B48C.on('click', function(){$(".corSelecionada").css("background-color",'#D2B48C');});

    /* Tons de roxo */

    var i8A2BE2 = $(".corOptions").find('.8A2BE2');
    var i4B0082 = $(".corOptions").find('.4B0082');
    var i9400D3 = $(".corOptions").find('.9400D3');
    var i800080 = $(".corOptions").find('.800080');

    i8A2BE2.on('click', function(){$(".corSelecionada").css("background-color",'#8A2BE2');});
    i4B0082.on('click', function(){$(".corSelecionada").css("background-color",'#4B0082');});
    i9400D3.on('click', function(){$(".corSelecionada").css("background-color",'#9400D3');});
    i800080.on('click', function(){$(".corSelecionada").css("background-color",'#800080');});

    /* Tons de rosa */

    var iFF1493 = $(".corOptions").find('.FF1493');
    var iFF69B4 = $(".corOptions").find('.FF69B4');
    var iDC143C = $(".corOptions").find('.DC143C');
    var iF08080 = $(".corOptions").find('.F08080');

    iFF1493.on('click', function(){$(".corSelecionada").css("background-color",'#FF1493');});
    iFF69B4.on('click', function(){$(".corSelecionada").css("background-color",'#FF69B4');});
    iDC143C.on('click', function(){$(".corSelecionada").css("background-color",'#DC143C');});
    iF08080.on('click', function(){$(".corSelecionada").css("background-color",'#F08080');});

    /* Tons de vermelho */

    var iFF0000 = $(".corOptions").find('.FF0000');
    var iFF7F50 = $(".corOptions").find('.FF7F50');
    var iFF6347 = $(".corOptions").find('.FF6347');
    var i800000 = $(".corOptions").find('.800000');

    iFF0000.on('click', function(){$(".corSelecionada").css("background-color",'#FF0000');});
    iFF7F50.on('click', function(){$(".corSelecionada").css("background-color",'#FF7F50');});
    iFF6347.on('click', function(){$(".corSelecionada").css("background-color",'#FF6347');});
    i800000.on('click', function(){$(".corSelecionada").css("background-color",'#800000');});

    /* Tons de laranja */

    var iFF4500 = $(".corOptions").find('.FF4500');
    var iFF8C00 = $(".corOptions").find('.FF8C00');
    var iFFA500 = $(".corOptions").find('.FFA500');

    iFF4500.on('click', function(){$(".corSelecionada").css("background-color",'#FF4500');});
    iFF8C00.on('click', function(){$(".corSelecionada").css("background-color",'#FF8C00');});
    iFFA500.on('click', function(){$(".corSelecionada").css("background-color",'#FFA500');});

    /* Tons de amarelo */

    var iFFD700 = $(".corOptions").find('.FFD700');
    var iFFFF00 = $(".corOptions").find('.FFFF00');
    var iF0E68C = $(".corOptions").find('.F0E68C');

    iFFD700.on('click', function(){$(".corSelecionada").css("background-color",'#FFD700');});
    iFFFF00.on('click', function(){$(".corSelecionada").css("background-color",'#FFFF00');});
    iF0E68C.on('click', function(){$(".corSelecionada").css("background-color",'#F0E68C');});

    /* Tons de branco */

    var iFFFFFF = $(".corOptions").find('.FFFFFF');


    iFFFFFF.on('click', function(){$(".corSelecionada").css("background-color",'#FFFFFF');});
});