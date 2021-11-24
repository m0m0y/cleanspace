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
<?php 
require("assets/common/header.php"); 
?>

<div class="container mt-3">
  <h3>Toast Example</h3>
  <p>In this example, we use a button to show the toast message.</p>

  <button type="button" class="btn btn-primary" id="toastbtn">Show Toast</button>
  
  <div class="toast" style="position: absolute; bottom: 15px; right: 10px; z-index: 9999; float: right;">
    <div class="toast-header">
      <strong class="me-auto">Toast Header</strong>
      <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
    </div>
    <div class="toast-body">
      <p>Some text inside the toast body</p>
    </div>
  </div>
</div>


<?php require("assets/common/footer.php"); ?>

<script>
document.getElementById("toastbtn").onclick = function() {
  var toastElList = [].slice.call(document.querySelectorAll('.toast'))
  var toastList = toastElList.map(function(toastEl) {
    return new bootstrap.Toast(toastEl)
  })
  toastList.forEach(toast => toast.show()) 
}
</script>