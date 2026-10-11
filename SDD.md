# SDD — Reservas

## Propósito, stack y estructura
Piloto Laravel 12 con PHP 8.3, Composer 2, PHPUnit 11.5 y tests Unit/Feature. `app/Domain` alberga el modelo, `app/Contracts` los puertos y `app/Services` coordinadores y políticas. No usa red, base de datos externa, colas ni reloj real.

## Decisiones y casos
Los períodos validan su invariante al construirse; el contrato de repositorio concentra la consulta de solapes. `RES-1` es Local (`ReservationPeriod::durationMinutes()`); `RES-2` es Structural (`AvailabilityService::canReserve()`); `RES-3` es Functional (`CancellationPolicy::refundAmount()`), con referencia externa `ORACLE-RES-3`.

Los casos son parches independientes desde el mismo baseline. Los tests existentes son sólo vecinos y no cubren targets experimentales. PHPUnit se organiza bajo `tests/Unit` y `tests/Feature`. Fuera de alcance: interfaz web, HTTP, CORS, Redis, broker y persistencia externa.
