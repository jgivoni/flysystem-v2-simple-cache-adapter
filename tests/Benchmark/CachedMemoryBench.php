<?php

namespace Tests\Lustmored\Flysystem\Cache\Benchmark;

use League\Flysystem\FilesystemAdapter;
use Lustmored\Flysystem\Cache\CacheAdapter;
use Redis;
use Symfony\Component\Cache\Adapter\RedisAdapter;

class CachedMemoryBench extends MemoryBench
{
    protected static function createFilesystemAdapter(): FilesystemAdapter
    {
        $redis = new Redis();
        $redis->connect('127.0.0.1');
        $pool = new RedisAdapter(
            $redis
        );

        return new CacheAdapter(parent::createFilesystemAdapter(), $pool);
    }
}
