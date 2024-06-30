<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Type;
use App\Models\Detail;
Use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class SellerServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambahservice',);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Log::info($request->all());
        
        $request->validate([
            'Id_Seller' => 'required|integer|max:11',
            'Title' => 'required|string|max:255',
            'Description' => 'required|string',
            'Category' => 'required|string|max:255',
            'Thumbnail' => 'required|image|mimes:jpg,jpeg,png|max:10240',

            'Day1'=> 'integer|max:10',
            'Revision1'=> 'integer|max:10',
            'Price1'=> 'string|max:100',
            'Description1'=> 'string|max:100',

            'Day2'=> 'integer|max:11',
            'Revision2'=> 'integer|max:11',
            'Price2'=> 'string|max:100',
            'Description2'=> 'string|max:255',
    
            'Day3'=> 'integer|max:11',
            'Revision3'=> 'integer|max:11',
            'Price3'=> 'string|max:100',
            'Description3'=> 'string|max:255',
            
    

        ]);
    
        // Handle file upload
        if ($request->hasFile('Thumbnail')) {
            $file = $request->file('Thumbnail');
            $filename = date('Y-m-d') . $file->getClientOriginalName() . uniqid();
            $path = $file->storeAs('public/thumbnail', $filename);
    
            // Simpan data ke database
            $service = new Service();
            $service->Id_Seller = $request->input('Id_Seller');
            $service->Title = $request->input('Title');
            $service->Description = $request->input('Description');
            $service->Category = $request->input('Category');
            $service->Thumbnail = $path;
            $service->save();
            
            $type1 = new Type();
                $type1->Id_Service = $service['Id_Service'];
                $type1->Type_Name = 'Basic';
                $type1->save();

                $type2 = new Type();
                $type2->Id_Service = $service['Id_Service'];
                $type2->Type_Name = 'Standard';
                $type2->save();

                $type3 = new Type();
                $type3->Id_Service = $service['Id_Service'];
                $type3->Type_Name = 'Premium';
                $type3->save();

                $details = [
                    [
                        'Id_Type' => $type1->Id_Type,
                        'Day' => $request->input('Day1'),
                        'Revision' => $request->input('Revision1'),
                        'Price' => $request->input('Price1'),
                        'Descriptions' => $request->input('Description1'),
                    ],
                    [
                        'Id_Type' => $type2->Id_Type,
                        'Day' => $request->input('Day2'),
                        'Revision' => $request->input('Revision2'),
                        'Price' => $request->input('Price2'),
                        'Descriptions' => $request->input('Description2'),
                    ],
                    [
                        'Id_Type' => $type3->Id_Type,
                        'Day' => $request->input('Day3'),
                        'Revision' => $request->input('Revision3'),
                        'Price' => $request->input('Price3'),
                        'Descriptions' => $request->input('Description3'),
                    ],
                ];
    
                foreach ($details as $detailData) {
                    $detail = new Detail();
                    $detail->Id_Type = $detailData['Id_Type'];
                    $detail->Id_Service = $service->Id_Service;
                    $detail->Day = $detailData['Day'];
                    $detail->Revision = $detailData['Revision'];
                    $detail->Price = $detailData['Price'];
                    $detail->Descriptions = $detailData['Descriptions'];
                    $detail->save();
    
                }

            return redirect()->route('sellerservice.index')->with('success', 'JASA BERHASIL DITAMBAHKAN');
        } else {
        return redirect()->route('tambahservice.create')->with('error', 'Thumbnail is required and must be a valid image file.');
    }
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
        return view('tambahservice',);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
