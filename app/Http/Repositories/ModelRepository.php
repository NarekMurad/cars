<?php

namespace App\Http\Repositories;

use App\Models\Model;

class ModelRepository extends CoreRepository
{
    /**
     * @return string
     */
    protected function getModelClass()
    {
        return Model::class;
    }

    /**
     * @return mixed
     */
    public function getPaginated()
    {
        return $this->getNewModel()->paginate(config('app.pagination'));
    }

    /**
     * @param $data
     * @return void
     */
    public function create($data)
    {
        $this->getNewModel()->create($data);
    }

    /**
     * @param $id
     * @return false
     */
    public function destroy($id)
    {
        $brand = $this->getNewModel()->find($id);
        if ($brand) {
            return $brand->delete();
        }
        return false;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getById($id)
    {
        return $this->getNewModel()->find($id);
    }

    /**
     * @param $data
     * @param $id
     * @return void
     */
    public function update($data, $id)
    {
        $brand = $this->getNewModel()->find($id);

        if ($brand) {
            $brand->update($data);
        }
    }

    /**
     * @return mixed
     */
    public function getForSelect()
    {
        return $this->getNewModel()->select(['id', 'name'])->get();
    }
}
