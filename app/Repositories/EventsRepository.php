<?php

namespace App\Repositories;

use App\Models\Event;

class EventsRepository
{
    public function create($data){
        $event = new Event;
        $event->fill($data);
        $event->save();

        return $event;
    }

    public function update($data){

    }
}
