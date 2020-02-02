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