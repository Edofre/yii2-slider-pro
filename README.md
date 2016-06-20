# Yii2 slider-pro widget

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install, either run

```
$ php composer.phar require edofre/yii2-slider-pro "@dev-master"
```

or add

```
"edofre/yii2-slider-pro": "@dev-master"
```

to the ```require``` section of your `composer.json` file.

## Usage 

### You can use either the supplied php classes to generate the HTML

```php
use edofre\sliderpro\models\slides\Caption;
use edofre\sliderpro\models\slides\Image;
use edofre\sliderpro\models\slides\Layer;

$slides = [
	new \edofre\sliderpro\models\Slide([
		'items' => [
			new Image(['src' => '/images/test.jpg']),
		],
	]),
	new \edofre\sliderpro\models\Slide([
		'items' => [
			new Image(['src' => '/images/test1.png']),
			new Caption(['tag' => 'p', 'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.']),
		],
	]),
	new \edofre\sliderpro\models\Slide([
		'items' => [
			new Image(['src' => '/images/test2.png']),
			new Layer(['tag' => 'h3', 'content' => 'Lorem ipsum dolor sit amet', 'htmlOptions' => ['class' => 'sp-black', 'data-position' => "bottomLeft", 'data-horizontal' => "10%", 'data-show-transition' => "left", 'data-show-delay' => "300", 'data-hide-transition' => "right"]]),
			new Layer(['tag' => 'p', 'content' => 'consectetur adipisicing elit', 'htmlOptions' => ['class' => 'sp-white sp-padding', 'data-width' => "200", 'data-horizontal' => "center", 'data-vertical' => "40%", 'data-show-transition' => "down", 'data-hide-transition' => "up"]]),
			new Layer(['tag' => 'div', 'content' => 'Static content', 'htmlOptions' => ['class' => 'sp-static']]),
		],
	]),
	new \edofre\sliderpro\models\Slide([
		'items' => [
			new Layer(['tag' => 'p', 'content' => 'Lorem ipsum dolor sit amet']),
		],
	]),
	new \edofre\sliderpro\models\Slide([
		'items' => [
			new Layer(['tag' => 'h3', 'content' => 'Lorem ipsum dolor sit amet']),
			new Layer(['tag' => 'p', 'content' => 'Consectetur adipisicing elit']),
		],
	]),
];

$thumbnails = [
	new \edofre\sliderpro\models\Thumbnail(['tag' => 'img', 'htmlOptions' => ['src' => "/images/ttest.jpg", 'data-src' => "/images/test.jpg"]]),
	new \edofre\sliderpro\models\Thumbnail(['tag' => 'img', 'htmlOptions' => ['src' => "/images/ttest1.png", 'data-src' => "/images/test1.png"]]),
	new \edofre\sliderpro\models\Thumbnail(['tag' => 'img', 'htmlOptions' => ['src' => "/images/ttest2.png", 'data-src' => "/images/test2.png"]]),
	new \edofre\sliderpro\models\Thumbnail(['tag' => 'p', 'content' => 'Thumbnail 4']),
	new \edofre\sliderpro\models\Thumbnail(['tag' => 'p', 'content' => 'Thumbnail 5']),
];
?>

<?= \edofre\sliderpro\SliderPro::widget([
	'id'            => 'my-slider',
	'slides'        => $slides,
	'thumbnails'    => $thumbnails,
	'sliderOptions' => [
		'width'  => 960,
		'height' => 500,
		'arrows' => true,
		'init'   => new \yii\web\JsExpression("
			function() {
				console.log('slider is initialized');
			}
		"),
	],
]);
?>
```

### Or you can create your own html code to generate the slider

```php
<?= \edofre\sliderpro\SliderPro::widget([
	'id'            => 'my-slider',
	'sliderOptions' => [
		'width'  => 960,
		'height' => 500,
		'arrows' => true,
		'init'   => new \yii\web\JsExpression("
			function() {
				console.log('slider is initialized');
			}
		"),
	],
]);
?>

<div class="slider-pro" id="'my-slider'">
	<div class="sp-slides">
		<!-- Slide 1 -->
		<div class="sp-slide">
			<img class="sp-image" src="http://lorempixel.com/960/500/sports/1"/>
		</div>
		<!-- Slide 2 -->
		<div class="sp-slide">
			<img class="sp-image" src="http://lorempixel.com/960/500/sports/2"/>
			<p class="sp-caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</div>
		<!-- Slide 3 -->
		<div class="sp-slide">
			<p>Lorem ipsum dolor sit amet</p>
		</div>
		<!-- Slide 4 -->
		<div class="sp-slide">
			<img class="sp-image" src="http://lorempixel.com/960/500/sports/3"/>
			<h3 class="sp-layer sp-black"
				data-position="bottomLeft" data-horizontal="10%"
				data-show-transition="left" data-show-delay="300" data-hide-transition="right">
				Lorem ipsum dolor sit amet
			</h3>
			<p class="sp-layer sp-white sp-padding"
			   data-width="200" data-horizontal="center" data-vertical="40%"
			   data-show-transition="down" data-hide-transition="up">
				consectetur adipisicing elit
			</p>
			<div class="sp-layer sp-static">Static content</div>
		</div>
		<!-- Slide 5 -->
		<div class="sp-slide">
			<h3 class="sp-layer">Lorem ipsum dolor sit amet</h3>
			<p class="sp-layer">consectetur adipisicing elit</p>
		</div>

		<!-- thumbnails -->
		<div class="sp-thumbnails">
			<img class="sp-thumbnail" src="http://lorempixel.com/960/500/sports/1" data-src="http://lorempixel.com/480/250/sports/1"/>
			<img class="sp-thumbnail" src="http://lorempixel.com/960/500/sports/2" data-src="http://lorempixel.com/480/250/sports/2"/>
			<img class="sp-thumbnail" src="http://lorempixel.com/960/500/sports/3" data-src="http://lorempixel.com/480/250/sports/3"/>
			<p class="sp-thumbnail">Thumbnail 4</p>
			<p class="sp-thumbnail">Thumbnail 5</p>
		</div>
	</div>
</div>
```