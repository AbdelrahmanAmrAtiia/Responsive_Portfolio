<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\SkillDetail;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = ["name", "number_years"];

    public function skillDetail()
    {
        return $this->hasMany(SkillDetail::class);
    }

}
