<!-- <button onclick="myFunction()">Click Me</button> -->

<input onclick="myFunctionhide()" type="radio" name="payment_method" value="" checked/>

<input onclick="myFunction()" type="radio" name="payment_method" value="" />


<div id="myDIV" style="display: none;">
  This is my DIV element.
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
function myFunctionhide() {
  var x = document.getElementById("myDIV");
  x.style.display = "none";
  // if (x.style.display == "none") {
  //   x.style.display = "block";
  // } else {
  //   x.style.display = "none";
  // }
}
</script>