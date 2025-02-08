FROM wordpress:latest

# 安装额外 PHP 插件（如果需要）
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd

# 设置文件权限（可选）
RUN chown -R www-data:www-data /var/www/html

# 允许自定义 wp-config.php（可选）
COPY wp-config.php /var/www/html/wp-config.php
