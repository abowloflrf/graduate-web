<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Redis;
use App\Post;

class Rank extends Command
{
    const WEIGHT_VIEW = 1;
    const WEIGHT_VOTE = 2;
    const WEIGHT_COMMENT = 5;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rank';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Write MySQL data to Redis as ZSET to generate rank';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Redis::flushdb();
        $calculateArr = [];
        $posts = Post::all();
        foreach ($posts as $post) {
            Redis::zadd('rank', $this->getHotValue($post), $post['id']);
        }
        $ret = Redis::zrevrange('rank', 0, 5);
        var_dump($ret);
    }

    private function getHotValue(Post $post) : int
    {
        $commentCount = count($post->comments);
        $voteCount = $post['votes'];
        return $commentCount * $this::WEIGHT_COMMENT + $voteCount * $this::WEIGHT_VOTE;
    }
}
