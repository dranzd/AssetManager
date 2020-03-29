<?php
use Assetic\Asset\AssetInterface;
class CustomFilter implements Assetic\Contracts\Filter\FilterInterface;
{
    public function filterLoad(AssetInterface $asset)
    {
    }

    public function filterDump(AssetInterface $asset)
    {
        $asset->setContent('called');
    }
}
