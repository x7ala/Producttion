<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HaberlerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = DB::table('news')->get();

        return view('news.list', compact('news'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('news.create');
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


        DB::table('news')->insert([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'link' => $link,
            'image' => $request->input('image'),
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);

        return redirect('admin-news');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $news = DB::table('news')->where('id',$id)->first();

        return view('news.edit', compact('news'));

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


        if(!empty($request->input('image'))){

            DB::table('news')
            ->where('id',operator: $id)
            ->update(['link' => $link,'title' => $request->input('title'),'content' => $request->input('content'),'image' => $request->input('image')]);

        }else{
            DB::table('news')
            ->where('id',operator: $id)
            ->update(['link' => $link,'title' => $request->input('title'),'content' => $request->input('content')]);
        }


        return redirect('admin-news');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        DB::table('news')->where('id',$id)->delete();

        return redirect('admin-news');

    }
}
