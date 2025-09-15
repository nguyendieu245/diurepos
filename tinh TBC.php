<form method="post">
    Nhập các số (cách nhau bằng dấu phẩy): 
    <input type="text" name="numbers" placeholder="Ví dụ: 2,4,6,8,10" required>
    <br><br>
    <input type="submit" value="Tính trung bình cộng">
</form>

<?php
function tinhTrungBinhCong($arr) {
    if (empty($arr)) {
        return null;
    }
    $tong = array_sum($arr);
    $soPT = count($arr);
    return $tong / $soPT;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form và chuyển thành mảng số
    $input = $_POST["numbers"];
    $arr = array_map('floatval', explode(',', $input));

    if (!empty($arr)) {
        $tbc = tinhTrungBinhCong($arr);
        echo "<p><b>Trung bình cộng:</b> " . $tbc . "</p>";
    } else {
        echo "<p style='color:red;'>❌ Vui lòng nhập ít nhất một số!</p>";
    }
}
?>
