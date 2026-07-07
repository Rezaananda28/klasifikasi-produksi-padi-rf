<?php

namespace App\Controllers;

class DetailModel extends BaseController
{
    public function index()
    {
        $data = [

            'title' => 'Detail Proses Model Random Forest'

        ];

        return view('detail_rf', $data);
    }
}
