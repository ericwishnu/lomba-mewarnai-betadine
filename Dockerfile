FROM php:8.1.0-fpm

COPY . /var/www/

WORKDIR /var/www/

# Install ppa:ondrej/php PPA
# RUN apt-get install -y software-properties-common
# RUN add-apt-repository ppa:ondrej/php
# RUN apt-get update
# # Install PHP 8
# RUN apt-get update && apt-get install -y apache2
# RUN apt-get install -y php8.0-common php8.0-cli
# RUN apt-get install -y php8.0-bz2 php8.0-zip php8.0-curl php8.0-gd php8.0-mysql php8.0-xml php8.0-dev php8.0-sqlite php8.0-mbstring php8.0-bcmath
# RUN php -v
# RUN php -m

RUN apt-get update && \
    apt-get install -y libjpeg-dev \
    libpng-dev curl \ 
    && docker-php-ext-configure gd --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd
RUN apt-get install -y libzip-dev
RUN docker-php-ext-install zip
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mysqli

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


RUN apt-get clean && rm -rf /var/lib/apt/lists/* && rm -rf /var/www/.git
# RUN cd /var/www/ && ls -a
EXPOSE 9001
CMD ["php-fpm"]

