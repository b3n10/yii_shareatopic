<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Share A Topic';
?>
<div class="site-index">
    <div class="container-fluid" style="max-width: 800px;">
    <?php foreach($topics as $topic): ?>
        <div class="row">
            <a href="#">
                <h3>
                    <?= Html::encode("{$topic->title}") ?>
                </h3>
            </a>
            <span class="">
                <?= Html::encode("{$topic->points}") ?> points
            </span>
            by
            <a href="#" class="">
                <?= Html::encode("{$topic->owner}") ?>
            </a>
            |
            <a href="topic/show-topic?topicID=<?= Html::encode("{$topic->id}") ?>" class="">
                <?= Html::encode("{$topic->created_at}") ?>
            </a>
            |
            <a href="topic/show-topic?topicID=<?= Html::encode("{$topic->id}") ?>" class="">
                discuss
            </a>
        </div>
    <?php endforeach; ?>

    <?= LinkPager::widget(['pagination' => $pagination]) ?>
    </div>
</div>

