<?php
if ($stmts = $mysqli->prepare('SELECT end_date FROM products WHERE pid = ?')) {
    $stmts->bind_param("i",$pid); 
    $stmts->execute(); // Execute the prepared query.
    $stmts->bind_result($endDate); // get variables from result.
    $stmts->fetch();
    $stmts->close();

    $date = strtotime($endDate);
    $remaning = $date - time();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<form ...>  <!-- Form to submit bidding amount starts here -->
$date = DateTime('now');
$date->modify('+ 2 day');//testing negative
if ($date > DateTime('now')) {
    //show form
} else {
    //auction has ended
}
<input type="text" placeholder = "Bid Price" name="bid_price" id="bid_price" title="Enter your Bid for auction" required />
<input type="submit" class="sbmt"  name="bidsubmit" id="bidsubmit" value="Submit"/>
</form>     <!-- Form ends here -->
</head>
</html>


<input type="checkbox"  
onchange="document.getElementById('grabaperaus').disabled = !this.checked;" name='visto' 
id='visto'/>

<?php
    if( YOUR_CONDITION_FUNCTION_OR_LOGIC() ){
        comment_form();
    }
?>

<form method="POST" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" <? if (isset($_POST['your_form_data'])) echo "disabled='disabled'" ?> >