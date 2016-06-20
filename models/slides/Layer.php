<?php

namespace edofre\sliderpro\models\slides;

/**
 * Class Layer
 * @package edofre\fullcalendarscheduler\models\slides
 */
class Layer extends \yii\base\Model
{
	/** Required class for the layers */
	const LAYER_CLASS = 'sp-layer';

	/** @var */
	public $tag;
	/** @var */
	public $content;
	/** @var */
	public $htmlOptions;

	/**
	 * @return array
	 */
	public function rules()
	{
		return [
			[['tag'], 'required'],
			[['content', 'htmlOptions'], 'safe'],
		];
	}

	/**
	 * @return string
	 */
	public function render()
	{
		if (isset($this->htmlOptions['class'])) {
			$this->htmlOptions['class'] = self::LAYER_CLASS . ' ' . $this->htmlOptions['class'];
		} else {
			$this->htmlOptions['class'] = self::LAYER_CLASS;
		}

		return \yii\bootstrap\Html::tag($this->tag, $this->content, $this->htmlOptions);
	}
}
