<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasFactory;

	protected $fillable = [
		'a_side',
		'b_side',
		'flashcard_id',
	];

	public function Flashcard(){
		return $this->belongsTo(Flashcard::class);
	}
}
