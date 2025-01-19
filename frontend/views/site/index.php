<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
/** @var \common\models\Article[] $articles */
?>
<div class="site-index">
    <div class="article-container">
        <?php foreach ($articles as $article): ?>
            <div class="article-card">
                <h2>
                    <a href="<?= \yii\helpers\Url::to(['article/index', 'id' => $article->id]) ?>">
                        <?= htmlspecialchars($article->name) ?>
                    </a>
                </h2>
                <p class="description"><?= htmlspecialchars($article->description) ?></p>
                <p class="date">Published on: <?= date('F j, Y', strtotime($article->created_at)) ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<style>
    .article-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    .article-card {
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 15px;
        margin: 10px;
        width: calc(33.33% - 20px); /* три колонки */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        overflow: hidden; /* предотвращает выход содержимого за пределы */
    }
    .article-card:hover {
        transform: scale(1.02);
    }
    h2 {
        font-size: 1.5em;
        color: #333;
    }
    .description {
        font-size: 1em;
        color: #666;
    }
    .date {
        font-size: 0.8em;
        color: #999;
    }
</style>
