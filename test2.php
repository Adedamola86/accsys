<!DOCTYPE html>
<html>
<head>
<style>
div {
    border: 1px solid black;
    margin: 5px;
}
</style>
</head>
<body>

<p>Click the button to find out how many children the div element below has.</p>

<button onclick="myFunction()">Try it</button>

<div id="myDIV">
  <p>First p element</p>
  <p>Second p element</p>
</div>

<p><strong>Note:</strong> The childElementCount property is not supported in IE8 and earlier versions.</p>

<p id="demo"></p>

<script>
function myFunction() {
    var c = document.getElementById("myDIV").childElementCount;
    document.getElementById("demo").innerHTML = c;
}
</script>

</body>
</html>


UPDATE `programs` SET `scientistFacultyNonStudents` = '0.0', `scientistUndergraduate` = '0.3', `scientistGraduate` = '0.0', `scientistPostDoctorate` = '0.0', `scientistComputedTotalByRole` = '0.3', `professionalFacultyNonStudents` = '0.0', `professionalUndergraduate` = '0.0', `professionalGraduate` = '0.0', `professionalPostDoctorate` = '0.0', `professionalComputedTotalByRole` = '0.0', `technicalParaProfessionalFacultyNonStudents` = '1.5', `technicalParaProfessionalUndergraduate` = '0.9', `technicalParaProfessionalGraduate` = '0.0', `technicalParaProfessionalPostDoctorate` = '0.0', `technicalParaProfessionalComputedTotalByRole` = '2.4', `administrativeFacultyNonStudents` = '0.0', `administrativeUndergraduate` = '0.0', `administrativeGraduate` = '0.0', `administrativePostDoctorate` = '0.0', `administrativeComputedTotalByRole` = '0.0', `otherFacultyNonStudents` = '0.0', `otherUndergraduate` = '0.0', `otherGraduate` = '0.0', `otherPostDoctorate` = '0.0', `otherComputedTotalByRole` = '0.0', `computedTotalFacultyNonStudents` = '1.8', `computedTotalUndergraduate` = '0.9', `computedTotalGraduate` = '0.0', `computedTotalPostDoctorate` = '2.7', `computedTotalByRole` = '0.0', `fteVolunteersYouthAdult` = '1.8', `fteVolunteersYouthTotal` = '0.9', `status` = 'Program Support' WHERE `user_fk` = '43';
