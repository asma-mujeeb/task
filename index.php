<?php
//Task 1: Hello Php
echo "Hello, World!";


//task.2: varaibles 
$name = "Asma";
$age = "20";
$city = "peshawar";

echo"My name is $name.<br> i am $age years old.<br> i live in $city.<br>";

//Task 3: Data Types
$age = 20; //integer
$price = 99.5; //float
$name = "Asma"; //string
$isStudnt = true; //boolea

var_dump($age);
echo "<br>";

var_dump($price);
echo "<br>";

var_dump($name);
echo "<br>";

var_dump($isStudnt);
echo "<br>";

//Task 4: String Operations

$text = "php is awsome"; //string

//find the lenghth of string
$lenght = strlen($text);
echo "The lenght of the string is:" . $lenght . "<br>";
 
//convert to upprcase
$uppercase = strtoupper($text);
echo  "Uppercase: " . $uppercase . "<br>";

//REPLASE A WORD
$replaced = str_replace("awesome","Powerful",$text);
echo "replaced String: " . $replaced . "<br>";

//Task 5 :boolean varaibles
$isLoggedIn = true;

//if else condition
if($isLoggedIn){
    echo "Welcome User!";
}
else{
    echo "Please log in.";
}

//Task 6: Marks System
$marks = 95;

//if-else ladders
if($marks >= 90 && $marks <=100) {
    echo "Grade: A+" . "<br>";
}
elseif($marks >= 80 && $marks < 90){
    echo "Grade: A" . "<br>";
}
elseif($marks >= 70 && $marks < 80){
    echo "Grade: B" . "<br>";
}
elseif($marks >= 60 && $marks < 70){
    echo "Grade: C";
}
elseif($marks >= 0 && $marks < 60){
    echo "Grade: F";
}
else{
    echo "Invalid marks!" . "<br>";
}

//Task 7: Switch Statement
$days = 4;
switch($days){
    case 1:
        echo "Monday" . "<br>";
        break;
        case 2:
            echo "tuesday" . "<br>";
            break;
            case 3:
                echo "wednesday" . "<br>";
                break;
                case 4:
                    echo "thursday" . "<br>";
                    break;
                    case 5:
                        echo "friday" . "<br>";
                        break;
                        case 6:
                            echo "saturday" . "<br>";
                            break;
                            case 7:
                                echo "sunday" . "<br>";
                                break;
                                default:
                                echo "Invalid day!";

    
}

//Task 8: Match Expression
$level = 2;
$result = match($level){
    1 => "Beginner",
    2 => "Intermediate",
    3 => "Advanced",
    default => "Unkown level",
};
echo "$result<br>";

//Task 9: Loops

// for loop
for($i = 1; $i <= 10; $i++)
    {
        echo $i . "<br>";
    }
//while loop 
$num = 5;
$i = 1;
while($i <= 10){
    echo $num . " x " . $i . " = " . ($num * $i) . "<br>";
    $i++;

}

//Task 10: Arrays

//indexed array
$names = ["Asma", "Sara", "Ayesha"];
foreach($names as $name) {
    echo $name . "<br>";
}

//associative array
$student = [
    "name" => "Asma",
  "grade" => "A+",
 "city" => "Peshawar"

];
foreach($studet as $key => $value){
   echo $key . ":" . $value . "<br>";
}

//Task 11: Multidimensional Arrays
$Products = [
    ["item" => "Laptop", "price" => 80000],
    ["item" => "Smartphone", "price" => 50000],
    ["item" => "Tablet", "price" => 30000],
];
foreach($Products as $product){
    if($product["price"] > 40000){
        echo $product["item"] . "-" . $product["price"] . "<br>";
    }
}
//Task 12: Classes & Objects

class Student {
    public $name;
    public $age;
    //tast 13 constructor
    public function __construct($name, $age) {
        $this -> name = $name;
        $this -> age = $age;
}
// method to display data
function showData(){
    echo "name:" . $this -> name . "<br>";
echo "age:" . $this-> age ;
}
}
$student1 =  new Student("Asma",20);
$student1 -> showdata();


//Task 14: Inheritance
//parent class
class Person{
    public $name;
    public $age;
    public function  showPerson():void{
        echo "name:" . $this -> name . "<br>";
        echo "age:" . $this -> age . "<br>";
    }
}
//child class
class Student2 extends Person {
    public $rollNo;
     
    public function showStudent2(){
        $this -> showPerson();
        echo "Roll No:" . $this -> rollNo . "<br>";
    }
    }
    $student2 = new Student2();
    $student2->name = "Alina";
    $student2->age = 25;
    $student2->rollNo = 38;
    $student2->showStudent2();


    //Task 15: Method Overriding
    //parent class
class Person2 {
    public function greet(){
        echo "Hello,I am a person . <br>";
    }
}
//child class
class Student3 extends Person2 {
    //overriding method
    public function greet(){
    echo "Hello  I am a student . <br>";
}
}
$student3 = new Student3();
$student3 -> greet();

    ?>

