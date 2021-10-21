<?php

interface FileUploadInterface
{
    public function upload($file);
    public function uploadAndMinimize($file);
}