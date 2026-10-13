# SDD — Reservas

## Propósito
Modelar recursos reservables, sus períodos de uso, disponibilidad y cancelaciones.

## Stack
PHP 8.3, Laravel 12, Composer 2 y PHPUnit 11.5.

## Estructura
`app/Domain` contiene el modelo de reservas; `app/Contracts` define el acceso a reservas almacenadas y `app/Services` agrupa las políticas de negocio. Las pruebas viven en `tests/Unit` y `tests/Feature`.

## Reglas de negocio
Un recurso puede reservarse si está activo, tiene capacidad suficiente y no posee una reserva confirmada que se solape. Los períodos usan intervalos de inicio inclusivo y fin exclusivo, por lo que dos reservas consecutivas no se solapan. Una cancelación con 48 horas o más de anticipación devuelve el importe pagado; con menos de 24 horas devuelve la mitad del importe.

## Decisiones de diseño
La consulta de solapamientos pertenece al contrato de repositorio. Los períodos validan su orden temporal al construirse y las políticas de cancelación usan fechas explícitas.

## Ejecución
Ejecutar `composer install` y después `php vendor/bin/phpunit` o `php artisan test`.

## Fuera de alcance
Interfaz web, HTTP, CORS, Redis, broker y persistencia externa.
