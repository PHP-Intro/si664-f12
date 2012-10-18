<?php
$name = $_POST["name"];
$gender = $_POST["sex"];
$danger = $_POST["danger"];
$transport = $_POST["transport"];
if (!isset($_POST['submit'])) {
?>
<html>
<head>
</head>
<body>
    <form method="post" action="<?php echo $PHP_SELF;?>">
        <p>Name: <input type="text" name="name"></p>
        <p>Sex: (please check all that apply)<br>
        <input type="checkbox" name="sex[]" value="male">Male<br>
        <input type="checkbox" name="sex[]" value="female">Female<br>
        <input type="checkbox" name="sex[]" value="smale">Smale<br>
        <input type="checkbox" name="sex[]" value="unmale">Unmale<br>
        <input type="checkbox" name="sex[]" value="email">Email</p>
        <p>Please choose one:<br>
        <input type="radio" name="danger" value="crime">I have been convicted a crime<br>
        <input type="radio" name="danger" value="violent">I have been convicted of a violent crime<br>
        <input type="radio" name="danger" value="money">I have embezzled money in excess of $200,000<br>
        <input type="radio" name="danger" value="betrayal">I consider my capacity for betrayal one of my major characteristics<br>
        <input type="radio" name="danger" value="murder">I have murdered a member of my immediate family<br>
        <input type="radio" name="danger" value="violent">I sometimes imagine that I am the Angel of Death</p>
        <p>My primary mode of transport is:<br>
        <select name="transport">
            <option value="car">Car</option>
            <option value="bus">Bus</option>
            <option value="train">Train</option>
            <option value="bicycle">Bicycle</option>
            <option value="walking">Walking</option>
        </select></p>
        <p>
        <input type="submit" value="Submit" name="submit">
        </p>
    </form>
    </body>
</html>
<?
} else {
$genderlist = ' ';
echo "Thanks for your participation, $name! Your results have been sent to the government
    for processing and review. Have a nice day!";
foreach ($gender as $value) {
    $genderlist = $genderlist.$value.', ';
}
$results = "Name: $name\n 
            Gender: $genderlist\n 
            Criminal Background: $danger\n 
            Transport: $transport";
mail("cathy.a.fisher@gmail.com", 'Form results from test form', $results);
}
?>
