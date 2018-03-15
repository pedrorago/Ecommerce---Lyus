@extends('layouts.app')

@section('title', 'Produtos')

@section('content')

@include('templates.headerProdutos')

<section id="BannerInstitucional" style="height: 21.875em;">
	<span class="Institucional-blend"></span>
	<!-- Crop Livre -->
    <img src="img/banner4.jpg">
    <!-- Crop Livre -->
    <h1 class="Heading1">Mulheres</h1>

    <button class="filtro-box" id="filtroBox">
    <span class="seta-box1">
            <i class="material-icons seta-filtro">chevron_left</i>
        </span>
        <span class="iconsMeio">
            <i class="material-icons">filter_list</i>
            <p class="filtros-texto">Filtros</p>
        </span>

        <form class="filtro-formulario">
            <span class="labels">

                <label for="Categoria" class="conteudos">Categoria</label>
                <label for="Tamanho " class="conteudos">Tamanho</label>
                <label for="Cor" class="conteudos">Cor</label>

            </span>
            <span class="Selects">
                <select id="Categoria" value="---">
                    <option>---</option>
                </select>
                <select id="Tamanho" value="---">
                    <option>---</option>
                </select>
                <select id="Cor" value="---">
                    <option>---</option>
                </select>
            </span>
        </form>
    </button>


</section>

<section id="Produtos-catalogo">
    <div class="container">
        <main onload="scroll_produtos()" class="block">

            @include('includes.produtos')

        </main>
        <div class="btn-load btn-primary" style='display:none'>CARREGANDO OUTRAS...</div>
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
    #Produtos-header{
    	margin-top: 6em;
    }
</style>

@stop

