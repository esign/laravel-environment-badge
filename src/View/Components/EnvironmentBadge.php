<?php

namespace Esign\EnvironmentBadge\View\Components;

use Illuminate\View\Component;

class EnvironmentBadge extends Component
{
    public bool $enabled;

    public function __construct()
    {
        $this->enabled = config('environment-badge.enabled');
    }

    public function render()
    {
        return view('environment-badge::components.environment-badge');
    }
}
