<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calendrier extends Model
{
    protected $table = 'calendrier';  // Specify the table name here
    public $timestamps = false;       // If your table doesn't have created_at and updated_at columns, add this line
    // Define other properties here, such as fillable or hidden as needed
}