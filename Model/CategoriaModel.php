<?php

class CategoriaModel
{
    public $id, $nome;

    public $rows;

    public function save()
    {
        include 'DAO/CategoriaDAO.php';

        $dao = new CategoriaDAO();

        if($this->id == null) {
            $dao->insert($this);
        } else {
            // update
        }
    }

    public function getAllRows(){
        include 'DAO/CategoriaDAO.php';

        $dao = new CategoriaDAO();

        $this->rows = $dao->getAllRows();
    }
}