  <footer>
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-5 footer-left nopadding">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-tabs--shop">
              <li class="active"><a href="#shop1" data-toggle="tab">ТЦ «Домашний Очаг»</a></li>
              <li><a href="#shop2" data-toggle="tab">ТЦ «Титан»</a></li>
              <li><a href="#shop3" data-toggle="tab">ТЦ «Град»</a></li>
              <li><a href="#shop4" data-toggle="tab">ТЦ «Парктинг»</a></li>
            </ul>

            <div class="tab-content tab-content--shop">
              <div class="tab-pane fade in active" id="shop1">
                <p><i class="ic ic-map_marker"></i><span>пр-т. Победителей 103, офис 2331</span></p>
              </div>
              <div class="tab-pane fade" id="shop2">
                <p><i class="ic ic-map_marker"></i><span>пр-т. Победителей 33, офис 2331</span></p>
              </div>
              <div class="tab-pane fade" id="shop3">
                <p><i class="ic ic-map_marker"></i><span>пр-т. Победителей офис 2331</span></p>
              </div>
              <div class="tab-pane fade" id="shop4">
                <p><i class="ic ic-map_marker"></i><span>пр-т. Победителей 103, офис 2</span></p>
              </div>
            </div>
          </div>
          <!-- end footer-left -->
          <div class="col-xs-12 col-sm-4 col-md-2 footer-logo nopadding">
            <div><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/f-logo.png" alt="logo"></a></div>
            <p class="upper phil-reg gray-l">текстильное оформление</p>
            <div class="footer-socials">
              <a href="#"><i class="ic ic-inst"></i></a>
              <a href="#"><i class="ic ic-vk"></i></a>
            </div>
          </div>
          <!-- end footer-logo -->
          <div class="col-xs-12 col-sm-4 col-md-5 footer-right nopadding">
            <div class="block block--phone">
              <div class="tittle fira-bold">Cвязаться с нами:</div>
              <div class="inner">
                <i class="ic ic-f_phone"></i>
                <p>+375 (29) <span>506-47-07</span></p>
                <p>+375 (29) <span>512-99-23</span></p>
              </div>
            </div>
            <!-- end block -->
            <div class="block block--mail">
              <div class="tittle fira-bold">E-mail:</div>
              <div class="inner">
                <i class="ic ic-f_mail"></i>
                <p>info@domshtor.by</p>
              </div>
            </div>
            <!-- end block -->
          </div>
          <!-- end footer-right -->
          <div class="col-xs-12 nopadding copyright">
            <p class="gray-l">DOMSHTOR <?php echo date("Y"); ?>   <span>|</span>   Все права защищены</p>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </footer>

  <div class="modal fade" id="modal_eaves" tabindex="-1" role="dialog" aria-labelledby="modal_eaves" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <span class="fira-bold orange upper tittle">ПРОФИЛЬ</span>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <div class="karnizi-type__modal-descr">
            <div class="row">
              <div class="left upper">НАЗВАНИЕ:</div>
              <div class="right fira-bold upper modal-titles">ПРОФИЛЬ ГЛАДКИЙ</div>
            </div>
            <!-- end row -->
            <div class="row">
              <div class="left upper">ЦВЕТА:</div>
              <div class="right upper modal-colors">
                <div class="karnizi-type__modal-color">
                  <div class="color color--1"></div>
                  <p>КРАСНЫЙ</p>
                </div>
                <div class="karnizi-type__modal-color">
                <div class="color color--2"></div>
                  <p>ЗЕЛЕНЫЙ</p>
                </div>
                <div class="karnizi-type__modal-color">
                  <div class="color color--3"></div>
                  <p>БЕЖЕВЫЙ</p>
                </div>
              </div>
            </div>
            <!-- end row -->
            <div class="row">
              <div class="left upper">ДЛИНА:</div>
              <div class="right fira-bold modal-width"><span>230</span>см</div>
            </div>
            <!-- end row -->
            <div class="row">
              <div class="left upper">ДИАМЕТР:</div>
              <div class="right fira-bold modal-diametr"><span>12</span>см</div>
            </div>
            <!-- end row -->
            <div class="row">
              <div class="left upper">ПРОИЗВОДСТВО:</div>
              <div class="right fira-bold upper modal-country">БЕЛЬГИЯ</div>
            </div>
            <!-- end row -->
          </div>
          <!-- end karnizi-type__modal-descr -->
          <div class="karnizi-type__modal-img">
            <img class="modal-image" src="<?php echo get_template_directory_uri(); ?>/img/karnizi/model1-lg.jpg" alt="karniz">
          </div>
        </div>
        <!-- end modal-body -->
      </div>
    </div>
  </div><!-- END Modal -->

</div>

  <script>
    window.homepage = 'http://curtains.dev/';
  </script>
  <?php wp_footer(); ?>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZF31krTQH_5QnEpdIsEgmsBV-Iy884rE"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/ekko-lightbox.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

</body>
</html>
