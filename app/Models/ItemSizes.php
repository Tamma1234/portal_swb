<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemSizes extends Model
{
    use HasFactory;

    protected $table = "size_item";

    protected $guarded;

    public function __construct(array $attributes = [])
    {
        $this->connection = session('campus_db');
        parent::__construct($attributes);
    }
}
