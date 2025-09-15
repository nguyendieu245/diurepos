<?php
function inHCN($chieuCao, $chieuRong) {
    echo "<pre>"; 
    for ($i = 1; $i <= $chieuCao; $i++) {
        for ($j = 1; $j <= $chieuRong; $j++) {
            // Nếu ở hàng đầu, hàng cuối, cột đầu hoặc cột cuối thì in *
            if ($i == 1 || $i == $chieuCao || $j == 1 || $j == $chieuRong) {
                echo "*";
            } else {
                echo " "; // in khoảng trắng
            }
        }
        echo "\n"; 
    }
    echo "</pre>";
}

//gọi hàm
inHCN(5, 7);
?>