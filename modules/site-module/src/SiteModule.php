<?php
namespace modules\sitemodule;

use Craft;
use craft\events\RegisterTemplateRootsEvent;
use craft\web\View;
use yii\base\Event;
use yii\base\Module;

class SiteModule extends Module
{
    public static $instance;

    public function init()
    {
        self::$instance = $this;

        # Change me if you changed `sitemodule` namespace and module-id to something else.
        Craft::setAlias('@sitemodule', __DIR__);

        parent::init();

        // Register services here.
        // E.g.: 'service' => ServiceClass::class
        $this->setComponents([]);

        // Base template directory
        Event::on(
            View::class,
            View::EVENT_REGISTER_CP_TEMPLATE_ROOTS,
            function(RegisterTemplateRootsEvent $event) {
                if (is_dir($baseDir = $this->getBasePath().DIRECTORY_SEPARATOR.'templates')) {
                    $event->roots[$this->id] = $baseDir;
                }
            }
        );

        // Register any other events here.
    }
}