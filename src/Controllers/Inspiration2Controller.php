<?php
namespace Ghusr\Inspire2\Controllers;


use Illuminate\Http\Request;
use Ghusr\Inspire2\Inspire2;


class Inspiration2Controller
{
    public function __invoke(Inspire2 $inspire2) {
        $quote = $inspire2->justDoIt();
        return view('inspire2::index', compact('quote'));
    }
}
