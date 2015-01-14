<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Leojang\Menu as Menu;

class MenuTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$shop = Menu::create([
			'parent_id'	=> null,
			'name' 		=> 'shop',
			'url'		=> 'shop', 
			'description'	=> '마이샵',
		]);

		$products = Menu::create([
			'parent_id'	=> $shop->id,
			'name'		=> 'products',
			'url'		=> 'shop/products' ,
			'description'	=> '상품',
		]);

		Menu::create([
			'parent_id'	=> 	$products->id,
			'name' 		=> 'electronic',
			'url'		=> 'shop/products/electronic', 
			'description'	=> '전자제품',
		]);

		Menu::create([
			'parent_id'	=> 	$products->id,
			'name' 		=> 'computer',
			'url'		=> 'shop/products/computer', 
			'description'	=> '컴퓨터',
		]);

		Menu::create([
			'parent_id'	=> 	$products->id,
			'name' 		=> 'car',
			'url'		=> 'shop/products/car', 
			'description'	=> '자동차',
		]);

		$menu1 = Menu::create([
			'parent_id'	=> null,
			'name' 		=> 'menu1',
			'url'		=> 'menu1', 
			'description'	=> '메뉴 #1',
		]);

		$menu2 = Menu::create([
			'parent_id'	=> $menu1->id,
			'name' 		=> 'menu1_1',
			'url'		=> 'menu1_1', 
			'description'	=> '메뉴 #1 - 1',
		]);

		$menu3 = Menu::create([
			'parent_id'	=> $menu1->id,
			'name' 		=> 'menu1_2',
			'url'		=> 'menu1_2', 
			'description'	=> '메뉴 #1 - 2',
		]);


	}

}