<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class PostData extends Data
{
    public function __construct(
        public ?int        $id,
        #[Max(255)] string $title,
        public string      $content)
    {

    }

}
