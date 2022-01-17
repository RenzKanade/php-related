<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $countries = array(
        "Indonesia" => array(
            "Capital" => "Jakarta",
            "CallerCode" => "+62",
            "Currency" => "IDR"
        ),
        "India" => array(
            "Capital" => "New Delhi",
            "CallerCode" => "+91",
            "Currency" => "INR"
        ),
        "Japan" => array(
            "Capital" => "Tokyo",
            "CallerCode" => "+81",
            "Currency" => "JPY"
        ));

        foreach($countries as $country=>$countrydata){
            echo("<b><i>$countrydata[Capital]</i></b> is the capital of <b>$country</b>. <u>$country's calling code is $countrydata[CallerCode] and has '$countrydata[Currency]' as currency code.</u><br>");
        }
    ?>
</body>
</html>