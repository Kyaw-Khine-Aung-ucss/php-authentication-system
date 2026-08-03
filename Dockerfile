FROM php:8.1-apache

# Apache rewrite mode ကို ဖွင့်ခြင်း
RUN a2enmod rewrite

# PHP အတွက် mysqli နဲ့ pdo extensions များ ထည့်သွင်းခြင်း
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Project ဖိုင်အားလုံးကို Server ဆီ ကူးထည့်ခြင်း
COPY . /var/www/html/

EXPOSE 80