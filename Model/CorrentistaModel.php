<?php

namespace ApiBanco_Digital\Model;

use ApiBanco_Digital\DAO\CorrentistaDAO;

class CorrentistaModel extends Model
{
    public $id, $nome, $cpf, $data_nasc, $senha;

    public function save()
    {
        if ($this->id == null)
            (new CorrentistaDAO())->insert($this);
        else
            (new CorrentistaDAO())->update($this);
    }

    public function getAllRows()
    {
        $this->rows = (new CorrentistaDAO())->select();
    }

    public function delete(int $id)
    {
        $dao = new CorrentistaDAO();

        $dao->delete($id);
    }

    public function getById(int $id)
    {
        $dao = new CorrentistaDAO();

        $this->rows = $dao->selectById($id);
    }
}