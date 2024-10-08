<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $abouts = DB::table('about_us')->first(); // Adjust if you're using a different method
         return view('abouts.list', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('abouts.create');
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


                DB::table('about_us')->insert([
                    'prg' => $request->input('prg'),
                    'id' => $request->input('id'),
                    'created_at' => NOW(),
                    'updated_at' => NOW()
                ]);

                return redirect('admin-abouts');
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
        //
        $abouts = DB::table('about_us')->where('id',$id)->first();

        return view('abouts.edit', compact('abouts'));

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



        DB::table('about_us')
        ->where('id', $id)
        ->update(['prg' => $request->input('prg'),'updated_at' => NOW()]);


      return redirect('admin-abouts/edit/3');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        //DB::table('about_us')->where('id',$id)->delete();

        //return redirect('admin-abouts');
    }
}
