<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Skill;

class SkillDetail extends Model
{
    use HasFactory;

    protected $fillable = ["name", "percentage", "skill_id"];


    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }
}
