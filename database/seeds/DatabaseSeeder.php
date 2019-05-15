<?php

use Illuminate\Database\Seeder;
use App\Project;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = "Pallavi";
        $user->email = "dwij.dev1@gmail.com";
        $user->password = bcrypt("12345678");
        $user->save();

        $user2 = new User;
        $user2->name = "Ganesh";
        $user2->email = "gdbhosale88@gmail.com";
        $user2->password = bcrypt("12345678");
        $user2->save();

        $project = new Project;
        $project->name = "Hello Project";
        $project->description = "This is a good description";
        $project->user_id = $user->id;
        $project->save();

        $project = new Project;
        $project->name = "World Project";
        $project->description = "This is a another description";
        $project->user_id = $user2->id;
        $project->save();
        
        $project = new Project;
        $project->name = "First Project";
        $project->description = "This is a another Project";
        $project->user_id = $user2->id;
        $project->save();
        
    }
}
