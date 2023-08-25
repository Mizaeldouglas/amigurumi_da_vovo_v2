<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Adicionar amigurumi</title>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
<div class="container mx-auto p-4 bg-white shadow-md rounded-lg w-full max-w-md">
    <h2 class="text-2xl font-bold mb-4">Adicionar amigurumis</h2>

    @if (session('success'))
        <div class="bg-green-200 text-green-700 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('product.create') }}" method="POST" enctype="multipart/form-data" class="space-y-4">

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

        <!-- Resto do seu formulário -->
        <div class="mb-6">
            <label for="nome"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Nome do Amigurumi:
            </label>
            <input type="text" id="nome" name="nome"
                   class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                   placeholder="Nome" >
        </div>

        <div class="mb-6">
            <label for="imagem" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Imagem do Amigurumi:
            </label>
            <input type="file" id="imagem" name="imagem"
                   class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                   placeholder="Imagem" >
        </div>

        <div class="mb-6">
            <label for="descricao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Descrição do Amigurumi:
            </label>
            <input type="text" id="descricao" name="descricao"
                   class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                   placeholder="descricao" >
        </div>

        <div class="mb-6">
            <label for="link" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Link
            </label>
            <input type="text" id="link" name="link"
                   class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                   placeholder="Link" >
        </div>

        <div class="mb-6">
            <label for="altura" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Altura do Amigurumi:
            </label>
            <input type="text" id="altura" name="altura"
                   class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                   placeholder="Altura" >
        </div>

        <div class="mb-6">
            <label for="largura" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Largura do Amigurumi:
            </label>
            <input type="text" id="largura" name="largura"
                   class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                   placeholder="Largura" >
        </div>

        <div class="mb-6">
            <label for="peso" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                peso do Amigurumi:
            </label>
            <input type="text" id="peso" name="peso"
                   class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                   placeholder="Peso" >
        </div>
        <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Cadastrar
        </button>
    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
</body>
</html>


