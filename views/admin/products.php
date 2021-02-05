<?php

use yii\helpers\Html;
use app\helpers\Url;

/* @var $products \app\models\Product[] */

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
                ['admin/product-create'],
                ['class' => 'btn btn-success'])
            ?>
        </div>
        <thead class="table-dark">
        <th width="8%">ID</th>
        <th width="10%">Название</th>
        <th width="20%">Главное изображение</th>
        <th>Описание</th>
        <th width="3%">Цена</th>
        <th width="1%">На главной</th>
        <th width="10%">Создана</th>
        <th width="10%">Обновлена</th>
        </thead>
        <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
                <td>
                    <a href="<?=Url::toAdminEdit('products', $product->slug)?>"><i class='fas fa-edit'></i></a>
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
                <td><?=$product->title?></td>
                <?php if ($product->mainImage): ?>
                    <td><img src="<?=$product->mainImage->path?>" style="width: 100%;"></td>
                <?php else: ?>
                    <td><img src="<?=\app\models\Image::noImage()?>" style="width: 200px; height: 200px;"></td>
                <?php endif; ?>
                <td><?=mb_substr(strip_tags($product->description), 0 , 200)?>...</td>
                <td><?=$product->price?></td>
                <td>
                    <?php if ($product->in_main_page): ?>
                        <span class="text-success">Да</span>
                    <?php else: ?>
                        <span class="text-danger">Нет</span>
                    <?php endif; ?>
                </td>
                <td><?=date('Y-m-d H:i', $product->created_at)?></td>
                <td><?=date('Y-m-d H:i', $product->updated_at)?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>