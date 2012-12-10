<html>
  <head>
    <title>JSON/Atom Custom Search API Example</title>
  </head>
  <body>
  
<div id="<?php echo $business->name; ?>"></div>
    
    <?php 
  echo "<script> var search = '".$business->name."'; </script>";
  ?>
  <script>
   var key = "AIzaSyDJbYUX1nNkME_nACwTDLgeCuCXCWDEANM";
   var cx = "001820243321672215928:_z5oeojhi_y";
      function hndlr(response) {
      for (var i = 0; i < response.items.length; i++) {
        var item = response.items[i];
        // in production code, item.htmlTitle should have the HTML entities escaped.
        document.getElementById(search).innerHTML += "<br>" + item.htmlTitle;
      }
    }
    var src = "https://www.googleapis.com/customsearch/v1?key=";
   src += key;
   src += "&cx=";
   src += cx;
   src += "&q=";
   src += search;
   src += "&callback=hndlr";
   console.log(src);
    </script>
<script>
var s = document.createElement('script');
    s.src = src;
    document.getElementsByTagName("head")[0].appendChild(s);
    </script>
  </body>
</html>