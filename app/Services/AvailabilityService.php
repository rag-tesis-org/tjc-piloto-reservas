<?php
declare(strict_types=1);
namespace App\Services;
use App\Contracts\ReservationRepository; use App\Domain\ReservationPeriod; use App\Domain\Resource;
final readonly class AvailabilityService { public function __construct(private ReservationRepository $reservations) {} public function canReserve(Resource $resource, ReservationPeriod $period, int $partySize): bool { return $resource->isActive() && $resource->canHost($partySize) && !$this->reservations->hasConfirmedOverlap($resource->id, $period); } }
