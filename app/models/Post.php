<?php

class Post extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'titulo' => 'required',
		'texto' => 'required'
	);
}
