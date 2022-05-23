<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

use App\Models\Service;
use Illuminate\Support\Facades\DB;

class MyController extends Controller
{
//    making a loop for the whole parent + sub-category list
    public static function maincategoryList()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    //
    public function index()
    {
        $sliderData = Service::limit(4)->get();
        $packagesData = Service::limit(4)->get();

        return view("front-page.index", [
            'sliderData' => $sliderData,
            'packagesData' => $packagesData
        ]);
    }

//    this is just for one single package

    public function package($id)
    {

        $data = Service::find($id);
        $images = DB::table('images')->where('product_id', $id)->get();
        return view('front-page.package', [
            'data' => $data,
            'images' => $images

        ]);

    }

    //    this is for navigation sub packages

    public function categoryServices($id)
    {

        $category = Service::find($id);
        $services = DB::table('images')->where('product_id', $id)->get();
        return view('front-page.categoryServices', [
            'category' => $category,
            'services' => $services

        ]);

    }

    public function test()
    {
        return view("Front-page.test");
    }

    // calling the same function with parameters.
    public function Param($p)
    {
        echo "it is " . $p . "yeah";
    }
}
