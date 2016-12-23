<?php

namespace edofre\sliderpro\models\slides;

/**
 * Class Layer
 * @package edofre\sliderpro\models\slides
 */
class Layer extends \yii\base\Model
{
    /** Required class for the layers */
    const LAYER_CLASS = 'sp-layer';

    /** @var  string The tag (a, div, span etc) that will be rendered */
    public $tag;
    /** @var  string The contents of the tag */
    public $content;
    /** @var  array The HTML options for the layer */
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
