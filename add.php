<?php

// if(isset($_GET['submit'])){

//     echo $_GET['email'];
//     echo $_GET['title'];
//     echo $_GET['ingredients'];
    
// } // $_GET - dito mas-store yung email, title, saka ingredients. pero di to secure kasi lalabas yung data sa url 


if(isset($_POST['submit'])){

    echo htmlspecialchars($_POST['email']);
    echo htmlspecialchars($_POST['title']);
    echo htmlspecialchars($_POST['ingredients']);

} //this is secure cos wala na sa url yung input data

?> 


<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<section class="container grey-text">

    <h4 class="center">Add a Pizza</h4>
    <form class="white" action="add.php" method="POST"> <!-- add.php to handle the request -->
    
        <label>Your Email</label>
		<input type="text" name="email">
        
		<label>Pizza Title</label>
		<input type="text" name="title">

		<label>Ingredients (comma separated)</label>
		<input type="text" name="ingredients">
        
        <div class="center">
			<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
		</div>

    </form>

</section>


<?php include('templates/footer.php'); ?>

</html>