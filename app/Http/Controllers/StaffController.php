<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Auth;
class StaffController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (Auth::user()==null)
            {
                return redirect("/login");
            }
            return $next($request);
        });
    }
    // index
    public function index()
    {
        $data['staffs'] = DB::table('staffs')
            ->orderBy('id', 'desc')
            ->where('active', 1)
            ->paginate(18);
        return view('staffs.index', $data);
    }
    // load create form
    public function create()
    {
        return view('staffs.create');
    }
    // save new page
    public function save(Request $r)
    {   
        $data = array(
            'name' => $r->name,
            'position' => $r->position,
            'description' => $r->description,
            'order' => $r->order,
        );
        if($r->photo) {
            $file = $r->file('photo');
            $file_name = $file->getClientOriginalName();
            $destinationPath = 'front/img/';
            $file->move($destinationPath, $file_name);
            $data['photo'] = $file_name;
        }
        $sms = "The new staff has been created successfully.";
        $sms1 = "Fail to create the new staff, please check again!";
        $i = DB::table('staffs')->insertGetId($data);

        if($i > 0) {
            $url = 'staff/view/'.$i;
            $data = array(
                'url' => $url
            );
            $i = DB::table('staffs')->where('id', $i)->update($data);
        }

        if ($i)
        {
            $r->session()->flash('sms', $sms);
            return redirect('/staff/create');
        }
        else
        {
            $r->session()->flash('sms1', $sms1);
            return redirect('/staff/create')->withInput();
        }
    }
    // delete
    public function delete($id)
    {
        DB::table('staffs')->where('id', $id)->update(['active'=>0]);
        return redirect('/staff');
    }

    public function edit($id)
    {
        $data['staff'] = DB::table('staffs')
            ->where('id',$id)->first();
        return view('staffs.edit', $data);
    }

    public function update(Request $r)
    {
        $data = array(
            'name' => $r->name,
            'position' => $r->position,
            'description' => $r->description,
            'order' => $r->order,
        );
        if($r->photo) {
            $file = $r->file('photo');
            $file_name = $file->getClientOriginalName();
            $destinationPath = 'front/img/';
            $file->move($destinationPath, $file_name);
            $data['photo'] = $file_name;
        }
        $sms = "All changes have been saved successfully.";
        $sms1 = "Fail to to save changes, please check again!";
        $i = DB::table('staffs')->where('id', $r->id)->update($data);
        if ($i)
        {
            $r->session()->flash('sms', $sms);
            return redirect('/staff/edit/'.$r->id);
        }
        else
        {
            $r->session()->flash('sms1', $sms1);
            return redirect('/staff/edit/'.$r->id);
        }
    }
    // view detail
    public function view($id) 
    {
        $data['staff'] = DB::table('staffs')
            ->where('id',$id)->first();
        return view('staffs.detail', $data);
    }
}

