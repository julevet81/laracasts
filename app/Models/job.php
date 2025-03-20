<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class job extends Model {
    use HasFactory;
    protected $table = 'job_listings';
    protected $fillable = ['title', 'sallery'] ;

    public function employer(){
        return $this->belongsTo(Employer::class);
    }
}