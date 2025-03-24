FROM php:8.2-apache

# 作業ディレクトリを設定
WORKDIR /var/www/html

# Apacheの設定
RUN a2enmod rewrite

# 必要なPHP拡張機能をインストール
RUN docker-php-ext-install pdo pdo_mysql

# 開発用の設定
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

# タイムゾーンの設定
RUN ln -sf /usr/share/zoneinfo/Asia/Tokyo /etc/localtime 