<?php

use App\Request;
use Routes\Router;

// alahatra araka ny tokony ho izy ny fanantsoana ny creation des table
CreateUserTable::createUser(connect());

Router::load('web.php')->show(Request::uri(), Request::method());

