<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    //----------------------test1------------------------------------------------------------------
    function test1(){
         
        $data1 = file_get_contents('0.png');
        $data2 = file_get_contents('a0.png');
        $data = $data1 . '\n';
        $data = $data . $data2;
        file_put_contents('1.png', $data);
    }
    //----------------------test2------------------------------------------------------------------
    function test2(){
        $folder_path = 'test1';

        $png_files = glob($folder_path . '/*.png');

        if ($png_files !== false && count($png_files) > 0) {
            foreach ($png_files as $png_file) {
                $pathPNG = 'test1/' . basename($png_file);
                $data1 = file_get_contents('0.png');
                $data2 = file_get_contents($pathPNG);
                $data = $data1 . '\n';
                $data = $data . $data2;
                file_put_contents($pathPNG, $data);
            }
        } 
    }
    //=============================================================================================
}
