<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- Styles -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <style>
         body {
         font-family: 'Nunito', sans-serif;
         }
      </style>
    <title>Owner list</title>
</head>
<body>
<table class="table table-striped table-hover">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">owner name </th>
      <th scope="col">Car id </th>
      <th scope="col">created at  </th>
      <th scope="col">updated at </th>
    </tr>
  </thead>
  <tbody>
  @foreach($ownerData as $key=>$item)
    <tr>
      <td >{{$key+1}}</td>
      <td >{{$item->owner_name}}</td>
      <td >{{$item->car_id}}</td>
      <td >{{$item->created_at}}</td>
      <td >{{$item->updated_at}}</td>


    </tr>
    
    @endforeach
  </tbody>
</table>
</body>
</html>