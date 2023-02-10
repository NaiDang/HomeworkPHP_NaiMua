<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khách sạn</title>
</head>
<body>
<form action="" method="post">
        <table class="form">
            <tr class="title">
                <td colspan="2">
                    TÍNH TIỀN
                </td>
            </tr>
            <tr>
                <td>
                    Loại phòng:
                </td>
                <td>
                    <select name="typeroom">
                        <option value="1000">A</option>
                        <option value="800">B</option>
                        <option value="500">C</option>
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Check-in:
                </td>
                <td>
                    <input type="date" name="checkin" >
                </td>
            </tr>
            <tr>
                <td>
                    Check-out:
                </td>
                <td>
                    <input type="date" name="checkout" >
                </td>
            </tr>           
            <tr>
                <td>
                    Tiền ăn:
                </td>
                <td>
                    <input type="text" name="meals" >
                </td>
            </tr>
            <tr>
                <td>
                    Dịch vụ:
                    
                </td>
                <td >
                    <input class="item" type="checkbox" name="giatla" value="30000 ">Giặt là 
                    <input class="item" type="checkbox" name="ansang" value="500">Ăn sáng
                    <input class="item" type="checkbox" name="tamhoi" value="300 ">Tắm hơi 
                </td>
            </tr>
            <tr class="title">
                <td colspan="2">
                    <button type="submit">Tính</button>
                    <button type="cancel">Cancel</button>
                </td>
                 
            </tr>

        
        </table>
    </form >
    <?php
    ini_set('display_errors',0);
    $giatla = $_POST["giatla"];
    $ansang = $_POST["ansang"];
    $tamhoi = $_POST["tamhoi"];
    $meal = $_POST["meals"];
    $type = $_POST["typeroom"];
    $checkin = strtotime( $_POST["checkin"]);
    $checkout = strtotime($_POST["checkout"]); 
    $date = abs($checkout- $checkin)  ;
    $ngaytra = floor($date / (60*60*24)) * $type;
    $service = $giatla + $ansang + $tamhoi;
    $tatol = $meal + $service + $type + $ngaytra

?>
<h2 class="bill">BILL</h2>
    <form class="input-bill" action="" style="margin-left: 300px;" method="post">
        TypeRoom: <input type="text" value="<?php echo $type ?>"> <br> <br>
        Rental hours: <input type="text" value="<?php echo $ngaytra?>"> <br> <br>
        Money for meals: <input type="text" value="<?php echo $meal ?>"> <br> <br>
        Money for service: <input type="text" value="<?php echo $service ?>"> <br> <br>
        Total: <input type="text" value="<?php echo $tatol?>"> <br> <br>
    </form>
</body>
</html>