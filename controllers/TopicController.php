<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Topic;

class TopicController extends Controller
{
    public function actionShowTopic($topicID)
    {
        $topic = Topic::find()
            ->where(['id' => $topicID])
            ->one();

        return $this->render('showTopic', [
            'topic' => $topic
        ]);
    }

    public function actionShowTopics()
    {
        $query = Topic::find();

        $pagination = new Pagination([
            'defaultPageSize' => 1,
            'totalCount' => $query->count()
        ]);

        $topics = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('showTopics', [
            'topics' => $topics,
            'pagination' => $pagination
        ]);
    }
}
