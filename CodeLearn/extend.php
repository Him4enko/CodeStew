<?php

namespace CodeStew\CodeLearn;

use Flarum\Extend;
use Flarum\Frontend\Document;
use Illuminate\Contracts\Events\Dispatcher;
use Flarum\Http\UrlGenerator;

return [
    (new Extend\Frontend('forum'))
        ->content(CodelearnPage::class),

    function (Dispatcher $events, UrlGenerator $url) {
        $events->subscribe(CodelearnPage::class);
    },
];
