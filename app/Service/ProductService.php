<?php

namespace Service;


use Solovey\Service\DatabaseService;
use Solovey\Service\I\CrudService;

class ProductService extends DatabaseService implements CrudService
{

	/**
	 * @param $product
	 * @return mixed
	 */
	function add($product)
	{
		return $this->db
			->insert('products')
			->values((array)$product)
			->execute();
	}

	/**
	 * @param $id
	 * @return mixed
	 */
	function get($id)
	{
		$all = $this->db
			->select('*')
			->from('products')
			->where(['id' => $id])
			->execute();

		foreach ($all as $product) {
			return $product;
		}

		return null;
	}

	/**
	 * @param $object
	 * @return mixed
	 */
	function update($object)
	{
		// TODO: Implement update() method.
	}

	/**
	 * @param $object
	 * @return mixed
	 */
	function remove($object)
	{
		// TODO: Implement remove() method.
	}
}