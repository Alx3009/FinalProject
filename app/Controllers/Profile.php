<?php

namespace App\Controllers;
use App\Models\ProfileModel;
use App\Libraries\Hash;
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
        $sessionData = session('LoggedUserProfile');
        $data = [
            'title' => 'profile',
            'userInfo' => $this->profileModel->getProfile($sessionData['users']['email']),
            //'userProfile' => session()->get('LoggedUserProfile')
            'userProfile' => $this->profileModel->getProfile($sessionData['users']['email']),
        ];
            
        echo view('content/profile', $data);
    }

    public function updateProfile($email)
    {   
        $sessionData = session('LoggedUserProfile');
        $data = [
            'title' => 'updateprofile',
            'userInfo' => $this->profileModel->getProfile($sessionData['users']['email']),
            'userUpdate' => $this->profileModel->getProfile($email)
        ];

        echo view('content/updateprofile', $data);
    }
    //ci will detect $id parameter as update command
    public function saveUpdate()
    {
        if(!$this->validate([
            'photo' => [
                'rules'  => 'max_size[photo,2048]|is_image[photo]|mime_in[photo,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'The file is must be under 2MB.',
                    'is_image' => 'The file must be in .jpg .jpeg .png',
                    'mime_in'  => 'The file must be in .jpg .jpeg .png'

                ],
            ]
            ])){
            // $validation = \Config\Services::validation();
            // return redirect()->to('/content/updateprofile/' . $this->request->getVar('email'))->withInput()->with('validation', $this->validator);
            return redirect()->to('/content/updateprofile/' . $this->request->getVar('email'))->withInput();
        }
        // $sessionData = session('LoggedUserProfile');
        //cek apakah gambar lama
        $fileFoto = $this->request->getFile('photo');
        $fileLama = $this->request->getFile('oldphoto');
        if($fileFoto->getError() == 4 ){
            $namaFoto = $this->request->getVar('oldphoto');
        }else{
            // //hapus foto lama
            // if(!($this->request->getFile('oldphoto') == 'default.png')){
            //     unlink('images/' .$this->request->getVar('oldphoto'));
            // }
            //generate random file name
            $namaFoto = $fileFoto->getRandomName();
            //simpan gambar
            $fileFoto->move('images', $namaFoto);
        }
        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'birth' => $this->request->getVar('birth'),
            'photo' => $namaFoto,
            'mobile' => $this->request->getVar('mobile'),
            'address' => $this->request->getVar('address'),
            'job' => $this->request->getVar('job'),
            'nationality' => $this->request->getVar('nationality'),
            'instagram' => $this->request->getVar('instagram'),
            'wa' => $this->request->getVar('whatsapp'),
            'github' => $this->request->getVar('github'),
            'linkedin' => $this->request->getVar('linkedin'),
            'about' => $this->request->getVar('about'),
        ];
        
        $id = $this->request->getVar('id'); 
        $this->profileModel->update($id, $data);
        session()->setFlashdata('pesan', 'successfuly updated');
        return redirect()->to('/content/profile');
    }
}
