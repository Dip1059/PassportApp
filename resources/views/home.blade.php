<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<h2> Hello {{$user['name']}}</h2>
<div class="container">                                                                                      
  <div class="table-responsive">          
  <table class="table" hidden>
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td><a href='#'><button class="btn btn-info">Update</button></a>&nbsp&nbsp<a href='#'><button class="btn btn-danger">Delete</button></a></td>
      </tr>
    </tbody>
  </table>
  </div>
</div>

</body>
</html>
