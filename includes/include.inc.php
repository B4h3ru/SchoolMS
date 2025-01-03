<?php
spl_autoload_register(function ($className) { //i am using anonymous function
   
    // Define directories to search for classes
    $directories = [
        __DIR__ . '/../app/controllers/',
        __DIR__ . '/../app/models/',
        __DIR__ . '/../app/views/',
        __DIR__ . '/../app/routes/'
    ];

    $extension = '.php';
    $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);

    // Loop through each directory and check for the class file
    foreach ($directories as $directory) {
        $fullPath = $directory . $className . $extension;
        

        if (file_exists($fullPath)) { 
            require_once $fullPath;
            // echo "Loaded class: $className from $fullPath<br>";
            return;
        }
    }
    // echo "<br>Class $className not found.<br>";
});

?>
