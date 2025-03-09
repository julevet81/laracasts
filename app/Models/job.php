<?php

namespace App\Models;

use Illuminate\Support\Arr;

class job {
    public static function all() {
        return [
            [
                'id'=> 1,
                'title'=> 'Director',
                'sallery'=> '50.000',
            ],
            [
                'id'=> 2,
                'title'=> 'Disigner',
                'sallery'=> '40.000',
            ],
            [
                'id'=> 3,
                'title'=> 'Programmer',
                'sallery'=> '60.000',
            ]
            ];
    }

    public static function find($id):array {
        return Arr::first(static::all(),fn( $job) => $job['id'] == $id);
    }
}