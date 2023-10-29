<?php

namespace App\Controllers;

use App\Libraries\Hash;
// use App\Models\AccModel;

// use Error;
// use PhpParser\Builder\Function_;

class Authentication extends BaseController
{
    protected $profileModel;
    // protected $accModel;

    public function __construct()
    {
        //bisa pke lgsg = new model(); tp harus di define dulu namespace nya

        helper(['url', 'form']);

        // $this->accModel = new \App\Models\AccModel();
        $this->profileModel = new \App\Models\ProfileModel();
        // $this->profileModel = new \App\Models\AccModel();
    }


    public function signin()
    {
        $data = [
            'title' => 'login'
        ];

        return view('authentication/signin', $data);
    }
    public function register()
    {
        $data = [
            'title' => 'registration'
        ];

        return view('authentication/register', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'registration'
        ];

        $validation = $this->validate([
            'name' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'You full name is required.',
                ],
            ],
            'email' => [
                'rules'  => 'required|valid_email|is_unique[profile.email]',
                'errors' => [
                    'required' => 'Email is required.',
                    'valid_email' => 'Please check the Email field. It does not appear to be valid.',
                    'is_unique' => 'Email already taken.',
                ],
            ],
            'password' => [
                'rules'  => 'required|min_length[8]|max_length[20]',
                'errors' => [
                    'required' => 'Password is required.',
                    'min_length' => 'Password must have atleast 8 characters in length.',
                    'max_length' => 'Password must not have characters more thant 20 in length.',
                ],
            ],
            'cpassword' => [
                'rules'  => 'matches[password]',
                'errors' => [
                    'required' => 'Confirm password is required.',
                    'min_length' => 'Confirm password must have atleast 8 characters in length.',
                    'max_length' => 'Confirm Password must not have characters more thant 20 in length.',
                    'matches' => 'Confirm Password must matches to password.',
                ],
            ],
        ]);
        if (!$validation) {

            return view('authentication/register', ['validation' => $this->validator]);
        } else {
            //Register user in database
            $name = $this->request->getPost('name');
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $photo = 'default.png';
            $birth = '';
            $mobile = '';
            $address = '';
            $job = '';
            $nationality = '';
            $instagram = '';
            $whatsapp = '';
            $github = '';
            $linkedin = '';
            $about = '';

            $values = [
                'name' => $name,
                'email' => $email,
                'password' => Hash::encrypt($password),
                'photo' => $photo,
                // 'slug' => $slug,
                'birth' => $birth,
                'mobile' => $mobile,
                'address' => $address,
                'job' => $job,
                'nationality' => $nationality,
                'instagram' => $instagram,
                'wa' => $whatsapp,
                'github' => $github,
                'linkedin' => $linkedin,
                'about' => $about
            ];


            // $userModel = new UserModel();
            // $query = $this->accModel->insert($values);
            $query = $this->profileModel->insert($values);
            // $emailId = $this->accModel->getInsertID();

            // $dataprofile = [
            //     'name' = $this->request->getPost('name'),
            //     'email' = $emailId,

            // ];
            // $this->profileModel->insert($dataprofile);

            if (!$query) {
                return  redirect()->to('authentication/register')->with('fail', 'Something went wrong.');
            } else {
                return  redirect()->to('authentication/register')->with('success', 'Congratulation, you are now successfully registered.');
            }
        }
    }
    public function check()
    {
        $data = [
            'title' => 'login'
        ];

        $validation = $this->validate([
            'email' => [
                'rules'  => 'required|valid_email',
                'errors' => [
                    'required' => 'Email is required.',
                    'valid_email' => 'Please enter valid email.',
                    // 'is_not_unique' => 'Email not registered.',
                ],
            ],
            'password' => [
                'rules'  => 'required|min_length[8]|max_length[20]',
                'errors' => [
                    'required' => 'Password is required.',
                    'min_length' => 'Password must have atleast 8 characters in length.',
                    'max_length' => 'Password must not have characters more thant 20 in length.',
                ],
            ],
        ]);
        if (!$validation) {
            return view('authentication/signin', ['validation' => $this->validator], $data);
            // return  redirect()->to('authentication/signin')->with('validation', $this->validator)->withInput();
        } else {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

        
            $user_profile = $this->profileModel->where('email', $email)->first();

            $check_password = Hash::decrypt($password, $user_profile['password']);
            if (!$check_password) {
                return  redirect()->to('authentication/signin')->with('fail', 'Incorect password.')->withInput();
            } else {
                
                $session_data_profile = ['users' => $user_profile];
                
                $login_session = session()->set('LoggedUserProfile', $session_data_profile);

                return  redirect()->to('/homepage');
            }
        }
    }
    public function logout()
    {
        if (session()->has('LoggedUserProfile')) {
            session()->remove('LoggedUserProfile');
            return  redirect()->to('authentication/signin')->with('fail', 'You are now logged out.');
        }
    }
}
