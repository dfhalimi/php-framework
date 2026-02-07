<?php

namespace App\Content\Homepage\Presentation\Controller;

class HomepageController
{
    public function homepageAction()
    {
        readfile('./public/index.html');
        http_response_code(200);
    }
}
