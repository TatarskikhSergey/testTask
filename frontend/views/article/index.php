<?php
/** @var yii\web\View $this */
/** @var \common\models\Article $article */
$this->title = $article->name;
?>

<div class="article-view">
    <h1 class="article-title"><?= htmlspecialchars($article->name) ?></h1>
    <div class="article-content">
        <?= nl2br(htmlspecialchars($article->content)) ?>
    </div>
</div>

<style>
    .article-view {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        margin: 20px;
        padding: 20px;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        max-width: 800px; /* Ограничение ширины блока */
        overflow: hidden; /* Предотвращает выход содержимого за пределы */
    }
    .article-title {
        font-size: 2em;
        color: #333;
        margin-bottom: 20px;
    }
    .article-content {
        font-size: 1.2em;
        color: #444;
        line-height: 1.6;
        word-wrap: break-word; /* Перенос длинных слов */
        overflow-wrap: break-word; /* Поддержка для старых браузеров */
        padding: 15px; /* Отступ от рамки */
        box-sizing: border-box; /* Учитывает отступы в ширине */
    }
</style>
