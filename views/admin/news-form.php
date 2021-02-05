<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

/**
 * @var $news \app\models\News;
 */

?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']])?>

    <div class="container pt-50">
        <div class="row">

            <div class="col-lg-12 pt-20">
                <?= $form->field($news, 'title')->textInput(['class' => 'form-control', 'required' => true, 'placeholder' => "Заголовок навости"])?>
            </div>

            <div class="col-lg-12 pt-20">
                <?= $form->field($news, 'image')->fileInput(['id' => 'main-image'])?>
            </div>

            <?php if ($news->mainImage): ?>
                <div class="col-lg-12 pt-20">
                    <div id="mainImageExist">
                        <img src="<?=$news->mainImage->path?>" style="width: 300px; height: 300px;">
                    </div>
                </div>
            <?php endif; ?>

            <div class="col-lg-12 pt-20">
                <div id="mainImageOutput" <?php if ($news->mainImage):  ?> style="display: none" <?php endif; ?>></div>
            </div>

            <div class="col-lg-12 pt-30">
                <?= $form->field($news, 'content')->widget(
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
            </div>

            <div class="col-lg-12 pt-20">
                <?= $form->field($news, 'slug')->textInput(['class' => 'form-control', 'required' => true, 'placeholder' => "URL заголовок"])?>
            </div>

            <div class="col-lg-12 pt-30">
                <?= $form->field($news, 'is_active')->checkbox()?>
            </div>

            <div class="form-group pt-30">
                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>

<?php ActiveForm::end(); ?>