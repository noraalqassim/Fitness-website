<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> log in </title>

   <style>
@import url("http://www.fontstatic.com/f=sky-bold,sky"); 
     @media print {
       body  {
         background-color:#ffffff;
       }  }
                

 body {
  background-color:	#d5dddd;
  font-family: 'sky';
  line-height: 1.6rem;
   
}




  *{
    margin:0;
    padding:0;
    box-sizing: border-box;
    font-family: 'sky';
  }



.bg-dark {
background-color:#6a9790;
}

  #navbar {
    display: flex;
    justify-content: space-between;
    padding: 0.75rem;
    position:sticky;
    top: 0;
    z-index: 1;
  }
  




  #navbar ul {
    list-style: none;
    display: flex;
    align-items: center;
  }
  
  #navbar ul li a {
    padding: 1rem;
    color:#eee9e2;
    font-size:larger;
  }
  
  #navbar ul li a:hover {
    background-color:#82a7a2;
    border-radius: 5px;
  }
  
  a{
    text-decoration: none;
    color:#eee9e2;
  
  }
  
  .login-box{
      max-width:500px;
      margin:20px auto;
      border:5px solid #46746d;
      }
    .row1{
   
      color: #46746d;
    }
   
  .col-md-6-left{
    background: #EAEAEA;
  padding:40px;}
  

  .col-md-6-right{
    background: #EAEAEA;
      padding:40px;
  
  }
 
  .btn{
      height:30px;
      width:200px;
      background:#82a7a2;
      position:relative;
      left:50px;
    color: #eee9e2;
    border-radius: 5px;
  }

  #content {
  text-align: center;
  color: #46746d;
  font-size: 30px;
  line-height: 2.4;
  margin-top: 19px;
  }


   </style>

  </head>
  <body>
  <nav  id="navbar" class="bg-dark " dir="rtl" >
        <ul >
          <li><a href="home.php">الرئيسية</a></li>
          <li><a href="home.php">من نحن </a></li>
          <li><a href="healthpage.html">التغذيه</a></li>
          <li><a href="exercises.html">الرياضه</a></li>
          <li><a href="calories.html">احسب سعراتك</a></li>
         <li><a href="home.php">التواصل معنا</a></li>
          <li><a href="login.php">التسجيل</a></li>
        </ul>
    </nav>
      <div class="login-box">
      <div class="row1">
        <div class="col-md-6-left">
          <h2 dir=rtl>تسجيل الدخول </h2>
		  <br>
          <form   name="f1"action="validation.php"  onsubmit="return validation()"method="post">
            <div  dir=rtl>
              <label> اسم المستخدم</label>
              <input type="text" name="user"  >
            </div>
			<br>
            <div  dir=rtl>
              <label> كلمة السر</label>
              <input type="password" name="password"  >
            </div>
			<br>
            <button type="submit" class="btn"> دخول </button>
          </form>
          </div>
          <div class="col-md-6-right">
            <h2 dir=rtl> سجل هنا</h2>
			<br>
            <form  action="register.php" method="post">
              <div dir=rtl>
                <label> اسم المستخدم</label>
                <input type="text" name="user" required>
              </div>
			  <br>
              <div  dir=rtl>
                <label> كلمة السر</label>
                <input type="password" name="password"  required>
              </div>
			  <br>
              <button type="submit" class="btn"> تسجيل </button>
            </form>
            </div>
           </div>
      </div>
  <script src="script.js">
    </script>
</body>
</html>