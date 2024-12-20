<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>KIA Feedback Form</title>
<style>
    /* Basic CSS for styling the form */
    body {
        font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        background-color: #f4f4f4;
    }
    .container {
        max-width: 500px;
        margin: 50px auto;
        background: #e6e6e6; /* New background color */
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h2 {
        text-align: center;
    }
    label {
        display: block;
        margin-bottom: 5px;
    }
    input[type="text"],
    input[type="email"],
    select,
    textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: 1s ease-in;
        position: relative;
        display: block;
        margin: auto;
    }
    input[type="submit"]:hover {
        background-color: black;
        border-radius: 50px ;
        color: white;

    }
</style>
</head>
<body>

<div class="container">
    <h2>Feedback Form</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" required>
        
        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" required>
        
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="mobile">Mobile:</label>
        <input type="text" id="mobile" name="mobile" required>

        <label for="car">Preferred model</label>
        <select name="car" id="car">
           <option value="seltos">SELTOS</option>
           <option value="sonet">SONET</option>
           <option value="carens">CARENS</option>
           <option value="ev6">EV6</option>
           <option value="carnival">CARNIVAL</option>
           <option value="all">All</option>
        </select>
        
        <label for="feedback">Feedback:</label>
        <textarea id="feedback" name="feedback" required></textarea>
        <input type="submit" value="Submit">
    </form>
<br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h2>Feedback Submission Result</h2>";
        echo "<div>";
        echo "<p><label>First Name:</label> " . $_POST["firstName"] . "</p>";
        echo "<p><label>Last Name:</label> " . $_POST["lastName"] . "</p>";
        echo "<p><label>Address:</label> " . $_POST["address"] . "</p>";
        echo "<p><label>Email:</label> " . $_POST["email"] . "</p>";
        echo "<p><label>Mobile:</label> " . $_POST["mobile"] . "</p>";
        echo "<p><label>Preferred Model:</label>". $_POST["car"] . "</p>";
        echo "<p><label>Feedback:</label> " . $_POST["feedback"] . "</p>";
        echo "</div>";
    }
    ?>

</div>

</body>
</html>