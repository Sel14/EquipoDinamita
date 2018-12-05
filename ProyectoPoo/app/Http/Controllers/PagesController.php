<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\message;
use \App\User;

class PagesController extends Controller
{
    //
    public function admin(){
    	
    	return view('projects.index');

    } 

     public function message($id){
        $message = new message();
        $pescador= User::find($id);


        if ($id==0) {
             if(request('message')!=Null){
                 $message->name='Admin';
                $message->message=request('message');
                $message->save();
             }
           
         return redirect('/admin/chat');

        }
        else{
            if(request('message')!=Null){
                $message->name=$pescador->name;
                $message->message=request('message');
                $message->save();
            }
            

            return redirect("/project/{$pescador->id}/chat");  

        }
        
    } 



   
   public function show(){
    $project= User::all();


    return view('projects.fishman',compact('project'));
   }
   public function chat(){
    $message= message::all();

    return view('projects.adminChat',compact('message'));
   }

    public function edit($id){
    	$project= User::find($id);
    	return view('projects.edit',compact('project'));
    }


    public function update($id){
    	$project= User::find($id);

        if(request('Place')!=Null){
            $project->place=request('Place');
        
            $project->save();
        }
    	

	
    	return redirect("/project/{$project->id}");
    }

     public function create(){
    	

    	return view('projects.create');

    } 
     public function user(){

        $user = new User();

        $user->name=request('name');
        $user->email=request('email');
        $user->password=request('password');
        $user->place='Playa';
        $user->save();
    	return redirect('/project');

    } 

    public function fishman($id){
        $project= User::find($id);
        return view('projects.captain',compact('project'));
    }

    public function fishmanChat($id){
        $project= User::find($id);
        $message= message::all();
        return view('projects.fishmanChat',compact('project','message'));
    }
}
