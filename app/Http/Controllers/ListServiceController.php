<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ListServiceController extends Controller
{
    public function show()
    {
        $data = Service::get();
        foreach ($data as $service) {
            $title[] = $service->Title;
            $desk[] = $service->Description;
            $category[] = $service->Category;
            $thumbnail[] = $service->Thumbnail;
            }
            return view('listservice', compact('title', 'desk', 'category', 'thumbnail'));
    }
}
