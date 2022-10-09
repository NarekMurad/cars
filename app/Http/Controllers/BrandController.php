<?php

namespace App\Http\Controllers;

use App\Http\Repositories\BrandRepository;
use App\Http\Requests\BrandRequest;
use Illuminate\Contracts\Foundation\Application;

class BrandController extends Controller
{

    /**
     * @var Application|mixed
     */
    private $brandRepository;

    /**
     *
     */
    public function __construct()
    {
        $this->brandRepository = app(BrandRepository::class);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = $this->brandRepository->getPaginated();
        return view('admin.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  BrandRequest  $request
     */
    public function store(BrandRequest $request)
    {
        $data = $request->only(['name']);

        $this->brandRepository->create($data);

        return redirect()->route('brand.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        $brand = $this->brandRepository->getById($id);
        return view('admin.brand.create', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  BrandRequest $request
     * @param  int  $id
     */
    public function update(BrandRequest $request, $id)
    {
        $this->brandRepository->update($request->only(['name']), $id);

        return redirect()->route('brand.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        $deleted = $this->brandRepository->destroy($id);
        if ($deleted) {
            return redirect()->route('brand.index');
        }
        return redirect()->back();
    }
}
