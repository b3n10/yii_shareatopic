<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\StringHelper;

$this->title = 'Share A Topic';
?>
<div class="site-index">
    <div class="container-fluid" style="max-width: 800px;">
    <?php foreach($topics as $topic): ?>
        <div class="row">
            <a href="topic/show-topic?topicID=<?= Html::encode("{$topic->id}") ?>" class="">
                <h4>
                    <?= StringHelper::truncate(Html::encode("{$topic->title}"), 90, "...") ?>
                </h4>
            </a>
            <a href="#" style="" title="upvote to add points" class="upvote">
                <span class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span>
            </a>
            <span class="badge"><?= Html::encode("{$topic->points}") ?> points</span>
            by
            <a href="#" class="">
                <?= Html::encode("{$topic->owner}") ?>
            </a>
            |
            <a href="topic/show-topic?topicID=<?= Html::encode("{$topic->id}") ?>" title="<?= Html::encode("{$topic->created_at}") ?>" class="">
                <?= Yii::$app->formatter->asRelativeTime(strtotime(Html::encode("{$topic->created_at}"))) ?>
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

