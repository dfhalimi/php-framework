<?php

declare(strict_types=1);

namespace Framework\Controller;

abstract class AbstractController
{
    protected function render(
        string $view,
        array $data = []
    ): void {
        extract($data);

        // Start output buffering
        ob_start();

        // Include the template file
        include $view;

        // End buffering and return its contents
        $output = ob_get_clean();
        echo $output;
    }
}
