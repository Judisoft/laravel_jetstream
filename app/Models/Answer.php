<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserQuestion;
use App\Models\User;

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

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
