<head>
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script> -->
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script> -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/queryLoader.css" type="text/css">
<script src="jquery.mosaicflow.min.js"></script>
<script type="text/javascript" src="./fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="./fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="./fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<script type='text/javascript' src='js/queryLoader.js'></script>
<style>
.mosaicflow__column {
 float:left;
}
.mosaicflow__item img { 
  display:block;
 width:100%; 
 height:auto;
}
a[rel=example_group]{
  border: 2px solid #ccc;
display: block;
padding: 5px 10px 40px 10px;
-webkit-box-shadow: 4px 4px 5px 0px rgba(50, 50, 50, 0.75);
-moz-box-shadow:    4px 4px 5px 0px rgba(50, 50, 50, 0.75);
box-shadow:         4px 4px 5px 0px rgba(50, 50, 50, 0.75);
margin: 5px;
}
img{
  border: 2px solid #7D7D7D;
}
.hide{
display: none;
}
</style>
<script type="text/javascript">
$(document).ready(function() {
  $('#mycontainer').mosaicflow({
    itemSelector: '.mosaicflow__item',
    minItemWidth: 300
});
$("a[rel=example_group]").fancybox({
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'titlePosition'   : 'over',
        'titleFormat'   : function(title, currentArray, currentIndex, currentOpts) {
          return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
        }
      });
});
</script>
</head>
<body>
<div id="mycontainer">
<div class="clearfix mosaicflow">
 <div class="mosaicflow__item item_tumb">
<a rel="example_group" href="phpthumb/phpThumb.php?src=images/disk.jpg&amp;w=600&amp;fltr[]=wmi|images/horsewatermark.png|*|25">
<img border="0" src="phpthumb/phpThumb.php?src=images/disk.jpg&amp;w=300&amp;fltr[]=wmi|images/horsewatermark.png|*|25" alt="">
</a>

 </div>
 <div class="mosaicflow__item item_tumb">
  <a rel="example_group" href="phpthumb/images/disk.jpg"> 
<img border="0" src="phpthumb/phpThumb.php?src=images/test.jpg&amp;w=300&amp;fltr[]=wmi|images/horsewatermark.png|*|25" alt="">
</a>
 </div>
    <?php
for ($i = 0; $i < 30; $i++) {
    $x = 300;
    $y = rand(200, 300);
?>
    <div class="mosaicflow__item item_<?php
    echo $i; ?>">
       <a rel="example_group" href="phpthumb/images/test.jpg"> 
       <img width="500px" src="http://placehold.it/<?php
    echo $x . 'x' . $y; ?>" alt=""> 
       </a>
    </div>
    <?php
} ?>

</div>
</div>
<script type='text/javascript'>
    QueryLoader.init();
</script>

</body>