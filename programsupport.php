<?php
/* This document collects and stores session data from the Program Initiation document */

$_SESSION["programInitiationSegment"] = "Program Support";

//echo "Program Support Page";

?>

<!--<script type="text/javascript">
  function getColumnCount() {
      return document.getElementById('myTable').getElementsByTagName('tr')[0].getElementsByTagName('td').length;
  }

  function getRowCount() { return document.getElementById('myTable').rows.length; }

  function doAdd(ths)
  {
    var lastCol = getColumnCount()-1;
    var lastRow = getRowCount()-1;
    //for Column Sum
    var table = document.getElementById("myTable");
    var row = table.rows[ths.parentNode.parentNode.rowIndex];
    var colSum = 0;
    for (var i =1; i < lastCol; i++)
      colSum = eval(colSum) + eval(row.cells[i].childNodes[0].value);
      row.cells[lastCol].innerHTML = colSum;

      //for Row Sum
      var cIndex = ths.parentNode.cellIndex;
      var rowSum = 0;
      for(var i = 0; i < lastRow; i++)
          rowSum = eval(rowSum) + parseFloat(table.rows[i].cells[cIndex].childNodes[0].value);
      table.rows[lastRow].cells[cIndex].innerHTML = rowSum;

      //for the final Value in the last row last column
      var finSum = 0;
      for(var i = 1; i < lastRow; i++)
          finSum = eval(finSum) + parseFloat(table.rows[i].cells[lastCol].innerHTML);
      for(var i = 1;i < lastCol; i++)
          finSum = eval(finSum) + eval(table.rows[lastRow].cells[i].innerHTML);
      table.rows[lastRow].cells[lastCol].innerHTML = finSum;
  }
</script>-->

