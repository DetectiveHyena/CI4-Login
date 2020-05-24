<?php namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Noauth implements FilterInterface {
    public function before(RequestInterface $request) {
        // Do something here
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/dashboard');
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response) {
        // Do something here
    }
}
