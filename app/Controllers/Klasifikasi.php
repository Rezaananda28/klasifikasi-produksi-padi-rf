<?php

namespace App\Controllers;

class Klasifikasi extends BaseController
{
    private string $python = 'python';
    private string $projectPath = FCPATH . '../rf_padi';

    /*
    |--------------------------------------------------------------------------
    | HALAMAN
    |--------------------------------------------------------------------------
    */
    public function index()
    {
        return view('klasifikasi/index', [
            'title' => 'Klasifikasi Prioritas Produksi'
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | MENJALANKAN PYTHON
    |--------------------------------------------------------------------------
    */
    private function runPython(string $step)
    {
        $command =
            'cd /d ' . escapeshellarg($this->projectPath) .
            ' && ' .
            $this->python .
            ' predict.py ' .
            escapeshellarg($step) .
            ' 2>&1';

        $output = shell_exec($command);

        if ($output === null) {

            return $this->response->setJSON([
                'status' => false,
                'message' => 'Python tidak mengembalikan output.',
                'command' => $command
            ]);
        }

        $output = trim($output);

        $json = json_decode($output, true);

        if (json_last_error() !== JSON_ERROR_NONE) {

            return $this->response->setJSON([
                'status' => false,
                'message' => 'Output Python bukan JSON.',
                'json_error' => json_last_error_msg(),
                'command' => $command,
                'raw' => $output
            ]);
        }

        return $this->response->setJSON($json);
    }

    /*
    |--------------------------------------------------------------------------
    | STEP 1
    |--------------------------------------------------------------------------
    */
    public function ambilData()
    {
        return $this->runPython('ambil_data');
    }

    /*
    |--------------------------------------------------------------------------
    | STEP 2
    |--------------------------------------------------------------------------
    */
    public function preprocessing()
    {
        return $this->runPython('preprocessing');
    }

    /*
    |--------------------------------------------------------------------------
    | STEP 3
    |--------------------------------------------------------------------------
    */
    public function labeling()
    {
        return $this->runPython('labeling');
    }

    /*
    |--------------------------------------------------------------------------
    | STEP 4
    |--------------------------------------------------------------------------
    */
    public function encoding()
    {
        return $this->runPython('encoding');
    }

    /*
    |--------------------------------------------------------------------------
    | STEP 5
    |--------------------------------------------------------------------------
    */
    public function loadModel()
    {
        return $this->runPython('load_model');
    }

    /*
    |--------------------------------------------------------------------------
    | STEP 6
    |--------------------------------------------------------------------------
    */
    public function prediksi()
    {
        return $this->runPython('prediksi');
    }

    /*
    |--------------------------------------------------------------------------
    | STEP 7
    |--------------------------------------------------------------------------
    */
    public function simpanHasil()
    {
        return $this->runPython('simpan_hasil');
    }

    /*
    |--------------------------------------------------------------------------
    | STEP 8 (EVALUASI / RETRAIN MODEL)
    |--------------------------------------------------------------------------
    */
    public function evaluasi()
    {
        $command =
            'cd /d ' . escapeshellarg($this->projectPath) .
            ' && ' .
            $this->python .
            ' train_model.py 2>&1';

        $output = shell_exec($command);

        if ($output === null) {

            return $this->response->setJSON([
                'status' => false,
                'message' => 'Python evaluasi tidak mengembalikan output.',
                'command' => $command
            ]);
        }

        $output = trim($output);

        $json = json_decode($output, true);

        if (json_last_error() !== JSON_ERROR_NONE) {

            return $this->response->setJSON([
                'status' => false,
                'message' => 'Output evaluasi bukan JSON.',
                'json_error' => json_last_error_msg(),
                'raw' => $output
            ]);
        }

        return $this->response->setJSON($json);
    }
}
