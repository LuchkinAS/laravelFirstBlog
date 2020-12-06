<?php


namespace App\Repositories;


use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository
{
    /**
     * @var Model
     */
    protected Model $model;

    /**
     * BaseRepository constructor.
     */
    public function __construct() {
        $this->model = app($this->getModelClass());
    }

    /**
     * Get model for queries
     * @return Model
     */
    protected function startCondition() {
        return clone $this->model;
    }

    /**
     * @return mixed
     */
    abstract protected function getModelClass();
}
