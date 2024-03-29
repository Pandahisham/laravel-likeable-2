<?php

namespace Tshafer\Likeable\Models;

use Illuminate\Database\Eloquent\Model;

    /**
     * Class Counter.
     */
    class Counter extends Model
    {
        /**
         * @var string
         */
        protected $table = 'likes_counter';

        /**
         * @var array
         */
        protected $guarded = ['id', 'created_at', 'updated_at'];

        /**
         * @return \Illuminate\Database\Eloquent\Relations\MorphTo
         */
        public function likeable()
        {
            return $this->morphTo();
        }
    }
