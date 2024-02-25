<?php

return [
    'exceptions' => [
        'no_new_default_allocation' => 'Você está tentando excluir a alocação padrão deste servidor, mas não há nenhuma alocação substituta para usar.',
        'marked_as_failed' => 'Este servidor foi marcado como tendo falhado em uma instalação anterior. O status atual não pode ser alternado neste estado.',
        'bad_variable' => 'Ocorreu um erro de validação com a variável :name.',
        'daemon_exception' => 'Houve uma exceção ao tentar se comunicar com o daemon, resultando em um código de resposta HTTP/:code. Esta exceção foi registrada. (id da solicitação:: request_id)',
        'default_allocation_not_found' => 'A alocação padrão solicitada não foi encontrada neste servidor\'s allocations.',
    ],
    'alerts' => [
        'startup_changed' => 'A configuração de inicialização deste servidor foi atualizada. Se este servidor\'s nest or egg was changed a reinstall will be occurring now.',
        'server_deleted' => 'O servidor foi excluído com sucesso do sistema.',
        'server_created' => 'O servidor foi criado com sucesso no painel. Aguarde alguns minutos para que o daemon instale completamente este servidor.',
        'build_updated' => 'Os detalhes de construção deste servidor foram atualizados. Algumas alterações podem exigir uma reinicialização para entrar em vigor.',
        'suspension_toggled' => 'O status de suspensão do servidor foi alterado para :status.',
        'rebuild_on_boot' => 'Este servidor foi marcado como exigindo uma reconstrução do Docker Container. Isso acontecerá na próxima vez que o servidor for iniciado.',
        'install_toggled' => 'O status de instalação deste servidor foi alternado.',
        'server_reinstalled' => 'Este servidor foi colocado na fila para reinstalação a partir de agora.',
        'details_updated' => 'Os detalhes do servidor foram atualizados com sucesso.',
        'docker_image_updated' => 'Alterada com êxito a imagem padrão do Docker a ser usada para este servidor. Uma reinicialização é necessária para aplicar esta alteração.',
        'node_required' => 'Você deve ter pelo menos um nó configurado antes de poder incluir um servidor neste painel.',
        'transfer_nodes_required' => 'Você deve ter pelo menos dois nós configurados antes de poder transferir servidores.',
        'transfer_started' => 'A transferência do servidor foi iniciada.',
        'transfer_not_viable' => 'O nó selecionado não possui o espaço em disco necessário ou a memória disponível para acomodar este servidor.',
    ],
];
