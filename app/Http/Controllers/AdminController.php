<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PolyPapers;
use Dotenv\Store\File\Paths;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    {  dd('delete');
      $document  = PolyPapers::where('id', $id)->first();
      $file_path = $document->document;
      return response()->download(public_path("storage/{$file_path}"));
    }
    
      public function request()
    {
        return view('admin/views/Requests');
    }
    
}