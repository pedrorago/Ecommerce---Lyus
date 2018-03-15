
@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section id='BannerHome'>
    <span class='blend-bannerHome'></span>
    <div class='slide-bannerHome'>
        <div class='img-bannerslide'><img src="img/banner2.jpg"></div>
    </div>
    <div class='conteudo-homeBanner'>
        <div class='container'>
            <h1 class='Heading1'>Getting Cheap Airfare For Last Minute Travel</h1>
            <a href="javascript:void(0)" class='btn-secondary small'>Ver mais</a>
        </div>
    </div>
</section>
<section id='HomeLancamento'>
    <div class='container'>
        <main>
            <h2 class='Display2'>Lançamentos</h2>

            <div class='produtosSlide'>
                <a href='javascript:void(0)' class='produto-box'>
                    <img src="img/produto1.jpg">
                    <span class='tarjaDescricao'>
                    </span>
                    <h3 class='Paragraph3'>Vestido Estampado e o título de exemplo</h3>
                    <h4 class='Paragraph4'>R$ 120,00</h4>
                    <p class='Paragraph5'>Até 6x s/j.</p>
                </a>
                <a href='javascript:void(0)' class='produto-box'>
                    <img src="img/produto1.jpg">
                    <span class='tarjaDescricao'>
                    </span>
                    <h3 class='Paragraph3'>Vestido Estampado e o título de exemplo</h3>
                    <h4 class='Paragraph4'>R$ 120,00</h4>
                    <p class='Paragraph5'>Até 6x s/j.</p>
                </a>
                <a href='javascript:void(0)' class='produto-box'>
                    <img src="img/produto1.jpg">
                    <span class='tarjaDescricao'>
                    </span>
                    <h3 class='Paragraph3'>Vestido Estampado e o título de exemplo</h3>
                    <h4 class='Paragraph4'>R$ 120,00</h4>
                    <p class='Paragraph5'>Até 6x s/j.</p>
                </a>
                <a href='javascript:void(0)' class='produto-box'>
                    <img src="img/produto1.jpg">
                    <span class='tarjaDescricao'>
                    </span>
                    <h3 class='Paragraph3'>Vestido Estampado e o título de exemplo</h3>
                    <h4 class='Paragraph4'>R$ 120,00</h4>
                    <p class='Paragraph5'>Até 6x s/j.</p>
                </a>
                <a href='javascript:void(0)' class='produto-box'>
                    <img src="img/produto1.jpg">
                    <span class='tarjaDescricao'>
                    </span>
                    <h3 class='Paragraph3'>Vestido Estampado e o título de exemplo</h3>
                    <h4 class='Paragraph4'>R$ 120,00</h4>
                    <p class='Paragraph5'>Até 6x s/j.</p>
                </a>
                <a href='javascript:void(0)' class='produto-box'>
                    <img src="img/produto1.jpg">
                    <span class='tarjaDescricao'>
                    </span>
                    <h3 class='Paragraph3'>Vestido Estampado e o título de exemplo</h3>
                    <h4 class='Paragraph4'>R$ 120,00</h4>
                    <p class='Paragraph5'>Até 6x s/j.</p>
                </a>
                <a href='javascript:void(0)' class='produto-box'>
                    <img src="img/produto1.jpg">
                    <span class='tarjaDescricao'>
                    </span>
                    <h3 class='Paragraph3'>Vestido Estampado e o título de exemplo</h3>
                    <h4 class='Paragraph4'>R$ 120,00</h4>
                    <p class='Paragraph5'>Até 6x s/j.</p>
                </a>
                <a href='javascript:void(0)' class='produto-box'>
                    <img src="img/produto1.jpg">
                    <span class='tarjaDescricao'>
                    </span>
                    <h3 class='Paragraph3'>Vestido Estampado e o título de exemplo</h3>
                    <h4 class='Paragraph4'>R$ 120,00</h4>
                    <p class='Paragraph5'>Até 6x s/j.</p>
                </a>
                <a href="javascript:void(0)" class='btn-primary irParaLoja'>Ir para Loja Virtual</a>
            </div>
        </main>
    </div>
</section>
<section id='NewsHome'>
    <span></span>
    <img src="img/banner4.jpg">
    <main>
        <div class='container'>
            <form class='formNews'>
                <h1 class='Heading3'>Receba as últimas novidades por e-mail</h1>
                <label for='email'>E-mail</label>
                <input type="text" name="email" placeholder="Digite aqui seu email">
                <button class='btn-secondary large'>Inscrever-me</button>
            </form>
        </div>
    </main>
</section>
@stop
