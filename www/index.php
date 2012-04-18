<?php
//Load the config file using ../ (a relativie path).  (Will not allow testinclude.php to be included and will not throw errors).
require_once "../config.php";

//Load the config file using an absolute path. (will fix the problem).
//require_once __DIR__ . "/../config.php";

echo "If the testinclude.php file is correctly included, you will see a message below stating that it was loaded. <br/>";

echo "//<br />";
//if we loaded the config via absolute path, this file will be successfully included.
require_once $config->path . "/lib/testinclude.php";
echo "//<br />";
echo "php commands can still be executed even if the file was not loaded.";