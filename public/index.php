<?
require __DIR__ . '/../vendor/autoload.php';


use App\Calc;
use Core\Func;



$calc = new Calc;
$res = $calc->result;


print_r($_POST);

if ($_POST) {
    $res1 = intval($_POST['a']);
    $res2 = intval($_POST['b']);
    if ($_POST['znak'] == '+') {
        $res = $calc->plus($res1, $res2);
        echo $res;
    }
    if ($_POST['znak'] == '-') {
        $res = $calc->minus($res1, $res2);
        echo $res;
    }
    if ($_POST['znak'] == '/') {
        $res = $calc->divide($res1, $res2);
        echo $res;
    }
    if ($_POST['znak'] == '*') {
        $res = $calc->multiply($res1, $res2);
        echo $res;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" placeholder="первое число" name="a">
        <label for="znak">Выберите знак:</label>
        <select id="znak" name="znak">
            <option value=""></option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
            <option value="*">*</option>
        </select>
        <input type="text" placeholder="второе число" name="b">
        <button type="submit">=</button>
    </form>
    <div class="res">
        <p>ответ: <strong><?= $res ?></strong></p>
    </div>
</body>

</html>