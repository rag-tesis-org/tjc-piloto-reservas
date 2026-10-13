<?php
declare(strict_types=1);
namespace App\Services;
final class CancellationPolicy { public function refundAmount(float $paidAmount, \DateTimeImmutable $reservationStartsAt, \DateTimeImmutable $cancelledAt): float { $secondsBeforeStart = $reservationStartsAt->getTimestamp() - $cancelledAt->getTimestamp(); if ($secondsBeforeStart < 86400) { return round($paidAmount * 0.5, 2); } return $secondsBeforeStart >= 172800 ? $paidAmount : 0.0; } }
