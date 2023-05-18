<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\QueryException;

class NewUser extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "new_users";
    protected $primaryKey = "id";
}
