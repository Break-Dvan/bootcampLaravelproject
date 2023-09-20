<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';
    public $timestamps = true;
    protected $guarded = [];

    public function project() {
        return $this->belongsTo(Project::class);
        //vb: select * from task where projectid=1
    }
}
