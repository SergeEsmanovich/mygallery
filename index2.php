
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<!-- <script src="jquery.easing.1.3.js"></script>
<script src="jquery-css-transform.js"></script>
<script src="jquery-animate-css-rotate-scale.js"></script> -->
<script type='text/javascript' src='jquery.quicksand.js'></script>
<script type="text/javascript">
$(document).ready(function() {

$('.test').click(function(event) {
var content =  $("#content > li");
var data =[];
var rand = [];
var r;
while (rand.length<content.length) {
r = Math.floor((Math.random() * content.length))
  if(rand.indexOf(r)<0)
 rand.push(r);
}

$.each(rand, function(index, val) {
  data[index] = content[val];

});

console.log(data);
$("#content").quicksand(
  data, 
  {
    // all the parameters have sensible defaults
    // and in most cases can be optional
    duration: 1000,
    easing: "swing",
    attribute: "data-id",
  }
);

return false;
});

 

  });

</script>
<div class="demo">
<a href="" class="test">test</a>
<ol id="content" class="grid">
  <li data-id="red">Red</li>
  <li data-id="green">Green</li>
  <li data-id="blue">Blue</li>
  <li data-id="black">Black</li>
  <li data-id="white">White</li>
  <li data-id="yellow">Yellow</li>
  <li data-id="cyan">Cyan</li>
  <li data-id="magenta">Magenta</li>    
</ol>


</div>
