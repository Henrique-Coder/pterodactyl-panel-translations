<?php

return [
    'daemon_connection_failed' => 'Houve uma exceção ao tentar se comunicar com o daemon, resultando em um código de resposta HTTP/:code. Esta exceção foi registrada.',
    'node' => [
        'servers_attached' => 'Um nó não deve ter servidores vinculados a ele para ser excluído.',
        'daemon_off_config_updated' => 'A configuração do daemon <strong>foi atualizada</strong>, porém foi encontrado um erro ao tentar atualizar automaticamente o arquivo de configuração no Daemon. Você precisará atualizar manualmente o arquivo de configuração (config.yml) do daemon para aplicar essas alterações.',
    ],
    'allocations' => [
        'server_using' => 'Um servidor está atualmente atribuído a esta alocação. Uma alocação só poderá ser excluída se nenhum servidor estiver atribuído no momento.',
        'too_many_ports' => 'Não há suporte para adicionar mais de 1.000 portas em um único intervalo de uma só vez.',
        'invalid_mapping' => 'O mapeamento fornecido para :port era inválido e não pôde ser processado.',
        'cidr_out_of_range' => 'A notação CIDR permite apenas máscaras entre /25 e /32.',
        'port_out_of_range' => 'As portas em uma alocação devem ser maiores que 1.024 e menores ou iguais a 65.535.',
    ],
    'nest' => [
        'delete_has_servers' => 'Um Nest com servidores ativos anexados não pode ser excluído do Painel.',
        'egg' => [
            'delete_has_servers' => 'Um Egg com servidores ativos anexados não pode ser excluído do Painel.',
            'invalid_copy_id' => 'O Egg selecionado para copiar um script não existe ou está copiando um script.',
            'must_be_child' => 'A diretiva "Copiar configurações de" para este ovo deve ser uma opção secundária para o ninho selecionado.',
            'has_children' => 'Este Ovo é pai de um ou mais Ovos. Por favor, exclua esses Ovos antes de excluir este Ovo.',
        ],
        'variables' => [
            'env_not_unique' => 'A variável de ambiente :name deve ser exclusiva para este Egg.',
            'reserved_name' => 'A variável de ambiente :name é protegida e não pode ser atribuída a uma variável.',
            'bad_validation_rule' => 'A regra de validação ":rule" não é uma regra válida para este aplicativo.',
        ],
        'importer' => [
            'json_error' => 'Ocorreu um erro ao tentar analisar o arquivo JSON::error.',
            'file_error' => 'O arquivo JSON fornecido não era válido.',
            'invalid_json_provided' => 'O arquivo JSON fornecido não está em um formato que possa ser reconhecido.',
        ],
    ],
    'subusers' => [
        'editing_self' => 'Não é permitido editar sua própria conta de subusuário.',
        'user_is_owner' => 'Você não pode adicionar o proprietário do servidor como subusuário deste servidor.',
        'subuser_exists' => 'Um usuário com esse endereço de e-mail já está atribuído como subusuário deste servidor.',
    ],
    'databases' => [
        'delete_has_databases' => 'Não é possível excluir um servidor host de banco de dados que tenha bancos de dados ativos vinculados a ele.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'O tempo máximo de intervalo para uma tarefa encadeada é de 15 minutos.',
    ],
    'locations' => [
        'has_nodes' => 'Não é possível excluir um local que tenha nós ativos anexados a ele.',
    ],
    'users' => [
        'node_revocation_failed' => 'Falha ao revogar chaves em <a href=":link">Node #:node</a>. :erro',
    ],
    'deployment' => [
        'no_viable_nodes' => 'Nenhum nó que atendesse aos requisitos especificados para implantação automática foi encontrado.',
        'no_viable_allocations' => 'Não foram encontradas alocações que atendessem aos requisitos para implantação automática.',
    ],
    'api' => [
        'resource_not_found' => 'O recurso solicitado não existe neste servidor.',
    ],
];
