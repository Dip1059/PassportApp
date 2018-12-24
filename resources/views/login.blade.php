<!DOCTYPE html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf_token" content="{{csrf_token()}}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdn.rawgit.com/mgalante/jquery.redirect/master/jquery.redirect.js"></script>
</head>
<body>


<div class="container">
  <h2>Login</h2>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" required>
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button id="submit" class="btn btn-default">Submit</button>

</div>


<script>
  $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content'),
      }
  });


  $("#submit").click(function(){
        var email=$("#email").val();
        var password=$("#password").val();
        $.ajax({
          url: 'http://localhost:8000/api/login',
          type: 'POST',
          data: {
            email: email,
            password: password
          },
          success: function (response){
            if(!response.msg){
              var data=response.data.data;
              var user=response.user;
              var _token='{{csrf_token()}}';
              //location="home?data="+data+"&user="+user;
              $.redirect('home',{data,user,_token},'post');
            }else{
              alert(response.msg);
            }
          }
        });
  });
</script>
</body> 
</html>
