<?php

namespace App\Http\Controllers;
use App\Product ;
use App\Registration ;
use Symfony\Component\Process\Process;
use DB;

use Illuminate\Http\Request;

class ProductController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }
	
	 public function run(Request $request )
    { 

          // Validate the inputs
         $request->validate([
            'name' => 'required',
        ]);

        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('file')) {

            $request->validate([
                'image' => 'mimes:jpeg,jpg,png' // Only allow .jpg, and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('product', 'public');
            $id=$request->id;
            $user = DB::table('registrations')->where('id', $id)->update(['path_file' => $request->file->hashName()]);
                     

            // Store the record, using the new file hashname which will be it's new filename identity.
          
        }

	        $photo=$request->file;
		$output=exec('python3.7 C:\xampp\htdocs\laravel.trial1\laravel.trial\my-blog\pyCode.py "'.$photo.'"');
        echo $output;
        $user = DB::table('registrations')->where('id', $id)->update(['result' => $output]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
;
       
      

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
