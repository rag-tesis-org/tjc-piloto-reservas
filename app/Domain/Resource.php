<?php
declare(strict_types=1);
namespace App\Domain;
final readonly class Resource { public function __construct(public string $id, private bool $active, private int $capacity) {} public function isActive(): bool { return $this->active; } public function canHost(int $partySize): bool { return $partySize <= $this->capacity; } }
