<?php

/****
 * 
 * This file is used to create a round of classes without having to type much
 * //usage sample
    php create_route.php profile
 */
// Check if a filename was provided
if ($argc < 2) {
    echo "Provide a filename \nUsage: php create_route.php <filename>\n";
    exit(1);
}

// Get the name from the first argument and remove any extension the user might have added
$baseName = pathinfo($argv[1], PATHINFO_FILENAME);
$controllerName = ucfirst($baseName);
$modelName = ucfirst("{$baseName}_Model");
$viewName = "{$baseName}/index";

// Define the files you want to create
$filesToCreate = [

    // controller
    "controllers/{$baseName}.php" => '<?php
    class ' . $controllerName . ' extends Controller
        {

            public function __construct()
            {
                parent::__construct();
            }

            public function index()
            {

                $this->view->title = "' . $controllerName . '";
                $this->view->render("' . $viewName . '");
            }
        }
    ',


    // model
    "models/{$baseName}_model.php" => '<?php
        class ' . $modelName . ' extends Model
            {

                public function __construct()
                {
                    parent::__construct();
                }
    
            }
        ',

];


foreach ($filesToCreate as $fileName => $content) {
    // Check if file already exists to prevent overwriting
    if (!file_exists($fileName)) {
        if (file_put_contents($fileName, $content) !== false) {
            echo "Successfully created: $fileName\n";
        } else {
            echo "Error: Could not create $fileName\n";
        }
    } else {
        echo "Skip: $fileName already exists.\n";
    }
}

//make the views directory
mkdir("views/{$baseName}");
//create index file
file_put_contents("views/{$baseName}/index.php", "<h1>Route created successfully. Edit me!!!</h1>");




/***
 * 
 * alternatively if you use it often and want to execute without typing php
 * 
 * Add #!/usr/bin/env php to the very first line of the file, then run:
 * chmod +x create_route.php
    ./make_files.php my_new_project
 */
