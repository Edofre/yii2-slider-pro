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

## Disclaimer

Still in development, in future items will have to be added using an array and the html generation will be handled by the widget itse.f

## Usage

```php

<div class="slider-pro" id="my-slider">
    <div class="sp-slides">
        <!-- Slide 1 -->
        <div class="sp-slide">
            <img class="sp-image" src="path/to/image1.jpg"/>
        </div>

        <!-- Slide 2 -->
        <div class="sp-slide">
            <p>Lorem ipsum dolor sit amet</p>
        </div>

        <!-- Slide 3 -->
        <div class="sp-slide">
            <h3 class="sp-layer">Lorem ipsum dolor sit amet</h3>
            <p class="sp-layer">consectetur adipisicing elit</p>
        </div>
    </div>
</div>

<?= \edofre\sliderpro\SliderPro::widget([
        'id' 			=> 'my-slider',
        'sliderOptions'	=> [
        	'width'		=> 960,
			'height'	=> 500,
			'arrows'	=> true,
        ]
    ]);
?>
```