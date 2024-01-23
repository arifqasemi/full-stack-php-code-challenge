<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Register - <?=APP_NAME?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=ROOT?>/front/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=ROOT?>/front/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=ROOT?>/front/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <link href="<?=ROOT?>/front/css/demo.css" rel="stylesheet">
  <link href="<?=ROOT?>/front/css/intlTelInput.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=ROOT?>/front/assets/css/style.css" rel="stylesheet">


</head>

<body>


<main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">User Input Form</h5>
                    <p class="text-center small">Enter your personal details to create user</p>
                  </div>

                  <form method="POST" class="row g-3 needs-validation" novalidate >
                    <div class="col-12">
                      <label for="firstname" class="form-label">First Name</label>
                      <input type="text" name="first_name" class="form-control" id="firstname" required>
                      <div class="invalid-feedback">Please, enter your first name!</div>
                    </div>


                    <div class="col-12">
                      <label for="lastname" class="form-label">Last name</label>
                      <div class="input-group has-validation">
                        <input type="text" name="last_name" class="form-control" id="lastname" required>
                        <div class="invalid-feedback">Please choose a last name.</div>
                      </div>
                    </div>

                 
                    <div class="col-12">
                    <label for="phone" class="form-label">Contact Number</label>
                      <div class="input-group has-validation">
                        <input type="tel" name="contact" class="form-control" id="phone" required width="160px">
                        <div class="invalid-feedback">Please choose a contact number.</div>
                      </div>
                      <input type="hidden" name="countryCode" id="countryCode" value="">
                    </div>


                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                  

                    <div class="col-12">
                      <label for="website" class="form-label">website/Linkedin</label>
                      <input type="text" name="website" class="form-control" id="website" required>
                      <div class="invalid-feedback">Please enter a valid website url!</div>
                    </div>


                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Continue</button>
                    </div>
                
                  </form>

                </div>
              </div>

          

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



  <!-- Template Main JS File -->
  <script src="<?=ROOT?>/front/assets/js/main.js"></script>
  <script src="<?=ROOT?>/front/js/intlTelInput.js"></script>
 <script>
  var input = document.querySelector("#phone")
  window.intlTelInput(input,{});

    var countryCodeInput = document.querySelector("#countryCode");

    // Initialize intlTelInput
    var iti = window.intlTelInput(input, {
        separateDialCode: true,
        utilsScript: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/utils.js',
    });

    // Listen for the "countrychange" event to update the hidden input with the selected country code
    input.addEventListener("countrychange", function () {
        var selectedCountryData = iti.getSelectedCountryData();
        countryCodeInput.value = selectedCountryData.dialCode;
    });
 </script>
  <!-- Template Main JS File -->

</body>

</html>