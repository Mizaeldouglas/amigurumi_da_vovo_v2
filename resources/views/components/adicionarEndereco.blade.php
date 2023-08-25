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
@if (session('success_endereco'))
    <div class="bg-green-200 text-green-700 px-4 py-2 rounded mb-4">
        {{ session('success_endereco') }}
    </div>
@endif
<form action="{{ route('enderecos.create') }}" method="POST" enctype="multipart/form-data"
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
    <h3 class="text-2xl text-gray-900 font-semibold">Adicionar endereços</h3>
    <p class="text-gray-600">Adicione o seu endereço. (os campos não são obrigatórios)</p>
    <div class="flex space-x-5 mt-3">
        <input type="text" name="cep" id="cep" placeholder="cep" class="border p-2  w-3/4">
        <input type="text" name="endereco" id="endereco" placeholder="endereco" class="border p-2  w-3/4">
    </div>
    <div class="flex space-x-5 mt-3">
        <input type="text" name="logradouro" id="logradouro" placeholder="logradouro" class="border p-2  w-3/4">
        <input type="text" name="bairro" id="bairro" placeholder="bairro" class="border p-2  w-3/4">
    </div>
    <div class="flex space-x-5 mt-3">
        <input type="number" name="numero" id="numero" placeholder="numero" class="border p-2  w-3/4">
        <input type="tel" name="telefone" id="telefone" placeholder="telefone" class="border p-2  w-3/4">
    </div>
    <div class="flex space-x-5 mt-3">
        <input type="email" name="email" id="email" placeholder="email" class="border p-2  w-full">
    </div>

    <button type="submit" class="w-full mt-6 bg-blue-600 hover:bg-blue-500 text-white font-semibold p-3">Enviar</button>

</form>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>







{{--<!DOCTYPE html>--}}
{{--<html lang="pt_br">--}}
{{--<head>--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">--}}
{{--    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>--}}
{{--    <title></title>--}}
{{--</head>--}}

{{--<body class="bg-gray-100">--}}
{{--<div class="grid  " style="grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 1rem; width: 800px;">--}}

{{--    <div class="container mx-auto p-4">--}}
{{--        <h2 class="text-2xl font-bold mb-4 pl-4">Adicionar Endereços</h2>--}}

{{--        @if (session('success_endereco'))--}}
{{--            <div class="bg-green-200 text-green-700 px-4 py-2 rounded mb-4">--}}
{{--                {{ session('success_endereco') }}--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        <form action="{{ route('enderecos.create') }}" method="POST" enctype="multipart/form-data"--}}
{{--              class="max-w-md bg-white rounded shadow-md p-4">--}}
{{--            @csrf--}}

{{--            @if ($errors->any())--}}
{{--                <div class="bg-red-200 text-red-700 px-4 py-2 rounded mb-4">--}}
{{--                    <ul class="list-disc pl-4">--}}
{{--                        @foreach ($errors->all() as $error)--}}
{{--                            <li>{{ $error }}</li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            @endif--}}

{{--            <div class="mb-4">--}}
{{--                <label for="cep" class="block font-medium text-gray-700">CEP:</label>--}}
{{--                <input type="text" id="cep" name="cep"--}}
{{--                       class="w-full border-gray-300 rounded-md p-2 @error('cep') is-invalid @enderror"--}}
{{--                       value="{{old('cep')}}">--}}
{{--            </div>--}}

{{--            <div class="mb-4">--}}
{{--                <label for="endereco" class="block font-medium text-gray-700">Cidade:</label>--}}
{{--                <input type="text" id="endereco" name="endereco" class="w-full border-gray-300 rounded-md p-2"--}}
{{--                       value="{{old('endereco')}}">--}}
{{--            </div>--}}

{{--            <div class="mb-4">--}}
{{--                <label for="logradouro" class="block font-medium text-gray-700">Rua:</label>--}}
{{--                <input type="text" id="logradouro" name="logradouro" class="w-full border-gray-300 rounded-md p-2"--}}
{{--                       value="{{old('logradouro')}}">--}}
{{--            </div>--}}

{{--            <div class="mb-4">--}}
{{--                <label for="bairro" class="block font-medium text-gray-700">Bairro:</label>--}}
{{--                <input type="text" id="bairro" name="bairro" class="w-full border-gray-300 rounded-md p-2">--}}
{{--            </div>--}}

{{--            <div class="mb-4">--}}
{{--                <label for="numero" class="block font-medium text-gray-700">Numero:</label>--}}
{{--                <input type="number" id="numero" name="numero" class="w-full border-gray-300 rounded-md p-2">--}}
{{--            </div>--}}

{{--            <div class="mb-4">--}}
{{--                <label for="telefone" class="block font-medium text-gray-700">Telefone:</label>--}}
{{--                <input type="tel" id="telefone" name="telefone" placeholder="(00) 0000-0000" class="w-full border-gray-300 rounded-md p-2">--}}
{{--            </div>--}}

{{--            <div class="mb-4">--}}
{{--                <label for="email" class="block font-medium text-gray-700">Email:</label>--}}
{{--                <input type="email" id="email" name="email" class="w-full border-gray-300 rounded-md p-2">--}}
{{--            </div>--}}

{{--            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Enviar</button>--}}
{{--        </form>--}}

{{--    </div>--}}
{{--</div>--}}

{{--<script>--}}
{{--    $(document).ready(function() {--}}
{{--        $("#cep").blur(function () {--}}
{{--            var cep = $(this).val().replace(/\D/g, '');--}}
{{--            if (cep != "") {--}}
{{--                var validacep = /^[0-9]{8}$/;--}}
{{--                if (validacep.test(cep)) {--}}
{{--                    $("#logradouro").val("");--}}
{{--                    $("#bairro").val("");--}}
{{--                    $("#endereco").val("");--}}
{{--                    $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {--}}
{{--                        if (!("erro" in dados)) {--}}
{{--                            $("#logradouro").val(dados.logradouro.toUpperCase());--}}
{{--                            $("#bairro").val(dados.bairro.toUpperCase());--}}
{{--                            $("#endereco").val(dados.localidade.toUpperCase());--}}
{{--                        } else {--}}
{{--                            alert("CEP não encontrado de forma automatizada. Digite manualmente ou tente novamente.");--}}
{{--                        }--}}
{{--                    });--}}
{{--                }--}}
{{--            }--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
{{--</body>--}}
{{--</html>--}}
