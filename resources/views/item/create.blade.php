<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <h3>Create </h3>
    <form action=" {{ route("item.store")}}" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Nhập tên...">
            </div>
             <div class="form-group">
                <label for="title">Size</label>
                <input type="text" class="form-control" name="size" placeholder="Nhập size...">
            </div>
            <div class="form-group">
                <label for="title">Gender</label>
                <input type="text" class="form-control" name="gender" placeholder="Nhập giới tính...">
            </div>
            <div class="form-group">
                <label for="title">Amount</label>
                <input type="text" class="form-control" name="amount" placeholder="Nhập amount...">
            </div>
            <div class="form-group">
                <label for="title">Price</label>
                <input type="text" class="form-control" name="price" placeholder="Nhập giá bán...">
            </div>
            <div class="form-group">
                <label for="title">Image</label>
                <input type="file" class="form-control" name="image" >
            </div>





            <input type="submit" value="Create" class="btn btn-primary">
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
        </form>
    </div>




</body>
</html>
