<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\UserProfile;
use App\User;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
           $profiles=UserProfile::all()->toArray();
           return view('Profile', compact('profiles'));
    	
      
    }
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    	/* return UserProfile::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'surname' => ($data['surname']),
        ]);*/
          return view('Profile');
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
        
    	$profile=new UserProfile([
    	 'name' => $request->get('name'),
    	 'surname' => $request->get('surname'), 
    	 'email' => $request->get('email'),
    	 'user_id' => $request->get('user_id')
    	]);
   
    	$profile->save();
    	echo "Successfully inserted the data";
    	//return redirect()->route('userprofile')->with('success','Data Added');
    	
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
}
