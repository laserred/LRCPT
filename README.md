## Setup
Require the base class in your functions.php

    require_once(get_template_directory() . '/includes/lr-cpt.php');

Create a class that extends LRCPT (see example-cpt.php)

Require your class

    require_once(get_template_directory() . '/includes/example-cpt.php');

Set a name, labels and args for the CPT in this class


Instantiate the new class

    new ExampleCPT();

Done.
