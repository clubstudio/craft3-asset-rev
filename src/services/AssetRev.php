<?php
namespace Club\AssetRev\services;

use Craft;
use InvalidArgumentException;
use Club\AssetRev\utilities\FilenameRev;

class AssetRev extends \craft\base\Component
{
    /**
     * Get the filename of a asset
     *
     * @param $file
     * @return string
     */
    public function getAssetFilename($file)
    {
        $revver = new FilenameRev(
            Craft::$app->config->get('manifestPath', 'assetrev'),
            Craft::$app->config->get('assetsBasePath', 'assetrev'),
            Craft::$app->config->get('assetUrlPrefix', 'assetrev')
        );

        $revver->setBasePath(CRAFT_BASE_PATH . DIRECTORY_SEPARATOR);

        return $revver->rev($file);
    }
}
