<?php


namespace App\Repositories;


use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository
{
    protected Model $model;

    public function __construct() {
        $this->model = app($this->getModelClass());
    }

    protected function startCondition() {
        return clone $this->model;
    }
    abstract protected function getModelClass();
}
