<?php

    if (isset($_GET['number-value'])) {
       
        $lenPassword = intval($_GET['number-value']);

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+-=[]{}|;:,.<>?';

        $lenCharacters = strlen($characters);

        $password = '';

        for ($i = 0; $i < $lenPassword; $i++) {

            $password .= $characters[rand(0, $lenCharacters - 1)]; 
        
        };

    } else {

        $password = '';
    
    }

?>