<?php
declare(strict_types=1); namespace Tests\Unit\Domain; use App\Domain\Resource; use PHPUnit\Framework\TestCase;
final class ResourceTest extends TestCase { public function test_active_resource_exposes_capacity_check(): void { self::assertTrue((new Resource('r1', true, 4))->canHost(4)); } }
