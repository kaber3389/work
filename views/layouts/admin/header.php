<?php
use yii\helpers\Html;

?>

<header>
    <div class="admin-menu">
        <?=Html::a('Слайдер', ['admin/history-development'], ['class' => 'btn btn-primary'])?>
        <?=Html::a('Страницы', ['admin/pages'], ['class' => 'btn btn-primary'])?>
        <?=Html::a('Новости', ['admin/news'], ['class' => 'btn btn-primary'])?>
        <?=Html::a('Продукция', ['admin/products'], ['class' => 'btn btn-primary'])?>
        <?=Html::a('Руководство', ['admin/leadership'], ['class' => 'btn btn-primary'])?>
        <?=Html::a('Вакансии', ['admin/vacancies'], ['class' => 'btn btn-primary'])?>
        <?= Html::a("Выход", ['/site/logout'], ['class' => 'btn btn-primary', 'style' => 'float: right'])?>
    </div>
</header>