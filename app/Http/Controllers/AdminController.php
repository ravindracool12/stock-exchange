<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class AdminController extends Controller
{
    public function getAdminPage(Request $request)
    {
        return view('layouts.admin');
    }

	public function getHomePage(Request $request)
	    {
	        return view('admin.home');
	    }

    public function getclientsPage(Request $request)
      {

    			$status = 400;
                $message = "Something went wrong";
                $clients = Client::all();

       
 		 return view('admin.clients', compact('clients'));
    }

     public function getAddClientPage(Request $request)
     {
     	return view('admin.add-clients');
     }

    public function getAddClientsPage(Request $request)
    {
     


    			$status = 400;
                $message = "Something went wrong";

                $cli_name = $request->input('name');
                $cli_email = $request->input('email');
                $cli_password = $request->input('password');
                $cli_mobile = $request->input('mobile');
       
                
                // $request->merge([ 
                //  'cust_loan_type' => implode(',', (array) $request->get('cust_loan_type'))
                // ]);

    	        $client = Client::create([
    			'name' => $cli_name,
    			'email' => $cli_email, 
    			'password' => $cli_password,   			
    			'mobile' => $cli_mobile,
 
            ]);

    	if($client)
    	{
    		 $status = 200;
             $message = "Data inserted Successfully";
             // echo $client;
             // return view('posts.result');
    	}

        else { 
             $status = 201;
             $message = "Something Went Wrong";
             // return view('posts.result');
        }

        return view('admin.add-clients')->with('success',$message);
    }
}


