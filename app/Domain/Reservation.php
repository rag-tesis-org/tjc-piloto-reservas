<?php
declare(strict_types=1);
namespace App\Domain;
final readonly class Reservation { public function __construct(public string $resourceId, public ReservationPeriod $period, public string $status = 'CONFIRMED') {} }
