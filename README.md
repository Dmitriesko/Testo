# Testo

## Руководство по запуску:

1) Скопировать ```.env.example``` и переименовать в ```.env```
2) Настроить подключение к БД в ```.env```
3) Запустить команды:
```
composer install
```
```
php artisan key:generate
```
```
php artisan migrate --seed
```
```
php artisan serve
```

4) Перейти по адресу
```
http://localhost:8000/
```

5) Готово!
