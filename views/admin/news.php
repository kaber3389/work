<?php

use yii\helpers\Html;
use app\helpers\Url;

/* @var $news \app\models\News[] */

?>

<div class="container pt-50"">
<?php if ( Yii::$app->session->hasFlash('success') ): ?>
    <div class="alert alert-success" role="alert">
        <p class="mb-0"><?=Yii::$app->session->getFlash('success')?></p>
    </div>
<?php endif; ?>

<table class="table table-bordered">
    <div class="form-control">
        <?= Html::a('Добавить',
            ['admin/news-create'],
            ['class' => 'btn btn-success'])
        ?>
    </div>
    <thead class="table-dark">
    <th width="8%">ID</th>
    <th width="10%">Название</th>
    <th width="20%">Главное изображение</th>
    <th>Контент</th>
    <th width="10%">Создана</th>
    <th width="10%">Обновлена</th>
    </thead>
    <tbody>
    <?php foreach ($news as $item): ?>
        <tr>
            <td>
                <a href="<?=Url::toAdminEdit('news', $item->slug)?>"><i class='fas fa-edit'></i></a>
                <?php /*
                 <a href="<?=Url::toAdminEdit('leadership', $user->slug)?>"><i class='fas fa-eye'></i></a>
                <input type="checkbox"
                       id="news_<?=$user->id?>"
                       class="form-check-input"
                    <?php if ($user->is_active): ?>
                        checked
                    <?php endif; ?>>
                   */ ?>
            </td>
            <td><?=$item->title?></td>
            <?php if ($item->mainImage): ?>
                <td><img src="<?=$item->mainImage->path?>" style="width: 100%;"></td>
            <?php else: ?>
                <td><img src="<?=\app\models\Image::noImage()?>" style="width: 200px; height: 200px;"></td>
            <?php endif; ?>
            <td><?=mb_substr(strip_tags($item->content), 0 , 200)?>...</td>
            <td><?=date('Y-m-d H:i', $item->created_at)?></td>
            <td><?=date('Y-m-d H:i', $item->updated_at)?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>