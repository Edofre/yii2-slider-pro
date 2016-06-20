<?php

namespace edofre\sliderpro\models;

/**
 * Class Slide
 * @package edofre\fullcalendarscheduler\models
 */
class Slide extends \yii\base\Model
{
	/** @var */
	public $items;

	/**
	 * @return array
	 */
	public function rules()
	{
		return [
			[['items'], 'safe'],
		];
	}

	/**
	 * @return string
	 */
	public function render()
	{
		$items = '';
		foreach ($this->items as $item) {
			$items .= $item->render();
		}
		return $items;
	}
}
