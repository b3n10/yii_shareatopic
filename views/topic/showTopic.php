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
            <span class="badge">
                <?= Html::encode("{$topic->points}") ?> points
            </span>
            by
            <a href="#" class="">
                <span>
                    <?= Html::encode("{$topic->owner}") ?>
                </span>
            </a>
            |
            <a href="topic/show-topic?topicID=<?= Html::encode("{$topic->id}") ?>" title="<?= Html::encode("{$topic->created_at}") ?>" class="">
                <?= Yii::$app->formatter->asRelativeTime(strtotime(Html::encode("{$topic->created_at}"))) ?>
            </a>
            <p>
                <?= Html::encode("{$topic->post}") ?>
            </p>
        </div>
    </div>
</div>

