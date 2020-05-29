<?php

namespace Modules\Size\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Modules\Size\Http\ViewComposers\Loader\Products\Forms\LeftColumnComposer;

class ViewComposerServiceProvider extends ServiceProvider 
{

	public function boot() {
		// products
		View::composer('size::loader.products.forms.left_column', LeftColumnComposer::class);
	}

	public function register() {
        //
	}

}
