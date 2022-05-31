<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 3 Raymond Yan</title>
</head>

<body>
    <?php
  if (isset($_GET["errors"])) {
    echo "<span>" . $_GET["errors"] . "</span>";
    unset($_GET["errors"]);
    echo "<hr />";
  }
    ?>
    <form action="./form.php" method="post">


        <fieldset>
            <legend>
                <label for="life">Tell me about yourself</label>
            </legend>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" />
            <br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" />
            <br>
            <label for="studentNumber">Student Number</label>
            <input type="text" name="studentNumber" id="studentNumber">
            <br>
            <p>Gender</p>
            <input type="radio" id="male" name="gender" value="Male">
            <label for="html">Male</label><br>
            <input type="radio" id="female" name="gender" value="Female">
            <label for="Female">Female</label><br>
            <p>Computer Languages you're currently studying</p>
            <input type="checkbox" id="C++" name="languages[]" value="C++">
            <label for="C++"> C++</label><br>
            <input type="checkbox" id="C#" name="languages[]" value="C#">
            <label for="C#"> C#</label><br>
            <input type="checkbox" id="Javascript" name="languages[]" value="Javascript">
            <label for="Javascript"> Javascript</label><br>
            <input type="checkbox" id="Perl" name="languages[]" value="Perl">
            <label for="Perl"> Perl</label><br>
            <input type="checkbox" id="PHP" name="languages[]" value="PHP">
            <label for="PHP"> PHP</label><br>
            <input type="checkbox" id="Python" name="languages[]" value="Python">
            <label for="Python"> Python</label><br><br>
            <input type="submit" value="Submit">
        </fieldset>

    </form>
</body>

</html>