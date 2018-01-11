<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    public static function findByKey($site_key)
    {
        return self::where('site_key', $site_key)->firstOrFail();
    }

    public function pages()
    {
        return $this->hasMany(Page::class);
    }

    public function getUrlAttribute()
    {
        return 'http://' . $this->site_key . '.playground.test';
    }
}
