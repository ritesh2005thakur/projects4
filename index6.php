<?php
if(isset($_POST['register'])){
    $name = $_POST['love'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'webcoding3';
    
    $conn = mysqli_connect($host,$user,$pass,$dbname);
    
    $sql = "INSERT INTO input(question3) values ('$name')";
    mysqli_query($conn,$sql);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 3</title>
</head>
<style>
    .subscribe {
  position: relative;
  height: 160px;
  width: 950px;
  padding: 20px;
  background-color: #FFF;
  border-radius: 4px;
  color: #333;
  box-shadow: 0px 0px 60px 5px rgba(0, 0, 0, 0.4);
}

.subscribe:after {
  position: absolute;
  content: "";
  right: -10px;
  bottom: 18px;
  width: 0;
  height: 0;
  border-left: 0px solid transparent;
  border-right: 10px solid transparent;
  border-bottom: 10px solid #1a044e;
}

.subscribe p {
  text-align: center;
  font-size: 20px;
  font-weight: bold;
  letter-spacing: 4px;
  line-height: 28px;
}

.subscribe input {
  position: absolute;
  bottom: 80px;
  border: none;
  border-bottom: 1px solid #d4d4d4;
  padding: 10px;
  width: 82%;
  background: transparent;
  transition: all .25s ease;
}

.subscribe input:focus {
  outline: none;
  border-bottom: 1px solid #0d095e;
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', 'sans-serif';
}

.subscribe .submit-btn {
  position: absolute;
  border-radius: 30px;
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
  background-color: #77a0e8;
  color: #FFF;
  padding: 12px 25px;
  display: inline-block;
  font-size: 12px;
  font-weight: bold;
  letter-spacing: 5px;
  right: -10px;
  bottom: -20px;
  cursor: pointer;
  transition: all .25s ease;
  box-shadow: -5px 6px 20px 0px rgba(26, 26, 26, 0.4);
}

.subscribe .submit-btn:hover {
  background-color: #07013d;
  box-shadow: -5px 6px 20px 0px rgba(88, 88, 88, 0.569);
}

.txt{
    text-align: center;
    color: #333;
}
form .button{

bottom: 10px;
}
input[type=submit] {
background-color: #04AA6D;
border: none;
color: white;
padding: 16px 32px;
text-decoration: none;
margin: 4px 2px;
cursor: pointer;
}
@media  screen and (max-width: 600px){
  .subscribe{
    width: 320px;
    height: 200px
  }
}
</style>
<body>
    <br>
    <h1 class="txt"> Question 3 </h1>
    <br>
    <br><br><br>
    <div class="subscribe">
      <form action= "#" method = "POST">
        <div>
            <label><p>One suggestion you want to give me..</p></label>
            <input placeholder="YOUR ANSWER" class="subscribe-input" name="love" type="text" id="answer">
        </div>
            <input type="submit" class="button" value="SUBMIT" name="register">
       </form> 
    
    
          <div class="submit-btn"><a href="index7.html">NEXT</a>
          </div>
              
    </div>

</body>
</html>