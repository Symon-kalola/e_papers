<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PolyPapers;
use App\Models\Requests;
use Dotenv\Store\File\Paths;
use Facade\FlareClient\Stacktrace\File as StacktraceFile;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\App;


class AdminController extends Controller
{
       
    public function __construct()
    {
        $this->middleware('auth');
    }
     public function index()
    {
        return view('admin/views/AdminHome');
    }
      public function papers()
    {
       $papers = PolyPapers::all();
      
        return view('admin/views/Papers')->with('papers', $papers);
    }
     
      public function getPaperForm()
    {  
        return view('admin/views/AddPapers');
    }
      public function storePaper()
    {
      $req = request()->validate([ 
        'module' => 'required',
        'document' => ['required'],
        'semester' => 'required',
        'year' => 'required',
        'class' => 'required'
      ]);
       $paper = new PolyPapers();
      
       $file_path = $req['document']->store('uploaded','public');
         $paper->module= $req['module'];
          $paper->semester= $req['semester'];
          $paper->year= $req['year'];
          $paper->document = $file_path;
          $paper->class= $req['class'];
          $paper->save();
       return redirect()->back();
    }

      public function download( $id)
    {
      $document  = PolyPapers::where('id', $id)->first();
      $file_path = $document->document;
      return response()->download(public_path("storage/{$file_path}"));
    }

      public function delete( $id)
    { 
      $document  = PolyPapers::where('id', $id)->first();
      $document->delete();
      return redirect()->back();
      
    }
     public function statusUpdate( $id)
    { 
      $req  = Requests::where('id', $id)->first();
    
      $req->status = 'none';
      $req->save();
      return redirect()->back();
      
    }
     public function edit( ){

      $req = request()->validate([ 
        'module' => 'required',
        'document' => ['required'],
        'semester' => 'required',
        'year' => 'required',
        'class' => 'required',
        'id' => 'required'
      ]);
     
       $file_path = $req['document'] ->store('uploaded','public');
      
         $paper=PolyPapers::find($req['id']);
         $paper->module = $req['module'];
         $paper->year = $req['year'];
         $paper->semester = $req['semester'];
         $paper->class = $req['class'];
         $paper->document =$file_path;
         $paper->save();
         
         return redirect()->back();
         
  

    }
    
    
      public function request()
    {
      
       $requests = Requests::all();
      
        return view('admin/views/Requests')->with('requests', $requests);;
    }
       public function updateRequest(Request $request)
    {
      $doc_req=Requests::find($request->id);
        $file_path = $request->document ->store('uploaded','public');
        $doc_req->document = $file_path;
        $doc_req->status = "available";
        $doc_req->save();
        return redirect()->back();
     
    }
    
}