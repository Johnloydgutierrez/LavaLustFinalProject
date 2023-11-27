<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../public/vendors/feather/feather.css">
  <link rel="stylesheet" href="../public/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../public/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../public/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../public/images/favicon.png" />
</head>
<style>
 
 *{
  text-align:center;
 }
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa; /* Light gray background */
        }

        .container-scroller {
            height: 95vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .auth-form-light {
            background-color: #ffffff; /* White background */
            border-radius: 8px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
            max-width: 400px;
        }

        .auth-form-light h4 {
            text-align: center;
            color: #343a40; /* Dark text color */
        }

        .auth-form-light h6 {
            text-align: center;
            color: #6c757d; /* Gray text color */
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 95%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ced4da; /* Light border color */
            border-radius: 4px;
            margin-top: 8px;
        }

        .btn-primary {
            background-color: #007bff; /* Primary button color */
            color: #fff; /* White text color */
            border: none;
            padding: 12px 20px;
            font-size: 18px;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Darker color on hover */
        }

        .mt-3 {
            margin-top: 20px;
        }

        .text-center {
            text-align: center;
        }

        .text-primary {
            color: #007bff; /* Primary text color */
        }
    </style>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-95 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <h4 class="text-center">New here?</h4>
              <h6 class="font-weight-light text-center">Signing up is easy. It only takes a few steps</h6>            
              <?php $LAVA =& lava_instance(); ?>
              <?php echo $LAVA->form_validation->errors(); ?>         
             <form action="<?= site_url('validate_reg'); ?> " method="post">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="name" placeholder="Username" value="" size="50">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-control-lg" name="email" placeholder="Email" value="" size="50">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-lg" name="password" placeholder="Password" value="" size="50" >
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-lg" name="confpassword" placeholder="Confirm Password" value="" size="50">
                </div>
                <div class="mt-3 d-flex justify-content-center">
                <div><input type="submit" value="Sign Up" class="btn btn-primary" /></div>
                </div>
                <br>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="login" class="text-primary">Login</a>
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
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
