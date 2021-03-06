<?php
namespace Psalm\Tests\Internal\Provider;

class FakeParserCacheProvider extends \Psalm\Internal\Provider\ParserCacheProvider
{
    public function __construct()
    {
    }

    public function loadStatementsFromCache($file_path, $file_modified_time, $file_content_hash)
    {
        return null;
    }

    public function loadExistingStatementsFromCache($file_path)
    {
        return null;
    }

    public function saveStatementsToCache($file_path, $file_content_hash, array $stmts, $touch_only)
    {
    }

    public function loadExistingFileContentsFromCache($file_path)
    {
        return null;
    }

    public function cacheFileContents($file_path, $file_contents)
    {
    }
}
