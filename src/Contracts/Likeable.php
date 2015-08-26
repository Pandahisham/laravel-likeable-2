<?php

    namespace Tshafer\Likeable\Contracts;

    use Illuminate\Database\Eloquent\Model;

    /**
     * Interface Likeable.
     */
    interface Likeable
    {

        /**
         * @return \Illuminate\Database\Eloquent\Relations\MorphMany
         */
        public function likes();

        /**
         * @return mixed
         */
        public function likeCounter();

        /**
         * @return mixed
         */
        public function getLikeCount();

        /**
         * @param      $from
         * @param null $to
         *
         * @return mixed
         */
        public function getLikeCountByDate( $from, $to = null );

        /**
         * @return mixed
         */
        public function getLikeCountAttribute();

        /**
         * @param Model $likedBy
         *
         * @return mixed
         */
        public function like( Model $likedBy );

        /**
         * @param Model $likedBy
         *
         * @return mixed
         */
        public function dislike( Model $likedBy );

        /**
         * @param       $query
         * @param Model $model
         *
         * @return mixed
         */
        public function scopeWhereLiked( $query, Model $model );
    }
