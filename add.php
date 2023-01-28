<?php

// if(isset($_GET['submit'])){
//     echo $_GET['email'];
//     echo $_GET['pizza-name'];
//     echo$_GET['ingredients'];
// }

if(isset($_POST['submit'])){
    echo htmlspecialchars($_POST['email']);
    echo htmlspecialchars($_POST['pizza-name']);
    echo  htmlspecialchars($_POST['ingredients']);
}
?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php');?>

<section class="container grey-text">
<h4 class="center">Add A Pizza</h4>
    <form action="" class="white" action="add.php" method="POST">
        <input type="text" name="email">
        <label>Your Email:</label>
        <input type="text" name="pizza-name">
        <label>Pizza Name:</label>
        <input type="text" name="ingredients">
        <label>Ingredients (comma separated):</label>
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand">
        </div>
    </form>
</section>
<?php include('templates/footer.php');?>
</html>