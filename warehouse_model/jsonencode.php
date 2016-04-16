<!---------------------------------------------------------------------------
Example client script for JQUERY:AJAX -> PHP:MYSQL example
---------------------------------------------------------------------------->

<html>
  <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  </head>
  <body>

  <!-------------------------------------------------------------------------
  1) Create some html content that can be accessed by jquery
  -------------------------------------------------------------------------->

  <div id="output"></div>

  <script id="source" language="javascript" type="text/javascript">

  $(function ()
  {
    //-----------------------------------------------------------------------
    // 2) Send a http request with AJAX http://api.jquery.com/jQuery.ajax/
    //-----------------------------------------------------------------------
    $.ajax({
    url: 'database.php', data: "", dataType: 'json',  success: function(rows)
    {
      for (var i in rows)
      {
        var row = rows[i];

        var sku = row['sku'];
        var location = row['location'];
          var picked = row['number_picked'];

        var output = ("<b>sku: </b>"+sku+"<b> location: </b>"+location+"<b> picked: </b>"+picked);
            $("#output").append(output);
      }

    }
  });
  });

  </script>
  </body>
</html>
