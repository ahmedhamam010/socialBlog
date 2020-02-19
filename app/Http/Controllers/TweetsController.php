<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;
use App\Repositories\TweetRepositoryInterface;

class TweetsController extends Controller
{
    private $tweetRepository;
    public function __construct( TweetRepositoryInterface $tweetRepository ){
        $this->tweetRepository = $tweetRepository;
    }
    public function index(){
        $tweets = $this->tweetRepository->all();
        return $tweets;
    }

    public function show( $tweetId ){
        $tweet = $this->tweetRepository->findByid(( $tweetId ));
        return $tweet;
        
    }

    public function store(){
        $tweet = $this->tweetRepository->addTweet();
        return $tweet;
    }

    public function destroy( $tweetId ){
        $tweet = $this->tweetRepository->deleteById( $tweetId );
        return "deleted successfully";
    }

    
    
}