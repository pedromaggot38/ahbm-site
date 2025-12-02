<?php

$medicalConsultations = [
    [
        "title" => "Consulta com Ortopedista",
        "description" => "Temos especialista para avaliar e tratar apenas casos de traumas e fraturas.",
        "image" => "/servicos/ortopedista.webp",
        "reverse" => true,
    ],
    [
        "title" => "Consulta com Cirurgião Geral",
        "description" => "Nossos cirurgiões gerais estão à disposição para consultas e procedimentos cirúrgicos diversos. Desde pequenas intervenções até cirurgias mais complexas, oferecemos um atendimento abrangente e humanizado.",
        "image" => "/servicos/cirurgiao_geral.webp",
        "reverse" => false,
    ],
    [
        "title" => "Urgência e Emergência",
        "description" => "Nosso setor de Urgência e Emergência está preparado para atender prontamente a todas as situações críticas. Contamos com uma equipe de profissionais altamente qualificados e equipamentos modernos para garantir um atendimento rápido e eficaz.",
        "image" => "/servicos/emergencia.webp",
        "reverse" => true,
    ],
    [
        "title" => "Consulta com Anestesista",
        "description" => "Antes de qualquer procedimento cirúrgico, nossos anestesistas realizam consultas detalhadas para garantir sua segurança e conforto. Avaliamos seu histórico médico e esclarecemos todas as suas dúvidas.",
        "image" => "/servicos/anestesia.webp",
        "reverse" => false,
    ],
];

$medicalExams = [
    [
        "title" => "Exames Radiográficos (Diagnóstico por Imagem)",
        "description" => "Realizamos radiografias que garantem diagnósticos precisos e rápidos. Atualmente não oferecemos serviços de Ultrassom (USG) e Tomografia.",
        "image" => "/servicos/radiografia.webp",
        "reverse" => false,
    ],
    [
        "title" => "Eletrocardiograma (ECG)",
        "description" => "Contamos com serviços de telemedicina que avaliam os eletrocardiogramas e fornecem laudos em tempo hábil para um diagnóstico ágil e eficiente.",
        "image" => "/servicos/eletrocardiograma-ecg.webp",
        "reverse" => true,
    ],
    [
        "title" => "Exames Laboratoriais",
        "description" => "Temos serviços terceirizados com equipamentos de ponta, que oferecem resultados rápidos e confiáveis para diversas análises clínicas.",
        "image" => "/servicos/laboratoriais.webp",
        "reverse" => false,
    ],
    [
        "title" => "Exames Anatomopatológicos",
        "description" => "Disponibilizamos serviços terceirizados com patologistas qualificados para a análise de amostras e tecidos, auxiliando em diagnósticos complexos.",
        "image" => "/servicos/anatomopatologico.webp", 
        "reverse" => true,
    ],
    [
        "title" => "Tococardiografia",
        "description" => "A tococardiografia é um exame importante para monitorar a saúde fetal durante a gravidez. Utilizamos equipamentos modernos para acompanhar a frequência cardíaca do bebê.",
        "image" => "/servicos/tococardiografia.webp",
        "reverse" => false,
    ],
];

function renderServiceCard($section, $index, $isFirstList) {
    $imagePath = "/public" . $section['image']; 
    
    $reverseClass = $section['reverse'] ? 'reverse' : '';
    
    $loadingAttr = 'eager';
    $priorityAttr = ($isFirstList && $index === 0) ? 'fetchpriority="high"' : '';

    return "
    <div class=\"service-card {$reverseClass}\" data-aos=\"fade-up\">
        <div class=\"service-content-wrapper\">
            <div class=\"max-w-md text-center sm:text-left\">
                <h3 class=\"text-xl font-bold text-gray-900 md:text-2xl mb-2\">{$section['title']}</h3>
                <p class=\"text-sm text-gray-500\">{$section['description']}</p>
            </div>
        </div>
        <div class=\"service-image-wrapper\">
            <img 
                alt=\"{$section['title']}\" 
                src=\"{$imagePath}\" 
                loading=\"{$loadingAttr}\" 
                {$priorityAttr}
                width=\"800\" 
                height=\"600\"
                style=\"width: 100%; height: 100%; object-fit: cover; display: block;\"
            />
        </div>
    </div>
    ";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços - AHB Maracaí</title>
    <link rel="icon" type="image/x-icon" href="/public/logo.svg">
    <link href="./dist/style.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <link rel="preload" as="image" href="/public/servicos/emergencia.webp">

    <style>
        html, body {
            width: 100%;
        }
        @media (max-width: 767px) {
            html, body {
                overflow-x: hidden;
            }
        }
        
        .service-card {
            display: flex;
            flex-direction: column;
            background-color: white;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            border-radius: 0.5rem;
            overflow: hidden;
        }

        @media (min-width: 640px) {
            .service-card {
                display: grid;
                grid-template-columns: 1fr 1fr;
                border-radius: 0;
            }

            .service-card.reverse .service-content-wrapper {
                order: 2;
            }

            .service-card.reverse .service-image-wrapper {
                order: 1;
            }
        }

        .service-image-wrapper {
            width: 100%;
            height: 200px;
            position: relative;
            background-color: #f3f4f6;
        }

        @media (min-width: 640px) {
            .service-image-wrapper {
                height: 300px;
            }
        }

        .service-image-wrapper img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .service-content-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
        }

        @media (min-width: 768px) {
            .service-content-wrapper {
                padding: 2rem;
            }
        }

        @media (min-width: 1024px) {
            .service-content-wrapper {
                padding: 2.5rem 4rem;
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
                <a href="/sobre" class="text-gray-600 hover:text-red-600">Sobre</a>
                <a href="/servicos" class="text-red-600 font-medium">Serviços</a>
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
            <a href="/servicos" class="block py-2 text-red-600">Serviços</a>
            <a href="/transparencia" class="block py-2 text-gray-600">Transparência</a>
            <a href="/contato" class="block py-2 text-gray-600">Contato</a>
        </div>
    </header>

    <section class="bg-red-600 text-white py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-bold mb-2" data-aos="fade-up">Nossos Serviços</h1>
            <p class="text-red-100" data-aos="fade-up" data-aos-delay="100">Cuidado completo e especializado para você e
                sua família.</p>
        </div>
    </section>

    <main class="py-12 md:py-16">
        <div class="container mx-auto px-4 space-y-16">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center" data-aos="fade-up">Consultas Médicas</h2>
                <div class="space-y-4">
                    <?php 
                    foreach ($medicalConsultations as $index => $item) {
                        echo renderServiceCard($item, $index, true);
                    }
                    ?>
                </div>
            </div>

            <hr class="border-gray-200">

            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center" data-aos="fade-up">Exames</h2>
                <div class="space-y-4">
                    <?php 
                    foreach ($medicalExams as $index => $item) {
                        echo renderServiceCard($item, $index, false);
                    }
                    ?>
                </div>
            </div>
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
        document.addEventListener('DOMContentLoaded', function () {
            feather.replace();

            const menuToggle = document.getElementById('menu-toggle');
            if (menuToggle) {
                menuToggle.addEventListener('click', function () {
                    document.getElementById('mobile-menu').classList.toggle('hidden');
                });
            }

            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true
            });
        });
    </script>
</body>

</html>