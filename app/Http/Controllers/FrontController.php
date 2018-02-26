<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class FrontController extends Controller
{
    // index
    public function index()
    {
        return view('fronts.index');
    }
    public function detail($id)
    {
        $data['detail'] = DB::table('posts')->where('id', $id)->first();

        return view('fronts.detail', $data);
    }
    public function page_by_category()
    {
        $data['posts'] = DB::table('posts')
            ->where('active',1)
            ->orderBy('id', 'desc')
            ->paginate(12);
        return view('fronts.page_by_categories', $data);
    }
}
