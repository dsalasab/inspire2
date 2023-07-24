<?php


namespace Ghusr\Inspire2;


use Illuminate\Support\Facades\Http;


class Inspire2 {
    public function justDoIt() {
        $response = Http::get('https://type.fit/api/quotes');
        return $response[0]['text'] . ' -' . $response[0]['author'];
    }
}
