<x-layout_home>
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Amigurumis</h2>
                <p>Todos os meus amigurumis</p>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                @foreach($produtos as $produto)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{asset('storage/' . $produto->imagem)}}" class="img-fluid  img-portfolio" alt="">
                            <div class="portfolio-links">
                                <a href="{{asset('storage/' . $produto->imagem)}}" data-gallery="portfolioGallery"
                                   class="portfolio-lightbox a" title="{{ $produto->nome }}"><i
                                        class="bi bi-card-image"></i></a>
                                <a class="detalhes" href="{{route('product.detalhes', ['id' => $produto->id])}}"
                                   title="More Details">Detalhes <i class="bi bi-arrow-right"></i></a>

                            </div>
                            <div class="portfolio-info">
                                <h4>{{ $produto->nome }}</h4>
                                <p title="{{$produto->descricao}}">
                                    {{
	                                  strlen($produto->descricao) > 60 ?
	                                  substr($produto->descricao,0,60) . ' ...' :
	                                  $produto->descricao
	                                }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Portfolio Section -->

</x-layout_home>
