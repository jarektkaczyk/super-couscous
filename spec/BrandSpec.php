<?php

describe('Brand Model', function() {

    using('DatabaseTransactions', function() {

        it('has a unique name', function() {
            App\Brand::create(['name' => 'unique']);
            expect(function() { App\Brand::create(['name' => 'unique']); })->toThrow();
            expect(App\Brand::count())->toBe(1);
        });

        it('this will actually break', function() {
            App\Brand::create(['name' => 'unique']);
            expect(function() { App\Brand::create(['name' => 'unique']); })->not->toThrow();
        });
    });
});
