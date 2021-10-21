<?php

class FileUpload implements FileUploadInterface
{
    public function upload($file)
    {
        echo $file . 'is uploaded  by FileUpload';
    }

    public function uploadAndMinimize($file)
    {
        echo $file . 'is  minimize and uploaded by FileUpload';
    }
}
