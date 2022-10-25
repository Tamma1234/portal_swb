<?php

namespace App\Models\dra;

use App\Models\Fu\Term;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupMember extends Model
{
    use HasFactory;
    protected $table = "fu_group_member";

    public function __construct(array $attributes = [])
    {
        $this->connection = session('campus_db');
        parent::__construct($attributes);
    }

    public function semesters() {
        return $this->belongsTo(Term::class, 'term_id', 'id');
    }
}
