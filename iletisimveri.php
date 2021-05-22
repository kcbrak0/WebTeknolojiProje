<?php

$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$mail=$_POST['e_mail'];
$subject=$_POST['subject'];




if ( filter_var($mail, FILTER_VALIDATE_EMAIL) ){ 
    if($fname!=NULL){
        if($lname!=NULL){
            if($mail!=NULL){
                if($subject!=NULL){
                    echo "İsimi: ".$fname."<br/>";
                    echo "Soyisimi: ".$lname."<br/>";
                    echo "Mail Adresi: ".$mail."<br/>";
                    echo "Konusu: ".$subject;
                }else{
                    header("Location: iletisim.html");
                }
            }else{
                header("Location: iletisim.html");
            }
        }else{
            header("Location: iletisim.html");
        }
    }else{
        header("Location: iletisim.html");
    }

}else 
{
    header("Location: iletisim.html");
}
?>



