<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CurdController extends Controller
{
    //Display data from Database in the page
    public function index()
    {
        $emp_details = DB::table('emp_details')->paginate(4);
        return view('curd', ['emp_details' => $emp_details]);
    }

    //Inserting Data into Database Query

    public function create(Request $request)
    {
        DB::table('emp_details')->insert([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'job_description' => $request->job_description,
            'salary' => $request->salary,
        ]);
        return redirect(route('index'))->with('status', 'Added !!');
    }

    //Search Employee Data using ID to Update Query

    public function CurdEdit($id)
    {
        $emp_details = DB::table('emp_details')->find($id);
        return view('curdedit', ['emp_details' => $emp_details]);
    }

    //Updating Employee Data Query
    public function curdupdate(Request $request, $id)
    {
        DB::table('emp_details')->where('id', $id)->update([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'job_description' => $request->job_description,
            'salary' => $request->salary,
        ]);
        return redirect(route('index'))->with('status', 'Data Updated!!');
    }


    //Delete Employee Query
    public function delete($id)
    {
        DB::table('emp_details')->where('id', $id)->delete();
        return redirect(route('index'))->with('status', 'Data Deleted !!');
    }
}
