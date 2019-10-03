<?php
$product = $_POST["product"];
$list = $_POST["list"];

function calculatorDiscount($product,$list){
$discountAmount = $product * $list;
echo "DiscountAmount" . $discountAmount ."$<br>";
$discountPrice = $discountAmount - $product;
echo "DiscountPrice" . $discountPrice ."$<br>";

}
calculatorDiscount(@$product,@$list);
?>