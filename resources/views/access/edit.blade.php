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
        <h3>Edit </h3>
    <form action=" {{ route("acce.update" , $acce->id )}}" method="post" enctype="multipart/form-data" >
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Name</label>
            <input type="text" class="form-control" name="name" value="{{ $acce->name }}">
            </div>
            <div class="form-group">
                <label for="title">Uses</label>
                <input type="text" class="form-control" name="uses" value="{{ $acce->uses }}">
            </div>
            <div class="form-group">
                <label for="title">Expiry</label>
                <input type="date" class="form-control" name="expiry" value="{{ $acce->expiry }}">
            </div>
            <div class="form-group">
                <label for="title">Amount</label>
                <input type="text" class="form-control" name="amount" value="{{ $acce->amount }}">
            </div>
            <div class="form-group">
                <label for="title">Price</label>
                <input type="text" class="form-control" name="price" value="{{ $acce->price}}">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control"   name="image"  >
            </div>
            <div class="form-group">

                <img width="300px" src="{{$acce->image}}" alt="">
            </div>





            <input type="submit" value="Create" class="btn btn-primary">
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
        </form>
    </div>




</body>
</html>
