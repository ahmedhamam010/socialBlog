<?php

namespace App\Repositories;

interface TweetRepositoryInterface{

    public function all();

    public function findByid( $tweetId );

    public function addTweet();

    public function deleteById( $tweetId );
}