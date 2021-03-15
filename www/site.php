<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />

    <title>PHP intro</title>

  </head>
  <body>
    
    <?php 
    //THIS INCLUDE METHOD WILL INCLUDE THIS HTML FOR EVERY PAGE SO THAT YOU CAN BE MORE
    //MODULAR AND THEN HAVE JUST ONE FILE TO MAKE CHANGES TO
    include "header.html" 
    ?>

    <?php
      echo("hello world");
      $animal = "Gorilla primate";
      echo strtoupper($animal);
      echo strlen($animal);
      $firstChar = $animal[0];
      echo($firstChar);
      echo str_replace("primate", "kingdom", $animal);
      echo 5 + 14;
      echo substr($animal, 1, 3);
      echo abs(-100);
      echo sqrt(144);
      echo max(10, 2);
      echo min(10, 2);
      echo floor(3.2);
      echo ceil(3.2);
    ?>

    <hr>
    NAME & AGE
    <hr>
    <form action="site.php" method="get"> 
      NAME: <input type="text" name="name">
      <br>
      AGE: <input type="number" name="age">
      <input type="submit">
    </form>

    Your name is: <?php echo $_GET["name"] ?>
    <br>
    Your age is: <?php echo $_GET["age"]; ?>

    <hr>
    CALCULATOR
    <hr>

    <form action="site.php" method="get"> 
      NUM1: <input type="number" name="num1">
      <br>
      NUM2: <input type="number" name="num2">
      <input type="submit">
    </form>

    Your total is: <?php echo $_GET["num1"] +  $_GET["num2"] ?> 

    <hr>
    MADLIBS
    <hr>

    <form action="site.php" method="get"> 
      COLOR: <input type="text" name="color">
      <br>
      PLURAL NOUN: <input type="text" name="plural_noun">
      <br>
      CELEBRITY: <input type="text" name="celebrity">
      <input type="submit">
    </form>

    <?php
      $color = $_GET["color"];
      $celebrity = $_GET["celebrity"];
      $plural_noun = $_GET["plural_noun"];
      echo "$celebrity are $color <br>";
      echo "$plural_noun are $color <br>";
      echo "And I love you <br>";
    ?>

    <hr>
    LOGIN W/ POST
    <hr>

    <form action="site.php" method="post"> 
      name: <input type="text" name="name">
      <br>
      password: <input type="text" name="password">
      <input type="submit">
    </form>

    <?php
      $name = $_POST["name"];
      $password = $_POST["password"];
      echo "Your name is $name <br>";
      echo "Your password is $password <br>";
    ?>

    <hr>
    ARRAYS W/ FRIENDS
    <hr>

    <?php
      $friends = array("Antonio", "Adam", "Dave", "Chris", 1, false);
    ?>

    Your frist friend is: <?php echo $friends[0];?>
    <br>
    Your have: <?php echo count($friends);?> friends!

    <hr>
    REFERENCE ARRAYS
    <hr>

    <form action="site.php" method="post"> 
      Apples: <input type="checkbox" name="fruits[]" value="apples">
      <br>
      pears: <input type="checkbox" name="fruits[]" value="pears">
      <br>
      oranges: <input type="checkbox" name="fruits[]" value="oranges">
      <br>
      <input type="submit">
    </form>

    <?php
      $fruits = $_POST["fruits"];
      echo "Your first checked fruit is $fruits[0] <br>";
    ?>

    <?php
      $grades = array('Jim'=>"A+", "Oscar"=>"B", "Pam"=>"C-");
      echo "Jims grade is ";
      echo $grades['Jim'] 
    ?>

    <hr>
    STUDENTS GRADE
    <hr>

    <form action="site.php" method="post">
      Get grade for your student's name': 
      Name: <input type="text" name="student">
      <br>
      <input type="submit">
    </form>

    <?php
      $studentName = $_POST["student"];
      echo "$studentName's grade is ";
      echo $grades[$_POST["student"]];
    ?>

    <hr>
    FUNCTIONS
    <hr>

    <?php
      function cube($num) {
        return $num * $num * $num;
      }
      $cubeVal = 4;
      echo "The cubed value of $cubeVal is ";
      echo cube($cubeVal);
    ?>
    
    <hr>
    CONDITIONALS
    <hr>

    <?php
      $isMale = false;
      $isTall = true;
      if ($isMale && $isTall) {
        echo "You are a tall male!";
      } elseif ($isMale && !$isTall) {
        echo "You are a short male";
      } elseif ($isTall) {
        echo "You are a tall female";
      }  else {
        echo "You are a short female";
      }
    ?>

    <hr>
    COMPARISONS
    <hr>

    <?php
      function getMax($num1, $num2) {
        if ($num1 > $num2) return $num1;
        return $num2;
      }

      $num1 = 48;
      $num2 = 34;
      echo "The max between $num1 and $num2 is: ";
      echo getMax($num1, $num2);
    ?>

    <hr>
    ADVANCED CALCULATOR
    <hr>

    <form action="site.php" method="post"> 
      NUM1: <input type="number" name="num1">
      <br>
      OPERATION: <input type="text" name="op">
      <br>
      NUM2: <input type="number" name="num2">
      <br>
      <input type="submit">
    </form>

    <?php 
      $num1 = $_POST["num1"];
      $num2 = $_POST["num2"];
      $op = $_POST["op"];

      if ($op === "+") {
        echo $num1 + $num2;
      } elseif ($op === "-") {
        echo $num1 - $num2;
      } elseif ($op === "/") {
        echo $num1 / $num2;
      } elseif ($op === "*") {
        echo $num1 * $num2;
      } else {
        echo "invalid operator";
      };
    ?> 

    <hr>
    SWITCH STATEMENT
    <hr>

    <form action="site.php" method="post">
      What grade did you get on your test: 
      Grade: <input type="text" name="grade">
      <br>
      <input type="submit">
    </form>

    <?php
      $grade = $_POST["grade"];
      switch($grade){
        case "A":
          echo "You did amazing!";
          break;
        case "B":
          echo "If you aint first you're last!";
          break;
        case "C":
          echo "Welcome to the middle of the road";
          break;
        case "D":
          echo "You basically suck";
          break;
        case "F":
          echo "You're a dum dum!";
          break;
        default:
          echo "You entered a invalid grade.";
      }
    ?>


    <hr>
    WHILE LOOPS
    <hr>

    <?php
      $index = 1;
      while($index <= 5) {
        echo "index is $index <br>";
        $index++;
      }
    ?>

    <hr>
    DO WHILE LOOPS
    <hr>

    <?php
      $index = 22;
      //THIS IS USED TO DO SOMETHING BEFORE IT CHECKS THE WHILE PARAMETERS
      //THEN IF THE WHILE PARAMETERS IS TRUE IT WILL RUN THE DO STATEMENT
      //AND CONTINUE UNTIL THE WHILE PARAMETERS IF FALSE
      do {
        echo "index is $index <br>";
        $index++;
      } while($index <= 23) 
    ?>

    <hr>
    FOR LOOPS
    <hr>

    <?php
      $luckyNumbers = array(5, 9, 23, 78, 44);
      for ($i = 0; $i < count($luckyNumbers); $i++) {
        echo "$i num: $luckyNumbers[$i] <br>"; 
      }
    ?>

    <hr>
    CLASSES
    <hr>

    <?php
      class Book {
        public $title;
        public $author;
        public $pages;
      }

      $book1 = new Book;
      $book1->title = "Harry Potter";
      $book1->author = "JK Rowling";
      $book1->pages = "400";

      echo "The title of book #1 is $book1->title"
    ?>

    <hr>
    CLASSES PART 2
    <hr>

    <?php
      class BookPart2 {
        public $title;
        public $author;
        public $pages;

        function __construct($aTitle, $aAuthor, $aPages) {
          $this->title = $aTitle;
          $this->author = $aAuthor;
          $this->pages = $aPages;
        }
      }

      $book2 = new BookPart2("Lord of the Rings", "Tolkien", 600);
      echo "the title of book #2 is $book2->title <br>"

    ?>

    <hr>
    OBJECT FUNCTIONS
    <hr>

    <?php
      class Student {
        public $name;
        public $major;
        public $gpa;

        function __construct($name, $major, $gpa) {
          $this->name = $name;
          $this->major = $major;
          $this->gpa = $gpa;
        }

        function hasHonors() {
          if ($this->gpa >= 3.5) return "True";
          return "False";
        }
      }

      $student1 = new Student("Pam", "Art", 4.0);
      $student2 = new Student("Jim", "Business", 2.5);
      echo "Does Pam have honors? ";
      echo $student1->hasHonors();
      echo "<br> Does Jim have honors? ";
      echo $student2->hasHonors();

    ?>

    <hr>
    GETTERS AND SETTERS
    <hr>

    <?php
      class NewStudent {
        public $name;
        public $major;
        private $gpa;

        function __construct($name, $major, $gpa) {
          $this->name = $name;
          $this->major = $major;
          $this->setGPA($gpa);
        }

        function getGPA() {
          return $this->gpa;
        }

        function setGPA($newGPA) {
          if ($newGPA >= 0.0 || $newGPA <= 4.0) $this->gpa = $newGPA;
        }
      }

      $student1 = new NewStudent("Pam", "Art", 4.0);
      echo "What is Pam's GPA? ";
      echo $student1->getGPA();
      $student1->setGPA(0.5);
      echo "<br> Pam's new GPA is ";
      echo $student1->getGPA();

    ?>

    <?php 
      //THIS INCLUDE METHOD WILL INCLUDE THIS HTML FOR EVERY PAGE SO THAT YOU CAN BE MORE
      //MODULAR AND THEN HAVE JUST ONE FILE TO MAKE CHANGES TO
      include "footer.html"
    ?>

    <?php 
      //YOU CAN ALSO INCLUDE PHP FILES AND PASS VARIABLE DEFINITIONS THROUGH TO THAT PHP FILE
      $title = "My First Post";
      $author = "Louis";
      $wordCount = 400;
      include "article-header.php"
    ?>

    <?php 
      //YOU CAN ALSO USE THIS AS A WAY TO KEEP ALL YOUR FUNCTIONS OR HELPERS IN THEIR OWN FILES
      include "useful-tools.php";
      sayHi("John");
    ?>

  </body>
</html>
