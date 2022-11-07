<?php

namespace App\Models\Ktp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $table = "ktp_subject";

    public function __construct(array $attributes = [])
    {
        $this->connection = session('campus_db');
        parent::__construct($attributes);
    }
}
