<html>

<body>
    <!-- form  submits to same page by default, no need to set action  -->
    <form method="post">
        Name <input type="text" name="name"><br>
        <input type="submit" name="submit" value="Submit Form">
        <br>
    </form>

    <?php
        // tests if the submit button is clicked or not
        if(isset($_POST['submit'])){ 
            $name = $_POST['name'];
            echo "From Server: The name that was submitted was: <b> $name </b>";
            echo "<br>You can use the above form again to enter a new name."; 
        }
    ?>



</body>

</html>