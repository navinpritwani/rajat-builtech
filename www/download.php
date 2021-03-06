
<?php
/* Set e-mail recipient */
$myemail  = "buildtechrajat@gmail.com";

/* Check all form inputs using check_input function */
$yourname = check_input($_POST['name']);
$subject  = check_input("New Brochure Download");
$email    = check_input($_POST['email']);
$phone  = check_input($_POST['phone']); 

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
    show_error("E-mail address not valid");
}

/* If URL is not valid set $website to empty */
// if (!preg_match("/^(https?:\/\/+[\w\-]+\.[\w\-]+)/i", $website))
// {
//     $website = '';
// }

/* Let's prepare the message for the e-mail */
$message = "Hello!

Brochure Download by: 
 
Name: $yourname
E-mail: $email
phone no : $phone


Message:
$msg

End of message
";

/* Send the message using mail() function */
mail($myemail, $subject, $message);

/* Redirect visitor to the thank you page */
header("Content-Disposition:attachment;filename='CentrumBroucher.pdf'");
// header('Location: CentrumBroucher.pdf');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}

function show_error($myError)
{
?>
    <html>
    <body>

    <b>Please correct the following error:</b><br />
    <?php echo $myError; ?>

    </body>
    </html>
<?php
exit();
}
?>