<?php

// Create a parent Class so that forms don't have to be guarded in each class

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
	protected $guarded = [];
}
