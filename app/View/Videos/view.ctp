<div class="container container-top">
    <div class="row">
      <div class="col-md-8 col-sm-12 col-xs-12 col-lg-8 leffix">
        <div id="player" data-plyr-provider="youtube" data-plyr-embed-id="g20t_K9dlhU"></div>        
      </div> 
      <div class="col-md-4 col-sm-12 col-xs-12 col-lg-4 related">
        <div class="font-weight-bold h6 pb-1">Video liên quan</div> 
        <div id="videocontent">
          <?php $data = array("1","2","3","2","3","2","3","2","3","2","3","2");?>
          <?php foreach( $data as $value ): ?>
            <div class="media height1">
              <div class="media-left" style="width:40%">
                <a href="#" >
                    <img src="http://livechannel.vn/wp-content/uploads/2017/03/Banner_live_2703-320x180.png" width="100%">
                </a>
              </div>
              <div class="media-body pl-2">
                <h5 class="media-heading height2">
                  <a href="#">GẶP NHAU CUỐI TUẦN An toàn thực phẩm</a>
                </h5>
                <p class="small mb-0 pt-2">1 tháng trước</p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
</div>