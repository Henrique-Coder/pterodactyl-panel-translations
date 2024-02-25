<?php

return [
    'email' => [
        'title' => 'Atualize seu e-mail',
        'updated' => 'Seu endereço de e-mail foi atualizado.',
    ],
    'password' => [
        'title' => 'Mude sua senha',
        'requirements' => 'Sua nova senha deve ter pelo menos 8 caracteres.',
        'updated' => 'Sua senha foi atualizada.',
    ],
    'two_factor' => [
        'button' => 'Configurar autenticação de dois fatores',
        'disabled' => 'A autenticação de dois fatores foi desativada na sua conta. Você não será mais solicitado a fornecer um token ao fazer login.',
        'enabled' => 'A autenticação de dois fatores foi habilitada em sua conta! A partir de agora, ao fazer login, você deverá fornecer o código gerado pelo seu dispositivo.',
        'invalid' => 'O token fornecido era inválido.',
        'setup' => [
            'title' => 'Configure a autenticação de dois fatores',
            'help' => 'Pode\'t scan the code? Enter the code below into your application:',
            'field' => 'Insira o token',
        ],
        'disable' => [
            'title' => 'Desative a autenticação de dois fatores',
            'field' => 'Insira o token',
        ],
    ],
];
