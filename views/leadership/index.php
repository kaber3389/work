<?php

use \yii\helpers\Html;
use app\helpers\StringHelper;

/* @var $this yii\web\View
 * @var $leadership \app\models\Leadership[];
 */

$this->title = 'Руководство ' . Yii::$app->params['companyName'];
?>

<?//= $this->render('//layouts/slider')?>

<section id="managers" class="managers-section pt-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-7 col-md-9 mx-auto">
                <div class="section-title text-center mb-55">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Продукция</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">Арматура, заготовка</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($leadership as $manager): ?>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="feature-box box-style">
                        <div class="portfolio-img">
                            <img class="img-fluid" src="<?=$manager->mainImage->path?>" alt="<?=$manager->name?>">
                        </div>
                        <div class="box-content-style feature-content">
                            <h4><?=$manager->name?></h4>
                            <span><?=$manager->position?></span>
                            <div class="box-content-style feature-content">
                                <div class="box-description"><?=StringHelper::preparePrevText($manager->description)?></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>