<x-layout_home>
    <section id="portfolio" class="portfolio">
        <div class="container pt-5" data-aos="fade-up">
            <div class="section-title">
                <p>Todos meus Amigurumis</p>
            </div>
            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @foreach ($produtos as $produto)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{  $produto->imagem }}" class="img-fluid img-portfolio" alt="">
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
    </section>
</x-layout_home>
