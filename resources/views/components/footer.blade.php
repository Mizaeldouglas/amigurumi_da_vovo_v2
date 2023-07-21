<x-navbar class="hidden"/>

<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>Amigurumi da Vovó</h3>
                    @foreach ($enderecos as $endereco)
                        <p>
                            {{mb_convert_case($endereco->bairro,MB_CASE_TITLE)}}, <br>
                            {{mb_convert_case($endereco->logradouro,MB_CASE_TITLE)}} nº {{ $endereco->numero  }}, <br>
                            {{ mb_convert_case($endereco->endereco,MB_CASE_TITLE)  }} SP - {{strtolower($endereco->cep)}} <br>
                            <br>
                            <strong>Telefone:</strong> {{strtoupper($endereco->telefone)}}<br>
                            <strong>Email:</strong> {{strtolower($endereco->email)}}<br>
                        </p>
                    @endforeach
                </div>

                <div class="col-lg-3 col-md-6 footer-links ">
                    <h4>Links Úteis</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home.index') }}">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home.about') }}">Sobre Mim</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('contact.index') }}">Contato</a>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Nossas Redes Sociais</h4>
                    <p>Conheça o mundo encantado dos amigurumis da Vovó e mergulhe em um universo de ternura e
                        diversão! Siga-nos nas redes sociais e fique por dentro das novidades e lançamentos!</p>
                    <div class="mt-3 social-links">
                        @foreach ($socialMedia as $social)
                            @if($social->instagram)
                                <a href="{{ $social->instagram }}" target="_blank" class="instagram"><i
                                        class="bx bxl-instagram"></i></a>
                            @endif
                            @if($social->whatsapp)
                                <a href="{{ $social->whatsapp }}" target="_blank" class="whatsapp"><i
                                        class="bx bxl-whatsapp"></i></a>
                            @endif
                            @if($social->linkedin)
                                <a href="{{ $social->linkedin }}" target="_blank" class="linkedin"><i
                                        class="bx bxl-linkedin"></i></a>
                            @endif
                            @if($social->github)
                                <a href="{{ $social->github }}" target="_blank" class="github"><i
                                        class="bx bxl-github"></i></a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pt-4 flex justify-center align-items-center">
        <div class="copyright">
            &copy; Copyright <strong><span><a href="https://www.linkedin.com/in/mizaeldouglas/"
                                              target="_blank">MizaelDouglas</a></span></strong>.
            All Rights Reserved
        </div>

    </div>
</footer>


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<script src="https://cdn.tailwindcss.com/"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
