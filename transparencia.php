<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal da Transparência - AHB Maracaí</title>
    <link rel="icon" type="image/x-icon" href="/public/logo.svg">
    <link href="./dist/style.css" rel="stylesheet">
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
        .transparency-bg {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('http://static.photos/finance/1200x630/1');
            background-size: cover;
            background-position: center;
        }
        .document-card:hover {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-gray-50 font-sans">
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
                <a href="/servicos" class="text-gray-600 hover:text-red-600">Serviços</a>
                <a href="/transparencia" class="text-red-600 font-medium">Transparência</a>
                <a href="/contato" class="text-gray-600 hover:text-red-600">Contato</a>
            </nav>
            <button class="md:hidden" id="menu-toggle" aria-label="Toggle menu">
                <i data-feather="menu"></i>
            </button>
        </div>
        <div class="md:hidden hidden bg-white py-2 px-4 shadow-md" id="mobile-menu">
            <a href="/" class="block py-2 text-gray-600">Início</a>
            <a href="/sobre" class="block py-2 text-gray-600">Sobre</a>
            <a href="/servicos" class="block py-2 text-gray-600">Serviços</a>
            <a href="/transparencia" class="block py-2 text-red-600">Transparência</a>
            <a href="/contato" class="block py-2 text-gray-600">Contato</a>
        </div>
    </header>

    <section class="transparency-bg text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-3xl md:text-4xl font-bold mb-4">Portal da Transparência</h1>
            <p class="text-xl max-w-2xl mx-auto">Compromisso com a gestão pública e o acesso à informação</p>
        </div>
    </section>

    <div class="container mx-auto px-4 py-12">
        <div class="mb-12 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Nossos Dados</h2>
            <p class="text-gray-600 max-w-3xl mx-auto">
                A Associação Hospital Beneficente de Maracaí tem como princípio a transparência na gestão dos recursos públicos. Aqui você encontra todas as informações sobre nossa administração, finanças e prestação de contas.
            </p>
        </div>

        <section class="mb-16">
            <?php
            $diretorio_institucional = 'public/documentos-institucionais/';
            $arquivos_institucionais = glob($diretorio_institucional . '*.pdf');
            $documentos_config = [
                'Ata_registrada_diretoria_AHBM_2025-2029.pdf' => [
                    'titulo' => 'Ata Registrada Diretoria',
                    'descricao' => 'Documento oficial da ata de registro da diretoria da associação.',
                    'icone' => 'award',
                    'cor' => 'green'
                ],
                'Estatuto_atualizado_registrado.pdf' => [
                    'titulo' => 'Estatuto Social',
                    'descricao' => 'Documento que rege a organização e funcionamento da associação.',
                    'icone' => 'file-text',
                    'cor' => 'red'
                ],
                // Adicione outros documentos aqui se necessário, com o nome do arquivo => [configurações]
            ];
            ?>
            <h3 class="text-2xl font-bold text-gray-800 mb-6">Documentos Institucionais</h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                foreach ($documentos_config as $nome_arquivo => $config):
                    $caminho_arquivo = $diretorio_institucional . $nome_arquivo;
                    if (file_exists($caminho_arquivo)):
                ?>
                        <div class="document-card bg-white p-6 rounded-lg shadow-md transition-shadow duration-300" data-aos="fade-up">
                            <div class="flex items-start mb-4">
                                <div class="bg-<?php echo $config['cor']; ?>-100 p-3 rounded-full mr-4">
                                    <i data-feather="<?php echo $config['icone']; ?>" class="text-<?php echo $config['cor']; ?>-600"></i>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold"><?php echo $config['titulo']; ?></h4>
                                </div>
                            </div>
                            <p class="text-gray-600 mb-4"><?php echo $config['descricao']; ?></p>
                            <a href="<?php echo $caminho_arquivo; ?>" target="_blank" class="text-red-600 font-medium hover:underline flex items-center">
                                <i data-feather="download" class="mr-2 w-4 h-4"></i> Baixar PDF
                            </a>
                        </div>
                <?php
                    endif;
                endforeach;
                ?>
            </div>
            <?php if (empty($arquivos_institucionais)): ?>
                <p class="text-center text-gray-600 mt-6">Nenhum documento institucional encontrado.</p>
            <?php endif; ?>
        </section>

        <section class="mb-16">
            <?php
            $diretorio_emendas = 'public/emendas/';
            $arquivos_emendas = glob($diretorio_emendas . '*.pdf');
            $emendas_config = [
                'publicacao_emenda.pdf' => [
                    'titulo' => 'Publicação de Emenda',
                    'descricao' => 'Documento de publicação de emenda parlamentar.',
                    'icone' => 'file-plus',
                    'cor' => 'blue'
                ],
                // Adicione outras emendas aqui, com o nome do arquivo => [configurações]
            ];
            ?>
            <h3 class="text-2xl font-bold text-gray-800 mb-6">Emendas</h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                foreach ($emendas_config as $nome_arquivo => $config):
                    $caminho_arquivo = $diretorio_emendas . $nome_arquivo;
                    if (file_exists($caminho_arquivo)):
                ?>
                        <div class="document-card bg-white p-6 rounded-lg shadow-md transition-shadow duration-300" data-aos="fade-up">
                            <div class="flex items-start mb-4">
                                <div class="bg-<?php echo $config['cor']; ?>-100 p-3 rounded-full mr-4">
                                    <i data-feather="<?php echo $config['icone']; ?>" class="text-<?php echo $config['cor']; ?>-600"></i>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold"><?php echo $config['titulo']; ?></h4>
                                </div>
                            </div>
                            <p class="text-gray-600 mb-4"><?php echo $config['descricao']; ?></p>
                            <a href="<?php echo $caminho_arquivo; ?>" target="_blank" class="text-red-600 font-medium hover:underline flex items-center">
                                <i data-feather="download" class="mr-2 w-4 h-4"></i> Baixar PDF
                            </a>
                        </div>
                <?php
                    endif;
                endforeach;
                ?>
            </div>
            <?php if (empty($arquivos_emendas)): ?>
                <p class="text-center text-gray-600 mt-6">Nenhuma emenda encontrada.</p>
            <?php endif; ?>
        </section>

        <section id="prestacoes-de-contas" class="mt-16">
            <?php
            // Define o diretório base para as prestações de contas
            $diretorio = 'public/dados-transparencia/'; 

            // Lê os anos disponíveis
            $anos = scandir($diretorio);
            $anos = array_filter($anos, function($item) use ($diretorio) {
                return is_dir($diretorio . $item) && !in_array($item, ['.', '..']);
            });
            rsort($anos); // Ordena os anos do mais recente para o mais antigo

            // Define o ano selecionado (o mais recente por padrão, ou o da URL)
            $anoSelecionado = isset($_GET['ano']) && in_array($_GET['ano'], $anos) ? $_GET['ano'] : (isset($anos[0]) ? $anos[0] : null);

            $meses_nomes = [
                '01' => 'Janeiro', '02' => 'Fevereiro', '03' => 'Março', '04' => 'Abril',
                '05' => 'Maio', '06' => 'Junho', '07' => 'Julho', '08' => 'Agosto',
                '09' => 'Setembro', '10' => 'Outubro', '11' => 'Novembro', '12' => 'Dezembro'
            ];
            ?>
            <h3 class="text-2xl font-bold text-gray-800 mb-6">Prestações de Contas</h3>
            
            <div class="flex flex-col md:flex-row items-center gap-4 mb-8">
                <label for="ano-select" class="text-lg font-medium text-gray-700">Escolha o Ano:</label>
                <form id="form-ano" action="transparencia.php#prestacoes-de-contas" method="GET" class="w-full md:w-auto">
                    <select id="ano-select" name="ano" onchange="this.form.submit()" class="block w-full md:w-auto py-2 px-4 rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 text-base">
                        <?php if (!empty($anos)): ?>
                            <?php foreach ($anos as $ano): ?>
                                <option value="<?php echo $ano; ?>" <?php echo $ano == $anoSelecionado ? 'selected' : ''; ?>>
                                    <?php echo $ano; ?>
                                </option>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <option value="">Nenhum ano encontrado</option>
                        <?php endif; ?>
                    </select>
                </form>
            </div>

            <?php if ($anoSelecionado): ?>
                <?php
                $caminhoAno = $diretorio . $anoSelecionado;
                $arquivos = scandir($caminhoAno);
                $arquivos = array_filter($arquivos, function($item) {
                    return pathinfo($item, PATHINFO_EXTENSION) === 'pdf';
                });
                sort($arquivos);
                ?>
                <div class="bg-white shadow rounded-lg p-6">
                    <?php if (empty($arquivos)): ?>
                        <p class="text-gray-600 text-center">Nenhum arquivo encontrado para este ano.</p>
                    <?php else: ?>
                        <ul class="space-y-4">
                            <?php foreach ($arquivos as $arquivo): ?>
                                <?php
                                $nome_base = str_replace('.pdf', '', $arquivo);
                                $partes = explode('-', $nome_base);
                                $mes = count($partes) > 0 ? $partes[0] : '';
                                $nome_exibicao = isset($meses_nomes[$mes]) ? $meses_nomes[$mes] : str_replace(['-', '.pdf'], [' ', ''], $arquivo);
                                ?>
                                <li class="border-b pb-4 last:border-b-0">
                                    <div class="flex justify-between items-center">
                                        <div class="flex items-center">
                                            <i data-feather="file-text" class="text-gray-500 mr-3 w-5 h-5"></i>
                                            <span class="text-lg font-medium text-gray-800"><?php echo $nome_exibicao; ?></span>
                                        </div>
                                        <a href="<?php echo $caminhoAno . '/' . $arquivo; ?>" target="_blank" class="bg-red-600 text-white px-4 py-2 rounded-md font-medium hover:bg-red-700 transition-colors duration-200 flex items-center">
                                            <i data-feather="download" class="w-4 h-4 mr-2"></i> Baixar PDF
                                        </a>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            <?php else: ?>
                <div class="bg-white shadow rounded-lg p-6 text-center text-gray-600">
                    <p>Nenhum ano de prestação de contas encontrado.</p>
                </div>
            <?php endif; ?>
        </section>
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

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        document.addEventListener('DOMContentLoaded', function() {
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