<?php

namespace App\Repositories;
use Illuminate\Http\Request;
use App\Tweet;

class TweetRepository implements TweetRepositoryInterface {

    public function all(){
        return Tweet::all();
    }

    public function findByid( $tweetId ){
        return Tweet::where( 'id' , $tweetId )->firstOrFail();
    }

    public function addTweet(){
        $tweet = new Tweet;
        $tweet->description = request()->description;
        $tweet->save();
        return response(Tweet::all());
    }

    public function deleteById( $tweetId ){
        $tweet = Tweet::where( 'id' , $tweetId )->delete();
    }

    

}