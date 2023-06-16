<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    public function list()
    {
        Redis::command('RPUSH', ['mylist', 'a', 'b', 'c']);
        echo Redis::command('LPOP', ['mylist']);
        echo Redis::command('RPOP', ['mylist']);


        $random = rand(1, 10000);
        Redis::command('LPUSH', ['listDataType', 'ListItem' . $random]);
        Redis::command('RPUSH', ['listDataType', 'item1', 'item2', 'foo', 'bar', 'test']);
        return Redis::command('LRANGE', ['listDataType', 0, 1000]);

    }

    public function hashes()
    {
        Redis::command('HMSET', ['hashesDataType', 'name', 'saeed', 'family', 'jalali', 'age', 25]);
        //return Redis::command('HGETALL', ['hashesDataType']);
        //return Redis::command('HGET', ['hashesDataType', 'name']);
        return Redis::command('HGET', ['hashesDataType', 'age']);

    }

    public function set()
    {
        Redis::command('SADD', ['setDataType', 'item1', 'item2']);
        Redis::command('SADD', ['setDataType', 'item1', 'item2']);
        Redis::command('SADD', ['setDataType', 'item3', 'item4', 'item5']);
        return Redis::command('SMEMBERS', ['setDataType']);

    }

    public function sortedset()
    {
        Redis::command('ZADD', ['sortedSetDataType', 1, 'itembefore']);
        Redis::command('ZADD', ['sortedSetDataType', 2, 'item1']);
        Redis::command('ZADD', ['sortedSetDataType', 3, 'item2']);
        return Redis::command('ZRANGE', ['sortedSetDataType', 0, 10, 'WITHSCORES']);

    }

    public function incr()
    {
        Redis::command('SET', ['counter', 100]);
        Redis::command('INCR', ['counter']);
        Redis::command('INCRBY', ['counter', 50]);
        return Redis::command('GET', ['counter']);
    }

    public function exists()
    {
        Redis::command('SET', ['mykey', 'myvalue']);
        return Redis::command('EXISTS', ['mykey2']);
        return Redis::command('EXISTS', ['mykey']);
    }

    public function expire()
    {
//        Redis::command('SET', ['expirekey2', 'expirevalue2','ex',10]);
        return Redis::command('TTL', ['expirekey2']);
        return Redis::get('expirekey2');
        Redis::command('SET', ['expirekey', 'expirevalue']);
        Redis::command('EXPIRE', ['expirekey', 10]);
        return Redis::get('expirekey');

    }


    public function blog()
    {
        $type = null;
        if (Redis::command('EXISTS', ['blogs'])) {
            $blogs = Redis::command('GET', ['blogs']);
            $type = 'redis';
        }
        else {
            $blogs = $this->getBlogs();
            $blogs = serialize($blogs);
            Redis::command('SET', ['blogs', $blogs]);
            Redis::command('EXPIRE', ['blogs', 60]);
            $type = 'api';
        }

        return [
            'type' => $type,
            'blogs' => unserialize($blogs)
        ];

    }

    public function cache()
    {
        $type = null;
        if (Cache::has('cacheBlogs')) {
            $blogs = Cache::get('cacheBlogs');
            $type = 'cache';
        }
        else {
            $blogs = $this->getBlogs();
            $blogs = serialize($blogs);
            Cache::put('cacheBlogs', $blogs, 30);
            $type = 'api';
        }

        return [
            'type' => $type,
            'blogs' => unserialize($blogs)
        ];

    }

    public function getBlogs()
    {
        try {
            $url = "https://blog.poltalk.me/wp-json/v1/post/getPosts?perpage=100&offset=1&orderby=date&order=DESC&query=";
            $response = Http::get($url);
            $response->throw();
            return $response->json()['data'];
        } catch (\Exception $e) {
            Log::alert('get blog for main failed');
            return [];
        }
    }
}
