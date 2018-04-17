<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="refresh" content="2;url=index.html">
</head>
<body>
<p tag='main'></p>
<form action="" method="get" id="spaceing" data-abide>
name: <input type="text" name="Username"><br>
message: <input type="text" name="Message"><br>
<input type="submit">
</form>

</body>
<script type='application/javascript'>
var text;
function read()
{
fetch('./chat.txt')
  .then(
    function(response) {
      if (response.status !== 200) {
        console.log('Looks like there was a problem. Status Code: ' +
          response.status);
        return;
      }

      // Examine the text in the response
      response.json().then(function(data) {
        text = data;
      });
    }
  )
  .catch(function(err) {
    console.log('Fetch Error :-S', err);
  });
  document.getElementById('main').innerHTML = text;
 }
var read = setInterval(read, 10000);
  </script>
   <?php file_put_contents ( "./text.txt", "<?php echo $_GET["name"]; ?>: <?php echo $_GET["email"]; ?>", FILE_APPEND)?>                             
</html>
