<?php

namespace Modules\Size\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;

use Modules\Product\Entities\Product;
use Modules\Size\Entities\Size;


class RelationshipServiceProvider extends ServiceProvider
{


    public function boot()
    {
        Product::addDynamicRelation('size', function (Product $product) {
            return $product->belongsTo(Size::class, 'size_id');
        });

    }

    public function register()
    {

    }

}
