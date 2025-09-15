<form method="post">
    Nhập a: <input type="number" name="a" step="any"><br>
    Nhập b: <input type="number" name="b" step="any"><br>
    Nhập c: <input type="number" name="c" step="any"><br>
    <input type="submit" value="Giaipt">
</form><?php
function PTBH($a, $b, $c) {
    if ($a == 0) {
        
        if ($b == 0) {
            return ($c == 0) ? "Phương trình vô số nghiệm" : "Phương trình vô nghiệm";
        } else {
            return "Phương trình có một nghiệm: x = " . (-$c / $b);
        }
    }

    // Tính delta
    $delta = $b * $b - 4 * $a * $c;

    if ($delta < 0) {
        return "Phương trình vô nghiệm thực";
    } elseif ($delta == 0) {
        $x = -$b / (2 * $a);
        return "Phương trình có nghiệm kép: x1 = x2 = " . $x;
    } else {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        return "Phương trình có hai nghiệm phân biệt: x1 = $x1, x2 = $x2";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    echo "<p><b>Vậy kết quả:</b> " . PTBH($a, $b, $c) . "</p>";
}
?> 


