<?php
$this->registerCssFile('@web/css/swiper/main.css',
    ['depends' => [\app\assets\SwiperAsset::class]]
);
$this->registerJsFile('@web/js/swiper/main.js',
    ['depends' => [\app\assets\SwiperAsset::class]]
);
?>

<section id="home" class="carousel-section-wrapper">
    <!-- Swiper -->
    <div class="hidden-mobile">
        <div class="swiper-container main-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-slide-image">
                        <img src="<?=Yii::getAlias('@web/images/home-slider/home-bg.jpg')?>">
                    </div>
                    <div class="swiper-slide-text desktop-text">
                        <div>
                            <h4>ООО "Новороссийский прокатный завод"</h4>
                            <span>крупнейший металлургический завод юга России</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-image">
                        <img src="<?=Yii::getAlias('@web/images/home-slider/9.jpg')?>">
                    </div>
                    <div class="swiper-slide-text desktop-text">
                        <div>
                            <h4>Прием лома черных металлов</h4>
                            <span>От 5тонн, 12 000руб. за тонну</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-image">
                        <img src="<?=Yii::getAlias('@web/images/home-slider/2.jpg')?>">
                    </div>
                    <div class="swiper-slide-text desktop-text">
                        <div>
                            <h4>В наличии и под заказ:</h4>
                            <span>Арматура 120ф, заготовка литая 12 000м.</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-image">
                        <img src="<?=Yii::getAlias('@web/images/home-slider/3.jpg')?>">
                    </div>
                    <div class="swiper-slide-text desktop-text">
                        <div>
                            <h4>ООО "Новороссийский прокатный завод"</h4>
                            <span>Крупнейший металлургический завод юга России</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-white"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
        </div>
    </div>
    <div class="hidden-desktop">
        <div class="swiper-container main-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-slide-image">
                        <img src="<?=Yii::getAlias('@web/images/home-slider/home-bg.jpg')?>">
                    </div>
                    <div class="swiper-slide-text mobile-text">
                        <div>
                            <h4>ООО "Новороссийский прокатный завод"</h4>
                            <span>Крупнейший металлургический завод юга России</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-image">
                        <img src="<?=Yii::getAlias('@web/images/home-slider/9.jpg')?>">
                    </div>
                    <div class="swiper-slide-text mobile-text">
                        <div>
                            <h4>Прием лома черных металлов</h4>
                            <span>От 5тонн, 12 000руб. за тонну</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-image">
                        <img src="<?=Yii::getAlias('@web/images/home-slider/2.jpg')?>">
                    </div>
                    <div class="swiper-slide-text mobile-text">
                        <div>
                            <h4>В наличии и под заказ:</h4>
                            <span>Арматура 120ф, заготовка литая 12 000м.</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-image">
                        <img src="<?=Yii::getAlias('@web/images/home-slider/3.jpg')?>">
                    </div>
                    <div class="swiper-slide-text mobile-text">
                        <div>
                            <h4>ООО "Новороссийский прокатный завод"</h4>
                            <span>крупнейший металлургический завод юга России</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-white"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
        </div>
    </div>
</section>