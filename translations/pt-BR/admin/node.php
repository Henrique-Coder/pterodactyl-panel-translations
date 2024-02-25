<?php

return [
    'validation' => [
        'fqdn_not_resolvable' => 'O FQDN ou endereço IP fornecido não resulta em um endereço IP válido.',
        'fqdn_required_for_ssl' => 'É necessário um nome de domínio totalmente qualificado que resolva um endereço IP público para usar SSL para este nó.',
    ],
    'notices' => [
        'allocations_added' => 'As alocações foram adicionadas com sucesso a este nó.',
        'node_deleted' => 'O nó foi removido com sucesso do painel.',
        'location_required' => 'Você deve ter pelo menos um local configurado antes de poder adicionar um nó a esse painel.',
        'node_created' => 'Novo nó criado com sucesso. Você pode configurar automaticamente o daemon nesta máquina visitando o \'Configuration\' tab. <strong>Before you can add any servers you must first allocate at least one IP address and port.</strong>',
        'node_updated' => 'As informações do nó foram atualizadas. Se alguma configuração do daemon tiver sido alterada, você precisará reinicializá-lo para que essas alterações tenham efeito.',
        'unallocated_deleted' => 'Excluídas todas as portas não alocadas para <code>:ip</code>.',
    ],
];
