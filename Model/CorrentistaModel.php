<?php

namespace ApiBanco_Digital\Model;

use ApiBanco_Digital\DAO\CorrentistaDAO;


class CorrentistaModel extends Model
{
  
    public $id, $nome, $email, $cpf, $data_nascimento, $senha;

    public function save() : ?CorrentistaModel
    {
        return (new CorrentistaDAO())->save($this);     
    }

    public function getByCpfAndSenha($cpf, $senha) : CorrentistaModel
    {      
        return (new CorrentistaDAO())->selectByCpfAndSenha($cpf, $senha);
    }
}