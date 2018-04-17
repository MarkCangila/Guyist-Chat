<html>
  <body>
    <p id='no'></p>
    <script type="application/javascript">
      document.getElementById('no').innerHTML += <?php echo $_POST["name"]; ?>: <?php echo $_POST["email"]; ?>;
    </script>
  </body>
</html>
