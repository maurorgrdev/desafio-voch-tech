<?php

namespace App\Repositories;

abstract class AbstractRepository{
    
    protected $model;

    public function __construct() {
        $this->model = app($this->model);
    }

    public function all(){
        return $this->model->all();
    }

    public function find_by_id($id){
        return $this->model->where('id', $id)->first();
    }

    public function create(array $dados){
        return $this->model->create($dados);
    }

    public function update(array $dados, $id){
        $this->model->where('id', $id)->first();
        $this->model->fill($dados);
        $this->model->save();

        return $this->model;
    }

    public function delete($id){
        return $this->model->where('id', $id)->delete();
    }
}