<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TestRequest;
use App\Models\Test;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $data  = Test::orderBy('meta_data->name')->get();

        return view('index',compact('data'));


     
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('create');
        
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TestRequest $request)
    {
       
        $result = Test::create([

            "meta_data" => [
                        "name"  => $request->name,
                        "email" => $request->email,
                        "city"  => $request->city,
                        "address" => [
                            "street"  => $request->street,
                            "area"    => $request->area,
                            "pincode" => $request->pincode
                        ]
                ]
        ]);
        return redirect()->route('tests.index')->with('success','Record has been added successfully'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data  = Test::findOrFail($id);
        return view('show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data  = Test::findOrFail($id);
        return view('edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated  = Test::find($id)->update(
                                [   
                                    "meta_data" => [
                                                "name"  => $request->name,
                                                "email" => $request->email,
                                                "city"  => $request->city,
                                                "address" => [
                                                    "street"  => $request->street,
                                                    "area"    => $request->area,
                                                    "pincode" => $request->pincode
                                                ]
                                        ]
                                ]

                        );
        
        if($updated)
            {
                return redirect()->route('tests.index')->with('success','Data Updated Successfully');
            } else {
                return redirect()->route('tests.index')->with('error','Error while updating the data');
            }                

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(Test::find($id)->delete())
        {
            return redirect()->route('tests.index')->with('success','Data deleted Successfully');
        } else {
            return redirect()->route('tests.index')->with('error','Error while deleting the data');
        }  

    }
}
