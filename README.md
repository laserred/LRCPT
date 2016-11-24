## Setup
Use composer to install

    composer require laserred/lrcpt

Create a class that extends LRCPT (see example-cpt.php)

Require your class

    require_once(get_template_directory() . 'example-cpt.php');

Set a name, labels and args for the CPT in this class


Instantiate the new class

    new ExampleCPT();

Done.
