# Usar la imagen oficial de PHP con Apache
FROM php:7.4-apache

# Establecer el directorio de trabajo en el contenedor
WORKDIR /var/www/html

# Copiar los archivos de la aplicación
COPY . .

# Establecer el ServerName para suprimir el aviso
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Exponer el puerto en el que la aplicación se ejecuta
EXPOSE 80
