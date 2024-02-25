<?php

/**
 * Contains all of the translation strings for different activity log
 * events. These should be keyed by the value in front of the colon (:)
 * in the event name. If there is no colon present, they should live at
 * the top level.
 */
return [
    'auth' => [
        'fail' => 'Falha no login',
        'success' => 'Logado',
        'password-reset' => 'Redefinição de senha',
        'reset-password' => 'Solicitação de redefinição de senha',
        'checkpoint' => 'Autenticação de dois fatores solicitada',
        'recovery-token' => 'Token de recuperação de dois fatores usado',
        'token' => 'Desafio de dois fatores resolvido',
        'ip-blocked' => 'Solicitação bloqueada de endereço IP não listado para: identificador',
        'sftp' => [
            'fail' => 'Falha no login SFTP',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => 'E-mail alterado de :old para :new',
            'password-changed' => 'Senha alterada',
        ],
        'api-key' => [
            'create' => 'Criou nova chave de API: identificador',
            'delete' => 'Chave de API excluída: identificador',
        ],
        'ssh-key' => [
            'create' => 'Adicionada chave SSH: impressão digital à conta',
            'delete' => 'Chave SSH removida: impressão digital da conta',
        ],
        'two-factor' => [
            'create' => 'Autenticação de dois fatores ativada',
            'delete' => 'Autenticação de dois fatores desativada',
        ],
    ],
    'server' => [
        'reinstall' => 'Servidor reinstalado',
        'console' => [
            'command' => 'Executado ":command" no servidor',
        ],
        'power' => [
            'start' => 'Iniciou o servidor',
            'stop' => 'Parou o servidor',
            'restart' => 'Reiniciei o servidor',
            'kill' => 'Matou o processo do servidor',
        ],
        'backup' => [
            'download' => 'Baixei o backup :name',
            'delete' => 'Excluiu o backup :name',
            'restore' => 'Restaurou o backup de :name (arquivos excluídos: :truncate)',
            'restore-complete' => 'Restauração concluída do backup :name',
            'restore-failed' => 'Falha ao concluir a restauração do backup :name',
            'start' => 'Iniciou um novo backup :name',
            'complete' => 'Marcado o backup :name como completo',
            'fail' => 'Marcado o backup :name como falhado',
            'lock' => 'Bloqueou o backup :name',
            'unlock' => 'Desbloqueou o backup :name',
        ],
        'database' => [
            'create' => 'Novo banco de dados criado: nome',
            'rotate-password' => 'Senha rotacionada para banco de dados: nome',
            'delete' => 'Banco de dados excluído:nome',
        ],
        'file' => [
            'compress_one' => 'Compactado: diretório: arquivo',
            'compress_other' => 'Arquivos compactados:count em:directory',
            'read' => 'Visualizou o conteúdo de :file',
            'copy' => 'Criou uma cópia de :file',
            'create-directory' => 'Diretório criado: diretório: nome',
            'decompress' => 'Descompactado: arquivos em: diretório',
            'delete_one' => 'Excluído: diretório: arquivos.0',
            'delete_other' => 'Excluídos:count arquivos em:directory',
            'download' => 'Arquivo baixado',
            'pull' => 'Baixou um arquivo remoto de :url para :directory',
            'rename_one' => 'Renomeado: diretório: arquivos.0.from para: diretório: arquivos.0.to',
            'rename_other' => 'Arquivos :count renomeados em :directory',
            'write' => 'Escreveu novo conteúdo para :file',
            'upload' => 'Começou um upload de arquivo',
            'uploaded' => 'Carregado: diretório: arquivo',
        ],
        'sftp' => [
            'denied' => 'Acesso SFTP bloqueado devido a permissões',
            'create_one' => 'Criado: arquivos.0',
            'create_other' => 'Criado:contar novos arquivos',
            'write_one' => 'Modificado o conteúdo de :files.0',
            'write_other' => 'Modificou o conteúdo de :count arquivos',
            'delete_one' => 'Excluído: arquivos.0',
            'delete_other' => 'Excluído:contar arquivos',
            'create-directory_one' => 'Criado o diretório :files.0',
            'create-directory_other' => 'Criado:contar diretórios',
            'rename_one' => 'Renomeado: arquivos.0.from para: arquivos.0.to',
            'rename_other' => 'Arquivos :count renomeados ou movidos',
        ],
        'allocation' => [
            'create' => 'Adicionado :allocation ao servidor',
            'notes' => 'Atualizadas as notas para :allocation de ":old" para ":new"',
            'primary' => 'Defina :allocation como a alocação do servidor primário',
            'delete' => 'Excluiu a alocação: alocação',
        ],
        'schedule' => [
            'create' => 'Criou a programação :name',
            'update' => 'Atualizado o cronograma :name',
            'execute' => 'Executou manualmente o agendamento :name',
            'delete' => 'Excluiu a programação :name',
        ],
        'task' => [
            'create' => 'Criou uma nova tarefa ":action" para o agendamento :name',
            'update' => 'Atualizada a tarefa ":action" para o agendamento :name',
            'delete' => 'Excluiu uma tarefa para o agendamento :name',
        ],
        'settings' => [
            'rename' => 'Renomeou o servidor de: antigo para: novo',
            'description' => 'Alterada a descrição do servidor de: antigo para: novo',
        ],
        'startup' => [
            'edit' => 'Alterada a variável :variable de ":old" para ":new"',
            'image' => 'Atualizada a imagem do Docker para o servidor de: old para: new',
        ],
        'subuser' => [
            'create' => 'Adicionado :email como subusuário',
            'update' => 'Atualizadas as permissões de subusuário para :email',
            'delete' => 'Removido :email como subusuário',
        ],
    ],
];
