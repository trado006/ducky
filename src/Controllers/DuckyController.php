<?php
namespace Trado006\Ducky\Controllers;

use Illuminate\Http\Request;
use Trado006\Ducky\Ducky;

class DuckyController
{
    public function __invoke(Ducky $ducky) {
        $quote = $ducky->justDoIt();

        return view('ducky::index', compact('quote'));
    }
}
