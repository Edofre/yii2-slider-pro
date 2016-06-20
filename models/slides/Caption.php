<?php

namespace edofre\sliderpro\models\slides;

/**
 * Class Caption
 * @package edofre\fullcalendarscheduler\models\slides
 */
class Caption extends \yii\base\Model
{
	/** Required class for the captions */
	const CAPTION_CLASS = 'sp-caption';

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
			$this->htmlOptions['class'] = self::CAPTION_CLASS  . ' ' . $this->htmlOptions['class'];
		} else {
			$this->htmlOptions['class'] = self::CAPTION_CLASS ;
		}

		return \yii\bootstrap\Html::tag($this->tag, $this->content, $this->htmlOptions);
	}
}
