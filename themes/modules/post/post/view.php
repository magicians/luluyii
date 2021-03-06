<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('post', 'Post'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-view">
    <p>
        <?= Html::a(Yii::t('post', 'Update Post'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('post', 'Delete Post'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('post', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user_id',
            'author',
            'title',
            'love_num',
            'hate_num',
            'comment_num',
            'view_num',
            'collection',
            'content',
            'type',
            'created_time:datetime',
        ],
    ]) ?>
</div>
