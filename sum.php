<?php

if (array_key_exists("a", $_GET) && array_key_exists("b", $_GET))
{
    $sum = $_GET["a"] + $_GET["b"];
}
else
{
    $sum = false;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Sum Test using common Form Subimit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row my-4">
            <p class="h5">Simple Sum Test using common Form Subimit</p>
        </div>

        <form action="" method="get">
            <div class="row mb-4">
                <div class="form-row">
                    <div class="form-group col-5">
                        <input type="number" class="form-control" name="a" placeholder="num 1" />
                    </div>
                    <div class="form-group col-5">
                        <input type="number" class="form-control" name="b" placeholder="num2" />
                    </div>
                    <div class="form-group col-2">
                        <input type="submit" class="btn btn-sm btn-outline-primary"></input>
                    </div>
                </div>
            </div>
        </form>
<?php
if ($sum !== false)
{
    echo "<p><b>{$_GET['a']} + {$_GET['b']} = {$sum}</b></p>";
}
?>
    </div>
</body>
</html>