<?php
declare(strict_types=1); namespace Tests\Unit\Domain; use App\Domain\Reservation; use App\Domain\ReservationPeriod; use PHPUnit\Framework\TestCase;
final class ReservationTest extends TestCase { public function test_default_status_is_confirmed(): void { $period=new ReservationPeriod(new \DateTimeImmutable('2026-01-01 10:00 UTC'),new \DateTimeImmutable('2026-01-01 11:00 UTC')); self::assertSame('CONFIRMED',(new Reservation('r1',$period))->status); } }
