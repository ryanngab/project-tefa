<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class projects extends Model
{
    use HasFactory;


   /// protected $fillable = ['title', 'excerpt', 'body'];
   protected $guarded = ['id'];
   protected $with = ['major', 'user'];


   public function scopeFilter($query, array $filters)
   {
    // if(isset($filters['seacrh']) ? $filters['seacrh'] :false) {
    //     return $query->where('title' , 'like' , '%' . $filters['seacrh'] . '%')
    //             ->orWhere('body', 'like' , '%' . $filters['seacrh'] . '%');
    // }

    $query->when($filters['seacrh'] ?? false, function($query, $search) {
        return $query->where('title' , 'like' , '%' . $search . '%')
                ->orWhere('body', 'like' , '%' . $search . '%');
    });

    $query->when($filters['major'] ?? false, function($query, $major) {
        return $query->whereHas('Major', function($query) use ($major) {
            $query->where('slug', $major);
        });
    });
    
   }



    public function Major()
    {
        return $this->belongsTo(Major::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /////agar eloquen mencari model menggunakan coulm selain id
    public function getRouteKeyName() {
        return 'slug';
    }

    public function sluggable(): array {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
        
}
