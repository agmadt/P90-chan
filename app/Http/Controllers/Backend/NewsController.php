<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsStoreRequest;
use App\Http\Requests\NewsUpdateRequest;
use App\Models\News;
use App\Repositories\NewsRepository;
use Auth;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    private $repository;

    public function __construct(NewsRepository $newsRepository)
    {
        $this->repository = $newsRepository;
        $this->middleware('auth');
    }
    
    public function index()
    {
        $news = $this->repository->paginate(10);

    	$data = [
            'news' => $news
        ];

    	return view('backend.news.index', $data);
    }
    
    public function create()
    {
    	return view('backend.news.edit-add');
    }

    public function store(NewsStoreRequest $request)
    {
        $news = $this->repository->store($request);

        if ($request->hasFile('image')) {
            $this->repository->saveImage($news, $request);
        }

     	return redirect()->route('news.index')->withSuccess('Add News Success!');
    }

    public function show($id)
    {
        $news = News::find($id);
        if (empty($news)) {
            return redirect()->route('news.index')->withError('News Not Found!');
        }
        return view('backend.news.show', compact('news'));
    }

    public function edit($id)
    {
        $retrieveData = News::find($id);
        if (empty($retrieveData)) {
            return redirect()->route('news.index')->withError('News Not Found!');
        }
        return view('backend.news.edit-add', compact('retrieveData'));
    }

    public function update(NewsUpdateRequest $request, $id)
    {
        $news = $this->repository->update($id, $request);

        if ($request->hasFile('image')) {
            $this->repository->saveImage($news, $request);
        }

        return redirect()->route('news.index')->withSuccess('Update News Success!');
    }

    public function destroy($id)
    {
        $news = $this->repository->destroy($id);
        return redirect()->route('news.index')->withSuccess('Delete News Success!');
    }

}
