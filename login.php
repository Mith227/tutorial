<!--
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <label class="logo">Maithili

            </label>

            <ul>
                <li><a href="#">



                        Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Feedback</a></li>
            </ul>
            <div class="text-box">
                <h1>Dhanak Yuba Foundation</h1>
                <p1>Internation Nepalese DKKA Youth Society.</p1>
                <br>
                <p2>नेपाल आदिवासी जनजाति महासंघ
                    जानकारी मानबीय सुचाङ्क २०५८ ( साक्षरता दर, पक्की घर, भूमिको स्वामित्व, व्यवसायिक, भाषा, जनसंख्या तथा स्नातक तह वा सो भन्दा माथिको शैक्षिक स्थिती) को आधारमा नेपाल आदिवासी जनजाति महासंघ महासचिव डाक्टर. ओम गुरुङको संयोजकत्वमा गठित जनजाति वर्गीकरण कार्यदलद्वारा वर्गिकृत नेपालका आदिवासी जनजातिहरूको वर्गीकरण सूची (मिति२०६०/११/१८ मा सम्पन्न संघीय परिषद्को बैठकले सर्वसम्मतिद्वारा अनुमोदित)</p2>
            </div>

        </nav>



    </body>

    </html>
    <style>
        checkbtn {
            font-size: 30px;
            color: white;
            float: right;
            line-height: 80px;
            margin-right: 40px;
            cursor: pointer;
            display: none;
        }

        ul {
            position: fixed;
            width: 100%;
            height: 100vh;
            background: black;
            top: 80px;
            left: -100%;
            text-align: center;
            transition: all .5s;
        }

        nav ul li {
            display: block;
            margin: 50px 0;
            line-height: 30px;
        }

        nav ul li a {
            font-size: 20px;
        }

        a:hover,
        a.active {
            color: #255784;
            background-color: #2196f3;
            box-shadow: 0px 0px 10px #2196f3, 0px 0px 40px #2196f3, 0px 0px 80px #2196f3;
        }
    </style>
   -->
   <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2>Login Form</h2>

<form action="/action_page.php" method="post">
  <div class="imgcontainer">
    <img src="img_avatar.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>
