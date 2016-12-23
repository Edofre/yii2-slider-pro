<?php

namespace edofre\sliderpro;

/**
 * Class CoreAsset
 * @package edofre\sliderpro
 */
class CoreAsset extends \yii\web\AssetBundle
{
	/** @var string */
	public $sourcePath = '@bower/slider-pro/';
	/** @var array */
	public $js = [
		'dist/js/jquery.sliderPro.js',
	];
	/** @var array */
	public $css = [
		'dist/css/slider-pro.css',
	];
	/** @var array */
	public $depends = [
		'yii\web\JqueryAsset',
	];
}