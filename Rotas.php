<?php

use ApiBanco_Digital\Controller\
{
    ChavePixController,
    ContaController,
    CorrentistaController,
    TransacaoController
};


$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    switch($url)
    {
        case '/correntista/save': 
            CorrentistaController::save();       
        break;

        case '/conta/extrato':
            ContaController::Extrato();
        break;

        case '/conta/pix/enviar':
            ContaController::Enviar();
        break;

        case 'conta/pix/receber':
            ContaController::Receber();
        break;

        case '/correntista/entregar':
            CorrentistaController::entrar();
        break;

        default:
        http_response_code(403);
        break;

    }