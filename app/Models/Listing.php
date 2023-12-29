<?php

namespace App\Models;


class Listing
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'My First Listing',
                'description' => 'My First Listing',
            ],
            [
                'id' => 2,
                'title' => 'My Second Listing',
                'description' => 'My Second Listing',
            ],
        ];
    }

    public static function find($id)
    {
        $listings = static::all();

        return $listings[$id - 1];
    }
}
