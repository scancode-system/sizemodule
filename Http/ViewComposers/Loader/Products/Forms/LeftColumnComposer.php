<?php

namespace Modules\Size\Http\ViewComposers\Loader\Products\Forms;

use Modules\Dashboard\Services\ViewComposer\ServiceComposer;
use Modules\Size\Repositories\SizeRepository;

class LeftColumnComposer extends ServiceComposer 
{

    private $sizes;

    public function assign($view)
    {
        $this->sizes();
    }


    private function sizes()
    {
        $this->sizes = SizeRepository::load()->pluck('size', 'id');
    }


    public function view($view)
    {
        $view->with('sizes', $this->sizes);
    }

}