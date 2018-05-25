<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use Auth;
use File;

class NewsController extends Controller
{
    public function index()
    {
    	$retrieveData = News::latest('created_at')->paginate(10);
    	return view('backend.news.index', compact('retrieveData'));
    }
    
    public function create()
    {
    	return view('backend.news.edit-add');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
            'title'   => 'required',
            'content' => 'required',
            'image'   => 'required|mimes:jpeg,jpg,png',
        ]);
		if ($request->hasFile('image')) {
			$destinationPath = public_path().'/img/uploads';
			$files = $request->image;
			$file_name = 'uploads/'. time(). '-' . str_slug(stristr($files->getClientOriginalName(), '.', true)).'.'. $files->getClientOriginalExtension();
			$files->move($destinationPath, $file_name);
		}

		$news             = new News;
		$news->created_by = Auth::user()->id;
		$news->title      = request('title');
		$news->content    = request('content');
		$news->image      = $file_name;
     	$news->save();

     	return redirect()->route('admin.news.index')->withSuccess('Add News Success!');
    }

    public function show($id)
    {
        $news = News::find($id);
        if (empty($news)) {
            return redirect()->route('admin.news.index')->withError('News Not Found!');
        }
        return view('backend.news.show', compact('news'));
    }

    public function edit($id)
    {
        $retrieveData = News::find($id);
        if (empty($retrieveData)) {
            return redirect()->route('admin.news.index')->withError('News Not Found!');
        }
        return view('backend.news.edit-add', compact('retrieveData'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'   => 'required',
            'content' => 'required',
            'image'   => 'required|mimes:jpeg,jpg,png',
        ]);

        $news = News::find($id);
        if (empty($news)) {
            return redirect()->route('admin.news.index')->withError('News Not Found!');
        }

        if ($request->hasFile('image')) {
            $image_path = 'img/'.$news->image;
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
            
            $destinationPath = public_path().'/img/uploads';
            $files = $request->image;
            $file_name = 'uploads/'. time(). '-' . str_slug($files->getClientOriginalName()).'.'. $files->getClientOriginalExtension();
            
            $files->move($destinationPath, $file_name);

            $news->image = $file_name;
        }

        $news->created_by = Auth::user()->id;
        $news->title      = request('title');
        $news->content    = request('content');
        $news->save();

        return redirect()->route('admin.news.index')->withSuccess('Update News Success!');
    }

    public function destroy($id)
    {
    	$news = News::find($id);
        if (empty($news)) {
            return redirect()->route('admin.news.index')->withError('News Not Found!');
        }
        $image_path = 'img/'.$news->image;
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        $news->delete();

        return redirect()->route('admin.news.index')->withSuccess('Delete News Success!');
    }

}
