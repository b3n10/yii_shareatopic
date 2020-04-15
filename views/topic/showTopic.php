<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Share A Topic';
?>
<div class="site-index">
    <div class="container-fluid" style="max-width: 800px;">
        <div class="row">
            <h3>
                <?= Html::encode("$topic->title") ?>
            </h3>
            <a href="#upvote" style="" title="upvote to add points">
                <span class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span>
            </a>
            <span class="badge"><?= Html::encode("{$topic->points}") ?> points</span>
            <span class="">
                 by
            </span>
            <a href="#" class="">
                <span>
                    <?= Html::encode("{$topic->owner}") ?>
                </span>
            </a>
        </div>
    </div>
</div>

