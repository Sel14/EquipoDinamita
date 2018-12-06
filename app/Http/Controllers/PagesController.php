<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\message;
use \App\User;

class PagesController extends Controller
{
    //
    /**
    *
    *@return a view with the Admin Menu
    */
    public function admin()
    {
        return view('projects.Admin');
    }

    //
    /**
    *This function Creates the message, sends it to the chat and updates it.
    *@return the updated view for the admin or the fishman.
    */
    public function message($id)
    {
        $message = new message();
        $pescador= User::find($id);


        if ($id==0) {
            if (request('message')!=null) {
                $message->name='Admin';
                $message->message=request('message');
                $message->save();
            }
           
            return redirect('/admin/chat');
        } else {
            if (request('message')!=null) {
                $message->name=$pescador->name;
                $message->message=request('message');
                $message->save();
            }
            

            return redirect("/project/{$pescador->id}/chat");
        }
    }



    //
    /**
    *This function shows the fishmen with their location.
    *@return the view with the fishmen location data.
    */
    public function show()
    {
        $project= User::all();


        return view('projects.ShowPlaces', compact('project'));
    }

    //
    /**
    *This function shows all messages on the chat from the admin's view.
    *@return a view to the chat the admin has access to.
    */
    public function chat()
    {
        $message= message::all();

        return view('projects.AdminChat', compact('message'));
    }

    //
    /**
    *This function lets the fishmen edit their location.
    *@return a view with the selected location.
    */
    public function edit($id)
    {
        $project= User::find($id);
        return view('projects.Places', compact('project'));
    }

    //
    /**
    *This function updates the fishman location on the database.
    *@return a redirection to the fishman menu.
    */
    public function update($id)
    {
        $project= User::find($id);

        if (request('Place')!=null) {
            $project->place=request('Place');
        
            $project->save();
        }
        

    
        return redirect("/project/{$project->id}");
    }


    //
    /**
    *This function gives the view to create a new fishman.
    *@return the view to create a new fishman.
    */
    public function create()
    {
        return view('projects.CreateFishman');
    }

    //
    /**
    *This function creates a new fishman.
    *@return a redirection to the admin main menu.
    */
    public function user()
    {
        $user = new User();

        $user->name=request('name');
        $user->email=request('email');
        $user->password=request('password');
        $user->place='Playa';
        $user->save();
        return redirect('/project');
    }

    //
    /**
    *This function moves the fishmen to their main menu.
    *@return a view with the fishmen menu.
    */
    public function fishman($id)
    {
        $project= User::find($id);
        return view('projects.Fishman', compact('project'));
    }


    //
    /**
    *This function gives the view for the chat that the fishman has access to.
    *@return a view with the chat the fishman has access to.
    */
    public function fishmanChat($id)
    {
        $project= User::find($id);
        $message= message::all();
        return view('projects.FishmanChat', compact('project', 'message'));
    }
}
