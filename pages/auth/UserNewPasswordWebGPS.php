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

                <form class="pt-3" id="newpassword" action="http://airobserver4-001-site1.htempurl.com/ApiSiteGPS/UserCreatPasswordGPS.php" method="post">

                      <div class="form-group d-none">
                        <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" name="EmailE">
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputPassword1">New password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="PasswordE">
                        <div class="npassword-warn d-none">
                          <p class=""  style="color: red;">
                            <i class="uil uil-exclamation-octagon"></i>
                            <span class="warning-msg">Enter your new password and not less than 8 character or number</span>
                          </p>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Confirm Password</label>
                        <input type="password" class="form-control " id="exampleInputConfirmPassword1" placeholder="Password">

                        <div class="cpassword-warn d-none">
                          <p class="" style="color: red; padding-top: 10px;">
                            <i class="uil uil-exclamation-octagon"></i>
                            <span class="warning-msg">Enter same password. </span>
                          </p>
                        </div>
                      </div>

                      <div class="mt-3">
                        <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >Confirm</button>
                      </div>
                      
                      <div class="email-wrong d-none">
                        <p class="text-center email-msg" style="color: red; padding-top: 10px;">Something Wrong Please Try Again.</p>
                    </div>
                  
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <script>
       // Define variables for DOM elements
const form = document.getElementById("newpassword");
const newPassword = document.getElementById("exampleInputPassword1");
const confirmNewPassword = document.getElementById("exampleInputConfirmPassword1");
const newPasswordPara = document.querySelector(".npassword-warn");
const confirmNewPasswordPara = document.querySelector(".cpassword-warn");
const emailInput = document.getElementById("exampleInputEmail1");
const wrong = document.querySelector(".email-wrong");

// Get email from sessionStorage and set it in email input field
const mail = window.sessionStorage.getItem("mail");
emailInput.value = mail;

// Add event listener for form submission
form.addEventListener("submit", function(event) {
  event.preventDefault();
  let valid = true;

  // Validate new password
  if (newPassword.value === "" || newPassword.value.length < 8) {
    valid = false; 
    newPasswordPara.classList.remove("d-none");
  } else {
    newPasswordPara.classList.add("d-none");
  }

  // Validate confirm password
  if (confirmNewPassword.value !== newPassword.value) {
    valid = false;
    confirmNewPasswordPara.classList.remove("d-none");
  } else {
    confirmNewPasswordPara.classList.add("d-none");

    // Submit form data if validation passes
    fetch("http://airobserver4-001-site1.htempurl.com/ApiSiteGPS/UserCreatPasswordGPS.php",{
      method: "POST",
      body: new FormData(form),
    })
    .then((response) => response.json()) // parse the response body as JSON
    .then(data => {
      if (data.Code === 500) {
        console.log(data.message);
        window.location.href = "http://airobserver4-001-site1.htempurl.com/project site GPS/UserLoginWebGPS.php";
      } else if (data.Code === 404) {
        wrong.classList.remove("d-none");
      }
      console.log(data); // log the response data
    });
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
  </body>
</html>