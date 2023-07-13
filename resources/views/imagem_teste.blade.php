<!DOCTYPE html>
<html>
<head>
    <title>Upload de Arquivo</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="container mx-auto p-4">
    <h2 class="text-2xl font-bold mb-4">Upload de Arquivo</h2>

    @if (session('success'))
        <div class="bg-green-200 text-green-700 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('product.create') }}" method="POST" enctype="multipart/form-data"
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
            <label for="nome" class="block font-medium text-gray-700">Nome do Produto:</label>
            <input type="text" id="nome" name="nome" required class="w-full border-gray-300 rounded-md p-2">
        </div>

        <div class="mb-4">
            <label for="imagem" class="block font-medium text-gray-700">Imagem:</label>
            <input type="file" id="imagem" name="imagem" required class="border-gray-300 p-2">
        </div>

        <div class="mb-4">
            <label for="descricao" class="block font-medium text-gray-700">Descrição:</label>
            <textarea id="descricao" name="descricao" required class="w-full border-gray-300 rounded-md p-2"></textarea>
        </div>

        <div class="mb-4">
            <label for="link" class="block font-medium text-gray-700">Link:</label>
            <input type="text" id="link" name="link" required class="w-full border-gray-300 rounded-md p-2">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Enviar</button>
    </form>
</div>
</body>
</html>
