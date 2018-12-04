<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Fishman;
use \App\message;

class PagesController extends Controller
{
    //
    public function admin(){
    	
    	return view('projects.index');

    } 

     public function message($id){
        $message = new message();
        $pescador= Fishman::find($id);


        if ($id==0) {
            $message->name='Admin';
            $message->message=request('message');
            $message->save();
         return redirect('/admin/chat');

        }
        else{
            $message->name=$pescador->Name;
            $message->message=request('message');
            $message->save();

            return redirect("/project/{$pescador->id}/chat");  

        }
        
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
    $message= message::all();

    return view('projects.adminChat',compact('message'));
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
        $project->Place='Playa';
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
        $message= message::all();
        return view('projects.fishmanChat',compact('project','message'));
    }
}
