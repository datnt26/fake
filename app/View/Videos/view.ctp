<div class="container container-top">
    <div class="row">
      <div class="col-md-8 col-sm-12 col-xs-12 col-lg-8 leffix">
        <?php 
          if ($video['Video']['type'] == "ok.ru") {
              echo '<div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.0067%;">
                      <iframe src="//ok.ru/videoembed/' . explode("https://ok.ru/video/",$video['Video']['link'])[1] . '" style="border: 0; top: 0; left: 0; width: 100%; height: 100%; position: absolute;" allowfullscreen>
                      </iframe>
                    </div>';
          }
        ?>
        <!-- <div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.0067%;">
          <iframe src="//ok.ru/videoembed/26870090463" style="border: 0; top: 0; left: 0; width: 100%; height: 100%; position: absolute;" allowfullscreen>
          </iframe>
        </div> -->
        <!-- <video controls crossorigin playsinline poster="/dramadaily/files/thumbnail/View_From_A_Blue_Moon_Trailer-HD.jpg" id="player">
          <source src="/dramadaily/files/video/a.mp4" type="video/mp4" size="576">
          <source src="/dramadaily/files/video/a.mp4" type="video/mp4" size="720">
          <source src="/dramadaily/files/video/a.mp4" type="video/mp4" size="1080">
          <track kind="captions" label="English" srclang="en" src="/dramadaily/files/subtitle/View_From_A_Blue_Moon_Trailer-HD.en.vtt"
              default>
          <track kind="captions" label="Français" srclang="fr" src="/dramadaily/files/subtitle/View_From_A_Blue_Moon_Trailer-HD.fr.vtt">
        </video> -->
        <!-- <div id="player" data-plyr-provider="youtube" data-plyr-embed-id="g20t_K9dlhU"></div> --> 

        <div class="vinfo fsize2 clearfix" style = "border-bottom:1px solid red;padding-bottom:15px;">
          <h3 class="fsize1 pt-4 pb-2 d-block text-dark"><?php echo $video['Video']['title'] ?></h3>
          <span class="pull-left"><i class="fa fa-eye"></i> 1037.2K view</span> 
          <span class="pull-right"><i class="fa fa-clock-o"></i> 2018-08-22 16:54</span>
        </div>      
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