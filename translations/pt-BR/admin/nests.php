<?php

return [
    'notices' => [
        'created' => 'Um novo ninho, :name, foi criado com sucesso.',
        'deleted' => 'Excluiu com sucesso o ninho solicitado do Painel.',
        'updated' => 'Atualizadas com sucesso as opções de configuração do ninho.',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'Importou com sucesso este ovo e suas variáveis ​​associadas.',
            'updated_via_import' => 'Este ovo foi atualizado usando o arquivo fornecido.',
            'deleted' => 'Excluiu com sucesso o ovo solicitado do Painel.',
            'updated' => 'A configuração do ovo foi atualizada com sucesso.',
            'script_updated' => 'O script de instalação do Egg foi atualizado e será executado sempre que os servidores forem instalados.',
            'egg_created' => 'Um novo ovo foi posto com sucesso. Você precisará reiniciar todos os daemons em execução para aplicar este novo ovo.',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => 'A variável ":variable" foi excluída e não estará mais disponível para servidores após a reconstrução.',
            'variable_updated' => 'A variável ":variable" foi atualizada. Você precisará reconstruir todos os servidores usando esta variável para aplicar as alterações.',
            'variable_created' => 'A nova variável foi criada e atribuída com sucesso a este ovo.',
        ],
    ],
];
