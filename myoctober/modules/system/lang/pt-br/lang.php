<?php

return [
    'app' => [
        'name' => 'October CMS',
        'tagline' => 'Voltando ao básico',
    ],
    'locale' => [
        'cs' => 'Czech',
        'en' => 'Inglês',
        'de' => 'Alemão',
        'es' => 'Espanhol',
        'es-ar' => 'Espanhol (Argentina)',
        'fa' => 'Persa',
        'fr' => 'Francês',
        'hu' => 'Húngaro',
        'id' => 'Indonésio',
        'it' => 'Italiano',
        'ja' => 'Japonês',
        'lv' => 'Letão',
        'nb-no' => 'Norueguês (Bokmål)',
        'nl' => 'Holandês ',
        'pl' => 'Polonês',
        'pt-br' => 'Português (Brasil)',
        'ro' => 'Romeno',
        'ru' => 'Russo',
        'sv' => 'Sueco',
        'sk' => 'Eslovaco',
        'tr' => 'Turco',
        'zh-cn' => 'Chinês (China)',
        'el' => 'Grego'
    ],
    'directory' => [
        'create_fail' => 'Não é possível criar o diretório: :name',
    ],
    'file' => [
        'create_fail' => 'Não é possível criar o arquivo: :name',
    ],
    'combiner' => [
        'not_found' => 'O arquivo combinador ":name" não foi encontrado.',
    ],
    'system' => [
        'name' => 'Sistema',
        'menu_label' => 'Sistema',
        'categories' => [
            'cms' => 'CMS',
            'misc' => 'Diversos',
            'logs' => 'Registros',
            'mail' => 'E-mail',
            'shop' => 'Loja ',
            'team' => 'Time',
            'users' => 'Usuários',
            'system' => 'Sistema',
            'social' => 'Social',
            'events' => 'Eventos',
            'customers' => 'Clientes',
            'my_settings' => 'Configurações',
        ]
    ],
    'theme' => [
        'label' => 'Tema',
        'unnamed' => 'Tema sem nome',
        'name' => [
            'label' => 'Nome do Tema',
            'help' => 'Nome do tema deve ser único. Por exemplo, RainLab.Vanilla'
        ],
    ],
    'themes' => [
        'install' => 'Instalar tema',
        'search' => 'Buscar temas para instalar...',
        'installed' => 'Temas instalados',
        'no_themes' => 'Não há temas instalados.',
        'recommended' => 'Recomendado',
        'remove_confirm' => 'Você tem certeza que deseja remover este tema?'
    ],
    'plugin' => [
        'label' => 'Plugin',
        'unnamed' => 'Plugin sem nome',
        'name' => [
            'label' => 'Nome do Plugin',
            'help' => 'Nomeie o plugin pelo seu código exclusivo. Por exemplo, RainLab.Blog',
        ],
    ],
    'plugins' => [
        'manage' => 'Gerenciar plugins',
        'enable_or_disable' => 'Habilitar ou desabilitar',
        'enable_or_disable_title' => 'Habilitar ou Desabilitar Plugins',
        'install' => 'Instalar plugins',
        'install_products' => 'Instalar produtos',
        'search' => 'Buscar plugin para instalar...',
        'installed' => 'Plugins instalados',
        'no_plugins' => 'Não há plugins instalados.',
        'recommended' => 'Recomendado',
        'remove' => 'Remover',
        'refresh' => 'Atualizar',
        'disabled_label' => 'Desabilitado',
        'disabled_help' => 'Plugins que estão desabilitados são ignorados pela aplicação.',
        'frozen_label' => 'Congelar atualizações',
        'frozen_help' => 'Plugins congelados serão ignorados pelo processo de atualização.',
        'selected_amount' => 'Plugins selecionados: :amount',
        'remove_confirm' => 'Você tem certeza?',
        'remove_success' => 'Plugins removidos com sucesso do sistema.',
        'refresh_confirm' => 'Você tem certeza?',
        'refresh_success' => 'Plugins atualizados com sucesso.',
        'disable_confirm' => 'Você tem certeza?',
        'disable_success' => 'Plugins desabilitados com sucesso.',
        'enable_success' => 'Plugins habilitados com sucesso.',
        'unknown_plugin' => 'Plugin removido do sistema de arquivos.',
    ],
    'project' => [
        'name' => 'Projeto',
        'owner_label' => 'Desenvolvedor',
        'attach' => 'Anexar Projeto',
        'detach' => 'Desanexar Projeto',
        'none' => 'Nenhum',
        'id' => [
            'label' => 'ID do Projeto',
            'help' => 'Como encontrar o ID do seu projeto',
            'missing' => 'Por favor, forneça um ID de projeto para usar.',
        ],
        'detach_confirm' => 'Tem certeza que deseja desanexar este projeto?',
        'unbind_success' => 'Projeto desanexado com sucesso.',
    ],
    'settings' => [
        'menu_label' => 'Configurações',
        'not_found' => 'Impossível encontrar as configurações solicitadas.',
        'missing_model' => 'Falta uma definição de model na página de configurações.',
        'update_success' => 'Configurações para :name foram atualizados com sucesso.',
        'return' => 'Retornar para as configurações do sistema',
        'search' => 'Buscar',
    ],
    'mail' => [
        'log_file' => 'Arquivo de registro',
        'menu_label' => 'Configurações de E-mail',
        'menu_description' => 'Gerenciar configurações de e-mail.',
        'general' => 'Geral',
        'method' => 'Método de Envio',
        'sender_name' => 'Nome do Remetente',
        'sender_email' => 'E-mail do Remetente',
        'php_mail' => 'PHP mail',
        'smtp' => 'SMTP',
        'smtp_address' => 'Endereço SMTP',
        'smtp_authorization' => 'Autenticação SMTP obrigatória',
        'smtp_authorization_comment' => 'Use esta opção se o seu servidor SMTP requer autenticação.',
        'smtp_username' => 'Usuário',
        'smtp_password' => 'Senha',
        'smtp_port' => 'Porta SMTP',
        'smtp_ssl' => 'Conexão SSL obrigatória',
        'sendmail' => 'Sendmail',
        'sendmail_path' => 'Caminho do Sendmail',
        'sendmail_path_comment' => 'Por favor, especifique o caminho do programa sendmail.',
        'mailgun' => 'Mailgun',
        'mailgun_domain' => 'Domínio do Mailgun',
        'mailgun_domain_comment' => 'Por favor, forneça o domínio do Mailgun.',
        'mailgun_secret' => 'Mailgun Secret',
        'mailgun_secret_comment' => 'Forneça sua chave de API do Mailgun.',
        'mandrill' => 'Mandrill',
        'mandrill_secret' => 'Mandrill Secret',
        'mandrill_secret_comment' => 'Forneça sua chave de API do Mandrill',
        'drivers_hint_header' => 'Drivers não instalados',
        'drivers_hint_content' => 'Este método requer que o plugin ":plugin" esteja instalado.'
    ],
    'mail_templates' => [
        'menu_label' => 'Templates de E-mail',
        'menu_description' => 'Modificar os templates dos e-mails que são enviados para usuários e administradores.',
        'new_template' => 'Novo template',
        'new_layout' => 'Novo layout',
        'template' => 'Template',
        'templates' => 'Templates',
        'menu_layouts_label' => 'Layouts de E-mail',
        'layout' => 'Layout',
        'layouts' => 'Layouts',
        'name' => 'Nome',
        'name_comment' => 'Nome exclusivo usado para se referir a este template',
        'code' => 'Código',
        'code_comment' => 'Código exclusivo usado para se referir a este template',
        'subject' => 'Assunto',
        'subject_comment' => 'Assunto da mensagem',
        'description' => 'Descrição',
        'content_html' => 'HTML',
        'content_css' => 'CSS',
        'content_text' => 'Texto Simples',
        'test_send' => 'Enviar mensagem de teste',
        'test_success' => 'Mensagem de teste enviada com sucesso.',
        'return' => 'Retornar à lista de templates'
    ],
    'install' => [
        'project_label' => 'Anexar ao projeto',
        'plugin_label' => 'Instalar plugin',
        'theme_label' => 'Instalar tema',
        'missing_plugin_name' => 'Por favor, especifique um nome de plugin para instalar.',
        'missing_theme_name' => 'Por favor, especifique um nome de tema para instalar.',
        'install_completing' => 'Finalizando processo de instalação',
        'install_success' => 'O plugin foi instalado com sucesso.',
    ],
    'updates' => [
        'title' => 'Gerenciar Atualizações',
        'name' => 'Atualização de software',
        'menu_label' => 'Atualizações',
        'menu_description' => 'Atualize o sistema, gerencie e instale plugins e temas.',
        'return_link' => 'Voltar às atualizações',
        'check_label' => 'Verificar atualizações',
        'retry_label' => 'Tentar novamente',
        'plugin_name' => 'Nome',
        'plugin_code' => 'Código',
        'plugin_description' => 'Descrição',
        'plugin_version' => 'Versão',
        'plugin_author' => 'Autor',
        'core_current_build' => 'Compilação atual',
        'core_build' => 'Compilação :build',
        'core_build_help' => 'Última versão está disponível.',
        'core_downloading' => 'Baixando arquivos do aplicativo',
        'core_extracting' => 'Desempacotando arquivos do aplicativo',
        'plugins' => 'Plugins',
        'themes' => 'Temas',
        'disabled' => 'Desabilitados',
        'plugin_downloading' => 'Baixando o plugin: :name',
        'plugin_extracting' => 'Desempacotando o plugin: :name',
        'plugin_version_none' => 'Novo plugin',
        'plugin_current_version' => 'Versão atual',
        'theme_new_install' => 'Instalação do novo tema.',
        'theme_downloading' => 'Baixando o tema: :name',
        'theme_extracting' => 'Desempacotando o tema: :name',
        'update_label' => 'Atualizar o software',
        'update_completing' => 'Finalizando processo de atualização',
        'update_loading' => 'Carregando atualizações disponíveis...',
        'update_success' => 'O processo de atualização foi realizado com sucesso.',
        'update_failed_label' => 'Falha na atualização',
        'force_label' => 'Forçar atualização',
        'found' => [
            'label' => 'Atualizações encontradas!',
            'help' => 'Clique Atualizar o software para iniciar o processo de atualização.',
        ],
        'none' => [
            'label' => 'Nenhuma atualização',
            'help' => 'Não há novas atualizações.',
        ],
        'important_action' => [
            'empty' => 'Selecionar ação',
            'confirm' => 'Confirmar atualização',
            'skip' => 'Pular este plugin (apenas uma vez)',
            'ignore' => 'Pular este plugin (sempre)',
        ],
        'important_action_required' => 'Ação requerida',
        'important_view_guide' => 'Exibir guia de atualização',
        'important_alert_text' => 'Algumas atualizações precisam de sua atenção.',
        'details_title' => 'Detalhes do plugin',
        'details_view_homepage' => 'Visualizar página',
        'details_readme' => 'Documentação',
        'details_readme_missing' => 'Não foi fornecida nenhuma documentação.',
        'details_upgrades' => 'Guia de atualização',
        'details_upgrades_missing' => 'Não existem instruções de atualização.',
        'details_current_version' => 'Versão atual',
        'details_author' => 'Autor',
    ],
    'server' => [
        'connect_error' => 'Erro ao conectar-se com o servidor.',
        'response_not_found' => 'O servidor de atualização não pôde ser encontrado.',
        'response_invalid' => 'Resposta inválida do servidor.',
        'response_empty' => 'Resposta vazia do servidor.',
        'file_error' => 'Servidor não conseguiu entregar o pacote.',
        'file_corrupt' => 'Arquivo do servidor está corrompido.',
    ],
    'behavior' => [
        'missing_property' => 'Classe :class deve definir a propriedade $:property usada pelo :behavior behavior.',
    ],
    'config' => [
        'not_found' => 'Não foi possível localizar o arquivo de configuração :file definido para :location.',
        'required' => 'Configuração usada em :location deve fornecer um valor :property.',
    ],
    'zip' => [
        'extract_failed' => 'Não foi possível extrair arquivo do core ":file".',
    ],
    'event_log' => [
        'hint' => 'Este registro mostra a lista dos potenciais erros que ocorreram na aplicação, como exceções e informações de depuração.',
        'menu_label' => 'Registro de Eventos',
        'menu_description' => 'Visualize as mensagens do sistema, com horário e detalhes.',
        'empty_link' => 'Esvaziar registro de eventos',
        'empty_loading' => 'Esvaziando registro de eventos...',
        'empty_success' => 'Registro de eventos esvaziado com sucesso.',
        'return_link' => 'Retornar ao registro de eventos',
        'id' => 'ID',
        'id_label' => 'ID do Evento',
        'created_at' => 'Data & Hora',
        'message' => 'Mensagem',
        'level' => 'Nível',
    ],
    'request_log' => [
        'hint' => 'Este registro mostra uma lista de requisições que requerem atenção. Por exemplo, se um usuário solicitar uma página não encontrada, será registrado com o status 404.',
        'menu_label' => 'Registro de Requisições',
        'menu_description' => 'Visualize requisições malsucedidas na aplicação, como Página não encontrada (404).',
        'empty_link' => 'Esvaziar registro de requisições.',
        'empty_loading' => 'Esvaziando registro de requisições...',
        'empty_success' => 'Registro de requisições esvaziado com sucesso.',
        'return_link' => 'Retornar ao registro de requisições',
        'id' => 'ID',
        'id_label' => 'ID do registro',
        'count' => 'Contador',
        'referer' => 'Referers',
        'url' => 'URL',
        'status_code' => 'Status',
    ],
    'permissions' => [
        'name' => 'System',
        'manage_system_settings' => 'Gerenciar configurações do sistema',
        'manage_software_updates' => 'Gerenciar atualizações',
        'access_logs' => 'Exibir registros de sistema',
        'manage_mail_templates' => 'Gerenciar templates de e-mail',
        'manage_mail_settings' => 'Gerenciar configurações de e-mail',
        'manage_other_administrators' => 'Gerenciar outros administradores',
        'view_the_dashboard' => 'Visualizar o painel',
        'manage_branding' => 'Personalizar o painel'
    ],
];
