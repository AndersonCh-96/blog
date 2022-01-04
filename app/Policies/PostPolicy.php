<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

  //autor de un post 
    public function author(User $user, Post $post){

        if($user->id == $post->user_id){
            return true;
        }else{
            return true;
        }
        
    }


    public function published(?User $user,Post $post){
        if($post->status == 2){
            return true;
        }else{
            return false;
        }
    }
}
