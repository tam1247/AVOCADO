<?php
$html = "<!DOCTYPE html>" .
"<html lang=\"en\">" .
"<head>" .
  "<meta charset=\"UTF-8\">" .
  "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">" .
  "<title>Su Kien</title>" .
  "<link rel=\"shortcut icon\" type=\"./img/AVOCADO.png\" href=\"./img/AVOCADO.png\">" .
  "<link rel=\"stylesheet\" href=\"cn su kien.css\">" .
"</head>" .
"<body>" .
  "<header>" .
    "<h1 class=\"link\" style=\"color: #c62028;\">AVOCADO ENGLISH</h1>" .
  "</header>" .
  "<div align=\"center\" class=\"wrapper\">" .
    "<div class=\"package pa\">" .
      "<h2></h2>" .
      "<p class=\"price\"></p>" .
      "<p></p>" .
    "<div class=\"package 02\">" .
      "<h2>Đăng ký ngay</h2>" .
      "<p class=\"price\"><del>Từ 6.500.000 VND - 16.500.000 vnd</del> còn 4.500.000 vnd-12.500.000 vnd</p>" .
      "<p>Đăng ký ngay</p>" .
      "<p>Nhận ngay ưu đãi <span class=\"discount-badge\">Giảm 30%</span>Khi đăng ký gói cho trẻ từ 5 - 14 tuổi</p>" .
      "<button onclick=\"redirectToPayment()\">Thanh toán</button>" .
    "</div>" . 
    "</div>" . 
    "<div  align=\"right\" class=\"wrapper\">" . 
      "<div class=\"package pa\">" . 
        "<h2></h2>" . 
        "<p class=\"price\"></p>" . 
        "<p></p>" . 
      "<div class=\"package 02\">" . 
        "<h2>Đăng ký ngay</h2>" . 
        "<p>Từ ngày 13/08/2023 - 13/10/2023</p>" . 
        "<p class=\"price\"><del>Từ 14.500.000 vnd</del> còn 12.500.000 vnd</p>" . 
        "<p>Đăng ký ngay</p>" . 
        "<p>Nhận ngay ưu đãi <span class=\"discount-badge\">Giảm 20%</span>Khi đăng ký gói luyện IETLS cho trẻ</p>" . 
        "<button onclick=\"redirectToPayment()\">Thanh toán</button>" . 
      "</div>" . 
      "<script>" . 
        "function redirectToPayment() {" . 
            "window.location.href = 'Thanh toán.php';" . 
        "}" . 
    "</script>" . 
      "</div>" . 
      "<br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br><br><br> <br><br><br><br><br>" . 

        "<footer>" . 
    "<h4><b>Thông Tin Liên Hệ</b></h4>" . 
  "<li>" . 
  "<b>ADDRESS:</b> Số 14 Đường Nguyễn Thị Thập Phường Tân Hiển Quận 7 TP HCM" . 
  "</li>" . 
  "<li>" . 
    "<b>CONTACT:</b> MR HOÀNG LÂM" . 
  "</li>" . 
  "<li>" . 
    "<b>HOTLINE:</b> 023 569 9756" . 
  "</li>" . 
  "<li>" . 
    "<b>Email:</b> avocado@gmail.com" . 
  "</li>" . 
"</footer>" .
"</div>" .
"</body>" .
"</html>";
echo $html;
?>
