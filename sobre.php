<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre - AHB Maracaí</title>
    <link rel="icon" href="/public/logo.svg" type="image/svg+xml">
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
                <a href="/sobre" class="text-red-600 font-medium">Sobre</a>
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
            <a href="/sobre" class="block py-2 text-red-600">Sobre</a>
            <a href="/servicos" class="block py-2 text-gray-600">Serviços</a>
            <a href="/transparencia" class="block py-2 text-gray-600">Transparência</a>
            <a href="/contato" class="block py-2 text-gray-600">Contato</a>
        </div>
    </header>

    <section class="bg-red-600 text-white py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-bold mb-2">Sobre Nós</h1>
        </div>
    </section>

    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="lg:w-2/3 mx-auto">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center" data-aos="fade-up">Nossa História</h2>
                <div data-aos="fade-up" class="text-gray-600 leading-relaxed space-y-4">
                    <p>
                        A Associação Hospital Beneficente de Maracaí foi fundada em 28 de novembro de 1977, com o
                        objetivo de oferecer cuidados médicos à população de Maracaí, cidade localizada no interior de
                        São Paulo. Inicialmente, a instituição surgiu para suprir a demanda local por serviços de saúde,
                        e ao longo dos anos tem se dedicado a fornecer atendimento hospitalar, incluindo internações e
                        cirurgias, para a comunidade.
                    </p>
                    <p>
                        Em 2009, a Associação recebeu uma emenda parlamentar do deputado Ed Thomas, que destinou R$ 50
                        mil para a aquisição de equipamentos essenciais para o hospital, como monitores multiparâmetros
                        e aparelhos de ar-condicionado, além de recursos para melhorar o atendimento à população. A
                        infraestrutura do hospital continuou a se expandir, e em 2011, foi inaugurado um novo Centro
                        Cirúrgico, o <span class="font-bold">Matilde Alves da Silva</span>, que recebeu esse nome em
                        homenagem a uma parteira que teve um papel fundamental na história da entidade. O novo centro
                        tem capacidade para realizar até duas cirurgias simultâneas, atendendo a uma grande parte da
                        população de Maracaí.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Nossa Missão, Visão e Valores</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Guiamos nosso trabalho por princípios que colocam o paciente
                    no centro de tudo o que fazemos</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md text-center" data-aos="fade-up">
                    <div class="bg-red-100 p-4 rounded-full inline-block mb-4">
                        <i data-feather="target" class="text-red-600 w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Missão</h3>
                    <p class="text-gray-600">
                        Nossa missão é fundamentada em quatro pilares essenciais: acolher cada paciente com empatia, respeitar sua individualidade e dignidade, cuidar com excelência e dedicação, e lutar incansavelmente pela vida e pelo seu bem-estar.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-blue-100 p-4 rounded-full inline-block mb-4">
                        <i data-feather="eye" class="text-blue-600 w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Visão</h3>
                    <p class="text-gray-600">
                        Almejamos ser a principal referência em saúde na região, reconhecidos pela excelência de nosso corpo clínico, pela inovação constante em nossos processos e por um crescimento sustentável que nos permita cuidar de cada vez mais vidas.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-md text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-green-100 p-4 rounded-full inline-block mb-4">
                        <i data-feather="award" class="text-green-600 w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Valores</h3>
                    <p class="text-gray-600">
                        Nossas ações são guiadas pela ética e transparência inegociáveis. Praticamos a humanização em cada contato, buscamos a excelência técnica em cada procedimento e honramos nossa responsabilidade social, reafirmando diariamente nosso compromisso com a vida.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="horarios" class="py-16">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12">
                <div data-aos="fade-right">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                        <i data-feather="clock" class="mr-3 text-red-600"></i> Horários de Funcionamento
                    </h2>
                    <div class="space-y-6">
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h3 class="font-semibold text-lg mb-2">Pronto-Socorro</h3>
                            <p class="text-gray-600">Atendimento 24h por dia, 7 dias por semana.</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h3 class="font-semibold text-lg mb-2">Internação</h3>
                            <p class="text-gray-600">Atendimento 24h por dia, 7 dias por semana.</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h3 class="font-semibold text-lg mb-2">Exames Radiológicos</h3>
                            <ul class="list-disc list-inside text-gray-600 space-y-1">
                                <li><strong>Segunda a Sexta:</strong> 7h às 12h e 16h às 21h</li>
                                <li><strong>Sábado:</strong> 7h às 12h</li>
                                <li><strong>Domingo:</strong> 7h às 11h</li>
                            </ul>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h3 class="font-semibold text-lg mb-2">Consulta com Ortopedista</h3>
                            <p class="text-gray-600">Atendimento para traumas e fraturas.</p>
                            <ul class="list-disc list-inside text-gray-600 space-y-1 mt-1">
                                <li><strong>Terças-feiras:</strong> às 10h</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-left">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                        <i data-feather="users" class="mr-3 text-red-600"></i> Horários de Visitas
                    </h2>
                    <div class="space-y-6">
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h3 class="font-semibold text-lg mb-2">Horário de Visitas</h3>
                            <ul class="list-disc list-inside text-gray-600 space-y-1">
                                <li><strong>Tarde:</strong> 14h às 15h</li>
                                <li><strong>Noite:</strong> 19h às 20h</li>
                            </ul>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h3 class="font-semibold text-lg mb-2">Troca de Acompanhante</h3>
                            <ul class="list-disc list-inside text-gray-600 space-y-1">
                                <li><strong>Manhã:</strong> 07h30 às 08h30</li>
                                <li><strong>Tarde:</strong> 13h às 14h</li>
                                <li><strong>Noite:</strong> 19h30 às 20h30</li>
                            </ul>
                        </div>
                        <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 mb-6" role="alert">
                            <p class="font-bold text-xl mb-3">Orientações de Visitação</p>
                            
                            <div class="mb-5">
                                <h3 class="font-bold text-lg text-red-800 mb-2">1. Saúde e Segurança</h3>
                                <ul class="list-disc list-inside text-sm space-y-2">
                                    <li>Visitas suspensas para pacientes suspeitos ou confirmados com Covid-19.</li>
                                    <li>Entrada permitida apenas para pessoas sem sintomas gripais (tosse, coriza, febre).</li>
                                    <li>Higienizar as mãos com água e sabão antes e depois do contato com o paciente.</li>
                                    <li>Evitar contatos físicos e a circulação por áreas comuns.</li>
                                </ul>
                            </div>

                            <div class="mb-5">
                                <h3 class="font-bold text-lg text-red-800 mb-2">2. Acesso e Conduta</h3>
                                <ul class="list-disc list-inside text-sm space-y-2">
                                    <li>É obrigatório o uso de crachá de identificação visível, que será entregue pelo vigia na recepção e deve ser devolvido após a visita.</li>
                                    <li>É permitido o revezamento de visitas, com a entrada de uma pessoa por vez.</li>
                                    <li>Não é permitido o ingresso de visitantes ou acompanhantes com trajes inadequados.</li>
                                    <li>Não é permitido trazer alimentos e bebidas sem autorização prévia da nutricionista.</li>
                                </ul>
                            </div>

                            <div>
                                <h3 class="font-bold text-lg text-red-800 mb-2">3. Casos Específicos</h3>
                                <ul class="list-disc list-inside text-sm space-y-2">
                                    <li>A equipe de enfermagem e o serviço social avaliarão a necessidade de acompanhamento nos demais casos.</li>
                                </ul>
                            </div>
                        </div>
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

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
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