commands:



    run_server:
        ./run.sh

    add_new_model:
        php bin/console make:entity

    create migration:
        php bin/console make:migration

    do migration:
        php bin/console doctrine:migrations:migrate
    
    make_new_controller:
        php bin/console make:controller


   ===================================================

   for localrun linux:

    mysql
    ==================================================

    sudo apt-get update

    sudo apt-get install mysql-server

    ==================================================

    project depend
    ==================================================
    
    sudo apt-get install composer
    
    composer update

    confugure you ini file:

    php --ini

    and unlock extension:

    pdo, mysql

    ./run.sh
