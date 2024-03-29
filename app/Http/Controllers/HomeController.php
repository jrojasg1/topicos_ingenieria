<?php
 
namespace App\Http\Controllers;

use Illuminate\View\View;
 
class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index');
    }

    public function about(): View
    {
        $viewData = [];
        $viewData["title"] = "About us - Online Store";
        $viewData["subtitle"] =   "About us";
        $viewData["description"] =   "This is an about page ...";
        $viewData["author"] = "Developed by: Julian";
 
        return view('home.about')->with("viewData", $viewData);
    }
}
