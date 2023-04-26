<?php

declare(strict_types=1);

namespace Tests\Unit;

use BombenProdukt\BladeIcons\Facades\IconFamilyRegistry;

it('should register the icon family', function (): void {
    expect(IconFamilyRegistry::all())->toHaveCount(1);
});
