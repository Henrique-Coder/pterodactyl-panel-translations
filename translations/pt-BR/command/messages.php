<?php

return [
    'location' => [
        'no_location_found' => 'Não foi possível localizar um registro correspondente ao código curto fornecido.',
        'ask_short' => 'Código curto de localização',
        'ask_long' => 'Descrição do local',
        'created' => 'Criou com sucesso um novo local (:name) com um ID de :id.',
        'deleted' => 'Excluiu com sucesso o local solicitado.',
    ],
    'user' => [
        'search_users' => 'Insira um nome de usuário, ID de usuário ou endereço de e-mail',
        'select_search_user' => 'ID do usuário a ser excluído (Digite \'0\' to re-search)',
        'deleted' => 'Usuário excluído com sucesso do Painel.',
        'confirm_delete' => 'Tem certeza de que deseja excluir este usuário do Painel?',
        'no_users_found' => 'Nenhum usuário foi encontrado para o termo de pesquisa fornecido.',
        'multiple_found' => 'Várias contas foram encontradas para o usuário fornecido, não foi possível excluir um usuário devido ao sinalizador --no-interaction.',
        'ask_admin' => 'Este usuário é um administrador?',
        'ask_email' => 'Endereço de email',
        'ask_username' => 'Nome de usuário',
        'ask_name_first' => 'Primeiro nome',
        'ask_name_last' => 'Sobrenome',
        'ask_password' => 'Senha',
        'ask_password_tip' => 'Se você quiser criar uma conta com uma senha aleatória enviada por e-mail ao usuário, execute novamente este comando (CTRL+C) e passe o sinalizador `--no-password`.',
        'ask_password_help' => 'Senhas must be at least 8 characters in length and contain at least one capital letter and number.',
        '2fa_help_text' => [
            'This command will disable 2-factor authentication for a user\'s account if it is enabled. This should only be used as an account recovery command if the user is locked out of their account.',
            'If this is not what you wanted to do, press CTRL+C to exit this process.',
        ],
        '2fa_disabled' => 'A autenticação de dois fatores foi desativada para :email.',
    ],
    'schedule' => [
        'output_line' => 'Despachando trabalho para a primeira tarefa em `:schedule` (:hash).',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'Excluindo arquivo de backup de serviço :file.',
    ],
    'server' => [
        'rebuild_failed' => 'A solicitação de reconstrução para ":name" (#:id) no nó ":node" falhou com erro: :message',
        'reinstall' => [
            'failed' => 'A solicitação de reinstalação de ":name" (#:id) no nó ":node" falhou com erro: :message',
            'confirm' => 'Você está prestes a reinstalar em um grupo de servidores. Você deseja continuar?',
        ],
        'power' => [
            'confirm' => 'Você está prestes a executar uma :action nos servidores :count. Você deseja continuar?',
            'action_failed' => 'A solicitação de ação de energia para ":name" (#:id) no nó ":node" falhou com erro: :message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'Host SMTP (por exemplo, smtp.gmail.com)',
            'ask_smtp_port' => 'Porta SMTP',
            'ask_smtp_username' => 'SMTP Nome de usuário',
            'ask_smtp_password' => 'SMTP Senha',
            'ask_mailgun_domain' => 'Domínio Mailgun',
            'ask_mailgun_endpoint' => 'Ponto final do Mailgun',
            'ask_mailgun_secret' => 'Segredo da arma postal',
            'ask_mandrill_secret' => 'Segredo do Mandril',
            'ask_postmark_username' => 'Chave de API de carimbo postal',
            'ask_driver' => 'Qual driver deve ser usado para enviar e-mails?',
            'ask_mail_from' => 'Os e-mails do endereço de e-mail devem ser originados de',
            'ask_mail_name' => 'Nome de onde os e-mails devem aparecer',
            'ask_encryption' => 'Método de criptografia a ser usado',
        ],
    ],
];
