<?php
/**
 * Template part for displaying posts
 * @package log-book
 * @version 1.0.1
 */

$hide_category = log_book_get_option( 'post_categories' ); // что за функция? Ничего не возвращает.
?>

<article id="post-<?php
the_ID(); // 333826NULL
?>"
    <?php
    post_class(); // class="post-333826 post type-post status-publish format-standard hentry category-uncategorized"NULL
    ?>>
    <div class="blog-detail tm-content-box boxed">
        <?php
        /**
         * Есть ли у поста картинка - у нас по дефолту нет.
         */
        if (has_post_thumbnail()) {
            $image_id = get_post_thumbnail_id();
            $image_url = wp_get_attachment_image_src($image_id, 'full', true);
            ?>
            <div class="blog-banner">
                <img class="img-responsive" src="<?php echo  $image_url[0]; ?>" alt="<?php the_title(); ?>" />
            </div>
            <?php
        } /* Конец никогда не выполняющегося кода. */
        ?>

        <?php


        $fullNumber = get_the_title();     // string(11) "79034504267"
        $fullNumberWithoutFirst = substr($fullNumber, 1, 10); // string(10) "9034504267"
        $numberFirst909 = substr($fullNumber, 1, 3); // string(3) "903"
        $numberFirst909 = trim($numberFirst909);
        $numberLast204 = substr($fullNumber, 4, 3); // string(3) "450"
        $numberLast09 = substr($fullNumber, 7, 2); // string(2) "42"
        $numberLast21 = substr($fullNumber, 9, 2); // string(2) "67"

        $numberFirstAfter8 = substr($fullNumber, 1, 1); // вырезаем первую цифру = 9
        $numberFirstAfter8 = trim($numberFirstAfter8);
        $numberFirstTwo = substr($fullNumber, 0, 2); // 89




        /**
         *  Опять проверка длины, но теперь уже для H1
         */
        if (strlen($fullNumber)==11 and is_numeric($fullNumber)) { ?>
            <div style="text-align:center;">
                <h1 class="post-title">
                    Кто звонил?  +
                    <?php
                    the_title(); // 79034504267NULL
                    ?>:
                </h1>
            </div>
        <?php }
        else { ?>
            <div style="text-align:center;">
                <h1 class="post-title">
                    <?php the_title(); ?>
                </h1>
            </div>
            <?php
        } // Конец проверки для H1
        ?>


        <style>
            .zrtyqwd67517263172631723123 {padding-top:0px;margin-bottom:0px;width:100%;margin-top:0px;word-break:break-all;};
            @media only screen and (max-width:800px){.zzz111{font-size:12px !important;}}
            @media only screen and (max-width:800px){.nnn002{display:none;width:0px;}}
            .zrtyqwd67517263172631723123{font-size:16px;margin-top:15px;border-collapse:separate;margin-bottom:15px;}
            .zrtyqwd67517263172631723123 td,.zrtyqwd67517263172631723123 th{border:1px solid #B5A177!important;padding:0px 0px !important;vertical-align:middle;-ms-border-radius:2px;border-radius:2px}
            .zrtyqwd67517263172631723123 th{text-align:center;background: rgb(244,244,244);
            .zrtyqwd67517263172631723123 th:nth-child(1) {text-align:center;}
            .zrtyqwd67517263172631723123 td img{width:20px;margin:0 auto;display:block}
            .rrrrr1{text-align:center;padding-bottom:0px;border:1px solid #ffffff;background-color:#B5A177;padding-top:0px;}
            .rrrrr2{text-align:center;padding-bottom:0px;border:1px solid #ffffff;background-color:#B5A177;padding-top:0px;}
            .zrtyqwd67517263172631723123 td{text-align:center;background-color:#F5F5F5;padding-top:0px;padding-bottom:0px;border:1px solid #ffffff;}
            background: linear-gradient(0deg, rgba(244,244,244,1) 0%, rgba(244,244,244,1) 35%, rgba(239,239,239,1) 100%);}
            .zrtyqwd67517263172631723123 td{text-align:center;background-color:#f4f4f4;}
            .zrr876182731823123c123c123c{text-align:justify;}

        </style>

        <?php


        if (strlen($fullNumber)==11 and is_numeric($fullNumber)) { ?>
        <p class="zrr876182731823123c123c123c">Определите прямо сейчас кто звонил по номеру +7 (<?= $numberFirst909.$numberLast204.$numberLast09.$numberLast21; ?>)
            или 8<?= $fullNumberWithoutFirst; ?>, а так же узнайте узнайте регион и был ли входящий звонок с него спамом,
            рекламой или являлся ли он мошенническим. Если вам что-либо известно плохое о звонках с 8<?= $fullNumberWithoutFirst; ?>
            или другом его варианте : +<?= $fullNumber; ?>, то на этот номер телефона можно уже сейчас
            <a href="#comments" style="background-color:#E73E3B;padding:2px;border-radius:3px;color:#ffffff;">написать комментарий</a>.</p>


        <?php

        /**
         * Тут чуть выше была яндекс рекламка
         */


        /**
         * Исходя из второй цифры номера получаем массив из 8к строк.
         * [0]=> string(85) "9000000000@9000099999@ООО "Т2 Мобайл"@Краснодарский край "
         * [1]=> string(74) "9000100000@9000199999@ООО "Т2 Мобайл"@Тверская обл. "
         * [2]=> string(80) "9000200000@9000299999@ООО "Т2 Мобайл"@Челябинская обл. "
         *
         */

        if (strlen($fullNumber) == 11 and $numberFirstAfter8 == 8) {
            $file_with_numbers = file("".$_SERVER['DOCUMENT_ROOT']."/secret-numasd76t1762te7c162te76c1t27e12e/cron-single-numbers-2-abc-8xx.txt"); // база телефонов для сравнения
        }
        elseif (strlen($fullNumber) == 11 and $numberFirstAfter8 == 9) {
            $file_with_numbers = file("".$_SERVER['DOCUMENT_ROOT']."/secret-numasd76t1762te7c162te76c1t27e12e/cron-single-numbers-2-def-9xx.txt"); // база телефонов для сравнения
        }
        elseif (strlen($fullNumber) == 11 and $numberFirstAfter8 == 3) {
            $file_with_numbers = file("".$_SERVER['DOCUMENT_ROOT']."/secret-numasd76t1762te7c162te76c1t27e12e/cron-single-numbers-2-abc-3xx.txt"); // база телефонов для сравнения
        }
        elseif (strlen($fullNumber) == 11 and $numberFirstAfter8 == 4) {
            if ($numberFirst909 == 495) {
                $file_with_numbers = file("".$_SERVER['DOCUMENT_ROOT']."/secret-numasd76t1762te7c162te76c1t27e12e/cron-single-numbers-2-abc-495.txt"); // база телефонов для сравнения
            }
            elseif ($numberFirst909 == 499) {
                $file_with_numbers = file("".$_SERVER['DOCUMENT_ROOT']."/secret-numasd76t1762te7c162te76c1t27e12e/cron-single-numbers-2-abc-499.txt"); // база телефонов для сравнения
            }
            else {
                $file_with_numbers = file("".$_SERVER['DOCUMENT_ROOT']."/secret-numasd76t1762te7c162te76c1t27e12e/cron-single-numbers-2-abc-4xx.txt"); // база телефонов для сравнения
            }
        }
        else {
            $file_with_numbers = file("".$_SERVER['DOCUMENT_ROOT']."/secret-numasd76t1762te7c162te76c1t27e12e/cron-single-numbers-2-def-9xx.txt"); // база телефонов для сравнения
        }


        $number_strings_in_file_with_numbers = count($file_with_numbers); // высчитываем количество строк


        /**
         * Пока i < чем кол-во строк
         *
         * 8 к раз делает explode, получаем
         * array(4) {
         * [0]=> string(10) "9000000000"
         * [1]=> string(10) "9000099999"
         * [2]=> string(25) "ООО "Т2 Мобайл""
         * [3]=> string(37) "Краснодарский край " }
         *
         * array(4) {
         * [0]=> string(10) "9000100000"
         * [1]=> string(10) "9000199999"
         * [2]=> string(25) "ООО "Т2 Мобайл""
         * [3]=> string(26) "Тверская обл. " }
         *
         *
         * А в самом файлике было это
         * 9000000000@9000099999@ООО "Т2 Мобайл"@Краснодарский край
         *
         * 9000100000@9000199999@ООО "Т2 Мобайл"@Тверская обл.
         *
         *
         * $razbityi_massivchik_8k[0] //  9000000000
           $razbityi_massivchik_8k[1] //  9000099999
           $razbityi_massivchik_8k[2] //  ООО "Т2 Мобайл"
           $razbityi_massivchik_8k[3] //  Краснодарский край
         */


        for ($i = 0; $i < $number_strings_in_file_with_numbers; $i++)
        {
        $razbityi_massivchik_8k = explode("@", $file_with_numbers[$i]);

        /**
         *  Телефоны разбиты по диапазонам. Если входит с 9000000000 по 9000099999 - то это Т2 Мобайл и тд.
         */
        if ($fullNumberWithoutFirst >= $razbityi_massivchik_8k[0] and $fullNumberWithoutFirst <= $razbityi_massivchik_8k[1]) {
        $mobile_operator = $razbityi_massivchik_8k[2]; // ООО "Т2 Мобайл"
        $oblast_otkuda_zvonili = $razbityi_massivchik_8k[3]; // Краснодарский край
        break;
        }
        else {}
        } // конец цикла


        $mobile_operator = str_replace(array('ПАО "МегаФон"'),'ПАО "МегаФон"',$mobile_operator);
        $mobile_operator = str_replace(array('ОАО "МегаФон"'),'Megafon',$mobile_operator);
        $mobile_operator = str_replace(array('ООО "МегаФон"'),'Megafon',$mobile_operator);
        $mobile_operator = str_replace(array('ПАО "Вымпел-Коммуникации"'),'ПАО "Вымпел-Коммуникации"',$mobile_operator);
        $mobile_operator = str_replace(array('ОАО "Вымпел-Коммуникации"'),'Beeline',$mobile_operator);
        $mobile_operator = str_replace(array('ООО "Вымпел-Коммуникации"'),'Beeline',$mobile_operator);
        $mobile_operator = str_replace(array('ПАО "Т2 Мобайл"'),'ПАО "Т2 Мобайл"',$mobile_operator);
        $mobile_operator = str_replace(array('ОАО "Т2 Мобайл"'),'Tele2',$mobile_operator);
        $mobile_operator = str_replace(array('ООО "Т2 Мобайл"'),'Tele2',$mobile_operator);
        $mobile_operator = str_replace(array('ПАО "Скартел"'),'Yota',$mobile_operator);
        $mobile_operator = str_replace(array('ОАО "Скартел"'),'Yota',$mobile_operator);
        $mobile_operator = str_replace(array('ООО "Скартел"'),'Yota',$mobile_operator);
        $mobile_operator = str_replace(array('ООО "Фастком"'),'Фастком',$mobile_operator);
        $mobile_operator = str_replace(array('ПАО "Мобильные ТелеСистемы"'),'МТС',$mobile_operator);
        $mobile_operator = str_replace(array('ПАО "МГТС"'),'МГТС',$mobile_operator);
        $mobile_operator = str_replace(array('ООО "Сбербанк-Телеком"'),'Сбербанк-Телеком (Сбермобайл)',$mobile_operator);
        $mobile_operator = str_replace(array('ООО "ЕКАТЕРИНБУРГ-2000"'),'Мотив',$mobile_operator); // Да, это Мотив.
        $mobile_operator = str_replace(array('ООО "ДЭНИ КОЛЛ"'),'Дэни Колл',$mobile_operator);
        $mobile_operator = str_replace(array('ООО "ВЕСТ КОЛЛ ЛТД"'),'ВестКолл ЛТД',$mobile_operator);
        $mobile_operator = str_replace(array('ООО "Оранж Бизнес Сервисез"'),'Orange Business Services',$mobile_operator);
        $mobile_operator = str_replace(array('ЗАО "СИБИНТЕРТЕЛЕКОМ"'),'ЗАО "СИБИНТЕРТЕЛЕКОМ"',$mobile_operator);
        $mobile_operator = str_replace(array('АО "ГЛОНАСС"'),'ГЛОНАСС',$mobile_operator);
        $mobile_operator = str_replace(array('АО "КантриКом"'),'Алло Инкогнито<br /><span style="color:#A00000;"></span>',$mobile_operator);
        $mobile_operator = str_replace(array('ЗАО "СанСим"'),'SunSIM',$mobile_operator);
        $mobile_operator = str_replace(array('ООО "Скай Нетворкс"'),'Sky Networks',$mobile_operator);
        $mobile_operator = str_replace(array('ООО "Лайкамобайл"'),'Lycamobile',$mobile_operator);
        $mobile_operator = str_replace(array('ООО "Нэт Бай Нэт Холдинг"'),'Net By Net Holding',$mobile_operator);
        $mobile_operator = str_replace(array('ЗАО "ИСКРАТЕЛЕКОМ"'),'Seven Sky',$mobile_operator); // Да, это Seven Sky
        // ниже регионы
        $oblast_otkuda_zvonili = str_replace(array('|'),', ',$oblast_otkuda_zvonili);
        $oblast_otkuda_zvonili = str_replace(array('Еврейская автономная обл.'),'Еврейская АО',$oblast_otkuda_zvonili);
        $oblast_otkuda_zvonili = str_replace(array('г. Москва и Московская область'),'г. Москва; и вся область',$oblast_otkuda_zvonili);
        $oblast_otkuda_zvonili = str_replace(array('г. Санкт-Петербург и Ленинградская область'),'г. Санкт-Петербург; и вся область',$oblast_otkuda_zvonili);
        $oblast_otkuda_zvonili = str_replace(array('гор. Москва (Новомосковский), гор. Москва (гор. Новомосковский)'),'г. Москва (г. Новомосковский)',$oblast_otkuda_zvonili);
        // $oblast_otkuda_zvonili = str_replace(array(' обл.'),' обл.',$oblast_otkuda_zvonili);
        // $oblast_otkuda_zvonili = str_replace(array('г. '),'город ',$oblast_otkuda_zvonili);
        $oblast_otkuda_zvonili = str_replace(array('автономная область'),'АО',$oblast_otkuda_zvonili);
        $oblast_otkuda_zvonili = str_replace(array('Чувашская Республика - Чувашия'),'Чувашская Республика',$oblast_otkuda_zvonili);
        $oblast_otkuda_zvonili = str_replace(array('Ямало-Ненецкий АО'),'ЯНАО (Ямало-Ненецкий АО)',$oblast_otkuda_zvonili);
        $oblast_otkuda_zvonili = str_replace(array('Российская Федерация'),'Возможна вся Российская Федерация',$oblast_otkuda_zvonili);
        $oblast_otkuda_zvonili = str_replace(array('Ханты - Мансийский - Югра АО'),'Ханты-Мансийский Автономный Округ – Югра',$oblast_otkuda_zvonili);
        $oblast_otkuda_zvonili = str_replace(array('Республика Саха /Якутия/'),'Якутия, Саха',$oblast_otkuda_zvonili);
        $oblast_otkuda_zvonili = str_replace(array(' - '),' - ',$oblast_otkuda_zvonili);
        $oblast_otkuda_zvonili = str_replace(array(' - '),' - ',$oblast_otkuda_zvonili);
        ?>





                    <table class="zrtyqwd67517263172631723123">
                        <tr>
                            <th class="rrrrr1" style="background-color:#24878C;color:#ffffff;">Вариант номера:</th>
                            <th class="rrrrr2" style="background-color:#24878C;color:#ffffff;">Расположение:</th>
                            <th class="rrrrr2" style="background-color:#24878C;color:#ffffff;">Оператор:</th>
                            <th class="rrrrr2 nnn002" style="background-color:#24878C;color:#ffffff;">Отзывы:</th>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                /**
                                 * Вариант номера.
                                 * Исходя из первых двух цифр понимаем, мобильный это или городской.
                                 */
                                $numberFirstTwo = substr($fullNumber, 0, 2);
                                if ($numberFirstTwo == '73' or $numberFirstTwo == '74' or $numberFirstTwo == '78') {
                                    echo 'Городской';
                                }
                                elseif ($numberFirstTwo == '79') {
                                    echo 'Мобильный';
                                }
                                else {
                                    echo 'No info';
                                }?>
                            </td>


                            <td><?php
                                /**
                                 * Расположение.
                                 * Если без единой запятой - то просто выводим.
                                 */

                                if (strlen($oblast_otkuda_zvonili) < 3) {
                                    echo 'No info'; }
                                else {

                                    $expl = explode(", ",$oblast_otkuda_zvonili); // Белгородская обл.
                                    $explcount = count($expl); // 1
                                    if ($explcount == 1) {
                                       echo $oblast_otkuda_zvonili; // Белгородская обл.
                                    }
                                    elseif ($explcount == 0) {
                                        echo 'No info';
                                    }
                                    else {
                                        /**
                                         * Куча говнокода, но по идее никогда не выполнится, поэтому хрен с ним.
                                         */
                                        // $oblast_otkuda_zvonili; // г. Калининград, Калининградская обл.
                                        // $explcount // 2;

                                        $explcount = $explcount - 1; // 1
                                        $a = $explcount;
                                        // [0] => г.Каланинград [1] => Калининградская обл.
                                        for ($i = 0; $i <= $explcount; $i++)
                                        {
                                            echo trim($expl[$a]); // удаляем прообел в начале и конце первого слова до запятой + ВЫВОДИМ, с конца по начало идём
                                            /*
                                             * Проверка - нужно ли ставить запятую.
                                             * Если это не последнее слово (которое было первым) - ставь запятую
                                             */
                                            if ( $a != 0) {
                                                echo', ';}
                                            else {};
                                            $a--;
                                        }

                                    }
                                } ?>
                            </td>
                            <td><?php
                                /**
                                 * Выводим мобильного опреатора
                                 */
                                if (strlen($mobile_operator) < 3) {
                                    echo 'No info';  }
                                else {
                                    echo $mobile_operator;
                                } ?>
                            </td>
                            <td class="nnn002">
                                <?php
                                /**
                                 *  Выводим количество комментов.
                                 *  РАЗОБРАТЬСЯ.
                                 */
                                $comment_count = get_comments_number();
                                echo $comment_count; ?>
                            </td>
                        </tr>
                    </table>
                    <br />

                    <h3>Порядок набора номера абоненту +7 (<?= $numberFirst909.')'.$numberLast204.'-'.$numberLast09.'-'.$numberLast21; ?></h3>
                    <table border="0" cellpadding="0" cellspacing="1" class="zrtyqwd67517263172631723123">
                        <tr>
                            <th class="rrrrr1" style="background-color:#24878C;color:#ffffff;">Откуда звонок</th>
                            <th class="rrrrr2" style="background-color:#24878C;color:#ffffff;">Правила набора</th>
                        </tr>
                        <tr>
                            <td>
                                <p>  из России:</p>
                                <p>&nbsp;&mdash;&nbsp;с мобильного</p>
                                <p>&nbsp;&mdash;&nbsp;со стационарного</p>
                            </td>
                            <td>
                                <p>  +7 (<?= $numberFirst909.') '.$numberLast204.'-'.$numberLast09.'-'.$numberLast21.
                                        ' или 8 ('.$numberFirst909.') '.$numberLast204.'-'.$numberLast09.'-'.$numberLast21.
                                    ' или вот так 8'.$fullNumberWithoutFirst; ?></p>
                                <p>  8 гудок (<?= $numberFirst909.') '.$numberLast204.'-'.$numberLast09.'-'.$numberLast21; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>из Беларуси и Казахстана</td>
                            <td>8 гудок (<?= $numberFirst909.') '.$numberLast204.'-'.$numberLast09.'-'.$numberLast21; ?></td>
                        </tr>
                        <tr>
                            <td>из других стран</td>
                            <td>007-(<?= $numberFirst909.') '.$numberLast204.'-'.$numberLast09.'-'.$numberLast21; ?></td>
                        </tr>
                    </table>
                    <p class="zrr876182731823123c123c123c">Если делать набор данного номера планируется не со смартфона или мобильного телефона,
                        а со стационарного (проводного) номера телефона России, то его следует набирать через восьмерку,
                        идущей первой цифрой:
                        8 (<?= $numberFirst909.') '.$numberLast204.'-'.$numberLast09.'-'.$numberLast21; ?>
                        или вот так 8<?= $fullNumberWithoutFirst; ?>.</p>



                    <p class="zrr876182731823123c123c123c">Комментируя звонки с +7<?= $fullNumberWithoutFirst; ?> и звонки с него,
                        законом РФ запрещается указывать любые данные абонента, которые могут быть расценены как личные
                        или персональные (например, адрес проживания, фамилию, и т.п.). Если вы полагаете, что звонящим
                        был мошенник, то достаточно лишь просто написать - мошенник.
                        Если спам или реклама, то можно так же написать - спам, реклама. Например - "Звонят от имени
                    Тинькофф банка, хотя сами не являются работниками этого банка, мошенники."</p>
                    <p class="has-text-align-center"><strong>


                            <?php } else { ?>
                                <?php // the_content(); ?>
                            <?php } ?>




                    <?php
                            /**
                             * Интересный вариант с категориями, может быть когда-то разобраться.
                             */

                            $test = 22; if ($test == 23) { ?>
                        <div class="post-meta">
                            <ul class="meta-list single-meta">
                                <?php if ( 'post' === get_post_type() ): log_book_posted_on(); endif;

                                $the_cat = get_the_category();
                                if(!empty($the_cat))
                                {
                                    $category_name = $the_cat[0]->cat_name;
                                    $category_description = $the_cat[0]->category_description;
                                    $category_link = get_category_link( $the_cat[0]->cat_ID );
                                }
                                if( $hide_category != 1)
                                {
                                    ?>

                                    <li><span class="category"> <i class="fa fa-folder-o " aria-hidden="true" ></i><a href="<?php echo esc_url( $category_link); ?> "><?php
                                                echo esc_html($category_name);?></a></span></li>

                                <?php }

                                if(!get_theme_mod('article_comment_link')) :?>

                                    <li class="meta-comment list-inline-item">
                                        <?php $cmt_link = get_comments_link();
                                        $num_comments = get_comments_number();
                                        if ( $num_comments == 0 ) {
                                            $comment = __( 'No Comments', 'log-book' );
                                        } elseif ( $num_comments > 1 ) {
                                            $comment = $num_comments . __( ' Comments', 'log-book' );
                                        } else {
                                            $comment = __('1 Comment', 'log-book' );
                                        }

                                        ?>
                                        <i class="fa fa-comment-o" aria-hidden="true"></i>
                                        <a href="<?php echo esc_url( $cmt_link ); ?>"><?php echo esc_html( $comment );?></a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    <?php } ?>
                    <div class="post-title">
                        <?php // the_content(); ?>
                    </div>

    </div>
</article><!-- #post-## -->

