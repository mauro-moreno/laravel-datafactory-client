<?php

namespace MauroMoreno\LaravelDataFactory\Provider;

use Illuminate\Support\ServiceProvider;
use JMS\Serializer\SerializerBuilder;
use MauroMoreno\DataFactory\Client;
use MauroMoreno\DataFactory\Document;

/**
 * Class LaravelDataFactoryServiceProvider
 *
 * @package MauroMoreno\LaravelDataFactory\Provider
 * @author  Mauro Moreno <moreno.mauro.emanuel@gmail.com>
 */
class LaravelDataFactoryServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap DataFactory service.
     *
     */
    public function boot()
    {
        $this->app->bind('datafactory-client', function () {
            return new Client();
        });
        $this->app->bind('datafactory', function () {
            $serializer = SerializerBuilder::create()
                ->addMetadataDir(
                    base_path('vendor/mauro-moreno/datafactory-client/resources/config/serializer')
                )->build();
            return new Document($serializer);
        });
    }

    /**
     * Register DataFactory service.
     */
    public function register()
    {
    }

}
