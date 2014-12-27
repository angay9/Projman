<?php 
namespace Projman\Extensions;

use Illuminate\Support\ServiceProvider;

class ExtensionServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('responseTranslator', 'Projman\Extensions\Response\ResponseTranslator');
    }
}
?>