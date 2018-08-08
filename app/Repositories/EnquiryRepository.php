<?php 

namespace App\Repositories;

use App\Models\Enquiry;
use Illuminate\Support\Facades\Auth;

class EnquiryRepository
{
    private $model;

    public function __construct(Enquiry $enquiry)
    {
        $this->model = $enquiry;
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

    public function get($with = null)
    {
        return $this->model
                    ->when($with, function($query) use ($with) {
                        return $query->with($with);
                    })
                    ->orderBy('id', 'DESC')
                    ->get();
    }

    public function paginate($limit = 10, $with = null)
    {
        return $this->model
                    ->when($with, function($query) use ($with) {
                        return $query->with($with);
                    })
                    ->orderBy('id', 'DESC')
                    ->paginate($limit);
    }

    public function store($request)
    {
        $enquiry = new Enquiry;
        $enquiry->name = $request->name;
        $enquiry->email = $request->email;
        $enquiry->subject = '';
        $enquiry->messages = $request->message;
        $enquiry->save();

        return $enquiry;
    }

    public function update($id, $request)
    {
        $enquiry = $this->find($id);
        $enquiry->name = $request->name;
        $enquiry->email = $request->email;
        $enquiry->subject = '';
        $enquiry->messages = $request->message;
        $enquiry->save();

        return $news;
    }

    public function destroy($id)
    {
        $enquiry = $this->find($id);
        $enquiry->delete();
    }
}


?>