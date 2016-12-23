<?php

namespace edofre\sliderpro\models\slides;

/**
 * Class Caption
 * @package edofre\sliderpro\models\slides
 */
class Caption extends \yii\base\Model
{
    /** Required class for the captions */
    const CAPTION_CLASS = 'sp-caption';

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
            $this->htmlOptions['class'] = self::CAPTION_CLASS . ' ' . $this->htmlOptions['class'];
        } else {
            $this->htmlOptions['class'] = self::CAPTION_CLASS;
        }

        return \yii\bootstrap\Html::tag($this->tag, $this->content, $this->htmlOptions);
    }
}
