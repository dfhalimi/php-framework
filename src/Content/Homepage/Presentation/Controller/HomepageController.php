<?php

declare(strict_types=1);

namespace App\Content\Homepage\Presentation\Controller;

class HomepageController
{
    public function homepageAction(): void
    {
        readfile('./public/index.html');
        http_response_code(200);
    }
}
