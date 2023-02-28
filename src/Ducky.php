<?php

namespace Trado006\Ducky;

use Illuminate\Support\Facades\Http;

class Ducky {
    public function justDoIt() {
        $response = Http::get('https://inspiration.goprogram.ai/');

        return $response['quote'] . ' -' . $response['author'];
    }
}
