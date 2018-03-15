@extends('layouts.app')

@section('title', 'Produto')

@section('content')

<section id="ProdutoSingle">
	@include('templates.produtosBreadcumb')
	<main>
		<div class="produto-view">
			<img src="img/produto1.jpg" id="photos-view1">
			<img src="img/banner1.jpg" id="photos-view2">
			<img src="img/banner2.jpg" id="photos-view3">
		</div>
		<div class="produto-photos">
			<span class="produtos-photos-box produtos-photos-active" id="photos-1"><img src="img/produto1.jpg"></span>
			<span class="produtos-photos-box" id="photos-2"><img src="img/banner1.jpg"></span>
			<span class="produtos-photos-box" id="photos-3"><img src="img/banner2.jpg"></span>
		</div>
		<div class="produto-details">
			<h1 class="Heading3 produto-titulo">Vestido Estampado etc </h1>
			<p class='Display3 ref'>Ref.: 720</p>
			<p class='Paragraph2 produto-descricao'>Pequena descrição do produto. While some people really seem to have a knack for barbequing – always grilling up a perfect meal – for the rest of us, it is something that must be learned, not something that just comes naturally. Believe it or not, there is technique involved. It’s not just a matter of following your cooking instincts.  </p>


			<div class='box-precoSelects'>
				<span class='info-precos'>
					<p class='Display2'>R$ 235,00</p>
					<p class='Paragraph1'>Unidade</p>
				</span>
				<span class="selects-produto">
					<label for="tamanhoProduto" class="label">Tamanho</label>
					<label for="quantidadeProduto" class="label">Quantidade</label>
					<label for="corProduto" class="label corProduto">Cor</label>
					<select name="Tamanho" class="input" id="tamanhoProduto">
						<option value="p">P</option>
					</select>
					<select name="Quantidade" class="input" id="quantidadeProduto">
						<option value="1">1</option>
					</select>
					<!-- <select name="corProduto" id="corProduto" class="input" id="corProdut">
						<option class="Amarelo"></option>
					</select> -->
					<div class="input corSelect"><p>▼</p>
						<span class="corSelecionada" style="background-color:#000000"></span>

						<ul class="corOptions">
							<li class="000000">
								<span class="corOpcao" style="background-color:#000000"></span>
							</li>
							<li class="0000FF">
								<span class="corOpcao" style="background-color:#0000FF"></span>
							</li>
							<li class="4B0082">
								<span class="corOpcao" style="background-color:#4B0082"></span>
							</li>
						</ul>
					</div>
				</span>
			</div>
			<button class="btn-primary btn-add-carrinho">Adicionar a sacola</button>
		</main>


		<div class="relacionados">
			<div class='container'>
			<h2 class="Heading3">Outros produtos</h2>
				@include('includes.produtosugeridos')
			</div>
		</div>
	</div>
</section>

@stop

<style>
	header {
		margin-top: -6.3em !important;
	}
	.overflow{
		overflow: hidden;
	}	
	#Produtos-header {
		margin-top: -3.5em !important;
	}
</style>