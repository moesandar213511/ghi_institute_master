<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomClass\EnrollData;
use App\Enrollment;
use Session;

class EnrollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.site_admin.enrollment')->with([
            'url'=>'enrollment'
        ]);
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
        $event_name = $request->get('event_name');
        $name = $request->get('name');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $job_title = $request->get('job_title');
        $education = $request->get('education');
        $address = $request->get('address');
        Enrollment::create([
            'event_name' => $event_name,
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'job_title' => $job_title,
            'education' => $education,
            'address' => $address
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function get_all_enrollment()
    {
        $enrolls=Enrollment::orderBy('id', 'desc')->get();
        $arr=[];
        foreach ($enrolls as $data){
            $enroll_data=new EnrollData($data->id);
            array_push($arr,$enroll_data->getEnrollData());
        }
        // return $arr;
         return json_encode($arr);
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
        Enrollment::find($id)->delete();
        // return redirect('/admin/contact');
    }
    
}
