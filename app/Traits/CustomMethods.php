<?php
namespace App\Traits;

trait CustomMethods
{
    public function scopeNext($query)
    {
        return $query->where('id', '>', \Auth::id())->take(1)->first();
    }
}