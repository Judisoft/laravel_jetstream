<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserQuestion;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'answer'
    ];

  public function user_question()
  {
    return $this->belongsTo(UserQuestion::class);
  }
}
