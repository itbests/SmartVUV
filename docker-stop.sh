#! /bin/bash
echo "---------------------------------------"
echo "** Finalizando contenedores SmartVUV **"
echo "---------------------------------------"

# Imprimimos por pantalla el Kernel que usamos
uname -r

# Imprimimos por pantalla la fecha actual
date

# Nos ubicamos en el directorio del Router
echo -- Finaliza traefik
cd traefik
pwd
# Iniciamos el servicio del router
docker-compose down

# Imprimimos por pantalla la fecha actual
date

# Nos ubicamos en el directorio del servicio Web
echo -- Finaliza smartvuv-web
cd ..
cd smartvuv-web
pwd
# Iniciamos el servicio Web
docker-compose down

# Imprimimos por pantalla la fecha actual
date

# Nos ubicamos en el directorio del servicio para Redis
echo -- Finaliza smartvuv-redis
cd ..
cd smartvuv-redis
pwd
# Iniciamos el servicio de Redis
docker-compose down

# Imprimimos por pantalla la fecha actual
date

# Nos ubicamos en el directorio del servicio para BD
echo -- Finaliza smartvuv-bd
cd ..
cd smartvuv-bd
pwd
# Iniciamos el servicio de Bd
docker-compose down