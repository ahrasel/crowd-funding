<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactQuery extends Model
{
    public function replies()
    {
        return $this->hasMany(ContactQuery::class, 'parent_id');
    }
}
