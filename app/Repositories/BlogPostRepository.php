<?php


namespace App\Repositories;


use App\Models\BlogPost as Model;

class BlogPostRepository extends BaseRepository
{

    /**
     * @inheritDoc
     */
    protected function getModelClass()
    {
        return Model::class;
    }

    public function getAll() {
        $this->startCondition()->all();
    }

    public function getAllWithPaginate($itemsPerPage) {
        $this->startCondition()->paginate($itemsPerPage);
    }

}
