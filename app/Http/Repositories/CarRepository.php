<?php

namespace App\Http\Repositories;

use App\Models\Car;
use Illuminate\Support\Facades\Storage;

class CarRepository extends CoreRepository
{
    /**
     * @return string
     */
    protected function getModelClass()
    {
        return Car::class;
    }

    /**
     * @return mixed
     */
    public function getPaginated()
    {
        return $this->getNewModel()->paginate(config('app.pagination'));
    }

    /**
     * @param $request
     * @return void
     */
    public function create($request)
    {
        $file = $request->file('photo');
        $path = $file->store('photos', ['disk' => 'public']);
        $data = $request->only(['model_id', 'photo', 'year', 'color', 'number', 'rental_price_per_day', 'transmission']);
        $data['photo'] = '/storage/'.$path;

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
     * @param $request
     * @param $id
     * @return void
     */
    public function update($request, $id)
    {
        $car = $this->getNewModel()->find($id);

        if ($car) {
            $file = $request->file('photo');
            $path = $file->store('photos', ['disk' => 'public']);
            $data = $request->only(['model_id', 'photo', 'year', 'color', 'number', 'rental_price_per_day', 'transmission']);
            $data['photo'] = '/storage/'.$path;
            $car->update($data);
        }
    }
}
