<?php
declare(strict_types=1);
namespace App\Contracts;
use App\Domain\ReservationPeriod;
interface ReservationRepository { public function hasConfirmedOverlap(string $resourceId, ReservationPeriod $period): bool; }
