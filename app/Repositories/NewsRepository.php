<?php 

namespace App\Repositories;

use App\Models\News;
use Illuminate\Support\Facades\Auth;

class NewsRepository
{
    private $model;

    public function __construct(News $news)
    {
        $this->model = $news;
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
        $user = Auth::user();
        
        $news = new News;
        $news->title = $request->title;
        $news->content = $request->content;
        $news->created_by = $user->id;
        $news->save();

        return $news;
    }

    public function update($id, $request)
    {
        $news = $this->find($id);
        $news->title = $request->title;
        $news->content = $request->content;
        $news->save();

        return $news;
    }

    public function saveImage(News $news, $request)
    {
        $destination = public_path() . '/img/news/';
        $files = $request->image;
        $fileName = time(). '-' . str_slug($files->getClientOriginalName()) . '.' . $files->getClientOriginalExtension();

        $news->image = $fileName;
        $news->save();

        $files->move($destination, $fileName);

        return $news;
    }

    public function deleteImage($imagePath)
    {
        File::delete($imagePath);
    }

    public function destroy($id)
    {
        $this->find($id)->delete();
    }
}


?>