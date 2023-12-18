<?php

// app/Models/Task.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public $table = 'tasktable';
    public $fillable = ['tasktname', 'taskdescription' ,'id'];
}
