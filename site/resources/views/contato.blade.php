@extends('layouts.app')

@section('title', 'Contato')

@section('content')

<section id="BannerInstitucional" style="height: 21.875em;">
	<span class="Institucional-blend"></span>
	<!-- Crop Livre -->
    <img src="img/banner4.jpg">
    <!-- Crop Livre -->
    <h1 class="Heading1">Contato</h1>

</section>

<section id='ContatoPage'>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.3711199761974!2d-34.88012098522013!3d-8.063575094194114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab18bbc8cac7ef%3A0x9a31f466c012e14d!2sMangue+Tecnologia!5e0!3m2!1spt-BR!2sbr!4v1512262706677" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    <div class="contato-box">
        <form method="post" onsubmit="return false;" class="form-contato">

            <h3 class='Heading3'>Em que podemos te ajudar?</h3>
            <label>
                <span>Seu nome</span>
                <input type="text" name="nome" placeholder="Digite seu nome">
            </label>
            <label>
                <span>Email</span>
                <input type="email" name="email" placeholder="Digite seu email">
            </label>

            <label>
                <span>Mensagem</span>
                <textarea name="mensagem" placeholder="Digite seu texto"></textarea>
            </label>
            <label style="margin-bottom: 0em;">
                <button type="submit" class='btn-secondary'>Enviar</button>
            </label>
            <div class="responseContatoPedido"></div>
        </form>
    </div>
</section>

<!--  Apenas temporário, já irei ajeitar -->

<style>
    .overflow{
        overflow: hidden;
    }
    .header-principal{
    	margin-top: 0em;
    }

</style>

@stop

