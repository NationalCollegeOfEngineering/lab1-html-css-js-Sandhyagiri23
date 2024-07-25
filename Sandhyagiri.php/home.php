<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <?php
    echo 'site open at:'.date('H:m:s'); /*date time haru dekhauna*/
    echo '<style>body{background:red;color:green;)</style>';/*bg color*/

    ?>
    <h1>Hello, world!</h1>
    <form action="">
        Type color<input type="text" name="color">
        <input type="submit" value="change color">
    </form>
    <form action="https://google.com/search"method="">
    Search google<input type="text" name="q">
<input type="submit" value="search"></form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>