<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <h1 class="card-header bg-info text-light pl-4">Create a Product</h1>
            <div class="alert alert-light" role="alert">
                {{-- imprimimos errores si hay alguno --}}
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $err)
                            <li>{{$err}}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <form method="post" action="{{route('product.store')}}" class="card-body">
                @csrf
                @method('post')
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name"placeholder="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="qty">Quantity:</label>
                    <input type="text" id="qty" name="qty"placeholder="quantity" class="form-control">

                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="number" id="price" name="price"placeholder="price with decimals" class="form-control">

                </div>
                <div class="form-group">
                    <label for="descripcion">Description:</label>
                    <textarea name="description" id="descripcion" placeholder="Insert a descripction of the product here..." cols="30" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group mt-3 ">
                    <input class="btn btn-info text-light" type="submit" value="Save a new Product">
                </div>

            </form>
        </div>
    </div>
</body>
</html>
