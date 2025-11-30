<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médicos - AHBM Hospital de Maracaí</title>
    <link rel="icon" type="image/x-icon" href="/static/favicon.ico">
    <script src="https://cdn.tailwindcss.com"></script>
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
        .doctor-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
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
                <a href="/noticias" class="text-gray-600 hover:text-red-600">Notícias</a>
                <a href="/medicos" class="text-red-600 font-medium">Médicos</a>
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

    <section class="bg-gradient-to-r from-red-600 to-red-800 text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-3xl md:text-4xl font-bold mb-4" data-aos="fade-up">Nossa Equipe Médica</h1>
            <p class="text-xl max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">Profissionais qualificados e comprometidos com a sua saúde</p>
        </div>
    </section>

    <main class="container mx-auto px-4 py-12">
        <div class="mb-8" data-aos="fade-up">
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Nossos Médicos</h2>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="doctors-container">
                <!-- Doctors will be loaded from API -->
                <div class="text-center py-8 col-span-3">
                    <i data-feather="loader" class="animate-spin mx-auto text-gray-400" width="24" height="24"></i>
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
        // Mobile menu toggle
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // Fetch doctors from API
        async function fetchDoctors() {
            const doctorsContainer = document.getElementById('doctors-container');
            try {
                const response = await fetch('https://tcc-v2-peach.vercel.app/api/v1/public/doctors');
                const result = await response.json();
                
                // Assumes the API returns data in the format { data: { data: [...] } }
                const doctors = result.data.data;
                
                doctorsContainer.innerHTML = ''; // Clear the loader
                
                doctors.forEach(doctor => {
                    const doctorCard = document.createElement('div');
                    doctorCard.className = 'doctor-card bg-white rounded-lg shadow-md overflow-hidden transition';
                    
                    // Note: The photo logic and data-specialty have been removed.
                    doctorCard.innerHTML = `
                        <div class="p-6 text-center">
                            <h3 class="text-xl font-semibold text-gray-800">${doctor.name}</h3>
                            <p class="text-red-600 mb-2">${doctor.specialty.name}</p>
                            <p class="text-gray-500 text-sm mb-4">CRM-${doctor.state} ${doctor.crm}</p>
                            <div class="border-t pt-4 text-left">
                                ${doctor.schedules.map(schedule => `
                                    <p class="text-sm text-gray-600"><span class="font-medium capitalize">${schedule.dayOfWeek}:</span> ${schedule.startTime} - ${schedule.endTime}</p>
                                `).join('')}
                            </div>
                        </div>
                    `;
                    doctorsContainer.appendChild(doctorCard);
                });
            } catch (error) {
                console.error('Error fetching doctors:', error);
                doctorsContainer.innerHTML = `
                    <div class="col-span-3 text-center py-8">
                        <p class="text-red-500">Não foi possível carregar os médicos no momento.</p>
                    </div>
                `;
            }
        }

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true
            });
            feather.replace();
            fetchDoctors();
        });
    </script>
</body>
</html>
