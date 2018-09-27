<?php

namespace App\Twig;

use Twig\TwigFilter;
use Twig\TwigFunction;
use WF\Hypernova\Renderer;
use Twig\Extension\AbstractExtension;

class RenderReactExtension extends AbstractExtension
{
    /**
     * @var Renderer
     */
    private $renderer;

    /**
     * Constructor
     *
     * @param Renderer $renderer
     */
    public function __construct(Renderer $renderer)
    {
        $this->renderer = $renderer;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('render_react_component', [$this, 'renderReactComponent'], ['is_safe' => ['html']]),
        ];
    }

    /**
     * Render react component
     *
     * @param string $compontent
     * @param array $props
     * 
     * @return string
     */
    public function renderReactComponent(string $compontent, array $props = [], bool $serverSide = true)
    {
        $this->renderer->addJob($compontent, ['name' => $compontent, 'data' => $props, 'metadata' => ['client_render' => !$serverSide]]);
        $response = $this->renderer->render();

        return (string) $response->results[$compontent];
    }
}
