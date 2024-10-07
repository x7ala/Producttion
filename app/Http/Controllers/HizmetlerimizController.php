<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HizmetlerimizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $services = DB::table('services')->get();

        return view('services.list', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view(view: 'services.create');
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

        DB::table('services')->insert([
            'id' => $request->input('id'),
            'link' => $link,
            'image' => $request->input('image'),
            'title' => $request->input('title'),
            'summary' => $request->input('summary'),
            'content' => $request->input('content'),
            'sort_order' => $request->input(key: 'sort_order'),
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);

        return redirect('admin-services');
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
        $services = DB::table('services')->where('id',$id)->first();

        return view('services.edit', compact('services'));
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

            DB::table('services')
            ->where('id',operator: $id)
            ->update(['link' => $link,'image' => $request->input('image'),'title' => $request->input('title'),'summary' => $request->input('summary'),'content' => $request->input('content'),'sort_order' => $request->input('sort_order')]);

        }else{
            DB::table('services')
            ->where('id',operator: $id)
            ->update(['link' => $link,'title' => $request->input('title'),'summary' => $request->input('summary'),'content' => $request->input('content'),'sort_order' => $request->input('sort_order')]);
        }


        return redirect('admin-services');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        DB::table('services')->where('id',$id)->delete();

        return redirect('admin-services');
    }
}
