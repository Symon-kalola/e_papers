<?php

namespace App\Http\Controllers;
use illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Requests;
use App\Models\PolyPapers;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    
    { $papers = PolyPapers::latest()->take(3)->get();
        return view('home')->with('papers', $papers);
    }
     public function storeRequest()
    {  
        $req = request()->validate([ 
        'module' => 'required',
        'semester' => 'required',
        'year' => 'required',
        'class' => 'required'
      ]);

    
      
      $newreq =  new Requests();
      $newreq->module= $req['module'];
          $newreq->semester= $req['semester'];
          $newreq->year= $req['year'];
          $newreq->document = '';
          $newreq->status= '';
          $newreq->userId = Auth::id(); 
          $newreq->class= $req['class'];
          $newreq->save();
      
        return redirect()->back();
        
    }

     public function papers()
    {
       $papers = PolyPapers::all();
      
        return view('studpapers')->with('papers', $papers);
    }
     public function requests()
    {
      
       $requests = Requests::where('userId',Auth::id() )->get();
      
      
        return view('studrequests')->with('requests', $requests);;
    }

      public function download( $id)
    {
      $document  = Requests::where('id', $id)->first();
      $file_path = $document->document;
      return response()->download(public_path("storage/{$file_path}"));
    }
     public function delete( $id)
    { 
      $document  = Requests::where('id', $id)->first();
      $document->delete();
      return redirect()->back();
      
    }
    public function search(Request $request)
    { 
        $search = $request->search;
        $papers = PolyPapers::where(function($query) use ($search){
            $query->where('module','like',"%$search%")
            ->orwhere('class','like',"%$search%")
            ->orwhere('year','like',"%$search%")
            ->orwhere('semester','like',"%$search%");
        })->get();

        return view('studpapers')->with('papers', $papers);
        
        
    }    


}