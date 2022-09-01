<!doctype html>
<html lang="en">
  <head>

    <script>
function validateForm() {
    var x = document.forms["myform"]["email"].value;
    var y = document.forms["myform"]["phone"].value;
    var z = document.forms["myform"]["password"].value;
    var w = document.forms["myform"]["confirmpassword"].value;
    if (x == ""||y==""||z==""||w=="") {
        alert("Details must be filled out");
        return false;
    
    }
}
</script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <style>
  body{
    background-color: #efeded;
  }

  input{
        padding: 10px 10px 10px 10px;
        font-size: 15px;
        border: 1px solid #ccd2dd;
        width:320px;
        margin-left: 15px;
        margin-top: 15px;
        margin-bottom: -20px;
  }

  .btn{
    width: 80px;
    margin-left: 30px;
    margin-top: 8px;
    border-radius: 0;
    border: 1px;
    margin-bottom: 20px;
  }

  .signup{
    font-weight: bold;
    text-align: center;
    margin-top: 50px;
    ;
  }
  #wrapper {
    width: 400px;
    height: 400px;
    border: 1px solid lightgrey;
    margin: 0 auto;
    background-color: white;

  }

  .form-element {
    margin: 15px;

  }

  .alreadymem{
    color: black;
    padding: 30px;
  }

  .alreadymem:hover{
    color: blue;
  }
marquee{
  margin-top: 25px;
}
  </style>

  </head>
  <body>

     <marquee behavior="scroll" direction="left" scrollamount="40">
    <img src="https://i1.wp.com/cliparting.com/wp-content/uploads/2016/05/Free-red-sports-car-clipart-clipart-and-vector-image.png?resize=1060%2C312" width="300" height="80" alt="Natural" />
  </marquee>
    
  <form name="myform" onsubmit="return validateForm()" action="rentacar1.html">
  <h1 class="signup">SIGN-UP</h1>
  <div id="wrapper">

    <div class="form-element" class="col-sm-10">
        
                
                <input type="email" name="email" id="email" placeholder = "Email">
                <i class="fas fa-envelope fa-lg"></i>
                </div>
    <div class="form-element">
        
                
                <input type="numeric" name="phone" id="phone" placeholder = "Phone">
                <i class="fas fa-mobile fa-lg"></i>
                </div>

        <div class="form-element">
        
               
                <input type="password" name="password" id="password" placeholder = "Password">
                <i class="fas fa-lock fa-lg"></i>
                </div>

        <div class="form-element">
        
               
                <input type="password" name="confirmpassword" id="confirmpassword" placeholder = "Confirm Password">
                <i class="fas fa-lock fa-lg"></i>
                </div>

        <button class="btn btn-flat btn-info" href="rentacar1.php">Signup</button>
        <br>
        <a href="C:\Users\RICHA\Desktop\html files\login.html" class="alreadymem">Already a member? Login</a>
    </div>









    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>