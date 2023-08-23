<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán</title>
    <link rel="stylesheet" href="Thanh Toán.css">
    <link rel="shortcut icon" type="./img/AVOCADO.png" href="./img/AVOCADO.png">
    <style>
    </style>
</head>
<body>
    <h1>Thanh toán</h1>
    <form method="POST" action="process_payment.php">
        <label for="full_name">Họ và tên:</label>
        <input type="text" id="full_name" name="full_name" required>
        <br>
        <label for="card_number">Số thẻ:</label>
        <input type="text" id="card_number" name="card_number" required>
        <br>
        <label for="expiration_date">Ngày hết hạn:</label>
        <input type="text" id="expiration_date" name="expiration_date" required>
        <br>
        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv" required>
        <br>
        <label for="package">Gói cước:</label>
        <select id="package" name="package">
            <option value="Goi_cuoc">Chọn gói</option>
            <option value="Tiếng Anh Trẻ em 10-14 tuổi">Gói cước Tiếng Anh Trẻ em 5-10 tuổi</option>
            <option value="Tiếng Anh Trẻ em 10-14 tuổi">Gói cước Tiếng Anh Trẻ em 10-14 tuổi</option>
            <option value="Tiếng Anh Luyện IETLS cho trẻ">Gói cước Tiếng Anh Luyện IETLS cho trẻ</option>
            <option value="Tiếng Anh trẻ du học">Gói cước Tiếng Anh trẻ du học</option>
        </select>
        <br>
        <label for="age">Tuổi:</label>
        <select id="age" name="age">
            <option value="tuoi">Độ tuổi</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
        </select>
        <br>
       <p align="center"> <input type="submit" value="Thanh toán"></p>
    </form>
</body>
</html>