<h4>Program Support</h4>
<p class="lead my-4"><strong>Enter the total planned FTEs for your program over the program's duration.</strong></p>
<div class="row mb-3">
  <div class="col-md-12 order-md-1">
    <form class="needs-validation" action="" method="post" novalidate>
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
            <table class="table" id="myTable">
              <thead>
                <tr>
                  <th scope="col">Role</th>
                  <th scope="col">Faculty and Non-Students</span></th>
                  <th scope="col">Undergraduate <button type="button" class="btn btn-link" data-toggle="popover" data-placement="top" data-content="Students with Staffing Roles"><span data-feather="alert-circle"></button></th>
                  <th scope="col">Graduate <span data-feather="alert-circle"></th>
                  <th scope="col">Post-Doctorate <span data-feather="alert-circle"></th>
                  <th scope="col">Computed Total by Role</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Scientist/Faculty</th>
                  <td>
                    <input type="text" class="form-control" id="scientistFacultyNonStudents" name="scientistFacultyNonStudents" value="0" onchange="compute()">
                    <div class="invalid-feedback">Please enter valid FTE.</div>
                  </td>
                  <td>
                    <input type="text" class="form-control" id="scientistUndergraduate" name="scientistUndergraduate" value="0" onchange="compute()">
                    <div class="invalid-feedback">Please enter valid FTE.</div>
                  </td>
                  <td>
                    <input type="text" class="form-control" id="scientistGraduate" name="scientistGraduate"  value="0" onchange="compute()">
                    <div class="invalid-feedback">Please enter valid FTE.</div>
                  </td>
                  <td>
                    <input type="text" class="form-control" id="scientistPostDoctorate" name="scientistPostDoctorate" value="0" onchange="compute()">
                    <div class="invalid-feedback">Please enter valid FTE.</div>
                  </td>
                  <td>
                    <input type="text" class="form-control" id="scientistComputedTotalByRole" name="scientistComputedTotalByRole" value="0" readonly>
                  </td>
                </tr>
                <tr>
                  <th scope="row">Professional</th>
                  <td>
                    <input type="text" class="form-control" id="professionalFacultyNonStudents" name="professionalFacultyNonStudents" value="0" onchange="compute()">
                    <div class="invalid-feedback">Please enter valid FTE.</div>
                  </td>
                  <td>
                    <input type="text" class="form-control" id="professionalUndergraduate" name="professionalUndergraduate" value="0" onchange="compute()">
                    <div class="invalid-feedback">Please enter valid FTE.</div>
                  </td>
                  <td>
                    <input type="text" class="form-control" id="professionalGraduate" name="professionalGraduate" value="0" onchange="compute()">
                    <div class="invalid-feedback">Please enter valid FTE.</div>
                  </td>
                  <td>
                    <input type="text" class="form-control" id="professionalPostDoctorate" name="professionalPostDoctorate" value="0" onchange="compute()">
                    <div class="invalid-feedback">Please enter valid FTE.</div>
                  </td>
                  <td>
                    <input type="text" class="form-control" id="professionalComputedTotalByRole" name="professionalComputedTotalByRole" value="0" readonly>
                  </td>
                </tr>
                <tr>
                  <th scope="row">Technical/Paraprofessional</th>
                  <td>
                    <input type="text" class="form-control" id="technicalParaProfessionalFacultyNonStudents" name="technicalParaProfessionalUndergraduate" value="0" onchange="compute()">
                    <div class="invalid-feedback">Please enter valid FTE.</div>
                  </td>
                  <td>
                    <input type="text" class="form-control" id="technicalParaProfessionalUndergraduate" name="technicalParaProfessionalUndergraduate" value="0" onchange="compute()">
                    <div class="invalid-feedback">Please enter valid FTE.</div>
                  </td>
                  <td>
                    <input type="text" class="form-control" id="technicalParaProfessionalGraduate" name="technicalParaProfessionalGraduate" value="0" onchange="compute()">
                    <div class="invalid-feedback">Please enter valid FTE.</div>
                  </td>
                  <td>
                    <input type="text" class="form-control" id="technicalParaProfessionalPostDoctorate" name="technicalParaProfessionalPostDoctorate" value="0" onchange="compute()">
                    <div class="invalid-feedback">Please enter valid FTE.</div>
                  </td>
                  <td>
                    <input type="text" class="form-control" id="technicalParaProfessionalComputedTotalByRole" name="technicalParaProfessionalComputedTotalByRole" value="0" readonly>
                  </td>
                </tr>
                <tr>
                  <th scope="row">Administrative</th>
                  <td>
                    <input type="text" class="form-control" id="administrativeFacultyNonStudents" name="administrativeFacultyNonStudents" value="0" onchange="compute()">
                    <div class="invalid-feedback">Please enter valid FTE.</div>
                  </td>
                  <td>
                    <input type="text" class="form-control" id="administrativeUndergraduate" name="administrativeUndergraduate" value="0" onchange="compute()">
                    <div class="invalid-feedback">Please enter valid FTE.</div>
                  </td>
                  <td>
                    <input type="text" class="form-control" id="administrativeGraduate" name="administrativeGraduate" value="0" onchange="compute()">
                    <div class="invalid-feedback">Please enter valid FTE.</div>
                  </td>
                  <td>
                    <input type="text" class="form-control" id="administrativePostDoctorate" name="administrativePostDoctorate" value="0" onchange="compute()">
                    <div class="invalid-feedback">Please enter valid FTE.</div>
                  </td>
                  <td>
                    <input type="text" class="form-control" id="administrativeComputedTotalByRole" name="administrativeComputedTotalByRole" value="0" readonly>
                  </td>
                </tr>
                <tr>
                  <th scope="row">Other</th>
                  <td>
                    <input type="text" class="form-control" id="otherFacultyNonStudents" name="otherFacultyNonStudents" value="0" onchange="compute()">
                    <div class="invalid-feedback">Please enter valid FTE.</div>
                  </td>
                  <td>
                    <input type="text" class="form-control" id="otherUndergraduate" name="otherUndergraduate" value="0" onchange="compute()">
                    <div class="invalid-feedback">Please enter valid FTE.</div>
                  </td>
                  <td>
                    <input type="text" class="form-control" id="otherGraduate" name="otherGraduate" value="0" onchange="compute()">
                    <div class="invalid-feedback">Please enter valid FTE.</div>
                  </td>
                  <td>
                    <input type="text" class="form-control" id="otherPostDoctorate" name="otherPostDoctorate" value="0" onchange="compute()">
                    <div class="invalid-feedback">Please enter valid FTE.</div>
                  </td>
                  <td>
                    <input type="text" class="form-control" id="otherComputedTotalByRole" name="otherComputedTotalByRole" value="0" onchange="compute()" readonly>
                  </td>
                </tr>
                <tr>
                  <th scope="row" class="text-primary">Computed Total</th>
                  <td>
                    <input type="text" class="form-control" id="computedTotalFacultyNonStudents" name="computedTotalFacultyNonStudents" value="0" onchange="compute()" readonly>
                  </td>
                  <td>
                    <input type="text" class="form-control" id="computedTotalUndergraduate" name="computedTotalUndergraduate" value="0" onchange="compute()" readonly>
                  </td>
                  <td>
                    <input type="text" class="form-control" id="computedTotalGraduate" name="computedTotalGraduate" value="0" onchange="compute()" readonly>
                  </td>
                  <td>
                    <input type="text" class="form-control" id="computedTotalPostDoctorate" name="computedTotalPostDoctorate" value="0" onchange="compute()" readonly>
                  </td>
                  <td>
                    <input type="text" class="form-control" id="computedTotalByRole" name="computedTotalByRole" value="0" onchange="" readonly>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <hr class="my-4">
      <p class="lead my-4"><strong>Enter the total estimated FTEs for your program.</strong></p>
      <div class="row">
        <div class="col-md-6 mb-3">
          <input type="date" class="form-control" id="fteVolunteersAdultTotal" name="fteVolunteersAdultTotal" placeholder="Total Estimated FTEs (Volunteers - Adult)">
          <div class="invalid-feedback" required>
            Please enter valid FTE.
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <input type="date" class="form-control" id="fteVolunteersYouthTotal" name="fteVolunteersYouthTotal" placeholder="Total Estimated FTEs (Volunteers - Youth)">
          <div class="invalid-feedback" required>
            Please enter valid FTE.
          </div>
        </div>
      </div>

      <button onclick="window.history.go(-1); return false;" class="btn btn-primary btn-lg">Previous Screen</button>
      <button formaction="saveprogramdata.php" class="btn btn-primary btn-lg">Save</button>
      <!--<button class="btn btn-primary btn-lg" type="submit">Next and Save</button>-->
    </form>
  </div>
