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
              <div class="auth-form-light text-left">
                <div class="brand-logo">
                  <img src="../../assets/images/logo-svg.svg">
                </div>
                <form class="pt-3" action="http://airobserver4-001-site1.htempurl.com/ApiSiteGPS/SignUPGPS.php" id="registerForm" method="post">
                  <div class="form-group">
                    <label class="" for="exampleInputUsername1">First name</label>
                    <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="First-name Of Employee" name="FirstNameE">

                    <div class="warning ">
                      <p class="first-name-warn">
                        <i class="uil uil-exclamation-octagon"></i>
                        <span class="warning-msg">Enter first name</span>
                      </p>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="" for="exampleInputUsername1">Last name</label>
                    <input type="text" class="form-control form-control-lg" id="exampleInputUsername2" placeholder="Last-name Of Employee" name="LastNameE">

                    <div class="warning">
                      <p class="last-name-warn">
                        <i class="uil uil-exclamation-octagon"></i>
                        <span class="warning-msg">Enter last name</span>
                      </p>
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="exampleInputMobile" class="">Mobile</label>
                      <input type="number" maxlength="11" class="form-control form-control-lg" id="exampleInputMobile" placeholder="Mobile Of Employee" name="phoneE">

                      <div class="warning">
                        <p class="mobile-warn">
                          <i class="uil uil-exclamation-octagon"></i>
                          <span class="warning-msg">Enter mobile phone</span>
                        </p>
                      </div>
                  </div>

                  <div class="form-group ">
                    <label for="exampleInputMobile" class="">ID</label>
                      <input type="number" maxlength="14" class="form-control form-control-lg" id="exampleInputID" placeholder="ID Of Employee" name="IDE">

                      <div class="warning id-msg d-none" style="color: red;">
                        <p class="mt-2"><i class="uil uil-exclamation-octagon"></i><span class="warning-msg">Sorry, this wrong ID must equal "14" digit.</span></p>
                      </div>
                  </div>

                  <div class="form-group">
                    <label class="" for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email Of Employee" name="EmailE">

                    <div class="warning">
                      <p class="email-warn">
                        <i class="uil uil-exclamation-octagon"></i>
                        <span class="warning-msg">Enter email </span>
                      </p>
                    </div>
                  </div>

                  <!-- <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="PasswordE">

                    <div class="password-warning d-none">
                      <p class="password-warn" style="color: red;">
                        <i class="uil uil-exclamation-octagon"></i>
                        <span class="warning-msg" >Enter at least 8 character or number password </p>
                      </p>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Confirm Password</label>
                    <input type="password" class="form-control " id="exampleInputConfirmPassword1" placeholder="Password">

                    <div class="confirm-warning d-none">
                      <p class="cpassword-warn" style="color: red;">
                        <i class="uil uil-exclamation-octagon"></i>
                        <span class="warning-msg" >"Passwords do not match </span>
                      </p>
                    </div>
                  </div> -->

                  <div class="form-group">
                    <label for="exampleSelectGender">Gender</label>
                    <select class="form-control form-control-lg Select-Gender" id="exampleSelectGender" name="Gender">
                      <option>Other</option>
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                    <div class="warning other-msg d-none" style="color: red;">
                      <p class="mt-2"><i class="uil uil-exclamation-octagon"></i><span class="warning-msg">Sorry, you cannot select "Other". Please choose "Male" or "Female".</span></p>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputCity1">Birthdate</label>
                    <input type="date" class="form-control-lg form-control" id="exampleInputCity1" name="Birthday">

                    <div class="warning">
                      <p class="birth-warn">
                        <i class="uil uil-exclamation-octagon"></i>
                        <span class="warning-msg">please Select birthdate</span>
                      </p>
                    </div>
                  </div>

                  <!-- <div class="mb-4">
                    <div class="form-check">
                      <div class="form-check div-chehbox">
                        <input type="checkbox" class="form-check-input d-inline-block" id="Terms & Conditions">
                        <label class=" text-muted label-chehbox" for="Terms & Conditions">
                           I agree to all <a href="http://airobserver4-001-site1.htempurl.com/TermsAndConditions.php">Terms & Conditions</a></label>
                      </div>

                        <div class="warning">
                          <p class="Terms-warn">
                            <i class="uil uil-exclamation-octagon"></i>
                            <span class="warning-msg">You must to accepted Terms & Conditions before sign up</span>
                          </p>
                        </div>
                    </div>
                  </div> -->
                  <div class="mt-3">
                    <button type="submit"  class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN UP</button>
                  </div>

                  <div class="msg-error text-center mt-2 d-none">
                    <p class="msg-response" style="color: red;"></p>
                  </div>
                  
                  <!-- <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="http://airobserver4-001-site1.htempurl.com/UserLoginWeb.php" class="text-primary">Login</a>
                  </div> -->
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      localStorage.clear();
      const emailInput = document.getElementById('exampleInputEmail1');
      const registerForm = document.getElementById('registerForm');
      const firstName = document.getElementById('exampleInputUsername1');
      const lastName = document.getElementById('exampleInputUsername2');
      const mobile = document.getElementById('exampleInputMobile');
      const id = document.getElementById('exampleInputID');

      // const passwordMsg = document.querySelector(".password-warning");
      const confirmMSG = document.querySelector(".confirm-warning");

      // const confirmPassword = document.getElementById('exampleInputConfirmPassword1');
      const birthdate = document.getElementById('exampleInputCity1');
      const termsCheckbox = document.querySelector('.form-check-input');
      const firstNamePara = document.querySelector(".first-name-warn");
      const lastNamePara = document.querySelector(".last-name-warn");
      const mobilePara = document.querySelector(".mobile-warn");
      const emailPara = document.querySelector(".email-warn");
      const idPara = document.querySelector(".id-msg");
      const birthdatepara = document.querySelector(".birth-warn");
      const termspara = document.querySelector(".Terms-warn");
      const messageError = document.querySelector(".msg-error");
      const messageResponse = document.querySelector(".msg-response");
      const selectGender = document.querySelector(".Select-Gender");
      const wrongGenderMsg = document.querySelector(".other-msg");
      // const PasswordVlaue = document.getElementById("exampleInputPassword1");

      // console.log(SelectGender)
        registerForm.addEventListener('submit', function(event) {
          event.preventDefault(); // prevent the form submission
          let valid = true;

          if (firstName.value === "") {
            valid = false;
            firstNamePara.classList.remove("first-name-warn");
            firstNamePara.classList.add("show-warn");
          } else {
            firstNamePara.classList.remove("show-warn");
            firstNamePara.classList.add("first-name-warn");
          }

          if (lastName.value === "") {
            valid = false;
            lastNamePara.classList.remove("last-name-warn");
            lastNamePara.classList.add("show-warn");
          } else {
            lastNamePara.classList.remove("show-warn");
            lastNamePara.classList.add("last-name-warn");
          }

          if (mobile.value === "") {
            valid = false;
            mobilePara.classList.remove("mobile-warn");
            mobilePara.classList.add("show-warn");
          } else {
            mobilePara.classList.remove("show-warn");
            mobilePara.classList.add("mobile-warn");
          }

          if (emailInput.value === "") {
            valid = false;
            emailPara.classList.remove("email-warn");
            emailPara.classList.add("show-warn");
          } else {
            emailPara.classList.remove("show-warn");
            emailPara.classList.add("email-warn");
          }

          if (id.value.length !== 14) {
            valid = false;
            idPara.classList.remove("d-none");
          }else{
            idPara.classList.add("d-none");
          }

          // if (PasswordVlaue.value.length < 8){
          //   valid=false;
          //   passwordMsg.classList.remove("d-none");
          // }else{
          //   passwordMsg.classList.add("d-none");
          // }

          // if (PasswordVlaue.value !== confirmPassword.value) {
          //   valid = false;
          //   confirmPassword.classList.remove("d-none");
          // } else {
          //   confirmPassword.classList.remove("d-none");
          // }

          if (selectGender.value === "Other") {
            valid = false;
            wrongGenderMsg.classList.remove("d-none");
          } else {
            wrongGenderMsg.classList.add("d-none");
          }
          if (birthdate.value === "") {
            valid = false;
            birthdatepara.classList.remove("birth-warn");
            birthdatepara.classList.add("show-warn");
          } else {
            birthdatepara.classList.remove("show-warn");
            birthdatepara.classList.add("birth-warn");
          }

          // if (!termsCheckbox.checked) {
          //   valid = false;
          //   termspara.classList.remove("Terms-warn");
          //   termspara.classList.add("show-warn");
          // } else {
          //   termspara.classList.remove("show-warn");
          //   termspara.classList.add("Terms-warn");
          // }

          if (valid === true) {
                    fetch('http://airobserver4-001-site1.htempurl.com/ApiSiteGPS/SignUPGPS.php', {
                      method: 'POST',
                      body: new FormData(event.target)
                    })
                    .then(response => response.json())
                    .then(data => {
                      if (data.Code === 200) {
                        // Redirect to the API page
                        localStorage.setItem('userData', JSON.stringify(data.message));
                        location.reload();
                        console.log(data.message);
                        // window.location.href = 'http://airobserver4-001-site1.htempurl.com/UserOTPWeb.php';
                      } else {
                        console.log('Error:', data.message);
                        // window.location.href = 'http://airobserver4-001-site1.htempurl.com/register.php';
                        const errorMsg = data.message;
                        messageError.classList.remove("d-none");
                        // messageError.classList.add("d-block");
                        messageResponse.innerHTML = errorMsg ;
                      }
                    })
                    .catch(error => console.error(error));
                  }
                  });
                
                  // emailInput.addEventListener('blur', function() {
                  //   window.sessionStorage.setItem('mail', this.value);
                  // });
                
    </script>
     <!-- plugins:js -->
     <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
     <!-- endinject -->
     <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- <script src="../../assets/js/register.js"></script> -->
  </body>
</html>
