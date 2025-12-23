<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal da Transparência - AHB Maracaí</title>
    <link rel="icon" href="/public/logo.svg" type="image/svg+xml">
    <link href="./dist/style.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
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
                Confira abaixo os documentos institucionais, parcerias e dados financeiros da nossa associação.
            </p>
        </div>

        <section class="mb-16">
            <h3 class="text-2xl font-bold text-gray-800 mb-8">Documentos Gerais</h3>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                // Array centralizado de documentos
                $documentos = [
                    ['cat' => 'Institucional', 'dir' => 'public/transparencia/documentos-institucionais/', 'file' => 'Ata_registrada_diretoria_AHBM_2025-2029.pdf', 'titulo' => 'Ata Registrada Diretoria', 'desc' => 'Ata oficial de registro da diretoria da associação.', 'icon' => 'award', 'cor' => 'yellow'],
                    ['cat' => 'Institucional', 'dir' => 'public/transparencia/documentos-institucionais/', 'file' => 'Estatuto_atualizado_registrado.pdf', 'titulo' => 'Estatuto Social', 'desc' => 'Estatuto que rege a organização da associação.', 'icon' => 'file-text', 'cor' => 'red'],
                    ['cat' => 'Convênio', 'dir' => 'public/transparencia/convenios/', 'file' => 'plano-trabalho-termo-convenio-sms-01-2025.pdf', 'titulo' => 'Convênio SMS Nº 01/2025', 'desc' => 'Plano de Trabalho e Termo de Convênio Processo SMS.', 'icon' => 'briefcase', 'cor' => 'purple'],
                    ['cat' => 'Convênio', 'dir' => 'public/transparencia/convenios/', 'file' => 'prestacao-do-convenio-fns-n-898755-1.pdf', 'titulo' => 'Prestação Convênio FNS', 'desc' => 'Prestação de contas detalhada do Convênio FNS.', 'icon' => 'clipboard', 'cor' => 'blue'],
                    ['cat' => 'Emenda Impositiva', 'dir' => 'public/transparencia/emendas-impositivas/', 'file' => 'demonstrativo_emendas_impositivas_camara_municipal_2025.pdf', 'titulo' => 'Emendas Impositivas 2025', 'desc' => 'Demonstrativo de emendas da Câmara Municipal.', 'icon' => 'file-text', 'cor' => 'teal'],
                    ['cat' => 'Emenda', 'dir' => 'public/transparencia/emendas/', 'file' => 'publicacao_emenda.pdf', 'titulo' => 'Publicação de Emenda', 'desc' => 'Documento de publicação de emenda parlamentar.', 'icon' => 'file-plus', 'cor' => 'blue'],
                    ['cat' => 'Financeiro', 'dir' => 'public/transparencia/financeiro/', 'file' => 'recursos-recebidos.xlsx', 'titulo' => 'Recursos Recebidos', 'desc' => 'Detalhamento dos recursos e transferências.', 'icon' => 'dollar-sign', 'cor' => 'green'],
                ];

                foreach ($documentos as $doc):
                    $caminho = $doc['dir'] . $doc['file'];
                    if (file_exists($caminho)):
                ?>
                    <div class="document-card bg-white p-6 rounded-lg shadow-md transition-all duration-300 flex flex-col border border-gray-100" data-aos="fade-up">
                        <div class="mb-4">
                            <span class="inline-block px-3 py-1 text-xs font-bold uppercase tracking-wider text-<?php echo $doc['cor']; ?>-700 bg-<?php echo $doc['cor']; ?>-100 rounded">
                                <?php echo $doc['cat']; ?>
                            </span>
                        </div>
                        
                        <div class="flex items-center mb-4">
                            <div class="bg-<?php echo $doc['cor']; ?>-100 p-3 rounded-full mr-4 shrink-0">
                                <i data-feather="<?php echo $doc['icon']; ?>" class="text-<?php echo $doc['cor']; ?>-600 w-5 h-5"></i>
                            </div>
                            <h4 class="text-lg font-bold leading-tight text-gray-800"><?php echo $doc['titulo']; ?></h4>
                        </div>
                        
                        <p class="text-gray-600 text-sm mb-6 flex-grow"><?php echo $doc['desc']; ?></p>
                        
                        <a href="<?php echo $caminho; ?>" target="_blank" class="text-red-600 font-bold hover:text-red-800 flex items-center transition-colors border-t border-gray-100 pt-4">
                            <i data-feather="download" class="mr-2 w-4 h-4"></i> Visualizar Documento
                        </a>
                    </div>
                <?php endif; endforeach; ?>
            </div>
        </section>

        <section id="prestacoes-de-contas" class="mt-16">
            <?php
            $diretorio_base = 'public/transparencia/dados-transparencia/'; 
            $anos = is_dir($diretorio_base) ? array_filter(scandir($diretorio_base), function($item) use ($diretorio_base) {
                return is_dir($diretorio_base . $item) && !in_array($item, ['.', '..']);
            }) : [];
            rsort($anos);
            $anoSelecionado = isset($_GET['ano']) && in_array($_GET['ano'], $anos) ? $_GET['ano'] : (isset($anos[0]) ? $anos[0] : null);
            $meses_nomes = [
                '01' => 'Janeiro', '02' => 'Fevereiro', '03' => 'Março', '04' => 'Abril',
                '05' => 'Maio', '06' => 'Junho', '07' => 'Julho', '08' => 'Agosto',
                '09' => 'Setembro', '10' => 'Outubro', '11' => 'Novembro', '12' => 'Dezembro'
            ];
            ?>
            <h3 class="text-2xl font-bold text-gray-800 mb-6">Prestações de Contas</h3>
            <div class="flex flex-col md:flex-row items-center gap-4 mb-8 bg-white p-4 rounded-lg shadow-sm border border-gray-100">
                <label for="ano-select" class="text-lg font-medium text-gray-700">Escolha o Ano:</label>
                <form id="form-ano" action="transparencia.php#prestacoes-de-contas" method="GET" class="w-full md:w-auto">
                    <select id="ano-select" name="ano" onchange="this.form.submit()" class="block w-full md:w-auto py-2 px-4 rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 text-base">
                        <?php if (!empty($anos)): foreach ($anos as $ano): ?>
                            <option value="<?php echo $ano; ?>" <?php echo $ano == $anoSelecionado ? 'selected' : ''; ?>>
                                <?php echo $ano; ?>
                            </option>
                        <?php endforeach; else: ?>
                            <option value="">Nenhum ano encontrado</option>
                        <?php endif; ?>
                    </select>
                </form>
            </div>

            <?php if ($anoSelecionado): ?>
                <div class="bg-white shadow-md rounded-lg p-6 border border-gray-100">
                    <?php 
                    $caminhoAno = $diretorio_base . $anoSelecionado;
                    $arquivos_ano = array_filter(scandir($caminhoAno), function($item) {
                        return pathinfo($item, PATHINFO_EXTENSION) === 'pdf';
                    });
                    sort($arquivos_ano);
                    if (empty($arquivos_ano)): ?>
                        <p class="text-gray-600 text-center py-8">Nenhum arquivo encontrado para este ano.</p>
                    <?php else: ?>
                        <ul class="space-y-4">
                            <?php foreach ($arquivos_ano as $arquivo): 
                                $nome_base = str_replace('.pdf', '', $arquivo);
                                $partes = explode('-', $nome_base);
                                $mes = $partes[0];
                                $nome_exibicao = isset($meses_nomes[$mes]) ? $meses_nomes[$mes] : str_replace(['-', '.pdf'], [' ', ''], $arquivo);
                                ?>
                                <li class="border-b border-gray-50 pb-4 last:border-b-0">
                                    <div class="flex justify-between items-center group">
                                        <div class="flex items-center">
                                            <div class="bg-red-50 p-2 rounded mr-3">
                                                <i data-feather="file-text" class="text-red-600 w-5 h-5"></i>
                                            </div>
                                            <span class="text-lg font-medium text-gray-800 group-hover:text-red-600 transition-colors"><?php echo $nome_exibicao; ?></span>
                                        </div>
                                        <a href="<?php echo $caminhoAno . '/' . $arquivo; ?>" target="_blank" class="bg-red-600 text-white px-4 py-2 rounded font-bold hover:bg-red-700 transition-all flex items-center shadow-sm">
                                            <i data-feather="eye" class="w-4 h-4 mr-2"></i> Visualizar
                                        </a>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </section>
    </div>

    <footer class="bg-gray-800 text-white py-12 mt-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">AHBM Hospital</h3>
                    <p class="text-gray-300 text-sm">Av. José Bonifácio, 382 - Centro<br>Maracaí - SP</p>
                </div>
                </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>© <?php echo date("Y"); ?> AHBM Hospital de Maracaí. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({ duration: 800, easing: 'ease-in-out', once: true });
            feather.replace();
        });
    </script>
</body>
</html>