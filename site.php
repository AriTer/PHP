<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP basics</title>
</head>
<body>
    <?php include "header.html" ?>

    <?php
        echo "<h1>Hello PHP World!</h1>";
        echo "<hr>";
        echo "<p>Hello World!</p>";

        // comment
        /* multi lines */
    ?>

    <?php
        $characterName="Ari";
        $characterAge= 50;

        echo "There once was a man named $characterName.</br>";
        echo "He is $characterAge years old.</br>";
        echo "He realy likes the name $characterName.</br>";
        echo "But not being $characterAge years old!</br>"
    ?>

    <?php
        $string="To be or not to be";
        $interger= 50;
        $float= 3.14;
        $boolean = true;
        $booleanF = false;

        echo "<hr>";
        echo "text: $string</br>";
        echo "interger: $interger</br>";
        echo "float: $float</br>";
        echo "boolean true: $boolean</br>";
        echo "boolean false: $booleanF</br>";
    ?>

    <?php
        $strings="To Be or not to Be";
       
        echo "<hr>";
        echo "<h2>String Functions</h2>";
        echo "$strings</br>";
        echo strtolower($strings);
        echo "</br>";
        echo strtoupper($strings);
        echo "</br>";
        echo strlen($strings); 
        echo "</br>";
        echo $strings[0];
        echo "</br>";
        echo str_replace("Be", "chill", $strings);
        echo "</br>";
        echo substr($strings, 9, 3);
        echo "</br>";
    ?>

    <?php
        $number= 42;
        $numberNeg= -42;
        $numberFloat= 42.24;
       
        echo "<hr>";
        echo "<h2>Working with Numbers</h2>";
        echo " $number</br>";
        echo "Numbers, neg nums ", $numberNeg ," and floats ", $numberFloat;
        echo "</br> Plus 9 + 5 = ";
        echo 9 + 5;
        echo "</br> Min 9 - 5 = ";
        echo 9 - 5;
        echo "</br> Div 9 / 5 = ";
        echo 9 / 5;
        echo "</br> Mult 9 * 5 = ";
        echo 9 * 5;
        echo "</br> Mod 9 % 5 = ";
        echo 9 % 5;
        echo "</br>";
        echo $num = 10;
        echo " $num++ :", $num++;
        echo " $num-- :",  $num--;
        echo " $num +=5 :", $num +=5;
        echo "</br>";
        echo pow (2, 4), " - pow (2, 4)";
        echo "</br>";
        echo sqrt (144), " - sqrt (144)";
        echo "</br>";
        echo max(2, 4), " - max (2, 4) ";
        echo min(2, 4), " - min (2, 4) ";
        echo round(2.145), " - round (2,145) ";
        echo ceil(2.147), " - ceil (2,1554) ";
        echo floor(2.146), " - floor (2,155) ";
        echo "</br>";
    ?>

    <?php 
        echo "<hr>";
        echo "<h2>User input - Forms</h2>";
    ?>

    <form action="site.php" method="get">
        Name: <input type="text" name="userName">
        <br>
        Age: <input type="number" name="userAge">
        <br>
        <input type="submit">
    </form>

   Your name is <?php echo $_GET["userName"]; ?>.
   <br>
   Your age is <?php echo $_GET["userAge"]; ?>.

    <?php 
        echo "<hr>";
        echo "<h2>Simple calculator</h2>";
    ?>

    <form action="site.php" method="get">
        Number 1: <input type="number" step="0.01" name="num1">
        <br>
        <select name="sign">
            <option value = +> + </option>
            <option value = -> - </option>
            <option value = *> * </option>
            <option value = /> / </option>
        </select>
        <br>
        Number 2: <input type="number" step="0.01" name="num2">
        <br>
        <input type="submit">
    </form>

     <?php echo $_GET["num1"], $_GET["sign"],  $_GET["num2"], " = "; 
      switch($_GET["sign"]){
        case "+" : 
            echo $_GET["num1"] + $_GET["num2"]; 
            break;
        case "-": 
            echo $_GET["num1"] - $_GET["num2"]; 
            break;
        case "*": 
            echo $_GET["num1"] * $_GET["num2"]; 
            break;
        case "/": 
            echo $_GET["num1"] / $_GET["num2"]; 
            break;
        default: 
            echo("Enter number");  
            break;
        };
     ?>

    <hr>
    <h2>User input - Madlib</h2>
    <form action="site.php" method="get">
        Color: <input type="text" name="color">
        <br>
        Plural noun: <input type="text" name="noun">
        <br>
        Celebrity: <input type="text" name="celeb">
        <br>
        <input type="submit">
    </form>

    <?php 
        $color = $_GET["color"];
        $noun = $_GET["noun"];
        $celeb = $_GET["celeb"];
        echo "Roses are $color <br>";
        echo "$noun are blue <br>";
        echo "I luv $celeb! <br>";
    ?>

    <hr>
    <h2>URL parameters - Post Password</h2>
    <form action="site.php" method="post">
        Password: <input type="password" name="password">
        <br>
        <input type="submit">
    </form>
    Your password is <?php echo $_POST["password"]; ?>.
    <br>

    <hr>
    <h2>Working with Arrays</h2>

    <?php 
        $friends = array(1,2,3) ;
        function addFriend($friends, $name){
            array_push($friends, $name);
            //print_r ($friends);
            return $friends;
        };
        ?>

    <form action="site.php" method="post">
        Friend's name: <input type="text" name="friend" >
        <br>
        <input type="submit">
    </form>

    <?php
        $friends = addFriend($friends, $_POST["friend"]);
       
        //array_push($friends, $_POST["friend"],8,9);
        //echo $i = count($friends);
        //echo $j = $i + 1;
        //$friends[$i++] = $_POST["friend"];
        //$i++;
        echo "<ol>";
        foreach ($friends as $friend1){
            echo "<li>$friend1</li>";
            }
            unset($friend1);
        echo "</ol>";
        var_dump($friends);
    ?>
    <br>

    <hr>
    <h2>Working with Checkboxes</h2>
    <form action="site.php" method="post">
        Apples: <input type="checkbox" name="fruit[]" value="apple"><br>
        Oranges: <input type="checkbox" name="fruit[]" value="orange"><br>
        Pears: <input type="checkbox" name="fruit[]" value="pear">
        <br>
        <input type="submit">
    </form>
    
    <?php 
        $fruit = $_POST["fruit"];
        print_r($fruit);
    ?>

    <hr>
    <h2>Ass Array Key=>Value pairs</h2>
    <form action="site.php" method="post">
        Student <input type="text" name="student" ><br>
        <br>
        <input type="submit">
    </form>
    
    <?php 
        $grades = array("Jim"=>"A+", "Pam" => "B", "Sam" => "A");
        echo $_POST["student"]. " : ". $grades[$_POST["student"]];
    ?>
        <br>
    <?php
        print_r($grades);
    ?>

    <hr>
    <h2>Functions</h2>
    <form action="site.php" method="post">
        Name <input type="text" name="name" ><br>
        <br>
        <input type="submit">
    </form>
    
    <?php 
        function sayHi($name){
            echo "Hello $name! A very simple function. <br>";
        };

        sayHi("User");
        sayHi($_POST["name"]);
    ?>
     
     <hr>
    <h2>IF </h2>
    <form action="site.php" method="post">
       Male: <input type="checkbox" name="gender" value="male"><br>
       Female: <input type="checkbox" name="gender" value="female"><br>
       Other : <input type="checkbox" name="gender" value="other"><br>
        <br>
        <input type="submit">
        <br>
    </form>
    
    <?php 
        $gender = $_POST["gender"];

        if ($gender == "male") {
            echo "Hello Boet!";
        } elseif($gender == "female"){
            echo "Hello Sus!";
        } else {
            echo "Hello You!";
        }
    ?>

    <hr>
    <h2>While loop & do while & For</h2>
    <form action="site.php" method="post">
       Number of loops: <input type="number" name="num" ><br>
        <br>
        <input type="submit">
        <br>
    </form>
    
    <?php 
        $index = 1;

        while($index <= $_POST["num"]){
            echo "while: "."$index <br>";
            $index++;
        }

        do {
            echo "do: "."$index <br>";
            $index++;
        }  while($index <= $_POST["num"]);

         for ($i=0 ; $i <= $_POST["num"]  ; $i++){
            echo "For : " ."$i <br>";
        }
    ?>

     <hr>
    <h2>For loop & Arrays</h2>
    
    <?php 
      $nums = array("one", "two", "three");
       for ($i=0 ; $i < count($nums)  ; $i++){
            echo "For array : " ."$nums[$i] <br>";
        }
    ?>

    <hr>
    <h2>Article header as include.</h2>
    <p>Used as included .php file</p>
    <form action="site.php" method="post">
       Title : <input type="text" name="titleArt"><br>
       Author : <input type="text" name="authorArt"><br>
       Word count : <input type="number" name="wordCount"><br>
        <br>
        <input type="submit">
        <br>
    </form>

    <?php 
        $title = $_POST["titleArt"];
        $author = $_POST["authorArt"];
        $wordCount = $_POST["wordCount"];
        include "article-header.php" 
    ?>


    <hr>
    <h2>Class and Objects - data types</h2>
    <p>Making a Book class</p>
    <form action="site.php" method="post">
       Title : <input type="text" name="title"><br>
       Author : <input type="text" name="author"><br>
       Pages : <input type="number" name="pages"><br>
        <br>
        <input type="submit">
        <br>
    </form>
    
    <?php 
        class Book {
            var $title;
            var $author;
            var $pages;

            function __construct($aTitle, $aAuthor, $aPages){
                $this->title = $aTitle;
                $this->author = $aAuthor;
                $this->pages = $aPages;
                echo "New book created. <br>";
                print_r($this);
                echo "<br>";
            }
        }

        $book = new Book($_POST["title"],$_POST["author"],$_POST["pages"]);
        /*function DeepCopy($ObjectToCopy) {
            return unserialize(serialize($ObjectToCopy));
            }*/
        /*if (!isset($allBooks)) {
                $allBooks = array();
            }*/
        
        $allBooks[] = $book;
        print_r($allBooks);
        //$allBooks[] = DeepCopy($book);
        //array_push($allBooks, DeepCopy($book));
        //array_push($allBooks, $book);

        /*$book1->title = $_POST["title"];
        $book1->author = $_POST["author"];
        $book1->pages = $_POST["pages"];
        print_r($book);*/
    ?>
   
    <hr>
    <h2>Inheritance with Class and Objects</h2>
    <?php 
        class Chef {
            function makeChicken(){
                echo "Italian or normal Chef makes chicken. <br>";
            }

            function makeSalad(){
                echo "Chef makes salad. <br>";
            }
            
            function makeSpecialDish(){
                echo "Normal Chef only makes BBQ ribs. <br>";
            }
        }

        class ItalianChef extends Chef{
            function makePasta(){
                echo "Italian Chef makes pasta. <br>";
            }
            
            function makeSpecialDish(){
                echo "Italian Chef only makes pizza. <br>";
            }
            }

        $chef = new Chef();
        $chef->makeChicken();
        $chef->makeSpecialDish();

        $chef = new ItalianChef();
        $chef->makeChicken();
        $chef->makePasta();
        $chef->makeSpecialDish();
    ?>


    <?php include "footer.html" ?>
</body>
</html>