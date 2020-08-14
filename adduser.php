<?php
include('config.php');
include('function.php');
include('generateid.php');
session_start();
    

  if (isset($_POST['submit'])) {
      
      $name = mysqli_real_escape_string($conn,$_POST['name']);
      $email = mysqli_real_escape_string($conn,$_POST['email']);
       $mobileno = mysqli_real_escape_string($conn,$_POST['mobileno']); 
      $address = mysqli_real_escape_string($conn,$_POST['address']);
      $pincode = mysqli_real_escape_string($conn,$_POST['pincode']);
      $memberid = mysqli_real_escape_string($conn,$_POST['memberid']);
      $password = mysqli_real_escape_string($conn,$_POST['password']);
      $regdate = mysqli_real_escape_string($conn,$_POST['regdate']); 
            $plan = mysqli_real_escape_string($conn,$_POST['plan']); 
      $refer = mysqli_real_escape_string($conn,$_POST['refer']);
      $position = mysqli_real_escape_string($conn,$_POST['position']);
      $aadhaar = mysqli_real_escape_string($conn,$_POST['aadhaar']);
      $panno = mysqli_real_escape_string($conn,$_POST['panno']);
       $accountno = mysqli_real_escape_string($conn,$_POST['accountno']); 


       $sql = "INSERT INTO `user` ( `name`, `email`, `mobileno`, `address`, `pincode`, `memberid`, `password`, `regdate`,`plan`, `refer`, `position`,`aadhaar`, `panno`,`accountno`) VALUES ('$name','$email',$mobileno,'$address',$pincode,'$memberid','$password','$regdate',$plan,'$refer','$position' ,$aadhaar, $panno, $accountno )";
 

if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Record Sucessfully Inserted');document.location='\userdasboardfolder\user_dashboard.php'</script>";
        } else {
            echo "<script>alert('Record  Inserting failed');document.location='adduser.php'</script>";
            }

        $conn->close();
}
 ?>

 <!DOCTYPE html>
<html>
<head>
    <title>ADD DETAIL</title>
    <meta charset="utf-8">
    <style>
    *{
        margin:0;
        padding: 0;
        box-sizing: border-box;
    }
    html{
        height: 100%;
    }

  body{
    margin: 0;
    padding: 0;
background-color: #00FFFF;
    background-size: cover;
    background-position: center;
    font-family: Times, Times New Roman, serif;;
}

.wrap{
    width: 320px;
    height: 420px;
    color: #fff;
    top: 40%;
    left: 38%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}

    .login-form{
        width: 600px;
        margin: 0 auto;
        border: 2px solid #ddd;
        padding: 2rem;
        background: #292c2d;
    }
    .form-input{
        background:#fafafa;
        border: 1px solid #eeeeee;
        padding: 12px;
        width: 100%;
    }

    .form-select{
      background:#292c2d;
        border: 1px solid #eeeeee;
        padding: 12px;
        width: 100%;
    }

    .form-group{
        margin-bottom: 1rem;
        color: #fff;
    }
    .form-button{
        background: #69d2e7;
        border: 1px solid #ddd;
        color: #ffffff;
        padding: 10px;
        width: 100%;
        text-transform: uppercase;
    }
    .form-button:hover{
        background: #69c8e7;
    }
    .form-header{
        text-align: center;
        margin-bottom : 2rem;
        color: #ffffff;
    }
    .form-footer{
        text-align: center;
    }

    .header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
  background-color: #0283c9 ;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }


    </style>
</head>
<body>

    <div class="header">
  <a href="#default" class="logo">SAGAR SALES</a>
  <div class="header-right">
    <a class="active" href="logout.php">Logout</a>
  </div>
</div>


    <div class="wrap">
        <form class="login-form" action="adduser.php" method="POST">
            <div class="form-header">

                <h1>ADD USER INFO</h1>
            </div>
            
            <div class="form-group">
                <label>NAME</label>
                <input type="text" class="form-input"  name="name" required>
            </div>
          
            <div class="form-group">
                <label>EMAIL</label>
               <input type="text" class="form-input"  name="email" required>
            </div>

            <div class="form-group">
            <label>MOBILE NO</label>
               <input type="No" class="form-input" name="mobileno"  minlength="10" maxlength="10" required>
            </div>

            <div class="form-group">
                <label>ADDRESS</label>
               <input type="text" class="form-input" name="address" required>
            </div>

            <div class="form-group">
                <label>PIN CODE</label>
               <input type="text" class="form-input"  name="pincode"  minlength="6" maxlength="6" required>
            </div>
             
             <div class="form-group">
                <label>MEMBER ID</label>
               <input type="text" class="form-input" value="<?php echo $id; ?>" name="memberid" minlength="8" maxlength="10" required>
            </div>

            <div class="form-group">
            <label>PASSWORD</label>
               <input type="password" class="form-input" value="<?php echo $autopass; ?>" minlength="6" maxlength="6" name="password"  required>
            </div>

            <div class="form-group">
            <label>REGISTRATION DATE</label>
               <input type="date" class="form-input"  name="regdate"  required>
            </div>

            <div class="form-group">
            <label>PRODUCT</label>
               <select class="form-input" name="plan"  required>
                <option value="150">150</option>
                <option value="1500">1500</option>
               </select>
            </div>


            <div class="form-group">
            <label>REFERAL ID</label>
               <input type="text" class="form-input"  name="refer" required>
            </div>

           <div class="form-group">
            <label>POSITION</label>
               <select class="form-input" name="position"  required>
                <option value="LEFT">LEFT</option>
                <option value="MIDDLE">MIDDLE</option>
                                <option value="RIGHT">RIGHT</option>
               </select>
            </div>

             <div class="form-header">
                <h1>KYC DETAIL</h1>
            </div>
           

                <div class="form-group">
                <label>Aadhaar No</label>
                <input type="text" class="form-input"  name="aadhaar" minlength="16" maxlength="16">
            </div>
          
            <div class="form-group">
                <label>PAN NO(OPTIONAL)</label>
               <input type="text" class="form-input"  name="panno"  minlength="4" maxlength="16" >
            </div>

            <div class="form-group">
            <label>BANK ACCOUNT NO(OPTIONAL)</label>
               <input type="text" class="form-input" name="accountno" >
            </div>

            <div class="form-group">
                <button class="form-button" type="submit" name="submit">SUBMIT</button>
            </div>
        </form>
    </div>

    

</body>
</html>
         