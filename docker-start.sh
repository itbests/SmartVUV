#! /bin/bash
echo "-------------------------------------"
echo "** Iniciando contenedores SmartVUV **"
echo "-------------------------------------"

# Imprimimos por pantalla el Kernel que usamos
uname -r

# Imprimimos por pantalla la fecha actual
date

# Nos ubicamos en el directorio del servicio para BD
echo ++ Inicia smartvuv-bd
cd smartvuv-bd
pwd
# Iniciamos el servicio de Bd
docker-compose up -d

# Imprimimos por pantalla la fecha actual
date

# Nos ubicamos en el directorio del servicio para Redis
echo ++ Inicia smartvuv-redis
cd ..
cd smartvuv-redis
pwd
# Iniciamos el servicio de Redis
docker-compose up -d

# Imprimimos por pantalla la fecha actual
date

# Nos ubicamos en el directorio del servicio Web
echo ++ Inicia smartvuv-web
cd ..
cd smartvuv-web
pwd
# Iniciamos el servicio Web
docker-compose up -d

# Imprimimos por pantalla la fecha actual
date

# Nos ubicamos en el directorio del Router
echo ++ Inicia traefik
cd ..
cd traefik
pwd
# Iniciamos el servicio del router
docker-compose up -d