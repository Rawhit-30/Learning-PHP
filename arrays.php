<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $fruits = array("apple", "Banana", "orange");
    echo "<pre>";
    print_r($fruits);

    echo "<br>" . $fruits[0] . "<br>";

    $students = array(
        "Name" => "Rohit",
        "age" => 22,
        "course" => "MCA"
    );

    print_r($students);

    echo "<br>" . $students["Name"] . "<br>";


    echo "Array of arrays";

    $student = array(
        "MCA" => array(
            array(
                "Name" => "ROHIT",
                "AGE" => 23
            ),
            array(
                "Name" => "Rohan",
                "AGE" => 22
            )
        ),
        "BCA" => array(
            array(
                "Name" => "Choti",
                "AGE" => 18
            ),
            array(
                "Name" => "Badi",
                "AGE" => 18
            )
        )
    );

    print_r($student);
    ?>
</body>

</html>