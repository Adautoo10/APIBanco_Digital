<?php

namespace ApiBanco_Digital\Model;

use ApiBanco_Digital\DAO\ChavePixDAO;

class ChavePixModel extends Model
{
    public $id, $chave, $tipo, $id_conta;

    public function save()
    {
        $dao = new ChavePixDAO();

        if($this->id == null)
            $dao->insert($this);
        else
            $dao->update($this);
    }

    public function getAllRows()
    {
        $dao = new ChavePixDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new ChavePixDAO();

        $this->rows = $dao->selectById($id);
    }

    public function delete(int $id)
    {
        $dao = new ChavePixDAO();

        $dao->delete($id);
    }
}