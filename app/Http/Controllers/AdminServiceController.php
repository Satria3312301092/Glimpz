<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\User;
use App\Models\Type;
use App\Models\Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
Use Illuminate\Support\Str;

class AdminServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $services = Service::all();
        $types = Type::all();
        $details = Detail::all();
        
        $countService = $services->count();
        return view('adminservice', compact('services', 'types','details', 'countService'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $Id_Service)
    {
        Log::info($request->all());

    
    $request->validate([
        'Title' => 'string|max:100',
        'Description' => 'string|max:100',
        'Category' => 'string|max:100',
        'ThumbnailOld' => 'string|max:100',
        'Thumbnail' => 'image|mimes:jpg,jpeg,png|max:10240',

            'Day1'=> 'string|max:100',
            'Revision1'=> 'string|max:100',
            'Price1'=> 'string|max:100',
            'Description1'=> 'string|max:100',

            'Day2'=> 'string|max:100',
            'Revision2'=> 'string|max:100',
            'Price2'=> 'string|max:100',
            'Description2'=> 'string|max:255',
    
            'Day3'=> 'string|max:100',
            'Revision3'=> 'string|max:100',
            'Price3'=> 'string|max:100',
            'Description3'=> 'string|max:255',
    ]);

    if ($request->hasFile('Thumbnail')) {
        $file = $request->file('Thumbnail');
        $filename = uniqid() . date('Y-m-d') . $file->getClientOriginalName();
        $path = $file->storeAs('public/thumbnail', $filename);
    } else {
        $filename = $request->input('ThumbnailOld');
    }
    $service = Service::find($Id_Service);

    if (!$service) {
        return redirect()->route('sellerservice.index')->with('error', 'Service not found');
    }

    
    $service->Title = $request->input('Title');
    $service->Description = $request->input('Description');
    $service->Category = $request->input('Category');
    if ($request->hasFile('Thumbnail')) {
        $service->Thumbnail = $path;
        } else {
        $service->Thumbnail = $request->input('ThumbnailOld');
        }
        
    $service->save();

    $types = Type::where('Id_Service', $Id_Service)->get();
    $detailsData = [
        [
            'Day' => $request->input('Day1'),
            'Revision' => $request->input('Revision1'),
            'Price' => $request->input('Price1'),
            'Descriptions' => $request->input('Description1'),
        ],
        [
            'Day' => $request->input('Day2'),
            'Revision' => $request->input('Revision2'),
            'Price' => $request->input('Price2'),
            'Descriptions' => $request->input('Description2'),
        ],
        [
            'Day' => $request->input('Day3'),
            'Revision' => $request->input('Revision3'),
            'Price' => $request->input('Price3'),
            'Descriptions' => $request->input('Description3'),
        ],
    ];

    foreach ($types as $index => $type) {
        $detail = Detail::where('Id_Type', $type->Id_Type)->where('Id_Service', $Id_Service)->first();
        if ($detail) {
            $detail->Day = $detailsData[$index]['Day'];
            $detail->Revision = $detailsData[$index]['Revision'];
            $detail->Price = $detailsData[$index]['Price'];
            $detail->Descriptions = $detailsData[$index]['Descriptions'];
            $detail->save();
        }
    }

    return redirect()->route('adminservice.index')->with('success_update', 'Service updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $Id_Service)
    {
        $del = Service::findorFail($Id_Service);
        $del->delete();

        return redirect()->route('adminservice.index')->with('success_del', 'Deleted Successfully');
    }
}
