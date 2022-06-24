<?php
include('rss.php');

  $feedlist = new rss($feed_url);
  echo $feedlist->display(2,"Feed Title");
?>
<!-- 
You may be wondering, how does this genius get a RSS feed from a 3rd party? Easy answer, PHP! 

github.com/frontlinegenisis
-->
<!DOCTYPE html>
<html>
<title>Loading Time...</title>
<script type="text/javascript" src="/time.js"></script>
<link rel="stylesheet" type="text/css" href="style.css"/>
<script>
setTimeout(function(){
window.location.reload(1);
}, 60000);
</script>
<body>
</body>
</html>
