#!/bin/sh
echo "hI mikemig ==> migrate";
echo
if ["$1" == "mig"]
then
  php bin/console make:migration;
  php bin/console doctrine:migrations:migrate;
  echo $1;
else
  php bin/console server:run;
fi;
