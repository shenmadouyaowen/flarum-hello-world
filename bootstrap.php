<?php
use Flarum\Event\UserWasRegistered;
use Illuminate\Contracts\Events\Dispatcher;
return function (Dispatcher $events) {
    $events->listen(UserWasRegistered::class, function (UserWasRegistered $event) {
        // do stuff before a post is saved
        $event->user->is_activated=true;
        $event->user->save();
    });
};