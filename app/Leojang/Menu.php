<?php namespace Leojang;

class Menu extends \Eloquent {
	protected $table = "menus";

	protected $fillable = ['parent_id', 'name', 'description', 'locate'];

	public $timestamps = false;


	// trait 로 분리해도 될듯... 
	
	public function parent()
	{
		return $this->belongsTo(get_class($this), 'parent_id');
	}

	public function children()
	{
		return $this->hasMany(get_class($this), 'parent_id');
	}

	public function hasChild()
	{
		return $this->children()->count() ? true : false;
	}

	public function isRoot()
	{
		return is_null($this->parent()) ? true : false;
	}
}