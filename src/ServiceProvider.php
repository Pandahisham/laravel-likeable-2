<?php

    namespace Tshafer\Likeable;

    use Tshafer\ServiceProvider\ServiceProvider as BaseProvider;

    /**
     * Class ServiceProvider
     *
     * @package Tshafer\Likeable
     */
    class ServiceProvider extends BaseProvider
    {

        /**
         * @var string
         */
        protected $packageName = 'likeable';

        /**
         *
         */
        public function boot()
        {
            $this->setup( __DIR__ )
                 ->publishMigrations();
        }

    }
