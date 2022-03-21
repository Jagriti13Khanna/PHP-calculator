<?php
    if (isset($_POST["submit"])) {
        $num1 = $_POST['num1'];
        $operator = $_POST['operator'];
        $num2 = $_POST['num2'];

        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                $result = $num1 / $num2;
                break;
            default:
                echo" Number should not be blank";
                break;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="calculator.php" method="POST">        
        <label for="num1">Number 1</label>
        <input type="number" id="num1" name="num1" value="<?php echo $num1?>">
        <br>
        <br>
        <label for="operator">Operator</label>
        <select name="operator" id="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <br>
        <br>
        <label for="num2">Number 2</label>
        <input type="number" id="num2" name="num2" value="<?php echo $num2?>">
        <br>
        <br>
        <input type="submit" name="submit" value="Submit" style="margin-bottom: 1rem;">

    </form>
    <?php
    if($result) {
        echo $num1." ".$operator." ".$num2."<b> = " . $result . "</b>";
    }
    ?>
       
</body>
</html>