<!-- component -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c151b27f34.js" crossorigin="anonymous"></script>
    <style>
        .icon::after {
            content: '';
            display: block;
            position: absolute;
            border-top: 23px solid transparent;
            border-bottom: 17px solid transparent;
            border-left: 12px solid #3182ce;
            left: 100%;
            top: 0;
        }
    </style>

</head>

<body>
@if (session('success_redeSocial'))
    <div class="bg-green-200 text-green-700 px-4 py-2 rounded mb-4">
        {{ session('success_redeSocial') }}
    </div>
@endif
<form action="{{ route('dashboard.create') }}" method="POST" enctype="multipart/form-data"
      class="form bg-white p-6 my-10 relative">
    @csrf

    @if ($errors->any())
        <div class="bg-red-200 text-red-700 px-4 py-2 rounded mb-4">
            <ul class="list-disc pl-4">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="icon bg-blue-600 text-white w-6 h-6 absolute flex items-center justify-center p-5" style="left:-40px">
        <i class="fal fa-phone-volume fa-fw text-2xl transform -rotate-45"></i></div>
    <h3 class="text-2xl text-gray-900 font-semibold">Adicionar redes Sociais</h3>
    <p class="text-gray-600"> Cole os links das suas rede sociais. (os campos não são obrigatórios)</p>
    <div class="flex space-x-5 mt-3">
        <input type="url" name="facebook" id="facebook" placeholder="facebook" class="border p-2  w-3/4">
        <input type="url" name="instagram" id="instagram" placeholder="instagram" class="border p-2  w-3/4">
    </div>
    <div class="flex space-x-5 mt-3">
        <input type="url" name="twitter" id="twitter" placeholder="twitter" class="border p-2  w-3/4">
        <input type="url" name="whatsapp" id="whatsapp" placeholder="whatsapp" class="border p-2  w-3/4">
    </div>
    <div class="flex space-x-5 mt-3">
        <input type="url" name="linkedin" id="linkedin" placeholder="linkedin" class="border p-2  w-3/4">
        <input type="url" name="github" id="github" placeholder="github" class="border p-2  w-3/4">
    </div>

    <button type="submit" class="w-full mt-6 bg-blue-600 hover:bg-blue-500 text-white font-semibold p-3">Enviar</button>

</form>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>


{{--<script>--}}
{{--    $("#cep").blur(function () {--}}
{{--        var cep = $(this).val().replace(/\D/g, '');--}}
{{--        if (cep !== "") {--}}
{{--            var validacep = /^[0-9]{8}$/;--}}
{{--            if (validacep.test(cep)) {--}}
{{--                $("#logradouro").val("");--}}
{{--                $("#bairro").val(" ");--}}
{{--                $("#endereco").val(" ");--}}
{{--                $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {--}}
{{--                    if (!("erro" in dados)) {--}}
{{--                        $("#logradouro").val(dados.logradouro.toUpperCase());--}}
{{--                        $("#bairro").val(dados.bairro.toUpperCase());--}}
{{--                        $("#endereco").val(dados.localidade.toUpperCase());--}}
{{--                    } else {--}}
{{--                        alert("CEP não encontrado de forma automatizado digite manualmente ou tente novamente.");--}}
{{--                    }--}}
{{--                });--}}
{{--            }--}}
{{--        }--}}
{{--    });--}}
{{--</script>--}}
