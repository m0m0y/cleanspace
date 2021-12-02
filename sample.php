<!-- <button onclick="myFunction()">Click Me</button>

<input onclick="myFunctionone()" type="radio" name="payment_method" value="ONE" checked/> 1

<input onclick="myFunctiontwo()" type="radio" name="payment_method" value="TWO" /> 2

<input onclick="myFunctionthree()" type="radio" name="payment_method" value="THREE" /> 3


<div id="myDIV1" style="display: none;">
  This is my DIV element 1.
</div>

<div id="myDIV2" style="display: none;">
  This is my DIV element 2.
</div>

<div id="myDIV3" style="display: none;">
  This is my DIV element 3.
</div>
<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  x.style.display = "block";
  // if (x.style.display == "none") {
  //   x.style.display = "block";
  // } else {
  //   x.style.display = "none";
  // }
}
function myFunctionshow() {
  var x = document.getElementById("myDIV");
  x.style.display = "none";
  // if (x.style.display == "none") {
  //   x.style.display = "block";
  // } else {
  //   x.style.display = "none";
  // }
}
</script>


<table>
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  
</table> -->
<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<body>

<div ng-app="myApp" ng-controller="myCtrl">
{{ firstName + " " + lastName }}
</div>

<p></p>

<script>
var app = angular.module("myApp", []);
app.controller("myCtrl", function($scope) {
    $scope.firstName = "John";
    $scope.lastName = "Doe";
});
</script>

</body>
</html>
