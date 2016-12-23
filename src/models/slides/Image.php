<?php

namespace edofre\sliderpro\models\slides;

/**
 * Class Image
 * @package edofre\sliderpro\models\slides
 */
class Image extends \yii\base\Model
{
    /** Required class for the images */
    const IMAGE_CLASS = 'sp-image';

    /** @var  string The source of the image */
    public $src;
    /** @var  array The HTML options for the layer */
    public $htmlOptions;

    /**
     * @return array
     */
    public function rules()
    {
        return [
            [['src'], 'required'],
            [['htmlOptions'], 'safe'],
        ];
    }

    /**
     * @return string
     */
    public function render()
    {
        if (isset($this->htmlOptions['class'])) {
            $this->htmlOptions['class'] = self::IMAGE_CLASS . ' ' . $this->htmlOptions['class'];
        } else {
            $this->htmlOptions['class'] = self::IMAGE_CLASS;
        }

        return \yii\bootstrap\Html::img($this->src, $this->htmlOptions);
    }
}
