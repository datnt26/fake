<div class="container-fluid py-2">
  <div class="row">
    <div class="col-md-3">
      <ul class="list-group text-dark">
        <li class="list-group-item font-weight-bold"><i class="fa fa-home fa-fw pr-4"></i><a href="./" class="text-dark">Trang chủ</a></li>
        <li class="list-group-item"><i class="fa fa-fire fa-fw pr-4"></i><a href="./content.php?cont=trending" class="text-dark">Trending</a></li>
        <li class="list-group-item"><i class="fa fa-history fa-fw pr-4"></i><a href="./content.php?cont=history" class="text-dark">History</a></li>
        <li class="list-group-item"><i class="fa fa-gavel fa-fw pr-4"></i><a href="./content.php?cont=DMCA"class="text-dark">DMCA</a></li>
        <li class="list-group-item"><i class="fa fa-cloud-download fa-fw pr-4"></i><a href="./content.php?cont=video" class="text-dark">Download Video</a></li>
        <li class="list-group-item"><i class="fa fa-file-code-o fa-fw pr-4 pr-4"></i><a href="./content.php?cont=api" class="text-dark">API</a></li>
      </ul>
    </div>
    <div class="col-md-9">
      <div class="col-md-12 pb-3 d-none d-sm-none d-md-block" style="background: url(/dramadaily/img/homebg.jpg) no-repeat;background-size: cover;background-position: center -80px;text-align: center;"> 
        <h3 class="pt-5 pb-2 text-white"></h3>
        <form>
          <div class="form-group" >
              <input type="text" name="v" style="width: 70%;height: 50px;border: none;box-sizing: border-box;padding: 14px 18px;" placeholder="Vui lòng nhập một ID video hoặc liên kết Youtube"  autocomplete="off" />
              <button type="submit"  style="width: 18%;border: none;height: 50px;background-color: #e62117;color: #fff;font-size: 18px;display: inline-block;" >
                <i class="fa fa-youtube-play fa-lg pr-1"></i>Search
              </button>
          </div>
        </form>
      </div>
      <div class="row pt-2 pb-2">
        <div class="col-8 sm-p">
          <span class="txt2 ricon h5">Xu hướng</span>
        </div>
      </div>
      <div id="videocontent" class="videocontentrow">
        <ul class="list-unstyled video-list-thumbs row pt-1">
          <?php foreach( $data as $value ): ?>
            <li class="col-xs-3 col-sm-3 col-md-3 col-lg-3" ><a href= <?php echo "/dramadaily/videos/view/" . $value['Video']['id'] ?> class="hhh" >
              <img src= <?php echo $value['Video']['thumbnail'] ?> class=" img-responsive" /><p class="fa play kkk" ></p>
              <span class="text-dark text-overflow font2 my-2" title=""><?php echo $value['Video']['title']?></span></a>
              <div class="pull-left pull-left1 icontext">
                <i class="fa fa-user icoys"></i>
                <span class="pl-1">
                  <a href="#"  class=" icoys" title="">VieKids</a>
                </span>
              </div>
              <div class="pull-right pull-right1 icontext icoys">
                <i class="fa fa-clock-o pl-1"></i><span class="pl-1">1 ngày trước</span>
              </div>
              <span class="duration"></span>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</div>