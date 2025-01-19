<?php

use common\models\Article;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\ArticleSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Статьи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать статью', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\CheckboxColumn'],
            'id',
            'user_id',
            'name',
            'description',
            'created_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Article $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>

    <div>
        <?= Html::button('Удалить', [
            'class' => 'btn btn-danger',
            'onclick' => 'deleteSelected()',
        ]) ?>
    </div>

</div>
<script>
function deleteSelected() {
    var keys = $('#w0').yiiGridView('getSelectedRows');
    if (keys.length === 0) {
        alert('Пожалуйста, выберите хотя бы одну запись для удаления.');
        return;
    }
    
    if (confirm('Вы уверены, что хотите удалить выбранные записи?')) {
        $.ajax({
            type: 'POST',
            url: 'index.php?r=article%2Fbulk',
            data: {id: keys},
            success: function(response) {
                window.location.reload();
            },
            error: function() {
                alert('Произошла ошибка при удалении записей.');
            }
        });
    }
}
</script>



