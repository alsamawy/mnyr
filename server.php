<?php
header ('Content-Type : text ; charset  ="utf-8');
if(isset ($_POST['email'])){
//EDIT THE 2 LINES AS REQUIRED 
$email_to="alsamawyalsamawy8@gmail.com";
$email_subject="email form:";
$first_name=$_POST['first_name']; //required 
$last_name=$_POST['last_name']; //required 
$email_form=$_POST['email']; //required 
$telephone=$_POST['telephone']; //not required 
$comments=$_POST['comments']; //required 
$email_message="form-details below.\n\n";

function clean_string($string){
$bad = array("Content-Type " , " bcc: " , " to:","cc: " , "href");
     return str_replace ( $bad, " " ,$string );
     }
$email_message .="first_name:".clean_string($first_name)
."\n";
$email_message .="last_name:".clean_string($last_name)
."\n";
$email_message .="email:".clean_string($email_form)
."\n";
$email_message .="telephone:".clean_string($telephone)
."\n";
$email_message .="comments:".clean_string($comments)
."\n";

//create email headers
$headers='form'.$email_form.\r\n.'reply-to:'.$email_form."\r\n".'x-mailer:'.phpversion();
@mail($email_subject, $email_message. $headers);
?>
<?php
echo "<script type='text/javascript'>alert('شكراً لتواصلك ، سيتم قراءة الرسالة والرد باقرب وقت ممكن')</script>";
echo "<script>window.location.assing('index.html');
</script>";
?>
<?php
}
?>
