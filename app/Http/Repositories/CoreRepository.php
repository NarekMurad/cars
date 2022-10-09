<?php

namespace App\Http\Repositories;

use Illuminate\Contracts\Foundation\Application;

abstract class CoreRepository
{
    /**
     * @var Application|mixed
     */
    protected $model;

    public function __construct()
    {
        $this->model = app($this->getModelClass());
    }

    /**
     * @return Application|mixed
     */
    protected function getNewModel()
    {
        return clone $this->model;
    }

    /**
     * @return mixed
     */
    abstract protected function getModelClass();
}
