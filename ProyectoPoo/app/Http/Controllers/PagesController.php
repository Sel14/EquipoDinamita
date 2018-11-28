<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Fishman;

class PagesController extends Controller
{
    //
    public function admin(){
    	
    	return view('projects.index');

    } 

   public function delete($id){
    $project= Fishman::find($id)->delete();

    return redirect('/project');
   }
   public function show(){
    $project= Fishman::all();


    return view('projects.fishman',compact('project'));
   }
   public function chat(){

    dd('hola');
   }

    public function edit($id){
    	$project= Fishman::find($id);
    	return view('projects.edit',compact('project'));
    }


    public function update($id){
    	$project= Fishman::find($id);

    	$project->Place=request('Place');
        
    	$project->save();

	
    	return redirect("/project/{$project->id}");
    }

     public function create(){
    	

    	return view('projects.create');

    } 
     public function user(){
    	$project = new Fishman(); 
        
    	$project->Name=request('Name');
    	$project->Phone=request('Phone');
    	$project->User=request('User');
        $project->Password=request('Password');
    	$project->save();
    	return redirect('/project');

    } 

    public function fishman($id){
        $project= Fishman::find($id);
        return view('projects.captain',compact('project'));
    }

    public function fishmanChat($id){
        $project= Fishman::find($id);
        return view('projects.fishmanChat',compact('project'));
    }
}
