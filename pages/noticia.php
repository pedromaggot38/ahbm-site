<?php
$artigo = null;
$erro = null;

// 1. Pega o slug da URL de forma segura
if (isset($_GET['slug']) && !empty($_GET['slug'])) {
    $slug = $_GET['slug'];

    // 2. Monta a URL da API
    $apiUrl = "https://tcc-v2-seven.vercel.app/api/v1/public/articles/" . urlencode($slug);

    // 3. Faz a requisição para a API usando cURL (mais robusto)
    $ch = curl_init(); 

    curl_setopt($ch, CURLOPT_URL, $apiUrl); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_TIMEOUT, 10); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);

    $json = curl_exec($ch); 

    if (curl_errno($ch)) {
        $erro = "Não foi possível conectar à API. Erro: " . curl_error($ch);
    } else {
        $resposta = json_decode($json);

        if (isset($resposta->data->article)) {
            $artigo = $resposta->data->article;
        } else {
            $erro = "A notícia que você está procurando não foi encontrada na API.";
            header("HTTP/1.0 404 Not Found");
        }
    }
    
    curl_close($ch);

} else {
    $erro = "Nenhuma notícia especificada na URL.";
}

if ($artigo) {
    // Adicionando a tag <img> para permitir imagens no conteúdo do artigo
    $tagsPermitidas = '<p><h1><h2><h3><h4><h5><h6><strong><b><i><em><u><ul><ol><li><a><blockquote><span><br><img>';
    $conteudoSeguro = strip_tags($artigo->content, $tagsPermitidas);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php echo $artigo ? htmlspecialchars($artigo->title) : 'Notícia'; ?> - AHBM Hospital de Maracaí</title>
    
    <link rel="icon" type="image/x-icon" href="/public/logo.svg">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link href="/dist/style.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <style>
        html, body {
            width: 100%;
        }
        @media (max-width: 767px) {
            html, body {
                overflow-x: hidden;
            }
        }
        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        /* Estilos para as imagens dentro do conteúdo do artigo */
        .article-content img {
            max-width: 100%;
            width: auto; /* Permite que a largura se ajuste à altura máxima */
            height: auto; 
            max-height: 24rem; /* Define a altura máxima para 96 (equivalente a 24rem) */
            object-fit: contain; /* Ajusta a imagem sem cortá-la */
            border-radius: 0.5rem; /* rounded-lg */
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
            display: block; /* Garante que ela se comporte como um bloco para margin auto funcionar */
            margin-left: auto;
            margin-right: auto;
        }

        /* Ajustes adicionais para o plugin prose, se necessário */
        .prose img {
            /* O plugin prose já adiciona alguns estilos, mas podemos sobrescrever */
            max-height: 24rem; /* Sobrescreve para garantir */
            object-fit: contain;
            width: auto; /* Garante que a largura se ajuste */
        }
    </style>
</head>
<body class="font-sans bg-gray-50">
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center">
                <a href="/" class="flex items-center">
                    <i data-feather="heart" class="text-red-600 mr-2"></i>
                    <h1 class="text-xl font-bold text-gray-800">AHB Maracaí</h1>
                </a>
            </div>
            <nav class="hidden md:flex space-x-8">
                <a href="/" class="text-gray-600 hover:text-red-600">Início</a>
                <a href="/sobre" class="text-gray-600 hover:text-red-600">Sobre</a>
                <!-- <a href="/noticias" class="text-gray-600 hover:text-red-600">Notícias</a>
                <a href="/medicos" class="text-gray-600 hover:text-red-600">Médicos</a> -->
                <a href="/servicos" class="text-gray-600 hover:text-red-600">Serviços</a>
                <a href="/transparencia" class="text-gray-600 hover:text-red-600">Transparência</a>
                <a href="/contato" class="text-gray-600 hover:text-red-600">Contato</a>
            </nav>
            <button class="md:hidden" id="menu-toggle" aria-label="Toggle menu">
                <i data-feather="menu"></i>
            </button>
        </div>
        <div class="md:hidden hidden bg-white py-2 px-4 shadow-md" id="mobile-menu">
            <a href="/" class="block py-2 text-gray-600">Início</a>
            <a href="/sobre" class="block py-2 text-gray-600">Sobre</a>
            <!-- <a href="/noticias" class="block py-2 text-red-600">Notícias</a>
            <a href="/medicos" class="block py-2 text-gray-600">Médicos</a> -->
            <a href="/servicos" class="block py-2 text-gray-600">Serviços</a>
            <a href="/transparencia" class="block py-2 text-gray-600">Transparência</a>
            <a href="/contato" class="block py-2 text-gray-600">Contato</a>
        </div>
    </header>

    <main class="container mx-auto px-4 py-12">
        <div class="flex flex-col lg:flex-row gap-8">
            
            <div class="lg:w-2/3">
                <?php if ($artigo): ?>
                    <article class="bg-white p-6 md:p-8 rounded-lg shadow-md">
                        <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                            <?php echo htmlspecialchars($artigo->title); ?>
                        </h1>
                        <div class="text-gray-500 mb-6 border-b pb-4">
                            <p class="text-lg italic mb-2"><?php echo htmlspecialchars($artigo->subtitle); ?></p>
                            <span>Por: <?php echo htmlspecialchars($artigo->author); ?></span> | 
                            <span>Publicado em: <?php echo date('d/m/Y', strtotime($artigo->createdAt)); ?></span>
                        </div>

                        <?php if (!empty($artigo->imageUrl)): ?>
                            <img src="<?php echo htmlspecialchars($artigo->imageUrl); ?>" 
                                 alt="<?php echo htmlspecialchars($artigo->imageDescription); ?>" 
                                 class="w-full h-auto max-h-[30rem] object-contain block mx-auto rounded-lg shadow-lg mb-8">
                        <?php endif; ?>

                        <div class="article-content prose max-w-none">
                            <?php echo $conteudoSeguro; ?>
                        </div>
                    </article>
                <?php else: ?>
                    <div class="text-center bg-white p-8 rounded-lg shadow-md">
                        <h1 class="text-2xl font-bold text-red-600">Erro!</h1>
                        <p class="text-gray-600 mt-4"><?php echo $erro; ?></p>
                        <a href="index.html" class="mt-6 inline-block bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700">Voltar para a página inicial</a>
                    </div>
                <?php endif; ?>
            </div>

            <aside class="lg:w-1/3">
                <div class="bg-white p-6 rounded-lg shadow-md sticky top-24">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                        <i data-feather="bell" class="mr-2 text-red-600"></i> Notícias Recentes
                    </h2>
                    <div id="news-container" class="space-y-4">
                        <div class="text-center py-8">
                            <i data-feather="loader" class="animate-spin mx-auto text-gray-400" width="24" height="24"></i>
                        </div>
                    </div>
                </div>
            </aside>

        </div>
    </main>

    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">AHBM Hospital</h3>
                    <a 
                        href="https://www.google.com/maps?q=Av.+José+Bonifácio,+382+-+Centro,+Maracaí+-+SP,+19840-000" 
                        target="_blank" 
                        rel="noopener noreferrer" 
                        class="text-gray-300 hover:underline flex items-start"
                    >
                        <i data-feather="map-pin" class="mr-2 mt-1 h-4 w-4"></i>
                        <span>
                            Av. José Bonifácio, 382 - Centro<br>
                            Maracaí - SP<br>
                            CEP: 19840-000
                        </span>
                    </a>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Contato</h3>
                    <p class="text-gray-300 mb-2">
                        <a href="tel:+551833712797" class="flex items-center hover:underline">
                            <i data-feather="phone" class="mr-2 h-4 w-4"></i> (18) 3371-2797
                        </a>
                    </p>
                    <p class="text-gray-300 mb-2">
                        <a href="mailto:provedoria@ahbm.com.br" class="flex items-center hover:underline">
                            <i data-feather="mail" class="mr-2 h-4 w-4"></i> provedoria@ahbm.com.br
                        </a>
                    </p>
                    <p class="text-gray-300 flex items-center">
                        <i data-feather="clock" class="mr-2 h-4 w-4"></i> Emergência 24 horas
                    </p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Links Rápidos</h3>
                    <ul class="space-y-2">
                        <li><a href="/sobre" class="text-gray-300 hover:text-white">Sobre Nós</a></li>
                        <!-- <li><a href="/noticias" class="text-gray-300 hover:text-white">Notícias</a></li>
                        <li><a href="/medicos" class="text-gray-300 hover:text-white">Médicos</a></li> -->
                        <li><a href="/servicos" class="text-gray-300 hover:text-white">Serviços</a></li>
                        <li><a href="/transparencia" class="text-gray-300 hover:text-white">Portal da Transparência</a></li>
                        <li><a href="/contato" class="text-gray-300 hover:text-white">Contato</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Redes Sociais</h3>
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/ahbm.maracai" target='_blank' class="text-gray-300 hover:text-white"><i data-feather="facebook"></i></a>
                        <a href="https://www.instagram.com/ahbm.maracai/" target='_blank' class="text-gray-300 hover:text-white"><i data-feather="instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>© <?php echo date("Y"); ?> AHBM Hospital de Maracaí. Todos os direitos reservados.</p>
                <p class="text-sm mt-2">Desenvolvido por <a href="https://www.linkedin.com/in/pedrosanches38/" target="_blank" rel="noopener noreferrer" class="text-gray-200 hover:text-white hover:underline">Pedro Sanches</a></p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // Função para buscar notícias recentes (para a barra lateral)
        async function fetchRecentNews() {
            const newsContainer = document.getElementById('news-container');
            const apiUrl = 'https://tcc-v2-seven.vercel.app/api/v1/public/articles?limit=5';
            
            try {
                const response = await fetch(apiUrl);
                if (!response.ok) throw new Error('Falha na resposta da rede');
                
                const result = await response.json();
                const news = result.data.articles;
                
                newsContainer.innerHTML = '';
                
                if (news.length === 0) {
                    newsContainer.innerHTML = '<p class="text-gray-500">Nenhuma notícia encontrada.</p>';
                    return;
                }

                news.forEach(item => {
                    const newsCard = document.createElement('a'); 
                    newsCard.href = `/noticias/${item.slug}`;
                    newsCard.className = 'news-card flex items-center gap-4 p-2 rounded-lg transition hover:bg-gray-100';

                    let imageElement;
                    if (item.imageUrl) {
                        imageElement = `<img src="${item.imageUrl}" alt="${item.imageDescription || ''}" class="w-16 h-16 object-cover rounded-md flex-shrink-0">`;
                    } else {
                        imageElement = `
                            <div class="w-16 h-16 bg-gray-200 flex items-center justify-center rounded-md flex-shrink-0">
                                <i data-feather="image" class="text-gray-400"></i>
                            </div>
                        `;
                    }
                    
                    newsCard.innerHTML = `
                        ${imageElement}
                        <div>
                            <h3 class="font-semibold text-gray-800 line-clamp-2">${item.title}</h3>
                            <p class="text-xs text-gray-500">${new Date(item.createdAt).toLocaleDateString('pt-BR')}</p>
                        </div>
                    `;
                    newsContainer.appendChild(newsCard);
                });

                feather.replace(); 
                
            } catch (error) {
                console.error('Erro ao buscar notícias recentes:', error);
                newsContainer.innerHTML = `<p class="text-red-500">Erro ao carregar notícias.</p>`;
            }
        }
        
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({ duration: 800, easing: 'ease-in-out', once: true });
            feather.replace();
            fetchRecentNews(); 
        });
    </script>
</body>
</html>