<?php

class FileUploadAdapter implements FileUploadInterface
{
    private $adapterObj;

    public function __construct(){
        $this->adapterObj = new ColorFiler();
    }

    public function upload($file)
    {
        $this->adapterObj->colorUpload($file);
    }

    public function uploadAndMinimize($file)
    {
        $this->adapterObj->colorUploadAndMinimize($file);
    }
}