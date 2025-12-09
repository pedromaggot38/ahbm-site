<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - AHB Maracaí</title>
    <link rel="icon" href="/public/logo.svg" type="image/svg+xml">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link href="./dist/style.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        html, body {
            width: 100%;
        }
        @media (max-width: 767px) {
            html, body {
                overflow-x: hidden;
            }
        }

        input:focus, textarea:focus {
            outline: none;
            box-shadow: 0 0 0 2px rgba(220, 38, 38, 0.5);
            border-color: #DC2626;
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
                <a href="/contato" class="text-red-600 font-medium">Contato</a>
            </nav>
            <button class="md:hidden" id="menu-toggle" aria-label="Toggle menu">
                <i data-feather="menu"></i>
            </button>
        </div>
        <div class="md:hidden hidden bg-white py-2 px-4 shadow-md" id="mobile-menu">
            <a href="/" class="block py-2 text-gray-600">Início</a>
            <a href="/sobre" class="block py-2 text-gray-600">Sobre</a>
            <!-- <a href="/noticias" class="block py-2 text-gray-600">Notícias</a>
            <a href="/medicos" class="block py-2 text-gray-600">Médicos</a> -->
            <a href="/servicos" class="block py-2 text-gray-600">Serviços</a>
            <a href="/transparencia" class="block py-2 text-gray-600">Transparência</a>
            <a href="/contato" class="block py-2 text-red-600">Contato</a>
        </div>
    </header>

    <section class="bg-red-600 text-white py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-bold mb-2">Contato</h1>
            <p class="text-lg">Estamos prontos para ajudar. Fale conosco!</p>
        </div>
    </section>

    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12 items-start">
                <div data-aos="fade-right">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                        <i data-feather="mail" class="mr-3 text-red-600"></i> Envie uma mensagem
                    </h2>
                    <form action="https://formsubmit.co/provedor@ahbm.com.br" method="POST" class="space-y-6 bg-white p-8 rounded-lg shadow-md">
                        <div>
                            <label for="name" class="block text-gray-700 font-semibold mb-2">Nome Completo</label>
                            <input type="text" id="name" name="name" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 transition-colors duration-200">
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 transition-colors duration-200">
                        </div>
                        <div>
                            <label for="subject" class="block text-gray-700 font-semibold mb-2">Assunto</label>
                            <input type="text" id="subject" name="subject" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 transition-colors duration-200">
                        </div>
                        <div>
                            <label for="message" class="block text-gray-700 font-semibold mb-2">Mensagem</label>
                            <textarea id="message" name="message" rows="5" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 transition-colors duration-200"></textarea>
                        </div>
                        
                        <input type="hidden" name="_next" value="https://ahbm.com.br/contato">
                        <input type="hidden" name="_subject" value="Nova Mensagem do Site do Hospital">
                        <input type="hidden" name="_captcha" value="true">

                        <div class="flex justify-end">
                            <button type="submit"
                                class="bg-red-600 text-white font-bold py-3 px-8 rounded-lg hover:bg-red-700 transition-colors duration-200">
                                Enviar Mensagem
                            </button>
                        </div>
                    </form>
                </div>

                <div data-aos="fade-left">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                        <i data-feather="map-pin" class="mr-3 text-red-600"></i> Onde nos encontrar
                    </h2>
                    <div class="bg-white p-8 rounded-lg shadow-md mb-8">
                        <p class="text-gray-600 mb-4">
                            Av. José Bonifácio, 382 - Centro<br>
                            Maracaí - SP<br>
                            CEP: 19840-037
                        </p>
                        <ul class="space-y-4 text-gray-600">
                            <li class="flex items-center">
                                <i data-feather="phone" class="mr-2 text-red-600 w-5 h-5"></i>
                                <a href="tel:+551833712797" class="hover:underline">(18) 3371-2797</a>
                            </li>
                            <li class="flex items-center">
                                <i data-feather="mail" class="mr-2 text-red-600 w-5 h-5"></i>
                                <a href="mailto:provedoria@ahbm.com.br" class="hover:underline">provedoria@ahbm.com.br</a>
                            </li>
                            <li class="flex items-center">
                                <i data-feather="clock" class="mr-2 text-red-600 w-5 h-5"></i>
                                Emergência 24 horas
                            </li>
                        </ul>
                    </div>
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.6806951911894!2d-50.0768407850444!3d-22.253011485353594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9496e38634a1a09d%3A0xc3f1a2a4f4d2f1d!2sAv.%20Jos%C3%A9%20Bonif%C3%A1cio%2C%20382%20-%20Centro%2C%20Maraca%C3%AD%20-%20SP%2C%2019840-000!5e0!3m2!1spt-BR!2sbr!4v1678822558661!5m2!1spt-BR!2sbr"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Mobile menu toggle
        document.getElementById('menu-toggle').addEventListener('click', function () {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Initialize AOS and Feather Icons
        document.addEventListener('DOMContentLoaded', function () {
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