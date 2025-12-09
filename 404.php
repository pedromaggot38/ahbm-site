<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Não Encontrada - AHB Maracaí</title>
    <link rel="icon" href="/public/logo.svg" type="image/svg+xml">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link href="./dist/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
</head>
<body class="font-sans bg-gray-50 flex flex-col min-h-screen">

    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center">
                <a href="/" class="flex items-center">
                    <i data-feather="heart" class="text-red-600 mr-2"></i>
                    <h1 class="text-xl font-bold text-gray-800">AHB Maracaí</h1>
                </a>
            </div>
            <div>
                 <a href="/" class="text-gray-600 hover:text-red-600">Voltar ao Início</a>
            </div>
        </div>
    </header>

    <main class="flex-grow flex items-center justify-center">
        <div class="text-center p-8">
            <h1 class="text-8xl font-bold text-red-600">404</h1>
            <h2 class="text-3xl font-semibold text-gray-800 mt-4">Oops! Página Não Encontrada.</h2>
            <p class="text-gray-600 mt-2">A página que você está tentando acessar não existe, foi movida ou o endereço foi digitado incorretamente.</p>
            <div class="mt-8">
                <a href="/" class="bg-red-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-red-700 transition-colors">
                    Voltar para a Página Inicial
                </a>
            </div>
        </div>
    </main>

    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4 text-center">
            <p>© <?php echo date("Y"); ?> Associação Hospital Beneficente de Maracaí. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script>
        feather.replace();
    </script>
</body>
</html>