<?php
spl_autoload_register(function ($className) {
    // echo "Including...<br>";

    // Define directories to search for classes
    $directories = [
        __DIR__ . '/../app/controllers/',
        __DIR__ . '/../app/models/',
        __DIR__ . '/../app/views/',
        __DIR__ . '/../app/routes/'
    ];

    $extension = '.class.php';
    $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);

    // Loop through each directory and check for the class file
    foreach ($directories as $directory) {
        $fullPath = $directory . $className . $extension;
        
        // echo "Checking path: $fullPath<br>";

        if (file_exists($fullPath)) { 
            require_once $fullPath;
            // echo "Loaded class: $className from $fullPath<br>";
            return;
        }
    }

    // Optional: Throw an error if the class isn't found
    // echo "<br>Class $className not found.<br>";
});

?>
