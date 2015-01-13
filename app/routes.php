<?php
Route::get('/', function()
{
	$menus = \Leojang\Menu::query()
			->whereNull('parent_id')
			->get();

	$cur = \Leojang\Menu::query()
			->whereName('여름')
			->first();

	// 1
	$path = array();
	// array_unshift($path, $cur->name);

	// // 2
	// $cur = $cur->parent();
	// array_unshift($path, $cur->name);

	// // 3
	// $cur = $cur->parent();
	// array_unshift($path, $cur->name);
	while($cur)
	{
		array_unshift($path, $cur->name);
		$cur = $cur->parent();
	}

	return $path;

	// $tree = new FullTree($menus);

	return $tree;
});

class FullTree {

	protected $menus = array();

	protected $items;

	public function __construct(Illuminate\Support\Collection $items)
	{
		$this->items = $items;
		$this->build();
	}

	protected function build()
	{
		foreach($this->items as $item)
		{
			$this->menus;
		}
	}

	protected function traverse($item)
	{
		if (! $item->hasChild())
		{
			return ($item->name);
		}
		else 
		{	
			$children = $item->children()->get();
			foreach($children as $child)
			{
				$this->traverse($child);
			}
			
			return($item->name);
		}
	}

	public function __toString()
	{
		return json_encode($this->menus);
	}
}