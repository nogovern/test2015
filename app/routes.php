<?php
Route::get('/', function()
{
	$menus = \Leojang\Menu::query()
			->whereNull('parent_id')
			->get();

	// 캐싱 사용
	if (! Cache::has('menu'))	
	{	
		Cache::put('menu', display($menus), 60);
	}

	if(0)
	{
		$content = Cache::get('menu'); 
	} else {
		$content = display($menus);
	}

	return View::make('index', compact('content', 'content2'));
});

// recursive call
// div, a 목록으로 출력
function display($items)
{
	$options = ['class' => 'list-group-item'];

	$html = '<div class="list-group">' . PHP_EOL;

	foreach($items as $item)
	{	
		if ( $item->name == 'products') 
		{
			$options['class'] .= ' active';
		}

		$html .= link_to('#', $item->name, $options) . PHP_EOL;

		if ($item->hasChild())
		{
			$sub_itmes = $item->children()->get();
			$html .= display($sub_itmes);		// recursive call
		} 
	}
	$html .= '</div>' . PHP_EOL;

	return $html;
}

// ul, li 목록으로 출력
function display2($items)
{
	$options = ['class' => 'list-group-item'];

	$html = '<ul class="list-group">' . PHP_EOL;

	foreach($items as $item)
	{	
		$html .= '<li>';

		if ( $item->name == 'shop') 
		{
			$options['class'] .= ' active';
		}

		$html .= link_to('#', $item->name, $options) . PHP_EOL;

		if ($item->hasChild())
		{
			$sub_itmes = $item->children()->get();
			$html .= display2($sub_itmes);		// recursive call
		} 

		$html .= '</li>';
	}
	$html .= '</ul>' . PHP_EOL;

	return $html;
}
