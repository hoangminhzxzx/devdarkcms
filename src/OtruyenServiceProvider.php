<?php

namespace Otruyen\Core;


class OtruyenServiceProvider extends ServiceProvider {
    public function boot() {
        echo "OtruyenServiceProvider boot";
    }

    public function register() {
        echo "OtruyenServiceProvider register";
    }
}
