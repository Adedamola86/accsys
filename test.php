<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Planned Program Form</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- This is a jQuery library to enable below add function for the table below compute -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>


    <!-- jQuery function to add table values and display sum totals  -->
      <script type="text/javascript">
      $(document).ready(function(){
        $('.gider').each(function(){

          $(this).keyup(function(){
            calcSumAverage();
          });
        });
      });

      function calcSumAverage(){
       var total = 0;
       var average = 0;

      //iterate throught ach textbox with classname '.formcontrol' and add the values
       $('.form-control')each(function(){
         if(!isNaN(this.value)&& thisvalue.length !=0){
           total += parseFloat(this.value);
         }
       });

       $('#totalMarks').html(total);

      }
      </script>
      <script type="text/javascript">
        function getColumnCount()
        {
            return document.getElementById('myTable').getElementsByTagName('tr')[0].getElementsByTagName('td').length;
        }

        function getRowCount()
        {
            return document.getElementById('myTable').rows.length;
        }

        function doAdd(ths)
        {

            var lastCol = getColumnCount()-1;
            var lastRow = getRowCount()-1;
            //for Column Sum
             var table = document.getElementById("myTable");
           var row = table.rows[ths.parentNode.parentNode.rowIndex];
           var colSum=0;
           for(var i=1;i<lastCol;i++)
                colSum = eval(colSum) + eval(row.cells[i].childNodes[0].value);
            row.cells[lastCol].innerHTML = colSum;

            //for Row Sum
            var cIndex = ths.parentNode.cellIndex;
            var rowSum = 0;
            for(var i=0;i<lastRow;i++)
                rowSum = eval(rowSum) + parseFloat(table.rows[i].cells[cIndex].childNodes[0].value);
            table.rows[lastRow].cells[cIndex].innerHTML = rowSum;


            //for the final Value in the last row last column
            var finSum = 0;
            for(var i=1 ;i<lastRow;i++)
                finSum = eval(finSum) + parseFloat(table.rows[i].cells[lastCol].innerHTML);
            for(var i=1;i<lastCol;i++)
                finSum=eval(finSum) + eval(table.rows[lastRow].cells[i].innerHTML);
            table.rows[lastRow].cells[lastCol].innerHTML = finSum;
        }
    </script>

  </head>
  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="signin.html">[ACCSYS] Logged in as: <?php echo $_SESSION["firstName"]; ?></a>
      <!--<p class="h4">Logged in as: <?php echo $_SESSION["firstName"]; ?></p>-->
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="signout.php">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row" style="margin-top:45px">
        <?php include 'sidebar.html'; ?>

        <?php
  /* This document collects and stores session data from the Program Initiation document */

  $_SESSION["programInitiationSegment"] = "Program Support";

  //echo "Program Support Page";

  ?>

  <h4>Program Support</h4>
  <div class="row mb-3">
    <div class="col-md-12 order-md-1">
      <form class="needs-validation" action="" method="post" novalidate>
        <div class="row">
          <div class="col-md-12">
            <div class="table-responsive">
              <table class="table" id="myTable">
                <tbody>
                  <tr>
                      <td>Scientist</td>
                      <td><input type="text" value="0" onchange="doAdd(this)"></td>
                      <td><input type="text" value="0" onchange="doAdd(this)"></td>
                      <td><input type="text" value="0" onchange="doAdd(this)"></td>
                      <td><input type="text" value="0" onchange="doAdd(this)"></td>
                      <td>0</td>
                  </tr>
                  <tr>
                      <td>Professional</td>
                      <td><input type="text" value="0" onchange="doAdd(this)"></td>
                      <td><input type="text" value="0" onchange="doAdd(this)"></td>
                      <td><input type="text" value="0" onchange="doAdd(this)"></td>
                      <td><input type="text" value="0" onchange="doAdd(this)"></td>
                      <td>0</td>
                  </tr>
                  <tr>
                      <td>Technical/Paraprofessional</td>
                      <td><input type="text" value="0" onchange="doAdd(this)"></td>
                      <td><input type="text" value="0" onchange="doAdd(this)"></td>
                      <td><input type="text" value="0" onchange="doAdd(this)"></td>
                      <td><input type="text" value="0" onchange="doAdd(this)"></td>
                      <td>0</td>
                  </tr>
                  <tr>
                      <td>Administrative</td>
                      <td><input type="text" value="0" onchange="doAdd(this)"></td>
                      <td><input type="text" value="0" onchange="doAdd(this)"></td>
                      <td><input type="text" value="0" onchange="doAdd(this)"></td>
                      <td><input type="text" value="0" onchange="doAdd(this)"></td>
                      <td>0</td>
                  </tr>
                  <tr>
                      <td>Other</td>
                      <td><input type="text" value="0" id="computedTotalUndergraduate" name="computedTotalUndergraduate" onchange="doAdd(this)"></td>
                      <td><input type="text" value="0" id="computedTotalUndergraduate" name="computedTotalUndergraduate" onchange="doAdd(this)"></td>
                      <td><input type="text" value="0" id="computedTotalUndergraduate" name="computedTotalUndergraduate" onchange="doAdd(this)"></td>
                      <td><input type="text" value="0" id="computedTotalUndergraduate" name="computedTotalUndergraduate" onchange="doAdd(this)"></td>
                      <td>0</td>
                  </tr>
                  <tr>
                    <td>Total</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <button onclick="window.history.go(-1); return false;" class="btn btn-primary btn-lg">Previous Screen</button>
        <button formaction="saveprogramdata.php" class="btn btn-primary btn-lg">Save</button>
        <!--<button class="btn btn-primary btn-lg" type="submit">Next and Save</button>-->
      </form>
    </div>
  </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Confirm Save and Exit</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          Kindly confirm the input data filled in the previous page is correct then click next else click cancle to review on the previous page.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Stay on current page</button>
            <button type="button" class="btn btn-primary" action="postToDb.php">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!--Table summation-->
    <script src="//code.jquery.com/jquery-3.1.0.slim.min.js"></script>
    <script src="sumTable.js"></script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
  </body>
</html>
