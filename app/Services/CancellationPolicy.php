<?php
declare(strict_types=1);
namespace App\Services;
final class CancellationPolicy { public function refundAmount(float $paidAmount, \DateTimeImmutable $reservationStartsAt, \DateTimeImmutable $cancelledAt): float { return $reservationStartsAt->getTimestamp() - $cancelledAt->getTimestamp() >= 172800 ? $paidAmount : 0.0; } }
