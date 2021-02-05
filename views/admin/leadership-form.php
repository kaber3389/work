<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

/**
 * @var $leadership \app\models\Leadership;
 */

?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']])?>

    <div class="container pt-50">
        <div class="row">

            <div class="col-lg-12 pt-20">
                <?= $form->field($leadership, 'name')->textInput(['class' => 'form-control', 'required' => true, 'placeholder' => "ФИО"])?>
            </div>

            <div class="col-lg-12 pt-20">
                <?= $form->field($leadership, 'email')->textInput(['class' => 'form-control', 'required' => true, 'placeholder' => "Эл. почта"])?>
            </div>

            <div class="col-lg-12 pt-20">
                <?= $form->field($leadership, 'phone')->textInput(['class' => 'form-control', 'required' => true, 'placeholder' => "Телефон"])?>
            </div>

            <div class="col-lg-12 pt-20">
                <?= $form->field($leadership, 'position')->textInput(['class' => 'form-control', 'required' => true, 'placeholder' => "Должность"])?>
            </div>

            <div class="col-lg-12 pt-20">
                <?= $form->field($leadership, 'image')->fileInput(['id' => 'main-image'])?>
            </div>

            <?php if ($leadership->mainImage): ?>
                <div class="col-lg-12 pt-20">
                    <div id="mainImageExist">
                        <img src="<?=$leadership->mainImage->path?>" style="width: 300px; height: 300px;">
                    </div>
                </div>
            <?php endif; ?>

            <div class="col-lg-12 pt-20">
                <div id="mainImageOutput" <?php if ($leadership->mainImage):  ?> style="display: none" <?php endif; ?>></div>
            </div>

            <div class="col-lg-12 pt-30">
                <?= $form->field($leadership, 'description')->widget(
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
                <?= $form->field($leadership, 'slug')->textInput(['class' => 'form-control', 'required' => true, 'placeholder' => "URL заголовок"])?>
            </div>

            <div class="col-lg-12 pt-30">
                <?= $form->field($leadership, 'is_active')->checkbox()?>
            </div>

            <div class="form-group pt-30">
                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>

<?php ActiveForm::end(); ?>