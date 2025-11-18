# Процессор строк

Методы для работы со строками

## Требования

- PHP 7.4

## Установка

```sh
composer require axelstx/otus-composer
```

## Использование

```php
<?php

$processor = new StringProcessor();
echo $processor->getLength('test'); // 4
```