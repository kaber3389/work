<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

/**
 * @var $page \app\models\Page;
 */

?>

<?php $form = ActiveForm::begin(); ?>

<section>
    <?= $form->field($page, 'route')?>
    <?= $form->field($page, 'content')->widget(
        CKEditor::class,
        [
            'editorOptions' => ElFinder::ckeditorOptions(
                'elfinder',
                [
                    // разработанны стандартные настройки basic, standard, full
                    'preset' => 'full',
                    'inline' => false, // по умолчанию false
                ]
            ),
        ]
    );
    ?>
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>
</section>

<?php ActiveForm::end(); ?>
