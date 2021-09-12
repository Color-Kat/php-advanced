FROM php:7.4-cli

WORKDIR /php_advanced

COPY . .

VOLUME [ "/php_advanced/data" ]

EXPOSE 8080

CMD ["php", "-S", "0.0.0.0:8080", "index.php"]