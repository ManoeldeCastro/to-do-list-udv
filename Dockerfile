# Utilizar uma imagem base do PHP com Apache
FROM php:8.1-apache

# Instalar dependências do PostgreSQL
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Copiar o código do projeto para o diretório padrão do Apache
COPY . /var/www/html/

# Definir permissões apropriadas
RUN chown -R www-data:www-data /var/www/html/ && chmod -R 755 /var/www/html/

# Habilitar o módulo de reescrita do Apache (se necessário)
RUN a2enmod rewrite

# Expor a porta 80
EXPOSE 80

# Inicializar o Apache em modo foreground
CMD ["apache2-foreground"]
