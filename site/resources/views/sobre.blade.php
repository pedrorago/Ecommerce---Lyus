@extends('layouts.app')

@section('title', 'Sobre')

@section('content')

@include('templates.headerSobre')

<section id="BannerInstitucional" style="height: 21.875em;">
	<span class="Institucional-blend"></span>
	<!-- Crop Livre -->
    <img src="img/banner4.jpg">
    <!-- Crop Livre -->
    <h1 class="Heading1">Sobre</h1>

</section>

<section id="Sobre">
    <div class="container">
        <main>
            <h2 class='Display2'>Institucional</h2>
            <div class='conteudo-sobre'>
               <p class='Paragraph1'>If you are the owner, operator or manager of a restaurant or other type of establishment at which food is sold, you will regularly find yourself in the market for different products to stock your commercial kitchen. Chances are that you find yourself very frequently searching for cookware products for your commercial kitchen.

                There are a number of different avenues available to you through which you can shop for cookware items and products for your commercial kitchen. One avenue that you might want to pursue when it comes to looking for cookware items for your commercial kitchen is the Internet and world wide web.

                In this day and age there are now a number of different websites that cater specifically to people who are involved in the running of a commercial kitchen. Oftentimes these websites can assist the owner, operator or manager of a restaurant to obtain what might otherwise be hard to find.</p>
                <div class='container-galeria'> 
                    <div class='galeria-box'>   
                        <span class='blend-galeria'>
                        </span>
                        <i class="material-icons fullscreenIcon">fullscreen</i>
                        <img src="img/produto1.jpg">
                    </div>
                    <div class='galeria-box'>   
                        <span class='blend-galeria'>
                        </span>
                        <i class="material-icons fullscreenIcon">fullscreen</i>
                        <img src="img/produto1.jpg">
                    </div>
                    <div class='galeria-box'>   
                        <span class='blend-galeria'>
                        </span>
                        <i class="material-icons fullscreenIcon">fullscreen</i>
                        <img src="img/produto1.jpg">
                    </div>
                    <div class='galeria-box'>   
                        <span class='blend-galeria'>
                        </span>
                        <i class="material-icons fullscreenIcon">fullscreen</i>
                        <img src="img/produto1.jpg">
                    </div>
                </div>
            </div>
            <h2 class='Display2'>Nossas Lojas</h2>
            <div class= conteudo-sobre>
                <span class='buttons-container'>
                    <a href="javascript:void(0)" class='btn-secondary large salvadorBtn'>SALVADOR/BA</a>
                    <a href="javascript:void(0)" class='btn-primary large cruzBtn'>CRUZ DAS ALMAS/BA</a>
                </span>
                <div class='mapa-container-sobre salvador containerActive'>
                    <div class='endereco-container'>
                        <span class='box-endereco-sobre box1 boxActive'>
                            <p class='conteudos'>Rua Conde de Porto Alegre, 239</p>
                            <p class='conteudos'>Iapi | CEP 40330-200</p>
                            <p class='conteudos'>(71) 3386-3175</p>
                        </span>
                        <span class='box-endereco-sobre box2'>
                            <p class='conteudos'>Rua Direta do Uruguai, 753
                                Lj. 22/23/68/69 </p>
                                <p class='conteudos'>Uruguai | CEP 40454-260</p>
                                <p class='conteudos'>(71) 3386-3175</p>
                            </span>
                            <span class='box-endereco-sobre box3'>
                                <p class='conteudos'>Av.Paulo VI ,1023</p>
                                <p class='conteudos'>Pituba | CEP 41810-000</p>
                                <p class='conteudos'>(71) 3451-6590</p>
                            </span>
                            <span class='box-endereco-sobre box4'>
                                <p class='conteudos'>Rua Thomaz Gonzaga ,153</p>
                                <p class='conteudos'>Pernambués | CEP 41100-000</p>
                                <p class='conteudos'>(71) 3450-1997</p>
                            </span>
                        </div>
                        <div class='mapa-box mapa1'>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.2796894269095!2d-38.48393608517829!3d-12.95394639086748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7161acb9004ca5d%3A0x2a15ccc19e8804ad!2sRua+Conde+de+Porto+Alegre%2C+239+-+Iapi%2C+Salvador+-+BA!5e0!3m2!1spt-BR!2sbr!4v1512231514440" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <div class='mapa-box mapa2'>

                        </div>
                        <div class='mapa-box mapa3'>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1943.8327904029143!2d-38.456040042077305!3d-12.993228497710394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7161b6d3870a58b%3A0x9f542776a71a7cb0!2sAv.+Paulo+VI%2C+1023+-+Pituba%2C+Salvador+-+BA%2C+41810-001!5e0!3m2!1spt-BR!2sbr!4v1512231740625" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <div class='mapa-box mapa4'>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.094483682783!2d-38.469163685177996!3d-12.965805590859624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7161adc314f6523%3A0xe07da3a15fcc0e31!2sRua+Thomaz+Gonzaga%2C+153+-+Pernambu%C3%A9s%2C+Salvador+-+BA%2C+41100-000!5e0!3m2!1spt-BR!2sbr!4v1512231773801" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class='mapa-container-sobre cruz'>
                    <div class='endereco-container'>
                        <span class='box-endereco-sobre box1 boxActive'>
                            <p class='conteudos'>Rua Conde de Portoaaaaa Alegre, 239</p>
                            <p class='conteudos'>Iapi | CEP 40330-200</p>
                            <p class='conteudos'>(71) 3386-3175</p>
                        </span>
                        <span class='box-endereco-sobre box2'>
                            <p class='conteudos'>Rua Direta do Uruguai, 753
                                Lj. 22/23/68/69 </p>
                                <p class='conteudos'>Uruguai | CEP 40454-260</p>
                                <p class='conteudos'>(71) 3386-3175</p>
                            </span>
                            <span class='box-endereco-sobre box3'>
                                <p class='conteudos'>Av.Paulo VI ,1023</p>
                                <p class='conteudos'>Pituba | CEP 41810-000</p>
                                <p class='conteudos'>(71) 3451-6590</p>
                            </span>
                            <span class='box-endereco-sobre box4'>
                                <p class='conteudos'>Rua Thomaz Gonzaga ,153</p>
                                <p class='conteudos'>Pernambués | CEP 41100-000</p>
                                <p class='conteudos'>(71) 3450-1997</p>
                            </span>
                        </div>
                        <div class='mapa-box mapa1'>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.2796894269095!2d-38.48393608517829!3d-12.95394639086748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7161acb9004ca5d%3A0x2a15ccc19e8804ad!2sRua+Conde+de+Porto+Alegre%2C+239+-+Iapi%2C+Salvador+-+BA!5e0!3m2!1spt-BR!2sbr!4v1512231514440" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <div class='mapa-box mapa2'>

                        </div>
                        <div class='mapa-box mapa3'>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1943.8327904029143!2d-38.456040042077305!3d-12.993228497710394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7161b6d3870a58b%3A0x9f542776a71a7cb0!2sAv.+Paulo+VI%2C+1023+-+Pituba%2C+Salvador+-+BA%2C+41810-001!5e0!3m2!1spt-BR!2sbr!4v1512231740625" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <div class='mapa-box mapa4'>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.094483682783!2d-38.469163685177996!3d-12.965805590859624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7161adc314f6523%3A0xe07da3a15fcc0e31!2sRua+Thomaz+Gonzaga%2C+153+-+Pernambu%C3%A9s%2C+Salvador+-+BA%2C+41100-000!5e0!3m2!1spt-BR!2sbr!4v1512231773801" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </main>
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

