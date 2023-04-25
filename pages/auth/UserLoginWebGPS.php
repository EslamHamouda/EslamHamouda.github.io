<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connect Plus</title>
   <!-- plugins:css -->
   <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
   <link rel="stylesheet" href="../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
   <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
   <!-- endinject -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left pl-5 pr-5 pb-5 pt-2">
                <div class="brand-logo">
                  <img src="../../assets/images/logo-svg.svg">
                </div>
                <h6 class="font-weight-light">Sign in to continue.</h6>
                <form class="pt-3" id="loginForm" action="http://airobserver4-001-site1.htempurl.com/ApiSiteGPS/UserLoginGPS.php" method="post">                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" name="EmailE">
                    <div class="warning">
                      <p class="email-warn">
                        <i class="uil uil-exclamation-octagon"></i>
                        <span class="warning-msg">Enter your Email</span>
                      </p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputID">Employee Code</label>
                    <input type="number" maxlength="14" class="form-control form-control-lg" id="exampleInputID" placeholder="CodeOf Employee" name="code">
                    <div class="code-warning ">
                      <p class="id-warning d-none" style="padding-left: 16px;color: red;padding-top: 10px;">
                        <i class="uil uil-exclamation-octagon"></i>
                        <span class="warning-msg">Code of Employee must be exactly 8 digits</span>
                      </p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="PasswordE">
                    <div class="warning">
                      <p class="password-warn">
                        <i class="uil uil-exclamation-octagon"></i>
                        <span class="warning-msg">Enter your password</span>
                      </p>
                    </div>
                  </div>
                  <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Log In</button>
                  </div>
                  
                  <div class="wrong-email text-center  mt-2 d-none">
                    <p class="text-danger">Please check your email, password, and code as they do not match.</p>
                  </div>

                  
                  <div class="my-2 d-flex justify-content-between align-items-center">
                     <div class="form-check div-chehbox">
                      <input type="checkbox" class="form-check-input d-inline-block" id="signin">
                      <label class=" text-muted label-chehbox" for="signin">
                         Keep me Signing in</label>
                    </div> 
                    <a href="http://airobserver4-001-site1.htempurl.com/project site GPS/UserForgetPasswordWebGPS.php" class="auth-link text-black">Forgot password?</a>
                  </div>
                  <!-- <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="http://airobserver4-001-site1.htempurl.com/UserRegisterWeb.php" class="text-primary">Create</a> -->
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
const form = document.getElementById('loginForm');
const email = document.getElementById('exampleInputEmail1');
const password = document.getElementById('exampleInputPassword1');
const emailPara = document.querySelector(".email-warn");
const passwordPara = document.querySelector(".password-warn");
const code = document.getElementById("exampleInputID");
const wrongCode = document.querySelector(".id-warning");

let wrongEmailDiv = document.querySelector('.wrong-email');



form.addEventListener("submit", function(event) {
  event.preventDefault();
  let valid = true;

  if(email.value === ""){
    valid=false;
    emailPara.classList.remove("email-warn");
    emailPara.classList.add("show-warn");
  } else {
    emailPara.classList.remove("show-warn");
    emailPara.classList.add("email-warn");
  }

  if(code.value ===""||code.value.length !== 8){
    valid = false;
    wrongCode.classList.remove("d-none");
  }else{
    wrongCode.classList.add("d-none");
  }

  if(password.value === ""){
    valid=false;
    passwordPara.classList.remove("password-warn");
    passwordPara.classList.add("show-warn");
  } else {
    passwordPara.classList.remove("show-warn");
    passwordPara.classList.add("password-warn");
  }

  if (valid === true) {
          event.preventDefault(); // prevent the form submission
        
          fetch('http://airobserver4-001-site1.htempurl.com/ApiSiteGPS/UserLoginGPS.php', {
            method: 'POST',
            body: new FormData(event.target)
          })
          .then(response => response.json())
          .then(data => {
            if (data.Code === 200) {
              sessionStorage.setItem('isLoggedIn', true);
              localStorage.setItem('userData', JSON.stringify(data.message));
              sessionStorage.setItem('userData', JSON.stringify(data.data));
              window.location.href = 'http://airobserver4-001-site1.htempurl.com/project site GPS/DashboradWeb.php';
            } else {
              console.log('Error:', data.message);
              wrongEmailDiv.classList.remove('d-none');
            }
          })
          .catch(error => console.error(error));
  }
});

    </script>
     <!-- plugins:js -->
     <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
     <!-- endinject -->
     <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- <script src="login.js"> </script>  -->
  </body>
</html>