    <footer id="footer"><!--Footer-->
        <div class="footer-widget">
            <div class="container-footer">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Lịch sử mua hàng</a></li>
                                <li><a href="#">Cộng tác bán hàng cùng TGDĐ</a></li>
                                <li><a href="#">Tìm hiểu về mua trả góp</a></li>
                                <li><a href="#">Chính sách bảo hànhn</a></li>
                                <li><a href="#">Xem thêm</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col-sm-2">
                        <div class="single-widget">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Giới thiệu công ty (MWG.vn)</a></li>
                                <li><a href="#">Tuyển dụngs</a></li>
                                <li><a href="#">Gửi góp ý, khiếu nại</a></li>
                                <li><a href="#">Tìm siêu thị (2.195 shop)</a></li>
                                <li><a href="#">Xem bản mobile</a></li>
                            </ul>
                        </div>
                    </div> -->
                    <div class="col-sm-2">
                        <div class="single-widget call-sp">
                            <h2>Tổng đài hỗ trợ (Miễn phí gọi)</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="tel:1800.1060">Gọi mua: 1800.1060 (7:30 - 22:00)</a></li>
                                <li><a href="tel:1800.1763">Kỹ thuật: 1800.1763 (7:30 - 22:00)</a></li>
                                <li><a href="tel:1800.1062 ">Khiếu nại: 1800.1062 (8:00 - 21:30)</a></li>
                                <li><a href="tel:1800.1064">Bảo hành: 1800.1064 (8:00 - 21:00)</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget about-us">
                            <h2>Website cùng tập đoàn</h2>
                            <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Điện máy xanh</a></li>
                                <li><a href="#">Bách hóa xanh</a></li>
                                <li><a href="#">Mái ấm thế giới di động</a></li>
                                <li><a href="#"> <i class="fab fa-facebook-f"> 3681.3k Fan</i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"> 812k Đăng ký</i></a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Giới thiệu công ty (MWG.vn)</a></li>
                                <li><a href="#">Tuyển dụngs</a></li>
                                <li><a href="#">Gửi góp ý, khiếu nại</a></li>
                                <li><a href="#">Tìm siêu thị (2.195 shop)</a></li>
                                <li><a href="#">Xem bản mobile</a></li>
                            </ul>
                        </div>
                    </div>
            </div>
        </div>

    </footer><!--/Footer-->
<script src="public/js/script.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="public/js/slick/slick.min.js"></script>
<script type="text/javascript" src="public/js/hoamairoi.js"></script>

<script>
        $('.chitiet').slick({
  infinite: true,
  slidesToShow: 6,
  slidesToScroll: 1,
  autoplay:true,
  autoplayspeed:5000,
  arrows :true

});
    $('.slider_product_items').slick({
  infinite: true,
  slidesToShow: 5,
  slidesToScroll: 5,
  autoplay:true,
  autoplayspeed:5000,
  arrows :true

});
    $('.pk').slick({
  infinite: true,
  slidesToShow: 5,
  slidesToScroll: 5,
  autoplay:true,
  autoplayspeed:5000,
  arrows :true

});
$('.watch').slick({
  infinite: true,
  slidesToShow: 5,
  slidesToScroll: 5,
  autoplay:true,
  autoplayspeed:5000,
  arrows :true

});
$('.laptop').slick({
  infinite: true,
  slidesToShow: 5,
  slidesToScroll: 5,
  autoplay:true,
  autoplayspeed:5000,
  arrows :true

});
jQuery(document).ready(function(e){
        if(jQuery("#type-of-pay").val() == '1'){
            jQuery("#cong-thanh-toan").show();
            jQuery(".bn-dathang1").text("THANH TOÁN");
            jQuery(".giohang-muahang form").attr("action", "index.php?action=thanhtoanonline");
        }else{
            jQuery("#cong-thanh-toan").hide();
            jQuery(".giohang-muahang form").attr("action", "index.php?action=taohoadon");
        }
		jQuery("#type-of-pay").change(function(){
			if(jQuery("#type-of-pay").val() == '1'){
				jQuery("#cong-thanh-toan").show();
                jQuery(".bn-dathang1").text("THANH TOÁN");
                //jQuery(".giohang-muahang form").attr("action", "index.php?action=thanhtoanonline");
			}else{
				jQuery("#cong-thanh-toan").hide();
                //jQuery(".giohang-muahang form").attr("action", "index.php?action=taohoadon");
			}
		});
	});
</script>
</body>
<html>