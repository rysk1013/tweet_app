<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use Illuminate\Http\Request;
use App\Services\TweetService;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, TweetService $tweetService)
    {
        $tweets = $tweetService->getTweets();

        // デバッグ
        // dump($tweets);
        // app(\App\Exceptions\Handler::class)->render(request(), throw new \Error('dunm report.'));

        return view('tweet.index')
            ->with('tweets', $tweets);
    }
}
