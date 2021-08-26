<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Save Data using Ajax</title>
    <!---bootstrap cdn link __------>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container p-4">
        <div class="alert alert-success d-none">Save Data Successfully...!</div>
        <form action="javascript:void(0)" class="w-75 mx-auto">
          <h2 class="text-center">Save Data Using Ajax in laravel</h2>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="">User Type</label>
              <select name="user_type" id="user_type" class="form-control">
                <option value="">Please Select</option>
                <option value="1">Admin</option>
                <option value="2">General User</option>
              </select>
            </div>
            <button type="submit" id="submit" class="btn btn-primary mt-2">Submit</button>
          </form>
    </div>
    {{-- jquery cdn link --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      $('body').on('click', '#submit', function(){
        var name = $('#name').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var user_type = $('#user_type').val();

        // ajax request send
        $.ajax({
          url : 'save-data/'+name+'/'+email+'/'+password+'/'+user_type,
          method : 'get',
          success : function(result)
          {
            //show alert
            $('.alert-success').removeClass('d-none');
          }
        })
      })
    </script>
</body>
</html>