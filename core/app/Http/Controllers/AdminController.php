<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Session;
use App\user;

session_start();

class AdminController extends Controller
{
    private $db;



    //login check and redirect
    public function login(Request $request)
    {


        if ($request->isMethod('post')) {
            $data = $request->input();
            if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
                return Redirect('/Product');
            } else {
                return Redirect('/login')->with('message', 'Invalid User Name Or Password');
            }
        }
        return view('distributor.login');
    }

    public function product()
    {

        return view('distributor.product');
    }

    public function saveProduct(Request $request)
    {
        //dd($request);
        /*var item_code = $('#item_code').val();
        var item_name = $('#item_name').val();
        var item_factor = $('#item_factor').val();
        var item_rate = $('#item_rate').val();
        var status = $('#status').val();*/


        $item_code = $request->item_code;
        $item_name = $request->item_name;
        $item_factor = $request->item_factor;
        $item_rate = $request->item_rate;
        $status = $request->status;

        $sql = "INSERT INTO `td_prduct`(`code`, `name`, `rate`, `factor`, `status`)
 VALUES ('$item_code', '$item_name', '$item_factor', '$item_rate', '$status')";



        DB::connection($this->db)->select(DB::raw("SET sql_mode=''"));
        $srData = DB::connection($this->db)->select(DB::raw($sql));

        return $srData;

    }


    //dashboard view
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    //logout and redirect
    public function logout()
    {
        Session::flush();
        return Redirect('/login')->with('message_success_info', 'Logout Successfully!!!');
    }
}
