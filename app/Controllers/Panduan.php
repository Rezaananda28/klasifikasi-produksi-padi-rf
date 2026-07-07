<?php

namespace App\Controllers;

class Panduan extends BaseController
{
    public function index(): string
    {
        return view('panduan', [
            'title' => 'Panduan Penggunaan'
        ]);
    }
}
