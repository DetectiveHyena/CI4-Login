<?php namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class UsersCheck implements FilterInterface {
    public function before(RequestInterface $request) {
        // Do something here
        // Bila segment 1 == users
        // Redirect request Segmen kedua

        $uri = service('uri');
        if ($uri->getSegment(1) == 'user') {
            if ($uri->getSegment(2) == '') {
                $segment = '/';
            } else {
                $segment = '/' . $uri->getSegment(2);
            }

            return redirect()->to($segment);
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response) {
        // Do something here
    }
}
