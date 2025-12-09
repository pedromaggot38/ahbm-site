<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AHB Maracaí</title>
    <link rel="icon" href="/public/logo.svg" type="image/svg+xml">
    <link href="./dist/style.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        html, body {
            width: 100%;
        }
        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('./public/foto-hospital-maracai.webp');
            background-size: cover;
            background-position: center;
        }

        @media (max-width: 767px) {
        html, body {
            overflow-x: hidden;
        }
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
                <a href="/" class="text-red-600 font-medium">Início</a>
                <a href="/sobre" class="text-gray-600 hover:text-red-600">Sobre</a>
                <a href="/servicos" class="text-gray-600 hover:text-red-600">Serviços</a>
                <a href="/transparencia" class="text-gray-600 hover:text-red-600">Transparência</a>
                <a href="/contato" class="text-gray-600 hover:text-red-600">Contato</a>
            </nav>
            <button class="md:hidden" id="menu-toggle" aria-label="Toggle menu">
                <i data-feather="menu"></i>
            </button>
        </div>
        <div class="md:hidden hidden bg-white py-2 px-4 shadow-md" id="mobile-menu">
            <a href="/" class="block py-2 text-red-600">Início</a>
            <a href="/sobre" class="block py-2 text-gray-600">Sobre</a>
            <a href="/servicos" class="block py-2 text-gray-600">Serviços</a>
            <a href="/transparencia" class="block py-2 text-gray-600">Transparência</a>
            <a href="/contato" class="block py-2 text-gray-600">Contato</a>
        </div>
    </header>

    <section class="hero-section text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-up">Cuidando da saúde de Maracaí e região desde 1977</h1>
            <p class="text-xl mb-8 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">Oferecemos atendimento humanizado e tecnologia de ponta para toda a comunidade.</p>
        </div>
    </section>

    <main class="container mx-auto px-4 py-12">
        <div class="flex flex-col lg:flex-row gap-8">
            <div class="lg:w-2/3" data-aos="fade-right">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Bem-vindo ao AHBM Hospital de Maracaí</h2>
                <p class="text-gray-600 mb-4">Desde 1977, o AHBM Hospital de Maracaí é referência no cuidado à saúde dos munícipes de Maracaí/SP e região. Nossa trajetória é marcada pelo compromisso com a qualidade e a humanização no atendimento.</p>
                <p class="text-gray-600 mb-6">Contamos com uma infraestrutura moderna e acolhedora, projetada para garantir o conforto e a segurança de nossos pacientes. Ao longo de décadas, temos nos dedicado a salvar vidas e a promover o bem-estar da comunidade.</p>
                
                <h3 class="text-2xl font-bold text-gray-800 mb-6 mt-10">Nossos Diferenciais</h3>
                <div class="grid md:grid-cols-2 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <i data-feather="activity" class="text-red-600 mb-4" width="32" height="32"></i>
                        <h3 class="text-xl font-semibold mb-2">Emergência 24h</h3>
                        <p class="text-gray-600">Atendimento emergencial completo, com equipe preparada para qualquer situação.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <i data-feather="heart" class="text-red-600 mb-4" width="32" height="32"></i>
                        <h3 class="text-xl font-semibold mb-2">Cardiologia</h3>
                        <p class="text-gray-600">Serviços de telemedicina que avaliam eletrocardiogramas e fornecem laudos em tempo hábil.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <i data-feather="scissors" class="text-red-600 mb-4" width="32" height="32"></i>
                        <h3 class="text-xl font-semibold mb-2">Centro Cirúrgico</h3>
                        <p class="text-gray-600">Estrutura completa para cirurgias de pequena, média e alta complexidade.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <i data-feather="clipboard" class="text-red-600 mb-4" width="32" height="32"></i>
                        <h3 class="text-xl font-semibold mb-2">Exames Laboratoriais</h3>
                        <p class="text-gray-600">Serviços terceirizados com equipamentos modernos para resultados rápidos e precisos.</p>
                    </div>
                </div>
            </div>
            
            <div class="lg:w-1/3" data-aos="fade-left">
                <div class="bg-white p-6 rounded-lg shadow-md mt-6" data-aos="fade-left" data-aos-delay="100">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Horário de Funcionamento</h3>
                    <ul class="space-y-2">
                        
                        <li class="flex justify-between border-b pb-2">
                            <span class="text-gray-600">Pronto-Socorro</span>
                            <span class="font-medium">24 horas</span>
                        </li>
                        <li class="flex justify-between">
                            <span class="text-gray-600">Internação</span>
                            <span class="font-medium">24 horas</span>
                        </li>
                    </ul>
                    <div class="mt-6 bg-red-50 p-4 rounded-md">
                        <div class="flex items-start">
                            <i data-feather="alert-circle" class="text-red-600 mr-3 mt-1"></i>
                            <p class="text-sm text-gray-700">Em caso de emergência, dirija-se imediatamente ao nosso pronto-socorro ou ligue para <strong class="text-red-600"><a href="tel:+551833712797">(18) 3371-2797</a></strong></p>
                        </div>
                    </div>
                    <a href="/sobre#horarios" class="mt-6 inline-flex items-center text-red-600 font-medium">
                        Ver todos os horários de funcionamento <i data-feather="arrow-right" class="ml-2"></i>
                    </a>
                    <a ></a>
                </div>
            </div>
        </div>

        <section class="py-16 mt-6" data-aos="fade-up">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800">Outros Serviços</h2>
                    <p class="text-gray-600 mt-2 max-w-2xl mx-auto">Conheça algumas das especialidades e atendimentos que oferecemos à comunidade.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center text-center">
                        <div class="flex-shrink-0 bg-red-100 p-4 rounded-full mb-4">
                            <i data-feather="plus-square" class="text-red-600" width="32" height="32"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Consulta com Ortopedista</h3>
                        <p class="text-gray-600">Atendimento especializado para avaliação e tratamento exclusivo de traumas e fraturas.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center text-center">
                        <div class="flex-shrink-0 bg-red-100 p-4 rounded-full mb-4">
                            <i data-feather="monitor" class="text-red-600" width="32" height="32"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Exames Anatomopatológicos</h3>
                        <p class="text-gray-600">Serviços terceirizados com patologistas para análise detalhada de amostras.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center text-center transition-transform hover:-translate-y-1 duration-300 md:col-span-2 md:w-1/2 md:mx-auto lg:col-span-1 lg:w-full">
                        <div class="flex-shrink-0 bg-red-100 p-4 rounded-full mb-4">
                            <i data-feather="activity" class="text-red-600" width="32" height="32"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Tococardiografia</h3>
                        <p class="text-gray-600">Monitoramento da saúde fetal durante a gravidez.</p>
                    </div>
                </div>
                <div class="mt-12 text-center" data-aos="fade-up">
                    <a href="/servicos" class="inline-block bg-red-600 hover:bg-red-700 text-white font-medium py-3 px-8 rounded-full transition-colors duration-300">
                        Saiba mais sobre serviços
                    </a>
                </div>
            </div>
        </section>
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
                            CEP: 19840-037
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

    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true
            });

            feather.replace();

            document.getElementById('menu-toggle').addEventListener('click', function() {
                const menu = document.getElementById('mobile-menu');
                menu.classList.toggle('hidden');
            });
            
            /*
            async function fetchNews() {
                const newsContainer = document.getElementById('news-container');
                try {
                    const response = await fetch('/api/v1/public/articles?limit=5');
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    const result = await response.json();
                    
                    const news = result.data.articles;
                    newsContainer.innerHTML = '';
                    
                    if (news.length === 0) {
                        newsContainer.innerHTML = '<p class="text-gray-500">Nenhuma notícia encontrada.</p>';
                        return;
                    }

                    news.forEach(item => {
                        let imageElement;
                        if (item.imageUrl) {
                            imageElement = `<img src="${item.imageUrl}" alt="${item.imageDescription || 'Imagem da notícia'}" class="w-full h-32 object-cover">`;
                        } else {
                            imageElement = `
                                <div class="w-full h-32 bg-gray-200 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image text-gray-400">
                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                        <polyline points="21 15 16 10 5 21"></polyline>
                                    </svg>
                                </div>
                            `;
                        }

                        const newsCard = document.createElement('div');
                        newsCard.className = 'news-card bg-white rounded-lg transition cursor-pointer hover:bg-gray-100 shadow-md overflow-hidden';
                        newsCard.innerHTML = `
                            ${imageElement}
                            <div class="p-4">
                                <h3 class="font-semibold text-gray-800 mb-2 line-clamp-2">${item.title}</h3>
                                <p class="text-sm text-gray-600 mb-3 line-clamp-3">${item.subtitle || ''}</p>
                                <p class="text-xs text-gray-500">${new Date(item.createdAt).toLocaleDateString('pt-BR')}</p>
                            </div>
                        `;
                        
                        newsCard.addEventListener('click', () => {
                            if (item.slug) {
                                window.location.href = `/noticias/${item.slug}`;
                            }
                        });
                        newsContainer.appendChild(newsCard);
                    });

                } catch (error) {
                    console.error('Error fetching news:', error);
                    newsContainer.innerHTML = `<p class="text-red-500">Não foi possível carregar as notícias.</p>`;
                }
            }
            
            fetchNews();
            */
        });
    </script>
</body>
</html>