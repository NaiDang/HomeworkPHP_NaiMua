<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
</body>
</html>