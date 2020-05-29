<?php

namespace Modules\Size\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Modules\Size\Repositories\SizeRepository;


class BeforeImportProductListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $data = $event->data();
        if(isset($data['size']))
        {
            return ['size_id' => $this->sizeId($data['size'])];
        }
    }

    private function sizeId($size_value)
    {
        if(!is_null($size_value))
        {
            $size = SizeRepository::loadBySize($size_value);
            if(!$size)
            {
                $size = SizeRepository::store(['size' => $size_value]);
            } 
            return $size->id;   
        }

    }
}

