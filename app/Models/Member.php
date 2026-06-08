<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'locker_id',
        'member_name',
        'borrow_date',
        'borrow_end_date'
    ];
}
