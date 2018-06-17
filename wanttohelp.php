<?php
include_once "header.php";
?>
<script type="text/javascript">
  $('ul li a').live('click', function() {
    let numClicked = $(this).parent('li').index();
    $("a").each(function(index) {
      if (index <= numClicked) {
        $(this).addClass('active-red');
      } else {
        $(this).removeClass('active-red');
      }
    });
  });
</script>

        <!-- Основная часть Хочу помочь -->

        <div class="container want_to_help_wrapper animated slideInLeft">
            <ul id="vkladki" class="nav nav-tabs" role="tablist" style="">
              <li class="nav-item">
                <a class="nav-link" href="#children" role="tab" data-toggle="tab">Дети</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#adults" role="tab" data-toggle="tab">Взрослые</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#older" role="tab" data-toggle="tab">Пожилые</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pets" role="tab" data-toggle="tab">Животные</a>
              </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active show" id="children" name="children">
                    <!-- <div class="my_card">
                        <div class="card_inner_text">Фонд помощи детям инвалидам "Аяла"</div>
                    </div>
                    <div class="my_card2">
                        <div class="card_inner_text">
                            <h5>Общество детей - инвалидов г. Астана</h5>
                            <div class="column">
                                <i class="fas fa-user"></i>   Жасанова Камка Мадиевна (Председатель)<br>
                                <i class="fas fa-map-marker-alt"></i>   г. Астана, пр. Республики 34, офис 406<br>
                                <i class="fas fa-envelope-square"></i>   kamka_zhasanova@mail.ru<br>
                                <i class="fas fa-globe"></i>   <a href="index.php" class="white" target="blank">www.aizhurek.kz</a>
                            </div>
                            <div class="column">
                                <i class="fas fa-phone"></i>   7 (7172) 321055, 7 (7172) 320640, +7-701- 2061155, +7-701-1853086<br>
                                <i class="fas fa-info-circle"></i>   Социальная помощь детям инвалидам<br>
                            </div>
                            <div class="clear"></div>
                            <h6 style="text-align: left;"><i class="fas fa-bullseye"></i>  Социальная помощь детям-инвалидам</h6>
                        </div>
                    </div>
                    <div class="clear"></div>-->

                    <?php
                        require_once 'PHPExcel.php';
                        require_once 'PHPExcel/IOFactory.php';
                        $excel = PHPExcel_IOFactory::load('base1.xlsx');

                        // Устанавливаем индекс активного листа
                        $excel->setActiveSheetIndex(0);
                        // Получаем активный лист
                        $sheet = $excel->getActiveSheet();

                        $numb = $sheet->getHighestRow();

                        $z = 2;
                        // Получили строки и обойдем их в цикле
                        $rowIterator = $sheet->getRowIterator();

                        /*foreach ($rowIterator as $row) {*/
                        for ($i = 2; $i <= $sheet->getHighestRow(); $i++) {
                            if ($sheet->getCellByColumnAndRow(1,$i)->getValue()){
                                echo '<div class="my_card2">
                                                <div class="card_inner_text">
                                                  <img src="img/default1.jpg" width="10%" height="10%" class="want_to_help_image">
                                                  <h5>' . $sheet->getCellByColumnAndRow(1,$i)->getValue() . '</h5>';
                                           echo '<div class="column">';
                                if( null != $sheet->getCellByColumnAndRow(5,$i)->getValue() ) { echo '<i class="fas fa-user"></i>   '; echo $sheet->getCellByColumnAndRow(5,$i)->getValue(); echo '<br>';}

                                if( null != $sheet->getCellByColumnAndRow(6,$i)->getValue() ) { echo '<i class="fas fa-map-marker-alt"></i>   '; echo $sheet->getCellByColumnAndRow(6,$i)->getValue(); echo '<br>';}

                                if( null != $sheet->getCellByColumnAndRow(8,$i)->getValue() ) { echo '<i class="fas fa-envelope-square"></i>   <span class="accent">'; echo $sheet->getCellByColumnAndRow(8,$i)->getValue();}

                                if( null != $sheet->getCellByColumnAndRow(4,$i)->getValue() ) {echo '</span><br><i class="fas fa-globe"></i>   <a href="index.php" class="white" target="blank"><span class="accent">   '; echo $sheet->getCellByColumnAndRow(4,$i)->getValue();}
                                echo '</span></a>
                                                    </div>
                                                    <div class="column">';
                                if( null != $sheet->getCellByColumnAndRow(7,$i)->getValue() ) { echo '<i class="fas fa-phone"></i>   '; echo $sheet->getCellByColumnAndRow(7,$i)->getValue(); echo '<br>';}

                                if( null != $sheet->getCellByColumnAndRow(2,$i)->getValue() ){ echo '<i class="fas fa-info-circle"></i>   '; echo $sheet->getCellByColumnAndRow(2,$i)->getValue(); echo '<br>';}

                                echo '
                                                    </div>
                                                    <div class="clear"></div>
                                                    <h6 style="text-align: left;"><i class="fas fa-bullseye"></i>   ';
                                echo $sheet->getCellByColumnAndRow(3,$i)->getValue();
                                echo '</h6>
                                                </div>
                                            </div>
                                            <div class="clear"></div>';
                            }
                        }
                    ?>

                </div>
                <div role="tabpanel" class="tab-pane fade in active show" id="adults" name="adults">
                    <?php
                        $excel = PHPExcel_IOFactory::load('base1.xlsx');

                        // Устанавливаем индекс активного листа
                        $excel->setActiveSheetIndex(1);
                        // Получаем активный лист
                        $sheet = $excel->getActiveSheet();

                        $numb = $sheet->getHighestRow();


                        $z = 2;
                        // Получили строки и обойдем их в цикле
                        $rowIterator = $sheet->getRowIterator();

                        /*foreach ($rowIterator as $row) {*/
                        for ($i = 2; $i <= $sheet->getHighestRow(); $i++) {
                            if ($sheet->getCellByColumnAndRow(1,$i)->getValue()){
                                //echo '<div class="my_card">
                                //                <!-- <div class="card_inner_text">Фонд помощи детям инвалидам "Аяла"</div> -->
                              //                  <img src="img/default1.jpg" width="100%" height="100%">
                                //</div>';
                                echo '<div class="my_card2">
                                                <div class="card_inner_text"><img src="img/default1.jpg" width="10%" height="10%" class="want_to_help_image">
                                                    <h5>' . $sheet->getCellByColumnAndRow(1,$i)->getValue() . '</h5>';
                                echo '<div class="column">
                                                        ';
                                if( null != $sheet->getCellByColumnAndRow(5,$i)->getValue() ) { echo '<i class="fas fa-user"></i>   ';  echo $sheet->getCellByColumnAndRow(5,$i)->getValue(); echo '<br>';}

                                if( null != $sheet->getCellByColumnAndRow(6,$i)->getValue() ) { echo '<i class="fas fa-map-marker-alt"></i>   '; echo $sheet->getCellByColumnAndRow(6,$i)->getValue(); echo '<br>'; }

                                if( null != $sheet->getCellByColumnAndRow(8,$i)->getValue() ) { echo '<i class="fas fa-envelope-square"></i><span class="accent">   '; echo $sheet->getCellByColumnAndRow(8,$i)->getValue(); echo '</span><br>';}

                                if( null !=  $sheet->getCellByColumnAndRow(4,$i)->getValue() ) { echo '<i class="fas fa-globe"></i>   <a href="index.php" class="white" target="blank"><span class="accent">   '; echo $sheet->getCellByColumnAndRow(4,$i)->getValue(); echo '</span></a>'; }


                                echo '</div><div class="column">';

                                if( null != $sheet->getCellByColumnAndRow(7,$i)->getValue() ) { echo '<i class="fas fa-phone"></i>   '; echo $sheet->getCellByColumnAndRow(7,$i)->getValue(); echo '<br>';}

                                if( null != $sheet->getCellByColumnAndRow(2,$i)->getValue() ) { echo '<i class="fas fa-info-circle"></i>   '; echo $sheet->getCellByColumnAndRow(2,$i)->getValue(); echo '<br>'; }



                                echo '</div><div class="clear"></div>
                                                    <h6 style="text-align: left;"><i class="fas fa-bullseye"></i>   ';
                                echo $sheet->getCellByColumnAndRow(3,$i)->getValue();
                                echo '</h6>
                                                </div>
                                            </div>
                                            <div class="clear"></div>';
                            }
                        }
                    ?>
                </div>
                <div role="tabpanel" class="tab-pane fade in active show" id="older" name="older">
                    <?php
                        require_once 'PHPExcel.php';
                        require_once 'PHPExcel/IOFactory.php';
                        $excel = PHPExcel_IOFactory::load('base1.xlsx');

                        // Устанавливаем индекс активного листа
                        $excel->setActiveSheetIndex(2);
                        // Получаем активный лист
                        $sheet = $excel->getActiveSheet();

                        $numb = $sheet->getHighestRow();


                        $z = 2;
                        // Получили строки и обойдем их в цикле
                        $rowIterator = $sheet->getRowIterator();

                        for ($i = 2; $i <= $sheet->getHighestRow(); $i++) {
                            if ($sheet->getCellByColumnAndRow(1,$i)->getValue()){
                                echo '<div class="my_card2">
                                                <div class="card_inner_text"><img src="img/default1.jpg" width="10%" height="10%" class="want_to_help_image">
                                                    <h5>' . $sheet->getCellByColumnAndRow(1,$i)->getValue() . '</h5>';
                                echo '<div class="column">';
                                if( null != $sheet->getCellByColumnAndRow(5,$i)->getValue() ) { echo '<i class="fas fa-user"></i>   '; echo $sheet->getCellByColumnAndRow(5,$i)->getValue(); echo '<br>'; }

                                if( null != $sheet->getCellByColumnAndRow(6,$i)->getValue() ) { echo '<i class="fas fa-map-marker-alt"></i>   '; echo $sheet->getCellByColumnAndRow(6,$i)->getValue(); echo '<br>'; }

                                if( null != $sheet->getCellByColumnAndRow(8,$i)->getValue() ) { echo '<i class="fas fa-envelope-square"></i><span class="accent">   '; echo $sheet->getCellByColumnAndRow(8,$i)->getValue(); echo '</span><br>'; }

                                if( null !=  $sheet->getCellByColumnAndRow(4,$i)->getValue() ) { echo '<i class="fas fa-globe"></i>   <a href="index.php" class="white" target="blank"><span class="accent">   '; echo $sheet->getCellByColumnAndRow(4,$i)->getValue(); echo '</span></a>'; }

                                echo '</div><div class="column">';

                                if( null != $sheet->getCellByColumnAndRow(7,$i)->getValue() ) { echo '<i class="fas fa-phone"></i>   '; echo $sheet->getCellByColumnAndRow(7,$i)->getValue(); echo '<br>'; }

                                if( null != $sheet->getCellByColumnAndRow(2,$i)->getValue() ) { echo '<i class="fas fa-info-circle"></i>   '; echo $sheet->getCellByColumnAndRow(2,$i)->getValue(); echo '<br>'; }


                                echo '</div><div class="clear"></div>
                                                    <h6 style="text-align: left;">';
                                if( null != $sheet->getCellByColumnAndRow(3,$i)->getValue() ) { echo '<i class="fas fa-bullseye"></i>   '; echo $sheet->getCellByColumnAndRow(3,$i)->getValue(); }
                                echo '</h6>
                                                </div>
                                            </div>
                                            <div class="clear"></div>';
                            }
                        }
                    ?>
                </div>
                <div role="tabpanel" class="tab-pane fade in active show" id="pets" name="pets">
                    <?php
                        require_once 'PHPExcel.php';
                        require_once 'PHPExcel/IOFactory.php';
                        $excel = PHPExcel_IOFactory::load('base1.xlsx');

                        // Устанавливаем индекс активного листа
                        $excel->setActiveSheetIndex(3);
                        // Получаем активный лист
                        $sheet = $excel->getActiveSheet();

                        $numb = $sheet->getHighestRow();


                        $z = 2;
                        // Получили строки и обойдем их в цикле
                        $rowIterator = $sheet->getRowIterator();

                        for ($i = 2; $i <= $sheet->getHighestRow(); $i++) {
                            if ($sheet->getCellByColumnAndRow(1,$i)->getValue()){
                                echo '<div class="my_card2">
                                                <div class="card_inner_text"><img src="img/default1.jpg" width="10%" height="10%" class="want_to_help_image">
                                                    <h5>' . $sheet->getCellByColumnAndRow(1,$i)->getValue() . '</h5>';
                                echo '<div class="column">';
                                if(null != $sheet->getCellByColumnAndRow(5,$i)->getValue() ) { echo '<i class="fas fa-user"></i>   '; echo $sheet->getCellByColumnAndRow(5,$i)->getValue(); echo '<br>'; }

                                if(null != $sheet->getCellByColumnAndRow(6,$i)->getValue() ) { echo '<i class="fas fa-map-marker-alt"></i>   '; echo $sheet->getCellByColumnAndRow(6,$i)->getValue(); echo '<br>'; }

                                if(null != $sheet->getCellByColumnAndRow(8,$i)->getValue() ) { echo '<i class="fas fa-envelope-square"></i><span class="accent">   '; echo $sheet->getCellByColumnAndRow(8,$i)->getValue(); echo '</span><br>'; }

                                if(null != $sheet->getCellByColumnAndRow(4,$i)->getValue() ) { echo '<i class="fas fa-globe"></i>   <a href="index.php" class="white" target="blank"><span class="accent">   '; echo $sheet->getCellByColumnAndRow(4,$i)->getValue(); echo '</span></a>'; }


                                echo '</div><div class="column">';
                                if(null != $sheet->getCellByColumnAndRow(7,$i)->getValue() ) { echo '<i class="fas fa-phone"></i>   '; echo $sheet->getCellByColumnAndRow(7,$i)->getValue(); echo '<br>'; }

                                if(null != $sheet->getCellByColumnAndRow(2,$i)->getValue()) { echo '<i class="fas fa-info-circle"></i>   '; echo $sheet->getCellByColumnAndRow(2,$i)->getValue();  echo '<br>'; }


                                echo '</div><div class="clear"></div><h6 style="text-align: left;">';
                                if(null != $sheet->getCellByColumnAndRow(3,$i)->getValue() ) { echo '<i class="fas fa-bullseye"></i>'; echo $sheet->getCellByColumnAndRow(3,$i)->getValue(); }

                                echo '</h6></div></div><div class="clear"></div>';
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
<div class="clear"></div>
<?php
include_once "footer.php";
?>
