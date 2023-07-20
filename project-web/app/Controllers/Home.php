<?php

namespace App\Controllers;

use App\Models\LoketModel;
use App\Models\PasienModel;
use App\Models\PelayananModel;

class Home extends BaseController
{
    public function welcome()
    {
        return view('welcome');
    }

    public function index()
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to('/');
        }

        return view('pelayanan');
    }

    private function isLoggedIn(): bool
    {
        if (session()->get('logged_in')) {
            return true;
        }

        return false;
    }

    public function dataAntrian()
    {
        $pasienModel = new PasienModel();
        $data['datapasien'] = $pasienModel->findAll();

        return view('data-antrian', $data);
    }

    public function pelayanan()
    {
        $pelayananModel = new PelayananModel();
        $data['pelayanan'] = $pelayananModel->findAll();

        return view('pelayanan');
    }

    public function loket()
    {
        $loketModel = new LoketModel();
        $data['loket'] = $loketModel->findAll();

        return view('loket', $data);
    }

    public function report()
    {
        return view('report');
    }
}