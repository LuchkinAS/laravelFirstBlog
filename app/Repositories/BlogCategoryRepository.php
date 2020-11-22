<?php


namespace App\Repositories;


use App\Models\BlogCategory as Model;

class BlogCategoryRepository extends BaseRepository
{

    protected function getModelClass() {
        return Model::class;
    }

    public function getById(int $id) {
        return $this->startCondition()->find($id);
    }

    public function getForSelect() {
        return $this->startCondition()->all();
    }
}
