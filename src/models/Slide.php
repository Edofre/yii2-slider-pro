<?php

namespace edofre\sliderpro\models;

/**
 * Class Slide
 * @package edofre\sliderpro\models
 */
class Slide extends \yii\base\Model
{
	/** @var  string The string contents that will be rendered without any object interference */
	public $content = '';
	/** @var  array Contains objects from the /model folder, will be appended behind the $this->content string */
	public $items = [];

	/**
	 * @return array
	 */
	public function rules()
	{
		return [
			[['items', 'content'], 'safe'],
		];
	}

	/**
	 * Append the objects after the $this->content string
	 * @return string
	 */
	public function render()
	{
		if (empty($items)) {
			foreach ($this->items as $item) {
				$this->content .= $item->render();
			}
		}
		return $this->content;
	}
}
