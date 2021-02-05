<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

/**
 * @var $product \app\models\Product;
 */

?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']])?>

    <div class="container pt-50">
        <div class="row">

            <div class="col-lg-12 pt-20">
                <?= $form->field($product, 'title')->textInput(['class' => 'form-control', 'required' => true, 'placeholder' => "Название продукта"])?>
            </div>

            <div class="col-lg-12 pt-20">
                <?= $form->field($product, 'image')->fileInput(['id' => 'main-image'])?>
            </div>

            <?php if ($product->mainImage): ?>
                <div class="col-lg-12 pt-20">
                    <div id="mainImageExist">
                        <img src="<?=$product->mainImage->path?>" style="width: 300px; height: 300px;">
                    </div>
                </div>
            <?php endif; ?>

            <div class="col-lg-12 pt-20">
                <div id="mainImageOutput" <?php if ($product->mainImage):  ?> style="display: none" <?php endif; ?>></div>
            </div>

            <div class="col-lg-12 pt-20">
                <?= $form->field($product, 'price')->textInput(['class' => 'form-control', 'placeholder' => "Цена"])?>
            </div>

            <div class="col-lg-12 pt-30">
                <?= $form->field($product, 'description')->widget(
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
                <?= $form->field($product, 'document')->fileInput(['id' => 'document-input'])?>
            </div>

            <div id="document-container">

            </div>

            <div class="col-lg-12 pt-20">
                <?= $form->field($product, 'slug')->textInput(['class' => 'form-control', 'required' => true, 'placeholder' => "URL заголовок"])?>
            </div>

            <div class="col-lg-12 pt-30">
                <?= $form->field($product, 'is_active')->checkbox()?>
            </div>

            <div class="col-lg-12 pt-30">
                <?= $form->field($product, 'in_main_page')->checkbox()?>
            </div>

            <div class="form-group pt-30">
                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>

<?php ActiveForm::end(); ?>