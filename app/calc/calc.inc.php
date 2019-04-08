<form id="calc_form" action="<?php echo $config['URL'];?>calc_form.php" method="POST" accept-charset="utf-8">

    <ul class="nav nav-tabs nav-justified" id="calcTab" role="tablist">
        <?php $i=0;
        foreach($calc as $k=>$c){
            $i++;
            echo '<li class="nav-item"><a id="calc_',$k,'-tab" href="#calc_',$k,'" class="nav-link ',($i==1 ? 'active"  aria-selected="true' : '" aria-selected="false'),
            '"aria-controls="calc_'.$k.'" data-toggle="tab" role="tab">',$c['name'],'</a></li>';
        } ?>
        <li class="nav-item"><a class="nav-link" id="calc_send-tab" data-toggle="tab" href="#calc_send" role="tab" aria-controls="calc_send" aria-selected="false">Отправить</a></li>
    </ul>

    <div class="tab-content">
        <?php $i=0;
        foreach($calc as $k=>$c){
            $i++;
            echo '<div id="calc_',$k,'" class="tab-pane fade ',($i==1 ? 'show active' : ''),'" aria-labelledby="calc_',$k,'-tab" role="tabpanel"><div class="btn-group btn-group-toggle" data-toggle="buttons">';
                foreach($c['fields'] as $k2=>$f)
                    echo '<label class="btn btn-secondary">
                    <input type="',(isset($f['type'])&&($f['type']=='radio') ? 'radio" name="'.$k : 'checkbox" name="'.$k.'_'.$k2),'" id="',$k,'_',$k2,'" value="',$f['name'],'" autocomplete="off" />
                    <i class="icn '.(isset($f['icn']) ? 'icn-'.$f['icn'].'">' : '">'.$f['image']).'</i><span>'.$f['name'].'</span></label>';
            echo '</div></div>';
        } ?>

        <div id="calc_send" class="tab-pane fade calc-send" aria-labelledby="calc_send-tab" role="tabpanel">
            <div class="container">
                <h3>Предварительная стоимость вашего проекта:</h3>
                <h4 class="h3"><b id="sum"></b> руб</h4>
                <div id="calcRequest" class="clearfix"></div><br/>
                <a id="btnModal" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#calcSend"><b>Отправить заявку</b></a>
            </div>
        </div>
    </div>
    
    <div class="clearfix"><br/></div>
    <a class="btn btn-warning btn-lg btnPrev visible-xs-inline">Назад</a>
    <a class="btn btn-warning btn-lg btnNext"><b>Далее</b></a>
    <label for="tel"><a class="btn btn-warning btnSend"><b>Узнать стоимость</b></a></label>



<!-- Modal -->
<div class="modal fade" id="calcSend" tabindex="-1" role="dialog" aria-labelledby="calcSendLabel" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title h3" id="calcSendLabel"><b>Контакты:</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
    </div>
    <div class="modal-body text-left">
     <div class="container">
      <div class="row">
        <div class="col-sm">
            <label for="calc_name"><b>ФИО</b></label>
            <input type="text" class="form-control" id="calc_name" name="calc_name" title="Пожалуйста! Правильно заполните поле ФИО" placeholder="Введите ваше имя, фамилию" value="" required="required">
            <b class="form-text"></b>
            <label for="calc_email"><b>E-MAIL</b></label>
            <input type="text" class="form-control email" id="calc_email" name="calc_email" title="Пожалуйста! Правильно заполните поле E-mail" placeholder="Введите ваш E-mail" value="" required="required" >
            <b class="form-text"></b>
            <label for="calc_tel"><b>ТЕЛЕФОН</b></label>
            <input type="text" class="form-control tel" id="calc_tel" name="calc_tel" title="Пожалуйста! Правильно заполните поле Телефон" placeholder="Введите ваш Телефон" value="" required="required">
        </div>
        <div class="col-sm">
            <label for="calc_text"><b>Комментарий</b></label>
            <textarea class="form-control" id="calc_text" name="calc_text" rows="5" cols="100" placeholder="Оставьте ваш комментарий" ></textarea>
            <input type="text" class="calc_address" id="calc_address" name="calc_address" title="" placeholder="" value="" required="required">
            <br/>
            <button type="submit" class="btn btn-warning btn-lg btn-block" onClick="ga('send','event','calculator','calculator'); return true;"> Получить расчет </button>
            <input type="hidden" name="calc_price" id="calc_price" value="" />
        </div>
      </div>
     </div>
    </div>
  </div>
 </div>
</div>

</form>