<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\User;

class HelloController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function contact(){
        return view('contact');
    }
    public function about(){
        return view('about');
    }
    public function db_test(){
        // return view('hello');
        // $project = new Project;
        // $project->name = "First project";
        // $project->description = "This is a description of project";
        // $project->save();

        // $project = Project::find(1);
        // $project->description = "This is updated description";
        // $project->save();

        // $projects = Project::where("name", "Hello Project")->get();
        // foreach ($projects as $project) {
        //     echo $project->name;
        // }

        // $projects = Project::where("name", "like", "%Hello Project%")->get();
        // foreach ($projects as $project) {
        //     echo $project->name;
        // }

        // $project = Project::where("name", "Hello Project")->get()->first();
        // echo $project->name;

        // Short way
        // $project = Project::find(1);
        // echo $project->name."<br>";
        // echo $project->user->name."<br>";

        // // Long way
        // $user = User::find($project->user_id);
        // echo $user->name."<br>";

        // echo "<b>Projects of Pallavi</b><br>";

        // // Short way
        // $projects = $user->projects;
        // foreach ($projects as $project) {
        //     echo $project->name."<br>";
        // }

        // echo "<b>Projects of Pallavi</b><br>";

        // // Long way
        // $projects = Project::where("user_id", $user->id)->get();
        // foreach ($projects as $project) {
        //     echo $project->name."<br>";
        // }
    }
}
