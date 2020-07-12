<!DOCTYPE html>
<html>
<head>
	<title>Register</title>

<style type="text/css">
	html {
  height: 100%;
}

body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  background: linear-gradient(#141e30, #243b55);
}

.login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 800px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}


.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
  
}
div{
  color: #fff;
}
option{
  background-color: #141e30;
  color: #fff;
}
.login-box .user-box input[type=radio] {
  width: 5%;
  
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  margin-right: 50px;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}

.login-box .user-box select {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;

  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}

.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #03e9f4;
  font-size: 12px;
}

.login-box form button {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #03e9f4;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  background: rgba(0,0,0,.5);
  border: 0px;
  margin-top: 40px;
  letter-spacing: 4px
}

.login-box button:hover {
  background: #03e9f4;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
              0 0 100px #03e9f4;
}

.login-box button span {
  position: absolute;
  display: block;
}

.login-box button span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #03e9f4);
  animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.login-box button span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #03e9f4);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.login-box button span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, transparent, #03e9f4);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.login-box a span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #03e9f4);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}

</style>

</head>
<body>

<div class="login-box">
  <h2>Register</h2>
  <form action="register.php" method = "POST">
    <div class="user-box">
      <input type="text" name="email" required="">
      <label>Email</label>
    </div>
    <div class="user-box">
    <label>Name</label> <input required="required" type="text" name="name"/>
</div>
    <div class="user-box">
        <label>City</label>
      </div>
      <br>
      <div class="user-box">
        <select name="city" required="required" placeholder="Select City">
                    <option value="sangli">Sangli</option>
                    <option value="kolhapur">Kolhapur</option>
                    <option value="satara">Satara</option>
                   
                    <option value="pune">Pune</option>
                    <option value="buldana">Buldana</option>
                     <option value="akola">Akola</option>
                      <option value="mumbai">Mumbai</option>
                 </select>
</div>
        <div class="user-box">
        <label>Password</label><input required="required" type="password" name="password"/>
</div>
        <div class="user-box">
        <label>Retype-Password</label> <input required="required" type="password" name="password-retype"/>
</div>
        
        <div class="user-box">
          <label>Gender</label>
          </div>
          <br><br>
          <div class="user-box"> 
        male<input type="radio" value="male" name="gender" id="male" checked>
       
        
        female<input type="radio" value="female" name="gender" id="female">
      </div>
    
    
    <button type="submit">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Submit
    </button>
  </form>
  <br>
<div >
    Already have account  <a href="login.php">Log In</a>
</div>
</div>

</body>
</html>

