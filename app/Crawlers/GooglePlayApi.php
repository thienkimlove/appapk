<?php


namespace App\Crawlers;


class GooglePlayAPI {

    private $pythonAPILocation;

    public function __construct($pythonAPILocation) {
        $this->pythonAPILocation = $pythonAPILocation;
    }


    public function download($folder, $appid, $versionCode = NULL, $noOutput = true) {
        $resultUrl = $folder . '/' . $appid;
        if($versionCode !== NULL)
            $resultUrl .= "_".$versionCode.".apk";
        else
            $resultUrl .= ".apk";

        if(!file_exists($resultUrl)) {
            $command = $this->command("download", array($appid, $resultUrl), $noOutput);
            system($command);
        }

        return $resultUrl;
    }

    public function command($command, $params, $redirectOutput = false) {
        if(is_array($params)) {
            $strparams = "";
            foreach($params as $param) {
                $strparams .= '"' . $param . '" ';
            }

            $params = $strparams;
        } else {
            $params = '"' . $params . '"';
        }

        if($redirectOutput)
            $redirect = " > " . $this->tmpFile;
        else
            $redirect = "";

        $command .= ".py ";

        return "python ". $this->pythonAPILocation . $command . $params . $redirect . " 2> /dev/null";
    }
}
