<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $fillable = [

        //"user_id",
        "full_name",
        "about",
    ];
    public function profile()
{
    return $this->hasOne(Profile::class);
}

}
