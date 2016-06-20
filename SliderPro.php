<?php

namespace edofre\sliderpro;

/**
 * Class SliderPro
 * @package edofre\sliderpro
 */
class SliderPro extends \yii\jui\Widget
{
	/** @var */
	public $id = 'slider-pro';
	/** @var array */
	public $sliderOptions = [];

	/**
	 * @throws \yii\base\InvalidConfigException
	 */
	public function init()
	{
		parent::init();
		$this->registerToView();
	}

	/**
	 * Register the slider
	 */
	private function registerToView()
	{
		$view = $this->getView();
		$slider_options = \yii\helpers\Json::encode($this->sliderOptions);

		// Register the slider to the view
		$view->registerJs("
			jQuery(document).ready(function($) {
        		$('#{$this->id}').sliderPro({$slider_options});
    		});
		");
		CoreAsset::register($view);
	}

	/**
	 *
	 */
	public function run()
	{
		// Forest run
	}
}