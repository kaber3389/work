<?php
use yii\helpers\Html;

?>
<b class="screen-overlay"></b>
<!--
<div class="nav-top" style="font-size: 12px;" id="navTop">
    <div class="container">
        <div class="row">
            <div class="col-xs-12" style="display: flex;
    vertical-align: middle;
    justify-content: space-between;
    align-items: center;
    height: 50px;
    font-size: 12px;">
                <div class="header-phone">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <p>
                        346519, Ростовская область,
                        г. Шахты, ул. Чаплыгина, 54<br>
                        Тел.: (8636)303-36-56
                        E-mail.:info@ooonpz.ru
                    </p>
                </div>
                <div class="header-phone">
                    <i class="fa fa-address-card" aria-hidden="true"></i>
                    <p>
                        Коммерческая служба:<br>
                        Тел.: (8636)303-36-56 (доб.) 48-14<br>
                        E-mail.: sbyt@ooonpz.ru
                    </p>
                </div>
                <span><button type="button" class="btn btn-primary" style="    background-color: #005da3;
    border-color: #005da3;">Заказать звонок</button></span>
            </div>
        </div>
    </div>
</div>-->
<header id="navBar" class="header navbar-area fixed-top bg-white" style="border-top: 1px solid #eee;">
    <?php /*
    <div class="container clearfix">

        <!-- Logo
        ============================================= -->
        <div id="logo">
            <a href="/" class="standard-logo">
                <img src="/include/images/logo.png" alt="Арматура-ММ">
            </a>
            <a href="/" class="retina-logo">
                <img src="/include/images/logo.png" alt="Арматура-ММ">
            </a>
        </div><!-- #logo end -->

        <div id="logo-slogan" class="hidden-md hidden-sm hidden-xs">
            Продажа новой арматуры в Москве и Московской области                    </div>

        <ul class="header-extras">
            <li class="limob">
                <div class="he-text">
                    <span class="he-span-text attention"><a href="tel:+74993466961"><i class="icon-call nomargin"></i> <b>+7 (499) 346-69-61</b></a></span>                            </div>
            </li>
            <li>
                <div class="he-text">
                    <span class="he-span-text attention"><a href="mailto:info@armatura-mm.ru"><i class="icon-mail nomargin"></i> <b>info@armatura-mm.ru</b></a></span>                            </div>
            </li>
            <li>
                <a href="/ajax/formcontact.php" data-lightbox="ajax" class="button button-mini button-rounded button-border button-theme noleftmargin">Заказать звонок</a>                        </li>
        </ul>


    </div> */?>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 header-desktop-menu">
                <div class="header-logo">
                    <img src="<?=Yii::getAlias('@web/images/logo_ru2.png')?>">
                    <div class="logo-text">
                        <h2>Новороссийский прокатный завод</h2>
                    </div>
                </div>
                <?php if (!Yii::$app->user->isGuest): ?>
                    <?=Yii::$app->user->identity->getId()?>
                <?php endif ?>
                <div id="navbar_main">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg navbar-dark">
                    <div class="offcanvas-header">
                        <div class="header-logo">
                            <img src="<?=Yii::getAlias('@web/images/logo_ru2.png')?>">
                            <div class="logo-text">
                                <h2>Новороссийский прокатный завод</h2>
                            </div>
                        </div>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </div>
                    <div class="navbar-wrapper">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="<?=\yii\helpers\Url::home()?>">ГЛАВНАЯ</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle"
                                   href="#" role="button"
                                   id="dropdownMenuLink"
                                   data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    О КОМПАНИИ
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><?=Html::a('история развития', ['history-development/index'], ['class' => 'dropdown-item'])?></li>
                                    <li><?=Html::a('экология', ['ecology/index'], ['class' => 'dropdown-item'])?></li>
                                    <li><?=Html::a('достижения', ['achievements/index'], ['class' => 'dropdown-item'])?></li>
                                    <li><?=Html::a('руководство', ['leadership/index'], ['class' => 'dropdown-item'])?></li>
                                    <li><?=Html::a('вакансии', ['vacancies/index'], ['class' => 'dropdown-item'])?></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle"
                                   href="#" role="button"
                                   id="dropdownMenuLink"
                                   data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    ПРОДУКЦИЯ И УСЛУГИ
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><?=Html::a('продукты', ['products/index'], ['class' => 'dropdown-item'])?></li>
                                    <li><?=Html::a('сервисы', ['products/services'], ['class' => 'dropdown-item'])?></li>
                                    <li><?=Html::a('гарантии', ['products/warranty'], ['class' => 'dropdown-item'])?></li>
                                    <li><?=Html::a('информация для клиента', ['products/info'], ['class' => 'dropdown-item'])?></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle"
                                   href="#" role="button"
                                   id="dropdownMenuLink"
                                   data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    ПОСТАВЩИКАМ
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><?=Html::a('актуальные закупки', ['for-suppliers/purchases'], ['class' => 'dropdown-item'])?></li>
                                    <li><?=Html::a('тендеры', ['for-suppliers/tenders'], ['class' => 'dropdown-item'])?></li>
                                    <li><?=Html::a('обратная связь', ['for-suppliers/feedback'], ['class' => 'dropdown-item'])?></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle"
                                   href="#" role="button"
                                   id="dropdownMenuLink"
                                   data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    ПРЕСС-ЦЕНТР
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><?=Html::a('новости и события', ['news/index'], ['class' => 'dropdown-item'])?></li>
                                    <li><?=Html::a('корпоративная культура', ['press-center/corporate-culture'], ['class' => 'dropdown-item'])?></li>
                                    <li><?=Html::a('подписки (соц.сети)', ['press-center/subscriptions'], ['class' => 'dropdown-item'])?></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>