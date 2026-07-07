<?php

namespace App\Controllers;

class TestPython extends BaseController
{
    public function index()
    {
        $project = FCPATH . '../rf_padi';

        $command =
            'cd /d ' . escapeshellarg($project) .
            ' && python predict.py ambil_data 2>&1';

        $output = shell_exec($command);

        echo "<h3>Command</h3>";
        echo "<pre>$command</pre>";

        echo "<h3>Output</h3>";
        echo "<pre>";
        var_dump($output);
        echo "</pre>";
    }
}
