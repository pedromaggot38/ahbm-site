# Website Institucional - Hospital Beneficente de Maracaí

Este repositório contém o código-fonte do website público do Hospital Beneficente de Maracaí (Associação Hospitalar Beneficente de Maracaí). O projeto foi desenvolvido em **PHP** para fornecer informações institucionais, transparência pública e serviços à comunidade de forma acessível e dinâmica.

## 📋 Sobre o Projeto

O objetivo deste sistema é manter um canal de comunicação digital eficiente, permitindo que a população consulte:
- **Transparência:** Dados financeiros, balancetes, estatutos e atas.
- **Serviços:** Informações sobre exames e procedimentos disponíveis.
- **Institucional:** História, missão e documentos oficiais.
- **Corpo Clínico:** Listagem de médicos e especialidades atendidas. (Não usado oficialmente no site hospedado)
- **Notícias:** Atualizações recentes sobre o hospital. (Não usado oficialmente no site hospedado)

## 🚀 Tecnologias Utilizadas

- **Frontend:** HTML5, CSS3 (localizado em `dist/style.css`)
- **Servidor Web:** Apache (Configurado via `.htaccess` para rotas amigáveis)
- **Armazenamento de Dados:** Sistema baseado em arquivos (File-based) para leitura dinâmica de PDFs e imagens, sem necessidade de banco de dados complexo para estas funções.
- **Backend:** PHP 7.4+ (Nativo/Vanilla) (Não usado oficialmente no site hospedado)

## 📂 Estrutura de Arquivos

A organização do projeto segue a seguinte lógica:

```bash
/
├── .htaccess           # Regras de reescrita de URL (Rotas amigáveis)
├── 404.php             # Página de erro personalizada
├── contato.php         # Página de contato e localização
├── index.php           # Página inicial (Home)
├── sobre.php           # História e informações institucionais
├── servicos.php        # Listagem de serviços prestados (Exames, etc.)
├── transparencia.php   # Portal da Transparência (Lista PDFs automaticamente por ano/mês)
├── dist/
│   └── style.css       # Folhas de estilo principais do site
├── pages/              # Páginas internas e dinâmicas (Não usadas oficialmente no site hospedado)
│   ├── medicos.php     # Listagem do corpo clínico
│   ├── noticia.php     # Visualização de uma notícia individual
│   └── noticias.php    # Arquivo geral de notícias
└── public/             # Arquivos estáticos e uploads (PDFs e Imagens)
    ├── convenios/      # Documentos de convênios e termos
    ├── dados-transparencia/ # PDFs organizados por Ano/Mês (Lidos automaticamente pelo PHP)
    ├── documentos-institucionais/ # Estatutos, atas e regimentos
    ├── emendas-impositivas/ # Documentos sobre emendas parlamentares
    ├── galeria/        # Imagens da galeria do hospital
    ├── servicos/       # Ícones e imagens ilustrativas dos serviços
    └── logo.svg        # Logotipo oficial
```

## ✨ Funcionalidades Principais

1.  **Portal da Transparência Automatizado:**
    - O sistema varre a pasta `public/dados-transparencia/` e exibe automaticamente os arquivos PDF organizados por ano e mês. Basta fazer o upload do arquivo com nome baseado nos arquivos já existentes, na pasta correta para que ele apareça no site.

2.  **Roteamento Amigável:**
    - Graças ao arquivo `.htaccess`, as URLs são limpas (ex: `site.com/transparencia` em vez de `site.com/transparencia.php`), melhorando o SEO e a experiência do utilizador.

3.  **Gestão de Documentos:**
    - Áreas específicas para "Emendas Impositivas", "Convênios" e "Documentos Institucionais" facilitam a prestação de contas.

## 📄 Licença

Este projeto é de uso privado e institucional da Associação Hospitalar Beneficente de Maracaí.

---
Desenvolvido por [Pedro Sanches]