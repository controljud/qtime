<?php

namespace App\Services;

use App\Repositories\EventsRepository;
use App\Models\Event;

class EventsService
{
    private $eventRepository;

    public function __construct()
    {
        $this->eventRepository = new EventsRepository;
    }

    public function store(array $data): Event {
        if($data['id'] != ''){
            $event = $this->eventRepository->create($data);
        } else {
            $event = $this->eventRepository->update($data);
        }

        return $event;
    }
}
