<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RefsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $references = DB::table('references')->first(); // Adjust if you're using a different method
        return view('references.list', compact('references'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(view: 'references.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         /*Seo Url*/
         $s = $request->input('title');
         $tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',':',',','?',"'",'"',"“","’","â");
         $eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','','','','','','','');
         $s = str_replace($tr,$eng,$s);
         $s = strtolower($s);
         $s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
         $s = preg_replace('/\s+/', '-', $s);
         $s = preg_replace('|-+|', '-', $s);
         $s = preg_replace('/#/', '', $s);
         $s = preg_replace('/!/', '', $s);
         $s = preg_replace('/\’/', '-', $s);
         $s = str_replace('.', '', $s);
         $s = trim($s, '-');
         $link = $s;
         /*Seo Url*/


       DB::table('references')->insert([
           'description' => $request->input('description'),
           'created_at' => NOW(),
           'updated_at' => NOW()
       ]);

       return redirect('admin-references');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $references = DB::table('references')->where('id',$id)->first();

        return view('references.edit', compact('references'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        /*Seo Url*/
        $s = $request->input('title');
        $tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',':',',','?',"'",'"',"“","’","â");
        $eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','','','','','','','');
        $s = str_replace($tr,$eng,$s);
        $s = strtolower($s);
        $s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
        $s = preg_replace('/\s+/', '-', $s);
        $s = preg_replace('|-+|', '-', $s);
        $s = preg_replace('/#/', '', $s);
        $s = preg_replace('/!/', '', $s);
        $s = preg_replace('/\’/', '-', $s);
        $s = str_replace('.', '', $s);
        $s = trim($s, '-');
        $link = $s;
        /*Seo Url*/



        DB::table('references')
        ->where('id', $id)
        ->update(['description' => $request->input('description')]);
        

      return redirect('admin-references');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        DB::table('references')->where('id',$id)->delete();

        return redirect('admin-references');
    }
}
