<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Type;
use App\Models\Detail;
use Illuminate\Http\Request;

class TambahServiceController extends Controller
{
    public function tambahservice(){
        return view('tambahservice',);
    }

    public function storeservice(Request $request){
    $request->validate([
        'Id_Seller' => 'required',
        'Title' => 'required',
        'Description' => 'required',
        'Category' => 'required',
        'Thumbnail' => 'required|mimes:jpeg,jpg,png|file|min:10240',
        'types' => 'required|array',
        'types.*.type_name' => 'required|string',
        'types.*.details' => 'required|array',
        'types.*.details.Day' => 'required|integer',
        'types.*.details.Revision' => 'required|integer',
        'types.*.details.Price' => 'required|numeric',
        'types.*.details.Description' => 'required|string',
    ]);

    // Menghandle upload file thumbnail
    if ($request->hasFile('Thumbnail')) {
        $thumbnailPath = $request->file('Thumbnail')->store('thumbnails', 'public');
    } else {
        return back()->withErrors(['Thumbnail' => 'Failed to upload thumbnail.']);
    }

    // Menyimpan data ke tabel services
    $service = Service::create([
        'Id_Seller' => $request->Id_Seller,
        'Title' => $request->Title,
        'Description' => $request->Description,
        'Category' => $request->Category,
        'Thumbnail' => $thumbnailPath,
    ]);

    // Menyimpan data ke tabel types dan details
    foreach ($request->types as $typeData) {
        // Menyimpan data ke tabel types
        $type = Type::create([
            'id_service' => $service->id,
            'type_name' => $typeData['type_name'],
        ]);

        // Menyimpan data ke tabel details
        Detail::create([
            'id_service' => $service->id,
            'id_type' => $type->id,
            'Day' => $typeData['details']['Day'],
            'Revision' => $typeData['details']['Revision'],
            'Price' => $typeData['details']['Price'],
            'Description' => $typeData['details']['Description'],
        ]);
    }

    return redirect()->route('sellerservice');
}

}