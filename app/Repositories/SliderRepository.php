<?php 

namespace App\Repositories;

use App\Models\Slider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SliderRepository
{
    private $model;

    public function __construct(Slider $slider)
    {
        $this->model = $slider;
    }

    public function find($id, $with = null)
    {
        return $this->model
                    ->where('id', $id)
                    ->when($with, function($query) use ($with) {
                        return $query->with($with);
                    })
                    ->firstOrFail();
    }

    public function get($with = null, $title = null)
    {
        return $this->model
                    ->when($with, function($query) use ($with) {
                        return $query->with($with);
                    })
                    ->when($title, function($query) use ($title) {
                        return $query->where('title', 'LIKE', '%' . $title . '%');
                    })
                    ->orderBy('id', 'DESC')
                    ->get();
    }

    public function paginate($limit = 10, $with = null, $title = null)
    {
        return $this->model
                    ->when($with, function($query) use ($with) {
                        return $query->with($with);
                    })
                    ->when($title, function($query) use ($title) {
                        return $query->where('title', 'LIKE', '%' . $title . '%');
                    })
                    ->orderBy('id', 'DESC')
                    ->paginate($limit);
    }

    public function store($request)
    {
        $slider = new Slider;
        $slider->sup_title = $request->sup_title;
        $slider->title = $request->title;
        $slider->button_text = $request->button_text;
        $slider->link = $request->link;
        $slider->text_position = $request->text_position;
        $slider->save();

        return $slider;
    }

    public function update($id, $request)
    {
        $slider = $this->find($id);
        $slider->sup_title = $request->sup_title;
        $slider->title = $request->title;
        $slider->button_text = $request->button_text;
        $slider->link = $request->link;
        $slider->text_position = $request->text_position;
        $slider->save();

        return $slider;
    }

    public function saveImage(Slider $slider, $request)
    {
        $this->deleteImage($slider);

        $image = $request->file('image');
        $fileName = time() . '_' . str_slug($request->title).'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/img/slider');
        $imagePath = $destinationPath. "/".  $fileName;
        $image->move($destinationPath, $fileName);
        
        $slider->image = $fileName;
        $slider->save();

        return $slider;
    }

    public function deleteImage($slider)
    {
        if (file_exists(public_path('img/slider/' . $slider->image))) {
            unlink(public_path('img/slider/' . $slider->image));
        }
    }

    public function destroy($id)
    {
        $this->findOrFail($id)->delete();
    }
}


?>