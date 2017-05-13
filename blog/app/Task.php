<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model {
	public static function completed() {
		return static::where('completed', 1)->get();
	}

	public static function unCompleted() {
		return static::where('completed', 0)->get();
	}

	public function scopeCompleted($query) {
		return $query->where('completed', 1);
	}

	public function scopeUnCompleted($query) {
		return $query->where('completed', 0);
	}
}
