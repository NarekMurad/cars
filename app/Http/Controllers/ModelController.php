<?php

namespace App\Http\Controllers;

use App\Http\Repositories\BrandRepository;
use App\Http\Repositories\ModelRepository;
use App\Http\Requests\ModelRequest;
use Illuminate\Contracts\Foundation\Application;

class ModelController extends Controller
{
    /**
     * @var Application|mixed
     */
    private $modelRepository;

    /**
     * @var Application|mixed
     */
    private $brandRepository;

    public function __construct()
    {
        $this->modelRepository = app(ModelRepository::class);
        $this->brandRepository = app(BrandRepository::class);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $models = $this->modelRepository->getPaginated();
        return view('admin.model.index', compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = $this->brandRepository->getForSelect();
        return view('admin.model.create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ModelRequest  $request
     */
    public function store(ModelRequest $request)
    {
        $data = $request->only(['name', 'brand_id']);

        $this->modelRepository->create($data);

        return redirect()->route('model.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        $model = $this->modelRepository->getById($id);
        $brands = $this->brandRepository->getForSelect();

        return view('admin.model.create', compact('model', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ModelRequest $request
     * @param  int  $id
     */
    public function update(ModelRequest $request, $id)
    {
        $this->modelRepository->update($request->only(['name', 'brand_id']), $id);

        return redirect()->route('model.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        $deleted = $this->modelRepository->destroy($id);
        if ($deleted) {
            return redirect()->route('model.index');
        }
        return redirect()->back();
    }
}
