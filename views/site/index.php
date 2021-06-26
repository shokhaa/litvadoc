<?php
use yii\captcha\Captcha;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/** @var \app\models\ContactForm $contactForm */
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css">
    <link rel="stylesheet" href="https://harvesthq.github.io/chosen/chosen.css">
    <link rel="stylesheet" href="/build/assets/css/styles.css?v=2">
    <link rel="shortcut icon" href="/build/assets/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/build/assets/favicon/favicon.ico" type="image/x-icon">
    <title>Дом вет</title>
</head>


<body>
<style>
    .help-block{
        color: red;
    }
</style>
<div class="wrapper">
    <header class="header">
        <div class="header__inner"><a class="logo" href="#">
                <svg fill="none" height="145" viewBox="0 0 100 83" width="150" xmlns="http://www.w3.org/2000/svg">
                    <g fill="#2aa41c">
                        <path clip-rule="evenodd"
                              d="m79.0794 37.9445v.006c.0974.5329.2391 1.7289.2361 1.8319 0 1.8924-.7497 3.6062-1.9598 4.8507-1.2189 1.2506-2.9072 2.0529-4.7726 2.0257-.4093-.0064-1.2983-.1463-2.0493-.2645l-.0003-.0001c-.3157-.0497-.6071-.0955-.8281-.126-.3365-.0454-.8884.0757-1.1245.327-.5198.5559-1.3261 1.6311-1.9523 2.4661-.2947.3931-.5496.7329-.7159.9403-.8323 1.0386-1.6971 2.0136-2.5796 2.9189-2.6357 2.6979-4.6958 4.3542-7.3847 5.7077-2.6032 1.1324-5.1621 1.093-7.1751.545-1.8388-.4905-3.7602-1.0719-5.7259-1.7411-1.0537-.3573-2.1221-.7418-3.1994-1.1506-2.9427-1.1142-10.9265-4.2572-12.4997-5.8439-.8293-.6661-1.5495-1.4927-2.1162-2.4495-.003-.0031-.0059-.0091-.0059-.0122-.2893-.542-.5549-1.1233-.7999-1.741 0-.0015-.0007-.0038-.0014-.0061-.0008-.0022-.0015-.0045-.0015-.006-.912-2.3103-1.5053-5.1111-1.7089-8.2087-.0551-.8421-.0554-2.2897-.0557-3.7734-.0004-1.5411-.0008-3.1211-.0624-4.1022-.0325-.5329-.3394-1.0083-.8058-1.2475-.3187-.1635-.6582-.3331-.7998-.3967-1.1009-.4784-2.0513-1.2505-2.7567-2.2164-.8412-1.1476-1.3371-2.5707-1.3371-4.1119 0-2.1226.9416-4.0181 2.4203-5.2807.0826-.0674.1664-.1336.2507-.2002l.0003-.0002.0002-.0002.0003-.0002.0002-.0002c.0478-.0378.0958-.0757.1438-.1139.0043-.0045.0086-.0073.0141-.0108l.0065-.0044c3.9049-3.043 9.2707-6.0255 15.5043-9.15336 8.8575-4.44196 15.3508-6.667479 15.3597-6.670507 2.1073-.6721981 5.0352-.99013 7.1396-.478411 2.8925.953798 4.2296 2.028708 5.9503 4.087688 1.7266 2.00146 4.8523 7.47289 7.2253 12.52049 3.9225 8.3449 7.2076 15.8632 8.1668 21.0834zm-22.1156-21.0868c-.8441.6238-1.644 1.4141-2.3465 2.3497-2.7773 3.7092-2.9692 8.3238-.4279 10.3101.1534.1181.3128.2271.4781.3209 2.2313 1.2899 5.5016.3785 8.034-2.1498.3926-.3936.7645-.8236 1.1157-1.2899.4339-.5813.8028-1.1809 1.1098-1.7895 1.6616-3.2944 1.4639-6.8461-.6789-8.5206-1.1009-.8599-2.5324-1.0839-4.0288-.763-.8235.1756-1.6647.5178-2.4793 1.0113-.2627.1575-.5224.3301-.7762.5208zm-18.633.7541c.0532-2.1104.6169-4.0301 1.5053-5.4926 1.0862-1.7865 2.6564-2.8947 4.3801-2.84928.971.02422 1.8771.41482 2.6593 1.07798.8441.7145 1.5466 1.7501 2.0365 2.9976.0885.2271.1741.4633.2479.7055.3631 1.1627.552 2.4738.5165 3.8545-.1121 4.4904-2.5383 8.1088-5.4957 8.3298-.1298.0091-.2597.0122-.3896.0091-2.8275-.0726-5.0943-3.2277-5.4248-7.2882-.0355-.433-.0473-.8841-.0355-1.3444zm-11.2127 8.0005c.3247.4814.6848.9144 1.0685 1.2929 1.8388 1.8228 4.2177 2.4284 5.7967 1.3111 1.7621-1.2415 1.9156-4.1876.4516-6.8249-.121-.2211-.2568-.4421-.4014-.6571-1.4256-2.1105-3.5359-3.2913-5.3068-3.1521-.5637.0424-1.095.2211-1.5584.5481-1.6204 1.1445-1.8831 3.7304-.7733 6.1891.1978.439.4368.872.7231 1.2929zm30.1762 19.3997c.0089 1.2263-.2627 2.386-.7467 3.4094-1.1334 2.389-3.4415 4.0301-6.1155 4.0483-.6022.003-1.1895-.0757-1.7473-.2271-1.4817-.4027-2.7479-1.2838-3.6776-2.5253l-.0121-.0183c-.129-.1975-1.2188-1.8662-2.5734-2.3132-1.3986-.4878-3.4202-.0292-3.7057.0355-.0157.0036-.0262.006-.031.0069h-.0029c-.4014.0757-.8117.1151-1.2308.1181-3.9137.0273-7.1102-3.149-7.1367-7.1004-.003-.5269.0501-1.0416.1534-1.5382 1.2338-4.4723 5.2567-6.4192 7.9189-7.3791 1.9392-.6994 3.8872-.9507 5.6286-.8387.8205.0545 1.5967.1877 2.311.4027h.003c.4929.103.9887.2362 1.4846.4058 1.3045.439 2.4851 1.0628 3.5152 1.8197 1.098.8055 2.0218 1.7623 2.739 2.8099 1.0478 1.3202 1.9332 2.9735 2.5265 4.8599.4014 1.2808.6375 2.5555.7113 3.7727-.0019-.0039-.005-.0065-.0086-.0095-.002-.0017-.0041-.0035-.0061-.0056 0 .0458.0007.0908.0015.1355v.0004c.0007.0438.0014.0872.0014.1306zm10.2919-5.105c.8973-.2967 1.706-.7207 2.3878-1.2233 1.7886-1.3202 2.7213-3.2005 2.1959-4.8477-.1299-.4057-.3394-.7721-.6169-1.0931-1.2632-1.4624-3.9107-1.959-6.5818-1.0749-.0384.0121-.0738.0242-.1092.0364-3.1906 1.0991-5.1917 3.7818-4.4775 6.0316.5874 1.8531 2.8305 2.8402 5.3983 2.5646.5903-.0636 1.1954-.1938 1.8034-.3936z"
                              fill-rule="evenodd"/>
                        <path d="m8.15828 76.5343h-3.66367v5.0874h-4.49461v-13.3899h4.47572v4.5389h3.66368v-4.5389h4.5135v13.3899h-4.49462z"/>
                        <path d="m14.5368 74.8511c0-1.0717.1889-2.0362.5666-2.8936.3777-.87.8938-1.6076 1.5485-2.2127.6673-.6052 1.4542-1.0717 2.3606-1.3996.9065-.3278 1.8885-.4917 2.9461-.4917 1.0575 0 2.0396.1639 2.946.4917.9065.3279 1.6934.7944 2.3606 1.3996.6673.6051 1.1898 1.3427 1.5675 2.2127.3777.8574.5665 1.8219.5665 2.8936s-.1888 2.0488-.5665 2.9314-.9002 1.6391-1.5675 2.2695c-.6672.6178-1.4541 1.0969-2.3606 1.4373-.9064.3404-1.8885.5107-2.946.5107-1.0576 0-2.0396-.1703-2.9461-.5107-.9064-.3404-1.6933-.8195-2.3606-1.4373-.6547-.6304-1.1708-1.3869-1.5485-2.2695s-.5666-1.8597-.5666-2.9314zm4.7779 0c0 .4413.0629.8447.1888 1.2104.1385.3656.3211.6808.5477.9456.2392.2648.5225.4728.8498.6241.3274.1387.6799.208 1.0576.208s.7239-.0693 1.0387-.208c.3273-.1513.6106-.3593.8498-.6241s.4217-.58.5476-.9456c.1385-.3657.2078-.7691.2078-1.2104 0-.4287-.0693-.8195-.2078-1.1726-.1259-.3656-.3084-.6682-.5476-.9078-.2392-.2521-.5225-.4476-.8498-.5863-.3148-.1386-.661-.208-1.0387-.208s-.7302.0694-1.0576.208c-.3273.1387-.6106.3342-.8498.5863-.2266.2396-.4092.5422-.5477.9078-.1259.3531-.1888.7439-.1888 1.1726z"/>
                        <path d="m35.2813 74.0568.2077 7.5649h-4.1924v-13.3899h5.8732l2.4173 7.2056h.0944l2.0962-7.2056h6.0621v13.3899h-4.3625l.1322-7.5271-.1133-.0189-2.4928 7.546h-3.1726l-2.4551-7.5649z"/>
                        <path d="m50.329 68.2318h9.197v3.7446h-4.9667v1.1537h4.6645v3.4988h-4.6645v1.2482h5.2877v3.7446h-9.518z"/>
                        <path d="m60.1594 68.2318h5.08l2.2095 8.2836h.0756l2.1151-8.2836h5.08l-4.8345 13.3899h-4.9856z"/>
                        <path d="m75.6688 68.2318h9.1969v3.7446h-4.9667v1.1537h4.6646v3.4988h-4.6646v1.2482h5.2878v3.7446h-9.518z"/>
                        <path d="m93.714 81.6217h-4.4946v-9.5886h-3.286v-3.8013h11.0666v3.8013h-3.286z"/>
                    </g>
                </svg>
            </a>
            <div class="header-text" data-aos="fade-left" data-aos-offset="100" data-aos-delay="50"
                 data-aos-duration="1000">Stabilus naujų<br>iššūkių šaltinis tinkamoje<br>vietoje patogiu metu
            </div>
            <div class="header-description" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
                 data-aos-duration="1000">Skirta tik veterinarijos<br>gydytojams ir specialistams
            </div>
            <input class="btn order-btn" type="submit" value="Noriu gauti skambučius">
            <div class="header-mobile"><img src="/build/assets/images/header-mobile.png" alt="Header Image"></div>
        </div>
    </header>
    <main class="middle">
        <section class="about"><h2 class="about__title">Kodėl svarbu būti "HomeVet"</h2>
            <ul class="benefits">
                <li class="benefits__item item-location wow bounceInRight"><strong class="benefits__name">Patogios
                        zonos</strong><br><span class="benefits__description">Jūs pats pasirenkate, kuriose miesto vietose jums bus patogu dirbti</span>
                </li>
                <li class="benefits__item item-price" data-aos="fade-left" data-aos-offset="200" data-aos-delay="20"
                    data-aos-duration="700"><strong class="benefits__name">Aiškios kainos</strong><br><span
                            class="benefits__description">Jūs pats nustatote paslaugų, kurias esate pasirengę teikti, kainas</span>
                </li>
                <li class="benefits__item item-comfort" data-aos="fade-left" data-aos-offset="200" data-aos-delay="30"
                    data-aos-duration="800"><strong class="benefits__name">Patogus grafikas</strong><br><span
                            class="benefits__description">Dienos ir valandos, kuriomis jums patogiau skambinti, priklauso tik nuo jūsų</span>
                </li>
                <li class="benefits__item item-clients" data-aos="fade-left" data-aos-offset="200" data-aos-delay="40"
                    data-aos-duration="900"><strong class="benefits__name">Klientai, norintys mokėti</strong><br><span
                            class="benefits__description">"HomeVet" jau žino šimtus tūkstančių naminių gyvūnėlių savininkų ir visada padės atrinkti tinkamus klientus</span>
                </li>
                <li class="benefits__item item-safety" data-aos="fade-left" data-aos-offset="200" data-aos-delay="50"
                    data-aos-duration="1000"><strong class="benefits__name">Saugus sandoris</strong><br><span
                            class="benefits__description">Apmokėjimas pagal skambutį iš anksto rezervuojamas kliento sąskaitoje. Mes garantuojame patogų sumos pervedimą į jūsų sąskaitą iškart po paslaugos suteikimo</span>
                </li>
                <li class="benefits__item item-service" data-aos="fade-left" data-aos-offset="200" data-aos-delay="60"
                    data-aos-duration="1100"><strong class="benefits__name">Specializuota paslauga</strong><br><span
                            class="benefits__description">Skirtingai nuo paslaugų visoms progoms, mes dirbame tik veterinarijos paslaugų rinkoje. Tai leidžia mums sutelkti dėmesį į tai, kas mums patinka.</span>
                </li>
            </ul>
        </section>
        <section class="registration"><h2 class="registration__title">Registruokis dabar</h2>
            <div class="registration__description">Norėdami būti vieni pirmųjų, gaunančių skambučius per <br>"HomeVet",
                užsiregistruokite dabar, kol paslauga ruošiasi pradėti <br>veikti. Jūs gausite prieigą prie uždaros
                grupės, kurioje pirmieji <br>sužinosite ir išbandysite visas naujas paslaugų galimybes</div>
            <div class="registration__inner">

                <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
                    <script>
                        $('html, body').animate({
                            scrollTop: $(".registration").offset().top + 70
                        }, 1000);
                    </script>
                    <div class="success" data-aos="fade-down">Jūsų užklausa priimta!<span class="close"></span></div>




                <?php else: ?>

                <div class="row">
                    <div class="col-lg-5">

                        <?php

                        $form = ActiveForm::begin([
                            'id' => 'user-form',

                            'fieldConfig' => [
                                'options' => [
                                    'tag' => false,

                                ],
                            ],
                            'options' => [
                                'enableAjaxValidation' => true,
                                'enableClientValidation' => true,
                                'class' => 'registration__form',
                                'onsubmit' => "ym(64556329, 'reachGoal', 'registration'); return true;"

                            ]
                        ]); ?>

                        <span class="prompt__form">Tavo miestas</span>

                        <?= $form->field($contactForm, 'cities')->dropDownList($cities, ['id' => 'cities', 'class' => 'select-cities', 'prompt' => 'Įveskite savo miestą', 'name' => 'cities', 'required' => 'required'])->label(false) ?>

                        <span class="prompt__form">Tavo vardas</span>

                        <?= $form->field($contactForm, 'first_name')->textInput(['id' => 'firstname', 'class' => false,  'name' => 'first_name', 'required' => 'required'])->label(false) ?>


                        <span class="prompt__form">Tavo pavardė</span>

                        <?= $form->field($contactForm, 'last_name')->textInput(['id' => 'lastname', 'class' => false,  'name' => 'last_name', 'required' => 'required'])->label(false) ?>



