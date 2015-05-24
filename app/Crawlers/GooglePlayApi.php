<?php


namespace App\Crawlers;


class GooglePlayApi {

    private $pythonAPILocation;

    public function __construct($pythonAPILocation) {
        $this->pythonAPILocation = $pythonAPILocation;

    }


    public function download($folder, $appid) {

        $resultUrl = $folder . '/' . $appid .".apk";

        if(!file_exists($resultUrl)) {
            $command = $this->command("download", array($appid, $resultUrl));
            $command = escapeshellcmd($command);
            // system($command);
            $output = shell_exec($command);
            @file_put_contents(public_path('tempApk/show.txt'), $output);
        }

        return $resultUrl;
    }

    public function command($command, $params) {
        if(is_array($params)) {
            $strparams = "";
            foreach($params as $param) {
                $strparams .= '"' . $param . '" ';
            }

            $params = $strparams;
        } else {
            $params = '"' . $params . '"';
        }

        $command .= ".py ";

        return "python ". $this->pythonAPILocation .'/'. $command . $params;
    }
}
