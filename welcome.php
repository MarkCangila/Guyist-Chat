<html>
<body>

<?php file_put_contents ( "./text.txt", "<?php echo $_POST["name"]; ?>: <?php echo $_POST["email"]; ?>", FILE_APPEND)?>
header('Location: index.html');
exit;

</body>
</html>