<!--                          $form->field($contactForm, 'experience_year')->textInput(['id' => 'workyears', 'class' => false, 'placeholder' => 'Стаж работы(лет)', 'name' => 'experience_year', 'required' => 'required'])->label(false) -->

                        <span class="prompt__form">Jūsų kambario numeris yra</span>

                        <?= $form->field($contactForm, 'phone_number')->textInput(['id' => 'phone', 'class' => false,  'name' => 'phone_number', 'required' => 'required'])->label(false) ?>

                        <span class="prompt__form">El. Paštas bendravimui</span>

                        <?= $form->field($contactForm, 'email')->textInput(['id' => 'email', 'class' => false,  'name' => 'email', 'required' => 'required'])->label(false) ?>

                        <div class="registration__checkbox-title">Kokioje veterinarijos srityje specializuojatės?</div>

                        <?= $form->field($contactForm, 'specialists[]')->checkboxList([
                            'Terapija' => 'Terapija',
                            'Chirurgija' => 'Chirurgija',
                            'Kosmetologija' => 'Kosmetologija',
                            'Odontologija' => 'Odontologija',
                            'Neurologija' => 'Neurologija',
                            'Oftalmologija' => 'Oftalmologija',
                            'Kardiologija' => 'Kardiologija',
                        ],
                            [
                                'required' => 'required',

                                'tag' => 'ul',
                                'class' => 'registration__checkbox-list',
                                'item' => function ($index, $label, $name, $checked, $value) {
                                    return "<li class='registration__checkbox-item'>
                            <input type='checkbox' id='checkbox-item$index' name='specialists[]' value='$value'>
                            <label for='checkbox-item$index'>$label</label>
                        </li>";

                                }

                            ]
                        )->label(false) ?>
                        <div class="clearfix"></div>


                        <div class="registration__checkbox-title">На каких животных вы специализируетесь?</div>


                        <?= $form->field($contactForm, 'animal_types[]')->checkboxList([
                            'Šunys' => 'Šunys',
                            'Katės' => 'Katės',
                            'Graužikai' => 'Graužikai',
                            'Paukščiai' => 'Paukščiai',
                            'Ropliai' => 'Ropliai',
                        ],
                            [
                                'required' => 'required',
                                'tag' => 'ul',
                                'class' => 'registration__checkbox-list',
                                'item' => function ($index, $label, $name, $checked, $value) {
                                    return "<li class='registration__checkbox-item'>
                            <input type='checkbox' id='type_checkbox-item$index' name='animal_types[]' value='$value'>
                            <label for='type_checkbox-item$index'>$label</label>
                        </li>";

                                }

                            ]
                        )->label(false) ?>

                        <div class="registration__agree"><input type="checkbox" id="checkbox-agreee" name="agree"><label
                                    for="checkbox-agreee">Sutinku su asmens duomenų tvarkymu ir sutinku<br>su pasiūlymo
                                sutartimi</label></div>
                        <?= Html::error($contactForm, 'agree', ['class' => 'help-block']) ?>
                        <?= Html::input('submit', 'Отправить заявку', 'Siųskite užklausą', ['class' => 'wow pulse btn registration__btn',
                            'data-wow-iteration' => "3",
                            'data-wow-duration' => "0.15",
                        ]) ?>


                        <?php ActiveForm::end(); ?>

                    </div>
                </div>
                <?php endif; ?>


            </div>
        </section>

        <section class="app-work"><h2 class="app-work__title">Kaip veikia "HomeVet" gydytojams</h2>
            <div class="slider-text">
                <div class="slide">
                    <div class="slide__number slide__number-01"><img src="./build/assets/images/number-slide-01.svg"></div>
                    <div class="slide__title">Registracija tarnyboje</div>
                    <div class="slide__description">Užpildykite profilį ir įkelkite reikiamus dokumentus</div>
                </div>
                <div class="slide">
                    <div class="slide__number slide__number-02"><img src="./build/assets/images/number-slide-02.svg"></div>
                    <div class="slide__title">Dokumentų tikrinimas</div>
                    <div class="slide__description">Jūsų paskyra bus aktyvuota po greito pateiktų dokumentų
                        patikrinim.
                    </div>
                </div>
                <div class="slide">
                    <div class="slide__number slide__number-03"><img src="./build/assets/images/number-slide-03.svg"></div>
                    <div class="slide__title">Priimkite užsakymus</div>
                    <div class="slide__description">Pasirinkite jums tinkamą vietą ir laiką, gaukite uždarbį, kelkite
                        savo reitingą sistemoje
                    </div>
                </div>
            </div>
            <div class="slider-app">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="slider-info">
                <div class="slider-info__frame slider-info__frame-01 active"></div>
                <div class="slider-info__frame slider-info__frame-02"></div>
                <div class="slider-info__frame slider-info__frame-03"></div>
                <div class="slider-info__group"></div>
            </div>
        </section>

    </main>
    <footer class="footer">
        <div class="footer-top container">
            <div class="footer__title">Mielai atsakysime į jūsų klausimus</div>
            <div class="footer__description">Išklausysime jūsų idėjų ir pasiūlymų</div>
            <ul class="social-icons">
                <li class="social-icons__item" data-aos="fade-right" data-aos-offset="100" data-aos-delay="50"
                    data-aos-duration="1000"><a class="social-icons__link" href="#"><img
                                src="./build/assets/images/icon-telegram.svg" alt="Icon Telegram"></a></li>
                <li class="social-icons__item" data-aos="fade-left" data-aos-offset="100" data-aos-delay="50"
                    data-aos-duration="1000"><a class="social-icons__link" href="#"><img
                                src="./build/assets/images/icon-whatsapp.svg" alt="Icon Whatsapp"></a></li>
            </ul>
        </div>
    </footer>
</div>
<script src="/build/assets/js/build.js"></script>
<script src="https://harvesthq.github.io/chosen/chosen.jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

<script>

    $('html, body').animate({
        scrollTop: $(".registration").offset().top + 70
    }, 1000);
</script>
<?php endif; ?>

</body>
</html>