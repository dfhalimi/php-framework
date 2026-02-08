<?php

namespace App\Content\Homepage\Presentation\Controller;

class HomepageController
{
    public function homepageAction(): void
    {
        readfile('./public/index.php');
        http_response_code(200);
    }
}
