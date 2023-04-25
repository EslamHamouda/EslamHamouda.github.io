
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
                <form class="pt-3" action="http://airobserver4-001-site1.htempurl.com/ApiSiteGPS/UserActiveAccountGPS.php" id="registerForm" method="post">
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email Of Employee" name="EmailE">
                    <div class="warning email-warning d-none">
                      <i class="uil uil-exclamation-octagon"></i>
                      <span class="warning-msg">Please Enter email</span>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputID">ID</label>
                    <input type="number" maxlength="14" class="form-control form-control-lg" id="exampleInputID" placeholder="ID Of Employee" name="IDE">
                    <div class="warning id-warning d-none">
                      <i class="uil uil-exclamation-octagon"></i>
                      <span class="warning-msg">ID must be exactly 14 digits</span>
                    </div>
                  </div>
                  
                  <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Active Account</button>
                  </div>
                  
                  <div class="msg-error text-center mt-2 d-none">
                    <p class="msg-response" style="color: red;">This Email or ID is Not Same In Database.</p>
                  </div>   

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      // localStorage.clear();
      const form = document.getElementById('registerForm');
      const idInput = document.getElementById('exampleInputID');
      const emailInput = document.getElementById('exampleInputEmail1');
      const emailWarning = document.querySelector('.email-warning');
      const idWarning = document.querySelector('.id-warning');
      const messageError = document.querySelector('.msg-error');
      // const messageResponse = document.querySelector('.msg-response');

      form.addEventListener('submit', (event) => {
        event.preventDefault();
        let valid = true;
      
        if (emailInput.value.trim() === '') {
          valid = false;
          emailWarning.classList.remove("d-none");
        } else {
          emailWarning.classList.add('d-none');
        }
      
        if (idInput.value.length !== 14) {
          valid = false;
          idWarning.classList.remove('d-none');
        } else {
          idWarning.classList.add('d-none');
        }
      
        if (valid) {
          fetch('http://airobserver4-001-site1.htempurl.com/ApiSiteGPS/UserActiveAccountGPS.php', {
            method: 'POST',
            body: new FormData(event.target),
          })
            .then((response) => response.json())
            .then((data) => {
              if (data.Code === 200) {
                localStorage.setItem('userData', JSON.stringify(data.message));
                console.log(data.message);
                window.location.href = 'https://eslamhamouda.github.io/pages/auth/UserNewPasswordWebGPS.html';
              } else {
                console.log('Error:', data.message);
                messageError.classList.remove("d-none");
              }
            })
            .catch((error) => console.error(error));
        }
      });

      emailInput.addEventListener('blur', () => {
        sessionStorage.setItem('mail', emailInput.value);
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
    <!-- <script src="../../assets/js/register.js"></script> -->
  </body>
</html>
