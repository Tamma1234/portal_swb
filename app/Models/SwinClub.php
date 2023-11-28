<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SwinClub extends Model
{
    use HasFactory;

    protected $table = "sw_club";

    protected $guarded;

    public function __construct(array $attributes = [])
    {
        $this->connection = session('campus_db');
        parent::__construct($attributes);
    }

    public function clubs() {
        return $this->hasMany(SwClubMember::class,'club_id', 'id');
    }
}
