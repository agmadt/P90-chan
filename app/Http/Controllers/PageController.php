<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Repositories\EnquiryRepository;
use Illuminate\Http\Request;

class PageController extends Controller
{

    private $enquiryRepository;

    public function __construct(EnquiryRepository $enquiryRepository)
    {
        $this->enquiryRepository = $enquiryRepository;
    }

    public function about()
    {
        $data = [];

        return view('frontend.about', $data);
    }

    public function donation()
    {
        $data = [];

        return view('frontend.donation', $data);
    }

    public function contactUs()
    {
        $data = [];

        return view('frontend.contact', $data);
    }

    public function storeContact(StoreContactRequest $request)
    {
        $this->enquiryRepository->store($request);

        return redirect()->route('contact-us')->with('success', 'Pesan anda telah kami terima, terimakasih!');
    }
}
