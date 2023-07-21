<x-layout_home >
    <x-header_hero/>
    <!-- Start #main -->
    <main id="main">
        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Meu trabalho</h2>
                    <p>Alguns dos meus amigurumis</p>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach($produtos as $produto)

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{$produto->imagem}}" class="img-fluid img-portfolio" alt="">
                                <div class="portfolio-links">
                                    <a href="{{ $produto->imagem }}"  data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $produto->nome }}"><i class="bi bi-plus"></i></a>
                                    <a href="{{$produto->link}}" target="_blank" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                                <div class="portfolio-info">
                                    <h4>{{ $produto->nome }}</h4>
                                    <p>{{ $produto->descricao }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Portfolio Section -->
        <div class="section-title">
            <p><a href="{{route('product.index')}}" >Ver Todos amigurimis...</a></p>
        </div>

    </main>
    <!-- End #main -->

</x-layout_home>
