<?php

use yii\helpers\Html;

/**
 * @var $news \app\models\News[]
 */

?>

<div class="container pt-25">
    <hr>
</div>

<section id="managers" class="managers-section pt-25">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-7 col-md-9 mx-auto">
                <div class="section-title text-center mb-55">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Новости и события</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">Последние новости и публикации</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($news as $item): ?>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="feature-box box-style">
                        <div class="portfolio-img">
                            <img class="img-fluid" src="<?=Yii::getAlias('@web/images/news/1591.jpg')?>" alt="">
                        </div>
                        <div class="box-content-style feature-content">
                            <h5>
                                <?=Html::a($item->title, ['press-center/news', 'id' => $item->id])?>
                            </h5>
                            <p><?=$item->prev_content?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>