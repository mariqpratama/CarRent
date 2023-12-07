<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['category','passenger'];

    public function scopeFilter($query, array $filters) {
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('brand','LIKE','%' . $search .'%')
                  ->orWhere('model','LIKE','%' . $search .'%');
        });

        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
        });

        $query->when($filters['passenger'] ?? false, function($query, $passenger){
            return $query->whereHas('passenger', function($query) use ($passenger){
                $query->where('slug', $passenger);
            });
        });
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function passenger() {
        return $this->belongsTo(Passenger::class);
    }

    public function getRouteKeyName() {
        return 'slug';
    }
}