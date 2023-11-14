<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Queries extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = "queries";

    protected $fillable = [
        'user_login',
        'user_code',
        'queries_type',
        'question',
        'querries_status',
        'file_name',
        'phone',
        'address',
        'email',
        'time_send',
        'time_xu_ly',
        'note_xu_ly',
        'nguoi_xu_ly'
    ];

    public function __construct(array $attributes = [])
    {
        $this->connection = session('campus_db');
        parent::__construct($attributes);
    }
}
