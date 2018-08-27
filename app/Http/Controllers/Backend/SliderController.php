<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderStoreRequest;
use App\Http\Requests\SliderUpdateRequest;
use App\Models\Slider;
use App\Repositories\SliderRepository;
use Auth;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    private $repository;

    public function __construct(SliderRepository $sliderRepository)
    {
        $this->repository = $sliderRepository;
        $this->middleware('auth');
    }
    
    public function index()
    {
        $sliders = $this->repository->paginate(10);

    	$data = [
            'sliders' => $sliders
        ];

    	return view('backend.slider.index', $data);
    }
    
    public function create()
    {
    	return view('backend.slider.create');
    }

    public function store(SliderStoreRequest $request)
    {
        $slider = $this->repository->store($request);

        if ($request->hasFile('image')) {
            $this->repository->saveImage($slider, $request);
        }

     	return redirect()->route('slider.index')->withSuccess('Slider berhasil dibuat!');
    }

    public function edit($id)
    {
        $slider = Slider::find($id);

        if (empty($slider)) {
            return redirect()->route('slider.index')->withError('Slider tidak ditemukan!');
        }

        $data = [
            'slider' => $slider
        ];

        return view('backend.slider.edit', $data);
    }

    public function update(SliderUpdateRequest $request, $id)
    {
        $slider = $this->repository->update($id, $request);

        if ($request->hasFile('image')) {
            $this->repository->saveImage($slider, $request);
        }

        return redirect()->route('slider.index')->withSuccess('Slider berhasil diedit!');
    }

    public function destroy($id)
    {
        $slider = $this->repository->destroy($id);

        return redirect()->route('slider.index')->withSuccess('Slider berhasil didelete!');
    }

}
