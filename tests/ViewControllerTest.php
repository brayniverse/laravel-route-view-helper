<?php

class ViewControllerTest extends TestCase
{
    public function test_view_rendered()
    {
        Route::view('/contact', 'contact');

        $this->get('/contact')
            ->see('Contact us');
    }
}
