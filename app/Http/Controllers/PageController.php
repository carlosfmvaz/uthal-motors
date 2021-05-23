<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Announce;

class PageController extends Controller
{
    public function makeAnnounce()
    {
        $categories = Category::all();

        return view('announces/make-announce', ['categories' => $categories]);
    }

    public function welcome()
    {
        // SELECT announces.*, categories.cat_name FROM announces 
        // INNER JOIN categories ON announces.id_cat = categories.id 
        $announces = Announce::join('categories', 'announces.id_cat', '=', 'categories.id')
            ->orderBy('id','desc')
            ->limit(4)
            ->get(['announces.*', 'categories.cat_name']);

        $offersQty = Announce::all();

        return view('welcome', ['announces' => $announces, 'offersQty' => count($offersQty)]);
    }

    public function editAnnounce($id)
    {
        $announce = Announce::join('categories', 'announces.id_cat', '=', 'categories.id')
            ->where('announces.id', $id)
            ->get(['announces.*', 'categories.cat_name']);

        $categories = Category::all();

        // if the owner id is different from the logged id redirect to main page
        if (auth()->user()->id != $announce[0]->id_owner){
            return redirect("/");
        } 

        return view('announces/edit-announce', ['announce' => $announce , 'categories' => $categories]);
    }

    public function showAnnounce($id)
    {
        $announce = Announce::join('categories', 'announces.id_cat', '=', 'categories.id')
            ->where('announces.id', $id)
            ->get(['announces.*', 'categories.cat_name']);

        $announce_location = (empty($announce[0]['city']) ? '' : $announce[0]['city'] . ' - ') . $announce[0]['state'] . ' - ' . strtoupper($announce[0]['country']);

        return view('public-announces/announce-details', ['announce' => $announce, 'announce_location' => $announce_location]);
    }
    
    public function listMyAnnounces()
    {
        $user = auth()->user();

        $announces = Announce::join('categories', 'announces.id_cat', '=', 'categories.id')
            ->get(['announces.*', 'categories.cat_name'])
            ->where('id_owner', $user->id);

        return view('announces/list-my-announces', ['announces' => $announces]);
    }

}


