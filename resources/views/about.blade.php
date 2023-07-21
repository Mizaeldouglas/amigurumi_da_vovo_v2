<x-layout_home>
    <div class="bg-gray-200 pt-14 pb-44">
        <div class="bg-gray-200">
            <div class="max-w-lg mx-auto my-10 bg-white rounded-lg shadow-md p-5">
                <img class="w-32 h-32 rounded-full mx-auto" src="{{asset('assets/img/perfil.png')}}" alt="Profile picture">
                <h2 class="text-center text-2xl font-semibold mt-3">Dona Rose</h2>
                <p class="text-center text-gray-600 mt-1">Crocheteira</p>


                    @foreach($socialMedia as $social)
                    <div class="flex justify-center mt-5">
                        @if (!empty($social->instagram))
                            <a href="{{ $social->instagram }}" target="_blank" class="text-rose-500 hover:text-rose-700 mx-2">Instagram</a>
                        @endif

                        @if (!empty($social->facebook))
                            <a href="{{ $social->facebook }}" target="_blank" class="text-rose-500 hover:text-rose-700 mx-2">Facebook</a>
                        @endif

                        @if (!empty($social->whatsapp))
                            <a href="{{ $social->whatsapp }}" target="_blank" class="text-rose-500 hover:text-rose-700 mx-2">WhatsApp</a>
                        @endif

                        @if (!empty($social->twitter))
                            <a href="{{ $social->twitter }}" target="_blank" class="text-rose-500 hover:text-rose-700 mx-2">Twitter</a>
                        @endif

                        @if (!empty($social->linkedin))
                            <a href="{{ $social->linkedin }}" target="_blank" class="text-rose-500 hover:text-rose-700 mx-2">LinkedIn</a>
                        @endif

                        @if (!empty($social->github))
                            <a href="{{ $social->github }}" target="_blank" class="text-rose-500 hover:text-rose-700 mx-2">GitHub</a>
                        @endif
                    </div>

                @endforeach

                <div class="mt-5">
                    <h3 class="text-xl font-semibold">Bio</h3>
                    <p class="text-gray-600 mt-2">
                        Bem-vindo(a) ao mundo encantado dos Amigurumis da Vovó! Me chamo [Nome da Vovó] e sou uma apaixonada por criar essas adoráveis criaturas de crochê. Minha jornada começou há [X] anos, quando descobri a arte dos Amigurumis e me apaixonei por cada ponto e detalhe.
                        Aqui, no Amigurumi da Vovó, você encontrará uma variedade de Amigurumis feitos com muito amor e carinho. Cada peça é única e confeccionada à mão, com materiais de alta qualidade.
                        Estou sempre buscando novas inspirações e aprimorando minhas habilidades para trazer Amigurumis cada vez mais encantadores. Espero que você se divirta explorando minha coleção e encontre o seu Amigurumi perfeito!

                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layout_home>

