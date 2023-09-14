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
        // $newName = $this->request->getPost('name');
        // // $newEmail = $this->request->getPost('email');
        // $newBirth = $this->request->getPost('birth');
        // $newMobile = $this->request->getPost('mobile');
        // $newAddress = $this->request->getPost('address');
        // $newJob = $this->request->getPost('job');
        // $newNationality = $this->request->getPost('nationality');
        // $newFirstIntern = $this->request->getPost('first_intern');
        // $newSecondIntern = $this->request->getPost('second_intern');

        // $user_profile = $this->profileModel->where('email', session()->get('email'))->first();
       
        // if ($user_profile) {
        //     $userData = $user_profile;
        // } else {
        //     $userData = [
        //         'name' => $newName,
        //         'birth' => $newBirth,
        //         'mobile' => $newMobile,
        //         'address' => $newAddress,
        //         'job' => $newJob,
        //         'nationality' => $newNationality,
        //         'first_intern' => $newFirstIntern,
        //         'second_intern' => $newSecondIntern,
        //     ];
        // }
        
        // session()->set('LoggedUserProfile', $userData);
        $data = [
            'title' => 'profile',
            'userProfile' => session()->get('LoggedUserProfile')
        ];
            
        echo view('content/profile', $data);
    }

    // public function updatedIndex()
    // {
    //     session()->remove('LoggedUserProfile');

    //     $user_profile = $this->profileModel->where('email', $email)->first();
    //     $session_data_profile = ['users' => $user_profile];
    //     $login_session = session()->set('LoggedUserProfile', $session_data_profile);

    //         $data = [
    //             'title' => 'profile',
    //             // 'profile' => $this->profileModel->getProfile(),
    //             // 'profile' => $this->profileModel->getProfile($email),
    //             'userProfile' => session()->get('LoggedUserProfile')
    //         ];
            
    //         echo view('content/profile', $data);
    // }

    public function updateProfile($email)
    {
    
        $data = [
            'title' => 'updateprofile',
            'userUpdate' => $this->profileModel->getProfile($email)
        ];

        echo view('content/updateprofile', $data);
    }
    //ci will detect $id parameter as update command
    public function saveUpdate($id)
    {

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
        // $email = $this->request->getPost('email');
        // $user_profile = $this->profileModel->where('email', $email)->first();
        // $session_data_profile = ['users' => $user_profile];

        // session()->setFlashdata('pesan', 'successfuly updated');
        // $login_session = session()->set('LoggedUserProfile', $session_data_profile);
        // Assuming $updatedUserData contains the updated user data
        // $currentData = session()->get('LoggedUserProfile');
        // $currentData = $updatedUserData;
        // session()->set('LoggedUserProfile', $currentData);

        return redirect()->to('/content/profile');
    }
}
