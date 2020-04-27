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
    <form action=" {{ route("product.update" , $product->id)}}" method="post" enctype="multipart/form-data" >
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Tên Sản Phẩm</label>
                <input type="text" class="form-control" name="name" value="{{ $product->name }}">
            </div>
             <div class="form-group">
                <label for="title">Mô tả</label>
                <input type="text" class="form-control" name="description" value="{{ $product->description }}">
            </div>
            <div class="form-group">
                <label for="title">Giá Sản Phẩm</label>
                <input type="number" class="form-control" name="price"  value="{{ $product->price }}">
            </div>
            <div class="form-group">
                <label for="title">Sản Phẩm Giảm Giá</label>
                <input type="number" class="form-control" name="promotion_price" value="{{ $product->promotion_price }}">
            </div>
            <div class="form-group">
                <label for="title">Hình Ảnh</label>
                <input type="file" class="form-control" name="cover_image" value="{{ $product->cover_image }}">
            </div>
            {{-- <div class="form-group">
                <label for="title">Sản phẩm có bán chạy không</label>
                <input type="number" class="form-control" name="selling" placeholder="Nhập sản phẩm bán chạy">
            </div> --}}
             <div class="form-group">
                <label for="title">Loại Sản Phẩm</label>
                <select class="form-control"  name="category_id">
                    @foreach ($category as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="title">Kiểu bò sát</label>
                <select class="form-control"  name="id_type">
                    @foreach ($type as $ty)
                        <option value="{{ $ty->id }}">{{ $ty->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="title">Kiểu phụ kiện</label>
                <select class="form-control"  name="id_acce">
                    @foreach ( $acce as $ac)
                        <option value="{{ $ac->id}}">{{ $ac->name }}</option>
                    @endforeach
                </select>
            </div>

            <input type="submit" value="Create" class="btn btn-primary">
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
        </form>
    </div>




</body>
</html>
