<?php
namespace Club\AssetRev\models;

use craft\base\Model;

class Settings extends Model
{
    public $manifestPath = 'resources/assets/assets.json';
    public $assetsBasePath = '';
    public $assetUrlPrefix = null;

    public function rules()
    {
        return [
            ['manifestPath', 'required'],
            ['assetsBasePath', 'required'],
            ['assetUrlPrefix', 'required'],
        ];
    }
}
