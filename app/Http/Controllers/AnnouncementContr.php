<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class AnnouncementContr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announcement =  new \App\Announcement();
  
        if(request()->has('OrderBy') && request('OrderBy') == 'Price'){
            //echo request('OrderBy') == 'Price';
            $announcement = $announcement->orderBy(request('OrderBy'), 'ASC')->where('Disponibility', True);
        }
        else if(request()->has('OrderBy') && request('OrderBy') == 'PublishedTime'){
            $announcement = $announcement->orderBy(request('OrderBy'), 'DESC')->where('Disponibility', True);    
        }
        $announcement = $announcement->orderBy('PublishedTime', 'DESC')->where('Disponibility', True);
        $announcement = $announcement->paginate(3)->appends([
            'OrderBy' => request('OrderBy'),
        ]);
        return view('home', compact('announcement'));
    }

   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function category($category)
    {
        $announcement = new \App\Announcement;

        if(request()->has('OrderBy') && request('OrderBy') == 'Price'){
            //echo request('OrderBy') == 'Price';
            $announcement = $announcement->orderBy(request('OrderBy'), 'ASC')->where('Disponibility', True);
        }
        else if(request()->has('OrderBy') && request('OrderBy') == 'PublishedTime'){
            $announcement = $announcement->orderBy(request('OrderBy'), 'DESC')->where('Disponibility', True);    
        }
        $announcement = $announcement -> where('Category', $category)->where('Disponibility', True)->paginate(3)->appends([
            'OrderBy' => request('OrderBy'),
        ]);
        return view('home', compact('announcement'));
    }

    /**
     * Retorna la región de un id de un anuncio.
     *
     * @param  int  $id
     * @return String
     */
     public static function region($id)
    {
        $address = \App\Announcement::find($id)->announcementAddress;
        return $address->region;
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
        $announcement = new \App\Announcement();
       
        $announcement->NameProduct = $request->NameProduct;
        $announcement->Price = $request->price;
        $announcement->PriceXTime = $request->PriceXTime;
        $announcement->Description = $request->Description;
        $announcement->QualificationAverage = $request->QualificationAverage;
        $announcement->Disponibility = $request->Disponibility;
        $announcement->ImageFormat = $request->ImageFormat;
        $announcement->PublishedTime = $request->PublishedTime;
        $announcement->Category = $request->Category;
        $announcement->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $announcement = \App\Announcement::find($id);
        $user = \App\UserProduct::find($id)->user;
        $address = \App\Announcement::find($id)->announcementAddress;
        $comments = \App\Announcement::find($id)->productComment;

        foreach ($comments as $comment) {
            $userComment = \App\productComment::find($comment->id)->user;
            $userName = $userComment->userName;
            $comment->user_id = $userName;     
        }

        return view('announcement', ['data' => array($announcement, $user, $address, $comments)]);
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
        $announcement = \App\Announcement::findOrFail($id);
        $announcement->update($request->all());
        $announcement->save();

        return view('reservedProduct');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function disponibility($id)
    {
        
        $announcement = \App\Announcement::findOrFail($id);
        $user = \App\UserProduct::find($id)->user;
        if (Auth::check()) {
            // The user is logged in...
            $announcement->Disponibility = False;
            $announcement->save();
            //return redirect()->route('reservedProduct')->with(compact(['announcement','user']));
            return view('reservedProduct', compact('user'));
        }
        
        
        return redirect()->route('login')->with('idAnnouncement', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $announcement =  \App\Announcement::find($id);
        $announcement->delete();
        return "announcement deleted";
    }

 
    
}
