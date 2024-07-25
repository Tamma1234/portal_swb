<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    use HasFactory;
    protected $table = "answers";

    public function __construct(array $attributes = [])
    {
        $this->connection = session('campus_db');
        parent::__construct($attributes);
    }

    public function survey() {
        return $this->hasOne(Surveys::class, 'id', 'survey_id');
    }

    public function question() {
        return $this->hasOne(questions::class, 'id', 'question_id');
    }
}
