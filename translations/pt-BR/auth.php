<?php

return [
    'sign_in' => 'Entrar',
    'go_to_login' => 'Vá para Entrar',
    'failed' => 'Nenhuma conta correspondente a essas credenciais foi encontrada.',

    'forgot_password' => [
        'label' => 'Esqueceu sua senha?',
        'label_help' => 'Digite o endereço de e-mail da sua conta para receber instruções sobre como redefinir sua senha.',
        'button' => 'Recuperar a conta',
    ],

    'reset_password' => [
        'button' => 'Reset and Entrar',
    ],

    'two_factor' => [
        'label' => 'Token de 2 fatores',
        'label_help' => 'Esta conta requer uma segunda camada de autenticação para continuar. Por favor, insira o código gerado pelo seu dispositivo para concluir este login.',
        'checkpoint_failed' => 'O token de autenticação de dois fatores era inválido.',
    ],

    'throttle' => 'Muitas tentativas de login. Por favor, tente novamente em: segundos segundos.',
    'password_requirements' => 'A senha deve ter pelo menos 8 caracteres e ser exclusiva deste site.',
    '2fa_must_be_enabled' => 'O administrador exigiu que a autenticação de dois fatores estivesse habilitada para sua conta para poder usar o Painel.',
];
