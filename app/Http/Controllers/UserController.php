<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Profile;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function getID($id)
    {
        $userInfo = Profile::find(Auth::id())->with('personalInfo')->first();
        return view('',compact('user'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function getUserPage(Request $request)
    {
        return view('layouts.user');
    }

    public function getDashboardPage(Request $request)
    {
        return view('users.dashboard');
    }

    public function getPersonalPage(Request $request)
    {
        return view('users.personal');
    }


    public function getPersonalsPage(Request $request)
    {
     
              $file = $request->file("photo");
               echo "File Name: ".$file->getClientOriginalName()."<br/>";
               echo "File Extension: ".$file->getClientOriginalExtension()."<br/>";
               echo "File Real Path: ".$file->getRealPath(). "<br/>";
               echo "File Size: ".$file->getSize()."<br/>";
               echo "File Mime Type: ".$file->getMimeType();

               // if($request->hasFile("photo")){
               //     $file = $request->file("photo");

               //   $file->move("upload/",$file->getClientOriginalName());
               // }

              $validatedData = $request->validate([
               // 'fname'     => 'required',
               // 'lname'     => 'required',            
               'email'    => 'required',
               'phone'    => 'required',
               'city'     => 'required',
               'photo'     => 'required',
               // 'startdate'    => 'required',
               // 'location'     => 'required',
               // 'password' => 'required',
          ]);
        $profile = new Profile;
        // if (Input::hasfile('bank_logo')) {
        //    $file=Input::file('bank_logo');
        //    $file->move(public_path(). '/images/logos', $file->getClientOriginalName());
        //    $bank->bank_logo=$file->getClientOriginalName();
        // }
        // $profile->user_fname        = $request->fname;
        // $profile->user_lname        = $request->lname;
        $profile->user_email       = $request->email;
        $profile->user_phone       = $request->phone;
        $profile->user_city        = $request->city;
        // $profile->user_password        = $request->password;
        $profile->user_photo        = $file->getClientOriginalName();
        // $profile->user_startdate   = $request->startdate;
        // $profile->user_location    = $request->location;
        $profile->save();
         // echo $profile;
         return redirect('users/dashboard')->with('success', "Data Successfully Inserted");
    }


    //     return view('users.personal')->with('success',$message);
    // }



    public function getVerificationPage(Request $request)
    {
        return view('users.verification');
    }

    public function getPortfolioPage(Request $request)
    {

        return view('users.portfolio');
    }

    public function getWithdrawFundsPage(Request $request)
    {
        return view('users.withdraw-funds');
    }

    public function getTradingHistoryPage(Request $request)
    {
        return view('users.trading-history');
    }

    public function getContactSupportPage(Request $request)
    {
        return view('users.contact-support');
    }


    public function getAccountSettingsPage(Request $request)
    {
        // $data = Auth::id()
        return view('users/profile.account-settings');
    }
     
      

      
}

