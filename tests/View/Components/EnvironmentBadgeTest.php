<?php

namespace Esign\EnvironmentBadge\Tests;

use PHPUnit\Framework\Attributes\Test;
use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;
use Illuminate\Support\Facades\Config;

final class EnvironmentBadgeTest extends TestCase
{
    use InteractsWithViews;

    #[Test]
    public function it_wont_render_the_badge_by_default(): void
    {
        $component = $this->blade('<x-environment-badge />');

        $this->assertEquals('', (string) $component);
    }

    #[Test]
    public function it_wont_render_the_badge_if_not_enabled(): void
    {
        Config::set('environment-badge.enabled', false);

        $component = $this->blade('<x-environment-badge />');

        $this->assertEquals('', (string) $component);
    }

    #[Test]
    public function it_can_render_the_badge_if_enabled(): void
    {
        Config::set('environment-badge.enabled', true);

        $component = $this->blade('<x-environment-badge />');

        $component->assertSee('This is a test environment');
    }
}
