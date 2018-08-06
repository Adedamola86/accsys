<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Sign in</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <!--<img class="d-block mx-auto mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">-->
        <h2>[acc.sys]</h2>
        <p class="lead">Accountability and Evaluation Reporting System</p>
      </div>

      <div class="row">
        <div class="col-md-12 order-md-1">
          <h4 class="mb-3">Sign in to accsys</h4>
          <form class="needs-validation" action="signin.php" method="post" novalidate>

              <select required class="form-control" id="fieldofscience" name="Field Of Science">
                        <option value="">Please Choose an Option</option>
                        <option value="Plant Sciences">Plant Sciences</option>
                        <option value="Farm and Animal Sciences">Farm and Animal Sciences</option>
                      </select>
                      <select required class="form-control" id="fieldofscience" name="Field Of Science">
                                <option value="">Please Choose an Option</option>
                                <option value="Plant Sciences">Plant Sciences</option>
                                <option value="Farm and Animal Sciences">Farm and Animal Sciences</option>
                              </select>

            <button class="btn btn-primary btn-lg" type="submit">Sign in</button>
          </form>
          <div class="row">
            <div class="col-md-12 mt-2">
              <p class="lead">Not registered? <a href="signup.html" target="_self">Sign up</a></p>
            </div>
          </div>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2018 PVAMU College of Agriculture and Human Sciences</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
