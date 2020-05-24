<?php namespace App\Controllers;
use App\Models\Pagelogins;

class User extends BaseController {

    public function index() {

        $data = ['title' => 'Halaman Login'];
        helper('form');

        echo view('login/header', $data);
        echo view('login/user');
        echo view('login/footer');
    }

    public function loginer() {

        $data = ['title' => 'Halaman Login'];
        helper('form');

        if ($this->request->getMethod() == 'post') {
            $rules = [

                'email'    => 'required|min_length[4]|max_length[30]|valid_email',
                'password' => 'required|min_length[4]|max_length[255]|validateUser[email,password]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => 'Email / Password Tidak Sama.',
                ],
            ];

            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $model  = new Pagelogins();
                $emails = $this->request->getVar('email');

                $user = $model->where('email', $emails)->first();

                $this->setUserSession($user);

                return redirect()->to('/dashboard');
            }
        }

        echo view('login/header', $data);
        echo view('login/user');
        echo view('login/footer');
    }

    private function setUserSession($user) {
        $data = [
            'id'         => $user['id'],
            'nama'       => $user['nama'],
            'email'      => $user['email'],
            'level'      => $user['level'],
            'password'   => $user['password'],
            'isLoggedIn' => true,
        ];
        session()->set($data);
        return true;
    }

    public function regis() {
        $data = ['title' => 'Halaman Register'];
        helper(['form']);

        if ($this->request->getMethod() == 'post') {
            //let's do the validation here
            $rules = [
                'nama'     => 'required|min_length[3]|max_length[20]',
                'email'    => 'required|min_length[6]|max_length[30]|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[8]|max_length[255]',
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new Pagelogins();

                $newData = [
                    'nama'     => $this->request->getVar('nama'),
                    'email'    => $this->request->getVar('email'),
                    'level'    => "user",
                    'password' => $this->request->getVar('password'),
                ];
                $model->save($newData);
                $session = session();
                $session->setFlashdata('success', 'Data Berhasil Diregistrasi.');
                return redirect()->to('/');
            }
        }

        echo view('login/header', $data);
        echo view('login/user');
        echo view('login/footer');
    }

    public function profile() {

        $data = ['title' => 'Halaman Profile '];
        helper(['form']);
        $model = new Pagelogins();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'nama' => 'required|min_length[3]|max_length[20]',
            ];

            if ($this->request->getPost('password') != '') {
                $rules['password'] = 'required|min_length[8]|max_length[255]';
            }

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {

                $newData = [
                    'id'    => session()->get('id'),
                    'nama'  => $this->request->getPost('nama'),
                    'email' => $this->request->getPost('email'),
                ];
                if ($this->request->getPost('password') != '') {
                    $newData['password'] = $this->request->getPost('password');
                }
                $model->save($newData);

                session()->setFlashdata('success', 'Data Berhasil Diperbarui.');
                return redirect()->to('/profile');
            }
        }

        $data['user'] = $model->where('id', session()->get('id'))->first();
        echo view('login/header', $data);
        echo view('login/profile');
        echo view('login/footer');
    }

    public function logout() {
        session()->setFlashdata('success', 'Data Berhasil Diperbarui.');
        session()->destroy();
        return redirect()->to('/');
    }
}
