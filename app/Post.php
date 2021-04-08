<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = []; //everthing is fillable

    public function user()
    {
        return $this->belongsTo(User::class);
    }

public function postImage()
{
return '/storage/app/public/' . $this->image;
}

}
