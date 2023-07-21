<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="grid  " style="grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 1rem; width: 800px;">
    <div class="container mx-auto p-4 ">
        <h2 class="text-2xl font-bold mb-4 pl-4">Adicionar Redes social</h2>

        @if (session('success_redeSocial'))
            <div class="bg-green-200 text-green-700 px-4 py-2 rounded mb-4">
                {{ session('success_redeSocial') }}
            </div>
        @endif

        <form action="{{ route('dashboard.create') }}" method="POST" enctype="multipart/form-data"
              class="max-w-md bg-white rounded shadow-md p-4">
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

            <div class="mb-4">
                <label for="facebook" class="block font-medium text-gray-700">Link facebook:</label>
                <input type="url" id="facebook" name="facebook" class="w-full border-gray-300 rounded-md p-2">
            </div>

            <div class="mb-4">
                <label for="instagram" class="block font-medium text-gray-700">Link instagram:</label>
                <input type="url" id="instagram" name="instagram" class="w-full border-gray-300 rounded-md p-2">
            </div>

            <div class="mb-4">
                <label for="twitter" class="block font-medium text-gray-700">Link twitter:</label>
                <input type="url" id="twitter" name="twitter" class="w-full border-gray-300 rounded-md p-2">
            </div>

            <div class="mb-4">
                <label for="whatsapp" class="block font-medium text-gray-700">Link whatsapp:</label>
                <input type="url" id="whatsapp" name="whatsapp" class="w-full border-gray-300 rounded-md p-2">
            </div>

            <div class="mb-4">
                <label for="linkedin" class="block font-medium text-gray-700">Link linkedin:</label>
                <input type="url" id="linkedin" name="linkedin" class="w-full border-gray-300 rounded-md p-2">
            </div>

            <div class="mb-4">
                <label for="github" class="block font-medium text-gray-700">Link github:</label>
                <input type="url" id="github" name="github" class="w-full border-gray-300 rounded-md p-2">
            </div>


            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Enviar</button>
        </form>

    </div>


    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4 pl-4">Adicionar Endereços</h2>

        @if (session('success_endereco'))
            <div class="bg-green-200 text-green-700 px-4 py-2 rounded mb-4">
                {{ session('success_endereco') }}
            </div>
        @endif

        <form action="{{ route('enderecos.create') }}" method="POST" enctype="multipart/form-data"
              class="max-w-md bg-white rounded shadow-md p-4">
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

            <div class="mb-4">
                <label for="cep" class="block font-medium text-gray-700">CEP:</label>
                <input type="text" id="cep" name="cep"
                       class="w-full border-gray-300 rounded-md p-2 @error('cep') is-invalid @enderror"
                       value="{{old('cep')}}">
            </div>

            <div class="mb-4">
                <label for="endereco" class="block font-medium text-gray-700">Endereço:</label>
                <input type="text" id="endereco" name="endereco" class="w-full border-gray-300 rounded-md p-2"
                       value="{{old('endereco')}}">
            </div>

            <div class="mb-4">
                <label for="logradouro" class="block font-medium text-gray-700">Logradouro:</label>
                <input type="text" id="logradouro" name="logradouro" class="w-full border-gray-300 rounded-md p-2"
                       value="{{old('logradouro')}}">
            </div>

            <div class="mb-4">
                <label for="bairro" class="block font-medium text-gray-700">Bairro:</label>
                <input type="text" id="bairro" name="bairro" class="w-full border-gray-300 rounded-md p-2">
            </div>

            <div class="mb-4">
                <label for="numero" class="block font-medium text-gray-700">Numero:</label>
                <input type="number" id="numero" name="numero" class="w-full border-gray-300 rounded-md p-2">
            </div>

            <div class="mb-4">
                <label for="telefone" class="block font-medium text-gray-700">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" placeholder="(00) 0000-0000" class="w-full border-gray-300 rounded-md p-2">
            </div>


            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Enviar</button>
        </form>

    </div>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $("#cep").blur(function () {
        var cep = $(this).val().replace(/\D/g, '');
        if (cep != "") {
            var validacep = /^[0-9]{8}$/;
            if (validacep.test(cep)) {
                $("#logradouro").val("");
                $("#bairro").val(" ");
                $("#endereco").val(" ");
                $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {
                    if (!("erro" in dados)) {
                        $("#logradouro").val(dados.logradouro.toUpperCase());
                        $("#bairro").val(dados.bairro.toUpperCase());
                        $("#endereco").val(dados.localidade.toUpperCase());
                    } else {
                        alert("CEP não encontrado de forma automatizado digite manualmente ou tente novamente.");
                    }
                });
            }
        }
    });
</script>
</html>
