<?php

namespace Model;


abstract class Product
{

	public $id;

	public $title = 'Product name';

	public $description = 'Product description';

	public $img = '/img/placeholder.png';

	public $price = 1;

	public $active = false;

}