<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class FrontPageController extends Controller
{
    // index
    public function about()
    {
        $data['about'] = DB::table('pages')
            ->where('id', 4)
            ->first();
        return view('fronts.pages.about', $data);
    }
    public function contact()
    {
        $data['contact'] = DB::table('pages')
            ->where('id', 5)
            ->first();
        return view('fronts.pages.contact', $data);
    }
    public function page($id)
    {
        $data['page'] = DB::table('pages')
            ->where('active',1)
            ->where('id', $id)
            ->first();
        return view('fronts.pages.index', $data);
    }
    public function staff() 
    {
        $data['staffs'] = DB::table('staffs')
            ->where('active', 1)
            ->get();

        return view('fronts.pages.staff', $data);
    }
}
