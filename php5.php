<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>php5</title>
    </head>
    <body>
        <?php
        // put your code here
        class Car {
    function Car() {
        $this->model = "Audi";
    }
}

// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;
        ?>
    </body>
</html>
