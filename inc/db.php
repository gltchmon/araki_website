<!--REG NO: MF25266-->
<?php
    $env = parse_ini_file('.env');
    define('SERVER', $MYSQL_ADDON_HOST);
    define('USERNAME', $MYSQL_ADDON_USER);
    define("PASSWORD", $MYSQL_ADDON_PASSWORD);
    define("DATABASE", $MYSQL_ADDON_DB);


    