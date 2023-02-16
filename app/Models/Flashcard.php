<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Flashcard extends Model
{
    use HasFactory;
	use SoftDeletes;

	protected $fillable = [
		'name',
		'user_id'
	];

	public function user(){
		return $this->belongsTo(User::class);
	}
	
	public function words(){
		return $this->hasMany(Word::class);
	}
}
