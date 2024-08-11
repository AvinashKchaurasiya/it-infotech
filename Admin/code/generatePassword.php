<?php
    function generatePassword($firstName, $length = 8) {
        $symbols = '@#$%^&*';
        $numbers = '0123456789';
        $characters = $symbols . $numbers;
    
        // Shuffle the characters
        $charactersLength = strlen($characters);
        $randomString = '';
    
        // Generate a random string of specified length
        for ($i = 0; $i < $length - strlen($firstName); $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
    
        // Combine the first name and the random string
        $password = $firstName . $randomString;
    
        // Shuffle the final password to make it less predictable
        $password = str_shuffle($password);
    
        return $password;
    }
?>