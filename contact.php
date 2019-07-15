<?php /* Template Name: Contact */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php get_header(); ?>

<?php
if(isset($_POST['contact_submit']))
{
    $name = $_POST['contact_name'];
    $subject = $_POST['contact_subject'];
    $email = $_POST['contact_email'];
    $message = $_POST['contact_message'];
    echo "User Has submitted the form and entered this name : <b> $name </b>";
    echo "<br>You can use the following form again to enter a new name.";
    mail('degal13@gmail.com',"Hey","Hey again");
}
?>
<form method="post">
   <input type="text" name="contact_name"><br>
   <!-- <input type="text" name="contact_subject"><br> -->
   <!-- <input type="text" name="contact_email"><br> -->
   <textarea name="contact_message"></textarea>
   <input type="submit" name="contact_submit" value="Submit Form"><br>
</form>

<?php get_footer(); ?>

<?php wp_footer(); ?>

</body>

</html>