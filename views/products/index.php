<?php

use \yii\helpers\Html;
use yii\helpers\StringHelper;
use app\helpers\Url;

/* @var $this yii\web\View
 * @var $products \app\models\Product[];
 */

$this->title = 'ООО "Новороссийский прокатный завод"';
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
            <?php foreach ($products as $product): ?>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="feature-box box-style">
                        <div class="portfolio-img">
                            <img class="img-fluid" src="<?=$product->mainImage->path?>" alt="<?=$product->title?>">
                        </div>
                        <div class="box-content-style feature-content">
                            <h4>
                                <a href="<?=Url::to(['products/view', 'slug' => $product->slug])?>"><?=$product->title?></a>
                            </h4>
                            <div class="box-description"><?=StringHelper::truncate(strip_tags($product->description), 300)?></div>
                        </div>
                        <div class="small box-tags"><?=Html::a('#Арматура', '#')?> <?=Html::a('#высокое качество','#')?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>