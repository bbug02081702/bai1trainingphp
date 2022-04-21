<?php
function Palindrome($string){ 
    if (strrev($string) == $string){ 
        return 1; 
    }
    else{
        return 0;
    }
} 
 

$input = "aba";
if(Palindrome($input)){ 
    echo "True"; 
}
else { 
echo "False"; 
}
?> 