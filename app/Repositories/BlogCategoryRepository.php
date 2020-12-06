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

    public function getAllWithPaginate(int $itemsPerPage) {
        $fields = [
            'id',
            'title',
            'parent_id',
            'description'
        ];

        return $this->startCondition()
            ->select($fields)
            ->paginate($itemsPerPage);
    }

    public function getAll() {
        return $this->startCondition()->all();
    }
}
