<?php 

namespace App\Repositories;

use App\Posts;

class PostsRepo {
    
    public function all() {
        
        return Posts::all();
        
    }
    
}