<?php
$str1   = "Đào tạo lập trình";
$str2  = "PHP";

// Nối và hiển thị luôn
echo $str1 . " web với ngôn ngữ " . $str2 . "<br/>";

// Nối và gán vào biến khác
$str = $str1 . " " . $str2;
echo $str;

$str = "Trung tâm đào tạo lập trình " . $str2;
echo "<br> $str";

$str = "Trung tâm đào tạo lập trình $str2 tại Hà Nội";
$str = "Trung tâm đào tạo lập trình {$str2}tại Hà Nội";
echo "<br/> $str <br/>";

$url = "http://www.google.com";
$imageUrl = "https://plus.unsplash.com/premium_photo-1661926736128-f2b643f91d1e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxM3x8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60";
$htmlOutput = '<a href=' . $url . '><img src="' . $imageUrl . '" alt=""></a>';
echo $htmlOutput;
?>
<a href="http://www.google.com"><img src="https://plus.unsplash.com/premium_photo-1661926736128-f2b643f91d1e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxM3x8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60" alt=""></a>
<?php
