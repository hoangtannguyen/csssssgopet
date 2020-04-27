<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
    <style>
    body {font-family: "Raleway", Arial, sans-serif}
    .w3-row img {margin-bottom: -8px}
    </style>
</head>
<body>

 <footer class="w3-light-grey w3-padding-64 w3-center" id="about">
    <div class="w3-section">
        <label><b>Tên mặt hàng :</b></label>
      <span> {{ $item->name }}</span>
      </div>
      <div class="w3-section">
        <label><b>Kích thước mặt hàng :</b></label>
      <span> {{ $item->size}}</span>
      </div>
      <div class="w3-section">
        <label><b>Giới tính mặt hàng :</b></label>
      <span> {{ $item->gender }}</span>
      </div>
      <div class="w3-section">
        <label><b>Số lượng mặt hàng :</b></label>
      <span> {{ $item->amount }}</span>
      </div>
      <div class="w3-section">
        <label><b>Giá mặt hàng :</b></label>
      <span> {{ $item->price }}</span>
      </div>
    <img src="{{ $item->image }}" class="w3-image w3-padding-32" width="300" height="300">
    <form style="margin:auto;width:60%" action="/action_page.php" target="_blank">


  </footer>














</body>
</html>
