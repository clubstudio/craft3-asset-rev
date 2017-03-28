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
            \Club\AssetRev\AssetRev::getInstance()->settings->manifestPath,
            \Club\AssetRev\AssetRev::getInstance()->settings->assetsBasePath,
            \Club\AssetRev\AssetRev::getInstance()->settings->assetUrlPrefix
        );

        $revver->setBasePath(CRAFT_BASE_PATH . DIRECTORY_SEPARATOR);

        return $revver->rev($file);
    }
}
