<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Settings > Change Password - Workshop For Beginners</title>
  <link rel="stylesheet" href="../assets/css/custom.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <main>
    <div class="container">
      <!-- start: breadcrumb -->
      <div class="page-header mt-3">
        <div class="row align-items-end">
          <div class="col-sm mb-2 mb-sm-0">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a class="breadcrumb-link" href="/ui/1.1.homepage.html">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Settings
                </li>
              </ol>
            </nav>
            <h1>Change Password</h1>
          </div>
        </div>
      </div>
      <!-- end: breadcrumb -->

      <div class="row">
        <!-- start: left menu -->
        <div class="col-lg-3 mt-4">
          <div class="card mb-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('auth/edit_profile') ?>">
                  <i class="bi-person"></i> Basic information
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url('auth/edit_password'); ?>">
                  <i class="bi-key"></i> Password
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- end: left menu -->
        <!-- start: main content -->
        <div class="col-lg-9 mt-4">
          <div class="card mb-3" id="passwordSection">
            <div class="card-header">
              <h4 class="card-title">Change your password</h4>
            </div>
            <div class="card-body">

              <?php echo form_open('auth/edit_password'); ?>
              <div class="row mb-4">
                <div class="col-sm-3">
                  <label for="currentPasswordLabel" class="form-label">Current password</label>
                </div>
                <div class="col-sm-9">
                  <input value="<?php echo set_value('oldpassword') ?>" type="password" class="form-control" name="oldpassword" id="currentPasswordLabel" placeholder="Enter current password" required />
                  <a style="color:#FF0000;"><?php echo form_error('oldpassword') ?></a>
                  <div class="invalid-feedback">
                    Please enter current password
                  </div>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-sm-3">
                  <label for="newPassword" class="form-label">New password</label>
                </div>
                <div class="col-sm-9">
                  <input value="<?php echo set_value('newpassword') ?>" type="password" class="form-control" name="newpassword" id="newPassword" placeholder="Enter new password" required />
                  <a style="color:#FF0000;"><?php echo form_error('newpassword') ?></a>
                  <div class="invalid-feedback">
                    Please enter new password
                  </div>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-sm-3">
                  <label for="confirmNewPasswordLabel" class="form-label">Confirm new password</label>
                </div>
                <div class="col-sm-9">
                  <div class="mb-3">
                    <input value="<?php echo set_value('confnewpassword') ?>" type="password" class="form-control" name="confnewpassword" id="confirmNewPasswordLabel" placeholder="Confirm your new password" required />
                    <a style="color:#FF0000;"><?php echo form_error('confnewpassword') ?></a>
                    <div class="invalid-feedback">
                      Please enter confirm new password
                    </div>
                  </div>
                  <h5>Password requirements:</h5>
                  <p class="fs-6 mb-2">
                    Ensure that these requirements are met:
                  </p>

                  <ul class="fs-6">
                    <li>
                      Minimum 5 characters long - the more, the better
                    </li>
                    <li>At least one lowercase character</li>
                    <li>At least one uppercase character</li>
                    <li>
                      At least one number, symbol, or whitespace character
                    </li>
                  </ul>
                </div>
              </div>

              <div class="row mb-4">
                <div class="col-sm-3"></div>
                <div class="col-sm-9">
                  <button type="submit" class="btn btn-primary">
                    Save Changes
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end: main content -->
      </div>
    </div>
  </main>
  <script src="../assets/js/custom.js"></script>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>