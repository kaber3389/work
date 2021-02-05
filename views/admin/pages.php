<?php

use yii\helpers\Html;

/* @var $pages \app\models\Page[] */

?>
<table class="table table-bordered">
    <div class="form-control">
        <?= Html::a('Добавить',
            ['admin/page-create'],
            ['class' => 'btn btn-success', 'target' => '_blank'])
        ?>
    </div>
    <thead class="table-dark">
        <th>ID</th>
        <th>URL</th>
        <th>Контент</th>
        <th>Создана</th>
        <th>Обновлена</th>
    </thead>
    <tbody>
        <?php foreach ($pages as $page): ?>
            <tr>
                <td>
                    <?= Html::a("<i class='fas fa-edit'>$page->id</i>",
                        ['admin/page-edit', 'id' => $page->id],
                        ['target' => '_blank'])
                    ?>
                    <?= Html::a("<i class='fas fa-eye'></i>",
                        [$page->route],
                        ['target' => '_blank'])
                    ?>
                    <input type="checkbox"
                           id="page_<?=$page->id?>"
                           class="form-check-input"
                           <?php if ($page->is_active): ?>
                               checked
                           <?php endif; ?>>
                </td>
                <td><?=$page->route?></td>
                <td><?=mb_substr(strip_tags($page->content), 0 , 200)?>...</td>
                <td><?=date('Y-m-d H:i', $page->created_at)?></td>
                <td><?=date('Y-m-d H:i', $page->updated_at)?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>