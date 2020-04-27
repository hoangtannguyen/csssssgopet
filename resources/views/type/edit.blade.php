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
        <h3>Edit</h3>
    <form action=" {{ route('type.update' , $type->id )  }}" method="post"  enctype="multipart/form-data" >
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $type->name }}">
            </div>




            <input type="submit" value="Edit" class="btn btn-primary">
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
        </form>
    </div>




</body>
</html>
