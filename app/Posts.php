<?php

namespace App;

use Carbon\Carbon;

class Posts extends Model
{
   
    public function comments() {
    
        return $this->hasMany(Comment::class);
    }
    
    public function addComment($body) {
        
        $this->comments()->create(compact('body'));
        
    }
    public function user() {
        
        return $this->belongsTo(User::class);
        
    }
    
    public function tag() {
        
        return $this->belongsToMany(Tag::class);
        
    }
    
    public function scopeFilter($query, $filters) {
        
        if (isset($filters['month'])){
                if($month = $filters['month']){
                    $query->whereMonth('created_at', Carbon::parse($month)->month);
                }
        }

        if(isset($filters['year'])){
            if($year = $filters['year']){
                $query->whereYear('created_at', $year);
            }
        }
    }
    
    public static function archives() {
        
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            
            ->groupBy('year', 'month')
            
            ->orderByRaw('min(created_at)')
            
            ->get()
            
            ->toArray();
        
    }
        
}
    

