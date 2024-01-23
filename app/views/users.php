<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Home - <?=APP_NAME?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=ROOT?>/front/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=ROOT?>/front/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=ROOT?>/front/assets/css/style.css" rel="stylesheet">

</head>

<body>


<main>
    <div class="container mt-5">

    <div class="card">
            <div class="card-body">
              <h5 class="card-title">Users Table</h5>
              <a href="<?=ROOT?>/inputform" class="btn btn-primary mx-3">Add User</a><a href="<?=ROOT?>/home" class="btn btn-primary mx-3">Back</a>
              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Email </th>
                    <th scope="col">website/Linkedin </th>
                  </tr>
                </thead>
                <tbody>
                    <?php if($users):?>
                    <?php foreach($users as $user):?>
                  <tr>
                    <th scope="row"><?=$user->id?></th>
                    <td><?=$user->first_name?></td>
                    <td><?=$user->last_name?></td>
                    <td>+<?=$user->contact_number?></td>
                    <td><?=$user->email?></td>
                    <td><?=$user->website?></td>

                  </tr>
                <?php endforeach;?>
                <?php else:?>
                    <h3> No Data Found</h3>
                <?php endif;?>
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



  <!-- Template Main JS File -->
  <script src="<?=ROOT?>/front/assets/js/main.js"></script>

  <!-- Template Main JS File -->

</body>

</html>