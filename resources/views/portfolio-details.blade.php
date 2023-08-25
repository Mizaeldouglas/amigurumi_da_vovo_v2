<x-layout_home>

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Detalhes do amigurumis</h2>

            </div>

        </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="{{asset('storage/' . $produto->imagem)}}" alt="">
                            </div>


                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Informação do amigurumi</h3>
                        <ul>
                            <li><strong>Altura</strong>: {{$produto->altura}} cm</li>
                            <li><strong>Largura</strong>: {{$produto->largura}} cm</li>
                            <li><strong>Peso</strong>: {{$produto->peso}} g </li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>Nome: {{ $produto->nome }}</h2>
                        <p>Descrição: {{ $produto->descricao }}</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->


</x-layout_home>
