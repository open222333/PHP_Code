<!-- 用printf()格式化輸出價格 -->
<?php
$price = 5;
$tax = 0.075;
printf('The dish costs $%.2f', $price * (1 + $tax));
