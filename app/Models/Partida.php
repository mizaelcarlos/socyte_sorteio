<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
	use HasFactory;
	
	protected $table = 'partida';

	public function jogadores()
	{
		return $this->belongsToMany(Jogador::class);
	}
}
