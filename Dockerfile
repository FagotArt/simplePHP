# Используем образ PHP 8.3 с поддержкой CLI и FPM
FROM php:8.3-cli

# Устанавливаем рабочую директорию в контейнере
WORKDIR /var/www/html

# Копируем скрипты PHP в рабочую директорию
COPY . /var/www/html

# Открываем порт 8181
EXPOSE 8181

# Запускаем встроенный в PHP веб-сервер на всех интерфейсах
CMD [ "php", "-S", "0.0.0.0:8181" ]
