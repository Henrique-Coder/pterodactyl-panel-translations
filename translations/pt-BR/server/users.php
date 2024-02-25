<?php

return [
    'permissions' => [
        'websocket_*' => 'Permite acesso ao websocket deste servidor.',
        'control_console' => 'Permite que o usuário envie dados para o console do servidor.',
        'control_start' => 'Permite que o usuário inicie a instância do servidor.',
        'control_stop' => 'Permite que o usuário interrompa a instância do servidor.',
        'control_restart' => 'Permite que o usuário reinicie a instância do servidor.',
        'control_kill' => 'Permite que o usuário elimine a instância do servidor.',
        'user_create' => 'Permite ao usuário criar novas contas de usuário para o servidor.',
        'user_read' => 'Concede permissão ao usuário para visualizar usuários associados a este servidor.',
        'user_update' => 'Permite ao usuário modificar outros usuários associados a este servidor.',
        'user_delete' => 'Permite ao usuário excluir outros usuários associados a este servidor.',
        'file_create' => 'Concede permissão ao usuário para criar novos arquivos e diretórios.',
        'file_read' => 'Permite ao usuário visualizar arquivos e pastas associados a esta instância do servidor, bem como visualizar seu conteúdo.',
        'file_update' => 'Permite ao usuário atualizar arquivos e pastas associados ao servidor.',
        'file_delete' => 'Permite ao usuário excluir arquivos e diretórios.',
        'file_archive' => 'Permite ao usuário criar arquivos compactados e descompactar arquivos existentes.',
        'file_sftp' => 'Permite que o usuário execute as ações de arquivo acima usando um cliente SFTP.',
        'allocation_read' => 'Permite acesso às páginas de gerenciamento de alocação de servidores.',
        'allocation_update' => 'Permite permissão ao usuário para fazer modificações no servidor\'s allocations.',
        'database_create' => 'Permite permissão ao usuário para criar um novo banco de dados para o servidor.',
        'database_read' => 'Permite permissão ao usuário para visualizar os bancos de dados do servidor.',
        'database_update' => 'Permite que um usuário faça modificações em um banco de dados. Se o usuário também não tiver a permissão "Ver senha", não poderá modificar a senha.',
        'database_delete' => 'Permite que um usuário exclua uma instância de banco de dados.',
        'database_view_password' => 'Permite que um usuário visualize uma senha de banco de dados no sistema.',
        'schedule_create' => 'Permite que um usuário crie um novo agendamento para o servidor.',
        'schedule_read' => 'Permite que um usuário visualize programações de um servidor.',
        'schedule_update' => 'Permite que um usuário faça modificações em uma programação de servidor existente.',
        'schedule_delete' => 'Permite que um usuário exclua um agendamento do servidor.',
    ],
];