</div>

<script>

function compute() {
// row calculations
document.getElementById("scientistComputedTotalByRole").value = Number(document.getElementById("scientistFacultyNonStudents").value) + Number(document.getElementById("scientistUndergraduate").value) + Number(document.getElementById("scientistGraduate").value) + Number(document.getElementById("scientistPostDoctorate").value);

document.getElementById("professionalComputedTotalByRole").value = Number(document.getElementById("professionalFacultyNonStudents").value) + Number(document.getElementById("professionalUndergraduate").value) + Number(document.getElementById("professionalGraduate").value) + Number(document.getElementById("professionalPostDoctorate").value);

document.getElementById("technicalParaProfessionalComputedTotalByRole").value = Number(document.getElementById("technicalParaProfessionalFacultyNonStudents").value) + Number(document.getElementById("technicalParaProfessionalUndergraduate").value) + Number(document.getElementById("technicalParaProfessionalGraduate").value) + Number(document.getElementById("technicalParaProfessionalPostDoctorate").value);

document.getElementById("administrativeComputedTotalByRole").value = Number(document.getElementById("administrativeFacultyNonStudents").value) + Number(document.getElementById("administrativeUndergraduate").value) + Number(document.getElementById("administrativeGraduate").value) + Number(document.getElementById("administrativePostDoctorate").value);

document.getElementById("otherComputedTotalByRole").value = Number(document.getElementById("otherFacultyNonStudents").value) + Number(document.getElementById("otherUndergraduate").value) + Number(document.getElementById("otherGraduate").value) + Number(document.getElementById("otherPostDoctorate").value);

// column calculations
document.getElementById("computedTotalFacultyNonStudents").value = Number(document.getElementById("scientistFacultyNonStudents").value) + Number(document.getElementById("professionalFacultyNonStudents").value) + Number(document.getElementById("technicalParaProfessionalFacultyNonStudents").value) + Number(document.getElementById("administrativeFacultyNonStudents").value) +
Number(document.getElementById("otherFacultyNonStudents").value);

document.getElementById("computedTotalUndergraduate").value =  Number(document.getElementById("scientistUndergraduate").value) + Number(document.getElementById("professionalUndergraduate").value) + Number(document.getElementById("technicalParaProfessionalUndergraduate").value) + Number(document.getElementById("administrativeUndergraduate").value) +
Number(document.getElementById("otherUndergraduate").value);

document.getElementById("computedTotalGraduate").value =  Number(document.getElementById("scientistGraduate").value) + Number(document.getElementById("professionalGraduate").value) + Number(document.getElementById("technicalParaProfessionalGraduate").value) + Number(document.getElementById("administrativeGraduate").value) +
Number(document.getElementById("otherGraduate").value);

document.getElementById("computedTotalPostDoctorate").value =  Number(document.getElementById("scientistPostDoctorate").value) + Number(document.getElementById("professionalPostDoctorate").value) + Number(document.getElementById("technicalParaProfessionalPostDoctorate").value) + Number(document.getElementById("administrativePostDoctorate").value) +
Number(document.getElementById("otherPostDoctorate").value);

document.getElementById("computedTotalByRole").value =  Number(document.getElementById("scientistFacultyNonStudents").value) + Number(document.getElementById("professionalComputedTotalByRole").value) + Number(document.getElementById("technicalParaProfessionalComputedTotalByRole").value) + Number(document.getElementById("administrativeComputedTotalByRole").value) +
Number(document.getElementById("otherComputedTotalByRole").value);

document.getElementById("scientistComputedTotalByRole").value = parseFloat(document.getElementById("scientistComputedTotalByRole").value).toFixed(1);

document.getElementById("professionalComputedTotalByRole").value = parseFloat(document.getElementById("professionalComputedTotalByRole").value).toFixed(1);

document.getElementById("technicalParaProfessionalComputedTotalByRole").value = parseFloat(document.getElementById("technicalParaProfessionalComputedTotalByRole").value).toFixed(1);

document.getElementById("administrativeComputedTotalByRole").value = parseFloat(document.getElementById("administrativeComputedTotalByRole").value).toFixed(1);

document.getElementById("otherComputedTotalByRole").value = parseFloat(document.getElementById("otherComputedTotalByRole").value).toFixed(1);

document.getElementById("computedTotalFacultyNonStudents").value = parseFloat(document.getElementById("computedTotalFacultyNonStudents").value).toFixed(1);

document.getElementById("computedTotalUndergraduate").value = parseFloat(document.getElementById("computedTotalUndergraduate").value).toFixed(1);

document.getElementById("computedTotalGraduate").value = parseFloat(document.getElementById("computedTotalGraduate").value).toFixed(1);

document.getElementById("computedTotalPostDoctorate").value = parseFloat(document.getElementById("computedTotalPostDoctorate").value).toFixed(1);

document.getElementById("computedTotalByRole").value = parseFloat(document.getElementById("computedTotalByRole").value).toFixed(1);

}

</script>
