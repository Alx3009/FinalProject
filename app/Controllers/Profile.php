<?php

namespace App\Controllers;

//use \App\Models\ProfileModel; ->inibuat define namespace

class Profile extends BaseController
{
    //klo pake contructor harus define properties, dan parameter didalam funtion harus pake $this->
    protected $profileModel;
    public function __construct()
    {
        //bisa pke lgsg = new model(); tp harus di define dulu namespace nya
        $this->profileModel = new \App\Models\ProfileModel();
    }

    public function index()
    {
        // $profile =  $this->profileModel->findAll();
        $data = [
            'title' => 'profile',
            // 'profile' => $this->profileModel->getProfile(),
            // 'profile' => $this->profileModel->getProfile($email),
            'userProfile' => session()->get('LoggedUserProfile'),


        ];


        echo view('content/profile', $data);
    }
    public function updateProfile($email)
    {
        // echo ($slug);
        $data = [
            'title' => 'updateprofile',
            // 'validation' => \Config\Service::validation(),
            // 'userUpdate' => session()->get('LoggedUserProfile'),
            'userUpdate' => $this->profileModel->getProfile($email)

        ];

        // $this->response->getHeader('Cache-Control');
        echo view('content/updateprofile', $data);
    }
    //ci will detect $id parameter as update command
    public function saveUpdate($id)
    {
        // dd($this->request->getVar());
        $this->profileModel->save([
            'id' => $id,
            'name' => $this->request->getVar('name'),
            // 'email' => $this->request->getVar('email'),
            'birth' => $this->request->getVar('birth'),
            'mobile' => $this->request->getVar('mobile'),
            'address' => $this->request->getVar('address'),
            'job' => $this->request->getVar('job'),
            'nationality' => $this->request->getVar('nationality'),
            'first_intern' => $this->request->getVar('first_intern'),
            'second_intern' => $this->request->getVar('second_intern')
        ]);
        session()->setFlashdata('pesan', 'successfuly updated');
        // session()->refresh();



        // $email = $this->request->getVar('email');
        // // session()->remove('LoggedUserProfile');

        // session()->set_userdata('LoggedUserProfile', $user_profile);

        // $email = $this->request->getPost('email');

        // session()->set_userdata('LoggedUserProfile', $user_profile);
        // $this->response->setHeader('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0');
        
        return redirect()->to('/content/profile');
    }
}
