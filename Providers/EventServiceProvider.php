<?php

namespace Modules\Size\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;

use Modules\Product\Events\BeforeImportEvent;
use Modules\Size\Listeners\BeforeImportProductListener;

use Modules\Product\Events\ProductFillablesEvent;
use Modules\Size\Listeners\ProductFillablesListener;

use Modules\Product\Events\ProductLazyEagerLoadingEvent;
use Modules\Size\Listeners\ProductLazyEagerLoadingListener;

use Modules\Product\Events\ProductFamilyAliasEvent;
use Modules\Size\Listeners\ProductFamilyAliasListener;


class EventServiceProvider extends ServiceProvider 
{

	public function boot() 
	{

	}

	public function register() 
	{
		Event::listen(ProductFillablesEvent::class, ProductFillablesListener::class);
		Event::listen(BeforeImportEvent::class, BeforeImportProductListener::class);

		Event::listen(ProductFamilyAliasEvent::class, ProductFamilyAliasListener::class);
		Event::listen(ProductLazyEagerLoadingEvent::class, ProductLazyEagerLoadingListener::class);
	}

}