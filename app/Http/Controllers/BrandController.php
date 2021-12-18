<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use Laracasts\Flash\Flash;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::paginate(5);
       
        foreach($brands as $i){  
            $i->q_v=$i->vehicles->count();
            $i->name=ucfirst($i->name);
        }
      
        return view('brands.index')
            ->with('brands', $brands);
    }

    public function create()
    {
        return view('brands.create');
    }

    public function store(StoreBrandRequest $request)
    {
        $brand = new Brand();
        $brand->create($request->all());
        Flash::success('Marca Guardado');
        return redirect(route('brands.index'));
    }

    public function show($id)
    {
        $brand = Brand::find($id);

        if (empty($brand)) {
            Flash::error('Marca no encontrado');
            return redirect(route('brands.index'));
        }
        return view('brands.show')->with('brand', $brand);
    }

    public function edit($id)
    {
        $brand = Brand::find($id);
        if (empty($brand)) {
            Flash::error('Marca no encontrado');
            return redirect(route('brands.index'));
        }
        return view('brands.edit')->with('brand', $brand);
    }

    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        $brand->update($request->all());
        Flash::success('Marca');
        return redirect(route('brands.index'));
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();
        Flash::success('Marca eliminada');
        return redirect(route('brands.index'));
    }
}
