<?php

namespace edofre\sliderpro\models;

/**
 * Class Thumbnail
 * @package edofre\fullcalendarscheduler\models
 */
class Thumbnail extends \yii\base\Model
{
	/** Required class for the thumbnails */
	const THUMBNAIL_CLASS = 'sp-thumbnail';

	/** @var */
	public $tag;
	/** @var */
	public $content;
	/** @var */
	public $htmlOptions = [];

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
			$this->htmlOptions['class'] = self::THUMBNAIL_CLASS . ' ' . $this->htmlOptions['class'];
		} else {
			$this->htmlOptions['class'] = self::THUMBNAIL_CLASS;
		}

		return \yii\bootstrap\Html::tag($this->tag, $this->content, $this->htmlOptions);
	}
}
