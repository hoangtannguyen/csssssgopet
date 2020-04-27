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
    <form action=" {{ route('staff.update' , $staff->id )  }}" method="post"  enctype="multipart/form-data" >
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $staff->name }}">
            </div>
            <div class="form-group">
                <label for="title">Age</label>
                <input type="number" class="form-control" name="age" value="{{ $staff->age}}">
            </div>
            <div class="form-group">
                <label for="title">Phone</label>
                <input type="text" class="form-control" name="phone" value="{{ $staff->phone}}">
            </div>
            <div class="form-group">
                <label for="title">Email</label>
                <input type="email" class="form-control" name="email" value="{{ $staff->email }}">
            </div>
            <div class="form-group">
                <label for="title">Salary</label>
                <input type="text" class="form-control" name="salary" value="{{ $staff->salary }}">
            </div>
            <div class="form-group">
                <label for="title">Image</label>
                <input type="file" class="form-control" name="image" >
            </div>


            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control"   name="image"  >
            </div>
            <div class="form-group">

                <img width="300px" src="{{$staff->image}}" alt="">
            </div>




            <input type="submit" value="Edit" class="btn btn-primary">
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
        </form>
    </div>




</body>
</html>
