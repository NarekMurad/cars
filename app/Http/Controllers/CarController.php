<?php

namespace App\Http\Controllers;

use App\Http\Repositories\CarRepository;
use App\Http\Repositories\ModelRepository;
use App\Http\Requests\CarRequest;
use Illuminate\Contracts\Foundation\Application;

class CarController extends Controller
{
    /**
     * @var Application|mixed
     */
    private $modelRepository;

    /**
     * @var Application|mixed
     */
    private $carRepository;

    /**
     *
     */
    public function __construct()
    {
        $this->modelRepository = app(ModelRepository::class);
        $this->carRepository = app(CarRepository::class);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = $this->carRepository->getPaginated();
        return view('admin.car.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $models = $this->modelRepository->getForSelect();
        return view('admin.car.create', compact('models'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CarRequest  $request
     */
    public function store(CarRequest $request)
    {
        $this->carRepository->create($request);

        return redirect()->route('car.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        $car = $this->carRepository->getById($id);
        $models = $this->modelRepository->getForSelect();

        return view('admin.car.create', compact('car', 'models'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CarRequest $request
     * @param  int  $id
     */
    public function update(CarRequest $request, $id)
    {
        $this->carRepository->update($request, $id);

        return redirect()->route('car.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        $deleted = $this->carRepository->destroy($id);
        if ($deleted) {
            return redirect()->route('car.index');
        }
        return redirect()->back();
    }
}
