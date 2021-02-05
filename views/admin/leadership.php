<?php

use yii\helpers\Html;
use app\helpers\Url;

/* @var $leadership \app\models\Leadership[] */

?>

<div class="container pt-50"">
<?php if ( Yii::$app->session->hasFlash('success') ): ?>
    <div class="alert alert-success" role="alert">
        <p class="mb-0"><?=Yii::$app->session->getFlash('success')?></p>
    </div>
<?php endif; ?>

<table class="table table-bordered">
    <div class="form-control">
        <a href="<?=Url::toAdminCreate('leadership')?>" class="btn btn-success">Добавить</a>
    </div>
    <thead class="table-dark">
        <th width="8%">ID</th>
        <th width="20%">ФИО</th>
        <th width="10%">E-mail</th>
        <th width="10%">Тел.</th>
        <th width="10%">Должность.</th>
        <th width="30%">Описание</th>
        <th width="20%">URL</th>
        <th width="10%">Создана</th>
        <th width="10%">Обновлена</th>
    </thead>
    <tbody>
    <?php foreach ($leadership as $user): ?>
        <tr>
            <td>
                <a href="<?=Url::toAdminEdit('leadership', $user->slug)?>"><i class='fas fa-edit'></i></a>
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
            <td>
                <?=$user->name?>
                <?php if ($user->mainImage): ?>
                    <img src="<?=$user->mainImage->path?>" style="width: 100%;">
                <?php else: ?>
                    <img src="<?=\app\models\Image::noImage()?>" style="width: 200px; height: 200px;">
                <?php endif; ?>
            </td>
            <td><?=$user->email?></td>
            <td><?=$user->phone?></td>
            <td><?=$user->position?></td>
            <td><?=mb_substr(strip_tags($user->description), 0 , 200)?>...</td>
            <td><?=$user->slug?></td>
            <td><?=date('Y-m-d H:i', $user->created_at)?></td>
            <td><?=date('Y-m-d H:i', $user->updated_at)?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>