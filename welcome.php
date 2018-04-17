<html>
<body>

<?php file_put_contents ( "./text.txt", "<?php echo $_GET["name"]; ?>: <?php echo $_GET["email"]; ?>", FILE_APPEND)?>
header('Location: index.html');
exit;

</body>
</html>
