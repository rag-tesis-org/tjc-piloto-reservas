<?php
declare(strict_types=1); namespace Tests\Feature; use App\Domain\ReservationPeriod; use PHPUnit\Framework\TestCase;
final class ReservationCreationSmokeTest extends TestCase { public function test_period_can_be_created(): void { self::assertInstanceOf(ReservationPeriod::class,new ReservationPeriod(new \DateTimeImmutable('2026-01-01 10:00 UTC'),new \DateTimeImmutable('2026-01-01 11:00 UTC'))); } }
