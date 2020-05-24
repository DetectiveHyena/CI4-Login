<?php namespace App\Controllers;

class Dashboard extends BaseController {
    public function index() {

        $data = [
            'title' => 'Halaman Dashboard',
        ];

        echo view('admin/header', $data);
        echo view('admin/index');
        echo view('admin/footer');
    }
}