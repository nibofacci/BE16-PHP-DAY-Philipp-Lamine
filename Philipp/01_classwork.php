<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>

<body>

  <h1>Exercise 1 Form</h1>
  <form action="01_classwork.php" method="GET">
    Name: <input type="text" name="name" />
    Surname: <input type="text" name="surname" />
    <input type="submit" name="submit" />
  </form>

  <h1>Exercise 6 Form</h1>
  <form action="01_classwork.php" method="POST">
    Name: <input type="text" name="name" />
    Surname: <input type="text" name="surname" />
    Age: <input type="text" name="age" />
    <input type="submit" name="submit2" />
  </form>

  <h1>Exercise 6 Form</h1>
  <form action="01_classwork.php" method="GET">
    Hobby: <input type="text" name="hobby" />
    <input type="submit" name="submit3" />
  </form>

  <?php

  function printExercise($num, $func)
  {
    echo "<h3> Exercise $num</h3>";
    echo $func;
    echo "<hr>";
  }
  // ex1
  function getForm()
  {
    if (isset($_GET['submit'])) {
      if ($_GET["name"] && $_GET["surname"]) {
        return "Welcome " . $_GET['name'] . " " . $_GET['surname'] . "!";
      } else {
        return "please insert your " . ($_GET['surname'] ? "name" : ($_GET['name'] ? "surname" : "name and surname"));
      }
    }
  }
  // ex2
  function divide($dividend, $divisor)
  {
    if (isset($dividend, $divisor) && $divisor != 0) {
      return $dividend / $divisor;
    } else {
      return "Wrong inputs!";
    }
  }
  //ex3
  function area($width, $height, $depth = '1')
  {
    return $width * $height * $depth;
  }
  //ex4
  function grades($math,$physics,$english) {
    return ($math+$physics+$english)/3;
  }
  //ex5
  function hoursAndMinutes($minutes)
  {
    return floor($minutes / 60) . " hour(s) and " . $minutes % 60 . " minute(s).";
  }
  //ex6
  function postForm()
  {
    $str = "";
    if (isset($_POST['submit2'])) {
      if ($_POST["name"] && $_POST["surname"]) {
        $str .= "<span style='color: "
        . (strlen($_POST["name"]. $_POST["surname"]) < 5 ? "red" : "green")
        ."'>Welcome " . $_POST['name'] . " " . $_POST['surname'] . "!<span>";
      } else {
        $str .= "please insert your " . ($_POST['surname'] ? "name" : ($_POST['name'] ? "surname" : "name and surname"));
      }
    }
    if(isset($_GET['submit3'])) {
      if($_GET['hobby']) {
        $str .= "Your hobby is {$_GET['hobby']}";
      }
      else {
        $str .= " No hobbies";
      }
    }
    return $str;
  }

  printExercise(1, getForm());
  printExercise(2, divide(0, 2));
  printExercise(2, divide(8, 2));
  printExercise(2, divide(2, 8));
  printExercise(2, divide(2, 8));
  printExercise(3, grades(1,2,3));
  printExercise(4, area(2, 8));
  printExercise(4, area(2, 8, 3));
  printExercise(5, hoursAndMinutes(200));
  printExercise(6, postForm());
  echo '<pre>' , var_dump($_GET) , '</pre>';
  echo '<pre>' , var_dump($_POST) , '</pre>';
  ?>


</body>

</html>