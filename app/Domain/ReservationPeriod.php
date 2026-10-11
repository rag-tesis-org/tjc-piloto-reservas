<?php
declare(strict_types=1);
namespace App\Domain;
final readonly class ReservationPeriod { public function __construct(public \DateTimeImmutable $start, public \DateTimeImmutable $end) { if ($end <= $start) { throw new \InvalidArgumentException('The end must be after the start.'); } } public function durationMinutes(): int { return (int) (($this->end->getTimestamp() - $this->start->getTimestamp()) / 60); } }
