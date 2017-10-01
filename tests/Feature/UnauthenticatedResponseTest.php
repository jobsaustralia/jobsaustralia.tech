<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UnauthenticatedReponseTest extends TestCase{

    /* Public routes. */
    public function testIndexReponse(){
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testAboutReponse(){
        $response = $this->get('/about');

        $response->assertStatus(200);
    }

    public function testSupportReponse(){
        $response = $this->get('/support');

        $response->assertStatus(200);
    }

    public function testTermsReponse(){
        $response = $this->get('/terms');

        $response->assertStatus(200);
    }

    public function testLoginReponse(){
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function testRegisterReponse(){
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    /* Routes requiring authentication. */
    public function testMatchReponse(){
        $response = $this->get('/matches');

        $response->assertStatus(302);
    }

    public function testJobReponse(){
        $response = $this->get('/job/5eddee25-eecb-4091-be1a-6d95efd0fac7');

        $response->assertStatus(302);
    }

    public function testEmployerReponse(){
        $response = $this->get('/employer/400fa8b2-f8f9-4c64-9b70-ea6ea2e1fe2d');

        $response->assertStatus(302);
    }

    public function testProfileReponse(){
        $response = $this->get('/profile');

        $response->assertStatus(302);
    }

    public function testProfileEditReponse(){
        $response = $this->get('/profile/edit');

        $response->assertStatus(302);
    }

    public function testApplicationsReponse(){
        $response = $this->get('/applications');

        $response->assertStatus(302);
    }

    public function testResumeReponse(){
        $response = $this->get('/resume');

        $response->assertStatus(302);
    }
}
