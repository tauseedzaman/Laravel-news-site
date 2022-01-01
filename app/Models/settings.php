<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class settings extends Model
{
    use HasFactory;
    protected $fillable=['website_name','website_email','website_phone','website_address','website_logo','website_favicon','website_copyright','website_about','website_description','website_facebook'];
}
