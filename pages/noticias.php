<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícias - AHB Maracaí</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
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
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .news-banner {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('http://static.photos/medical/1200x630/6');
            background-size: cover;
            background-position: center;
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
                <a href="/noticias" class="text-red-600 font-medium">Notícias</a>
                <a href="/medicos" class="text-gray-600 hover:text-red-600">Médicos</a>
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
            <a href="/noticias" class="block py-2 text-gray-600">Notícias</a>
            <a href="/medicos" class="block py-2 text-gray-600">Médicos</a>
            <a href="/servicos" class="block py-2 text-gray-600">Serviços</a>
            <a href="/transparencia" class="block py-2 text-gray-600">Transparência</a>
            <a href="/contato" class="block py-2 text-gray-600">Contato</a>
        </div>
    </header>

    <section class="news-banner text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-3xl md:text-4xl font-bold mb-4">Notícias e Atualizações</h1>
            <p class="text-xl max-w-2xl mx-auto">Fique por dentro das novidades e eventos do Hospital Beneficente de Maracaí</p>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12 flex flex-col lg:flex-row">
        <!-- News Content -->
        <main class="lg:w-2/3 lg:pr-8">
            <div class="mb-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Últimas Notícias</h2>
                
                <!-- Featured News -->
                <div class="mb-12" data-aos="fade-up">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="http://static.photos/medical/1024x576/7" alt="Destaque" class="w-full h-64 object-cover">
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-3">
                                <span>20/10/2023</span>
                                <span class="mx-2">•</span>
                                <span class="bg-red-100 text-red-600 px-2 py-1 rounded-full text-xs">Destaque</span>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-3">Hospital recebe prêmio de excelência em atendimento</h3>
                            <p class="text-gray-600 mb-4">
                                Pelo terceiro ano consecutivo, nosso hospital foi reconhecido com o Prêmio Nacional de Excelência em Atendimento Hospitalar. A cerimônia aconteceu em São Paulo e contou com a presença de autoridades da saúde.
                            </p>
                            <a href="#" class="text-red-600 font-medium hover:underline">Ler mais</a>
                        </div>
                    </div>
                </div>

                <!-- News Grid -->
                <div class="grid md:grid-cols-2 gap-6" id="news-grid">
                    <!-- News cards will be loaded here from API -->
                </div>

                <!-- Pagination -->
                <div class="mt-12 flex justify-center">
                    <nav class="flex items-center space-x-2">
                        <button class="px-3 py-1 rounded-md border border-gray-300 text-gray-600 hover:bg-gray-100">
                            <i data-feather="chevron-left" class="w-4 h-4"></i>
                        </button>
                        <button class="px-3 py-1 rounded-md bg-red-600 text-white">1</button>
                        <button class="px-3 py-1 rounded-md border border-gray-300 text-gray-600 hover:bg-gray-100">2</button>
                        <button class="px-3 py-1 rounded-md border border-gray-300 text-gray-600 hover:bg-gray-100">3</button>
                        <button class="px-3 py-1 rounded-md border border-gray-300 text-gray-600 hover:bg-gray-100">
                            <i data-feather="chevron-right" class="w-4 h-4"></i>
                        </button>
                    </nav>
                </div>
            </div>
        </main>

        <!-- Sidebar -->
        <aside class="lg:w-1/3 mt-8 lg:mt-0">
            <div class="bg-white p-6 rounded-lg shadow-md mb-6" data-aos="fade-left">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Categorias</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="flex justify-between text-gray-600 hover:text-red-600">
                        <span>Eventos</span>
                        <span class="bg-gray-100 px-2 rounded-full text-sm">12</span>
                    </a></li>
                    <li><a href="#" class="flex justify-between text-gray-600 hover:text-red-600">
                        <span>Atualizações</span>
                        <span class="bg-gray-100 px-2 rounded-full text-sm">8</span>
                    </a></li>
                    <li><a href="#" class="flex justify-between text-gray-600 hover:text-red-600">
                        <span>Campanhas</span>
                        <span class="bg-gray-100 px-2 rounded-full text-sm">5</span>
                    </a></li>
                    <li><a href="#" class="flex justify-between text-gray-600 hover:text-red-600">
                        <span>Novidades</span>
                        <span class="bg-gray-100 px-2 rounded-full text-sm">15</span>
                    </a></li>
                    <li><a href="#" class="flex justify-between text-gray-600 hover:text-red-600">
                        <span>Serviços</span>
                        <span class="bg-gray-100 px-2 rounded-full text-sm">7</span>
                    </a></li>
                </ul>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-left" data-aos-delay="100">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Newsletter</h3>
                <p class="text-gray-600 mb-4">Receba nossas notícias diretamente no seu e-mail</p>
                <form class="space-y-3">
                    <input type="text" placeholder="Seu nome" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-600">
                    <input type="email" placeholder="Seu e-mail" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-600">
                    <button type="submit" class="w-full bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700">Assinar</button>
                </form>
            </div>
        </aside>
    </div>

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
                        <li><a href="/noticias" class="text-gray-300 hover:text-white">Notícias</a></li>
                        <li><a href="/medicos" class="text-gray-300 hover:text-white">Médicos</a></li>
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
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        document.addEventListener('DOMContentLoaded', function() {
            const news = [
                {
                    title: "Novo equipamento de ressonância magnética",
                    date: "18/10/2023",
                    excerpt: "Hospital adquire equipamento de última geração que reduz tempo de espera por exames.",
                    image: "http://static.photos/medical/400x300/8",
                    category: "Novidades"
                },
                {
                    title: "Campanha Outubro Rosa",
                    date: "15/10/2023",
                    excerpt: "Participe da nossa programação especial de prevenção ao câncer de mama.",
                    image: "http://static.photos/medical/400x300/9",
                    category: "Campanhas"
                },
                {
                    title: "Curso de primeiros socorros para comunidade",
                    date: "12/10/2023",
                    excerpt: "Inscrições abertas para o curso gratuito que acontecerá no próximo sábado.",
                    image: "http://static.photos/medical/400x300/10",
                    category: "Eventos"
                },
                {
                    title: "Ampliação da UTI neonatal",
                    date: "08/10/2023",
                    excerpt: "Novos leitos e equipamentos para melhor atender recém-nascidos.",
                    image: "http://static.photos/medical/400x300/11",
                    category: "Atualizações"
                },
                {
                    title: "Novos horários de consultas",
                    date: "05/10/2023",
                    excerpt: "Confira as mudanças no agendamento de consultas em diversas especialidades.",
                    image: "http://static.photos/medical/400x300/12",
                    category: "Serviços"
                },
                {
                    title: "Resultados da auditoria interna",
                    date: "01/10/2023",
                    excerpt: "Hospital obtém excelentes resultados na auditoria de qualidade realizada em setembro.",
                    image: "http://static.photos/medical/400x300/13",
                    category: "Atualizações"
                }
            ];

            const newsGrid = document.getElementById('news-grid');
            
            news.forEach(item => {
                const newsCard = document.createElement('div');
                newsCard.className = 'news-card bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300';
                newsCard.innerHTML = `
                    <img src="${item.image}" alt="${item.title}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span>${item.date}</span>
                            <span class="mx-2">•</span>
                            <span class="text-red-600">${item.category}</span>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">${item.title}</h3>
                        <p class="text-gray-600 text-sm mb-3">${item.excerpt}</p>
                        <a href="#" class="text-red-600 text-sm font-medium hover:underline">Ler mais</a>
                    </div>
                `;
                newsGrid.appendChild(newsCard);
            });

            // Initialize AOS and Feather Icons
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true
            });
            feather.replace();
        });
    </script>
</body>
</html>
