<?php

use \yii\helpers\Html;
use app\helpers\StringHelper;
use app\helpers\Url;

/**
 * @var $this yii\web\View
 * @var $news \app\models\News[]
 * @var $leadership \app\models\Leadership[]
 * @var $products \app\models\Product[]
 *
 */

$this->title = 'ООО "Новороссийский прокатный завод"';
?>

<?= $this->render('//layouts/slider')?>

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
                            <div class="box-description"><?=StringHelper::preparePrevText($product->description)?></div>
                        </div>
                        <div class="small box-tags"><?=Html::a('#Арматура', '#')?> <?=Html::a('#высокое качество','#')?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="container ptb-25">
        <div class="text-center">
            <h4 class=""><?=Html::a('Вся продукция...', ['products/index'])?></h4>
        </div>
    </div>
</section>

<div class="container pt-25">

</div>

<section class="progress-section pt-100"
         style="
        background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(<?=\Yii::getAlias('@web/images/site/bg001.png')?>) 15% 90% no-repeat;
        background-size: cover;
        height: 900px;
        ">
    <div class="container" id="about-count">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="section-header-title text-center mb-55">
                    <h2>О нас в цифрах</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="section-title text-center mb-55">
                    <h2 class="progress-numeral">570 700</h2>
                    <div class="wow flipInX">
                        <div class="progress-hr"></div>
                        <span class="progress-annotation">м² территория комплекса</span>
                    </div>
                </div>
            </div>
            <div class="col-6 mx-auto">
                <div class="section-title text-center mb-55">
                    <h2 class="progress-numeral">1560</h2>
                    <div class="wow flipInX">
                        <div class="progress-hr"></div>
                        <span class="progress-annotation">
                            человек
                            <br> численность персонала
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-6 mx-auto">
                <div class="section-title text-center mb-55">
                    <h2 class="progress-numeral">730 000</h2>
                    <div class="wow flipInX">
                        <div class="progress-hr"></div>
                        <span class="progress-annotation">
                            ТОНН В ГОД - ПРОЕКТНАЯ МОЩНОСТЬ
                            <br>ЭЛЕКТРОСТАЛЕПЛАВИЛЬНОГО ЦЕХА
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-6 mx-auto">
                <div class="section-title text-center mb-55">
                    <h2 class="progress-numeral">530 000</h2>
                    <div class="wow flipInX">
                        <div class="progress-hr"></div>
                        <span class="progress-annotation">
                        ТОНН В ГОД - ПРОЕКТНАЯ МОЩНОСТЬ<br>
                        СОРТОПРОКАТНОГО ЦЕХА
                    </span>
                    </div>
                </div>
            </div>
            <div class="col-6 mx-auto">
                <div class="section-title text-center mb-55">
                    <h2 class="progress-numeral">120 000</h2>
                    <div class="wow flipInX">
                        <div class="progress-hr"></div>
                        <span class="progress-annotation">
                        ТОНН В ГОД ПЕРЕРАБАТЫВАЕТСЯ<br>
                        ШЛАКА
                    </span>
                    </div>
                </div>
            </div>
            <div class="col-6 mx-auto">
                <div class="section-title text-center mb-55">
                    <h2 class="progress-numeral">350</h2>
                    <div class="wow flipInX">
                        <div class="progress-hr"></div>
                        <span class="progress-annotation">
                            ОРГАНИЗАЦИЙ - НАШИ<br>
                            ПОСТОЯННЫЕ ПАРТНЕРЫ
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

        </div>
    </div>
</section>

<div class="container pt-25">

</div>

<section id="managers" class="managers-section pt-25">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-7 col-md-9 mx-auto">
                <div class="section-title text-center mb-55">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Руководство</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">Управление ООО "Новороссийский прокатный завод"</p>
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
                            <h4>
                                <a href="<?=Url::to(['leadership/view', 'slug' => $manager->slug])?>"><?=$manager->name?></a>
                            </h4>
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
    <div class="container ptb-25">
        <div class="text-center">
            <h4 class=""><?=Html::a('Все руководство...', ['leadership/index'])?></h4>
        </div>
    </div>
</section>

<div class="container pt-25">

</div>

<?php if (!isMobile()): ?>
    <section style="height: 900px;">
        <?=$this->render('//partial/particles')?>
    </section>
<?php endif; ?>

<div class="container pt-25">

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
                            <img class="img-fluid" src="<?=$item->mainImage->path?>" alt="<?=$item->title?>">
                        </div>
                        <div class="box-content-style feature-content">
                            <h4>
                                <a href="<?=Url::to(['news/view', 'slug' => $item->slug])?>"><?=$item->title?></a>
                            </h4>
                            <p><?=StringHelper::preparePrevText($item->prev_content)?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="container ptb-25">
        <div class="text-center">
            <h4 class=""><?=Html::a('Все новости...', ['news/index'])?></h4>
        </div>
    </div>
</section>