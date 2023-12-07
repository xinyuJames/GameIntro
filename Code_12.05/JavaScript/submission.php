<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $game = $_POST['game'];
    $age = $_POST['age'];
    $feedback = $_POST['feedback'];
    $helpful = isset($_POST['helpful']) ? 'Yes' : 'No';
    
    echo "Name: $name<br>Game: $game<br>Age: $age<br>Feedback: $feedback<br>Helpful: $helpful";
}
?>
