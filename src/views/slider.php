<?php

/* @var $this yii\web\View */
/* @var $id string */
/* @var $slides \edofre\sliderpro\models\Slide[] */
/* @var $thumbnails \edofre\sliderpro\models\Thumbnail[] */
?>

<div class="slider-pro" id="<?= $id; ?>">
    <div class="sp-slides">
        <?php foreach ($slides as $slide): ?>
            <div class="sp-slide">
                <?= $slide->render(); ?>
            </div>
        <?php endforeach; ?>
        <?php if (!empty($thumbnails)): ?>
            <div class="sp-thumbnails">
                <?php foreach ($thumbnails as $thumbnail): ?>
                    <?= $thumbnail->render(); ?>
                <?php endforeach;; ?>
            </div>
        <?php endif; ?>
    </div>
</div>