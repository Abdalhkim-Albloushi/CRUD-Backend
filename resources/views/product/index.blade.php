<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Price</th>
            <th scope="col">Details</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $pro)
                
            
          <tr>
            <th scope="row">{{ $pro->id }}</th>
            <td>{{ $pro->title }}</td>
            <td>{{ $pro->price }}</td>
            <td>{{ $pro->details }}</td>
            <td>
                
<a  href="{{ route('product.edit',$pro->id) }}" class="btn btn-primary" >Edit</a>
<a type="submit" href="{{ route('product.delete',$pro->id) }}" class="btn btn-danger" >Delete</a>

            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</body>
</html>