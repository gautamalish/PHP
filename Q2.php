<!-- palindrome or not -->
<?php
    $text="madam";
function palindrome($text){
    $reverse=strrev($text);
    if ($text==$reverse){
        echo "It's a palindrome";
    }
    else{
        echo "It's not a palindrome";
    }
}
palindrome($text);
?>