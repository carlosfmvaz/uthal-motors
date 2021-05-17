<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announce;

class AnnounceController extends Controller
{
    public function store(Request $request)
    {
        // Converting the incoming price string into float
        $price = floatval(str_replace(['$',','],'',$request->price));

        $announce = new Announce;
        $announce->id_cat = $request->category;
        $announce->v_brand = $request->brand;
        $announce->v_model = $request->model;
        $announce->city = $request->city;
        $announce->v_price = $price;
        $announce->v_color = $request->color;
        $announce->v_description = $request->description;
        $announce->id_owner = auth()->user()->id;

        $file = $request->file('image');
        $destinationPath = 'img/announces/';

        $filename = md5($file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
        $file->move($destinationPath, $filename);

        $filePath = $destinationPath . $filename;
        $announce->image = $filePath;
        $announce->save();

        return redirect("/");
    }

  

    public function update(Request $request)
    {
        $announce = Announce::where('id', $request->id)
        ->update([
            'v_brand' => $request->brand,
            'v_model' => $request->model,
            'v_color' => $request->color,
            'city' => $request->city,
            'v_price' => $request->price,
            'v_description' => $request->description
        ]);

        return redirect('/announces/edit/'.$request->id);

    }

    public function destroy(Request $request)
    {
        Announce::where("id",$request->id)->delete();

        return redirect('/announces/list-my-announces');

    }

    public function filterAnnounces(Request $request){

        $announces = new Announce;

        $type = $request->type;

        if ($type == 'All') 
        $filteredAnnounces = $announces->all();
        if ($type == 'Low to high')
        $filteredAnnounces = $announces->orderBy('v_price','asc')->get();
        if ($type == 'High to low')
        $filteredAnnounces = $announces->orderBy('v_price','desc')->get();

        echo json_encode($filteredAnnounces);

    }
}
