<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    protected $fillable = [
        'id',
        'title',
        'content',
        'create_at',
        'update_at'
    ];

    protected $hidden =['id'];

    public function findBlogById($id){
        return Blog::find($id);
    }
}
