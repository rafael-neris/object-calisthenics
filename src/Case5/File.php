<?php

namespace Rafaelneris\ObjectCalisthenics\Case5;

class File {
    private $f;

    public function write(array $k) {
        foreach ($k as $j) {
            fwrite($this->f, $j);
        }
    }

//class File {
//    private $fileResource;
//
//    public function write(array $content) {
//        foreach ($content as $lineOfContent){
//            fwrite(
//                $fileResource,
//                $lineOfContent
//            );
//        }
//    }
//}

}
