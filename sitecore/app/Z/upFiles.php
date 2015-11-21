<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 11/07/2015
 * Time: 02:31 PM
 */

namespace App\Z;

use Intervention\Image\Facades\Image;

class upFiles {

    public static $path="img/up";

    function __construct()
    {
    }
        /*
         *  Check if The User change the path were
         *   want to store the fiel
         *   @return the string where it was stored
        */
    public static function checkPath($dir=null){
        self::$path = $dir ? $dir :self::$path;

    }

    public static function type($varibale){
        $types  = ["mp4","avi","mpeg","mov","wmv"];
        return in_array($varibale,$types) ? "video" : "image";
    }

    /*
     * Create new Thumbnail whit ratio and save
     * return path of the img
     */
    public static function thumbnailRatio($picture, $pixels=null , $outPut){
        $pixels = $pixels = null ? 200 : $pixels;

        $img = Image::make(self::$path.'/'.$picture);
        // resize the image to a width of 300 and constrain aspect ratio (auto height)
        $img->resize($pixels, null, function ($constraint) {
            $constraint->aspectRatio();
        });

        //create fullpath
        $result = $outPut.$picture;
        // finally we save the image as a new file
        $img->save($result);
        return $result;

    }

    /*
     *    Upload Just One file
     *    @return the string where it was stored
    */
    public static function upLoad($file, $dir=null)
    {
        self::checkPath($dir);
        if($file):
            if ($file->isValid()):
                $fileName = rand(1, 15555) . $file->getClientOriginalName();

                try {
                    $file->move(self::$path, $fileName);

                } catch (Exception $e) {
                    dd($e->getMessage());
                }
               return self::$path."/".$fileName;
            endif;
         else:
            return null;
        endif;
    }

    /*
    *  Upload multiple Files
    *   @return the array where it was stored all files
    */
    public static function UpLoadMultiple($files, $dir=null)
    {
        self::$path = $dir ? $dir :self::$path;
        $picture = [];
        foreach ($files as $file):
            if ($file->isValid()):
                $fileName = rand(1, 15555) . $file->getClientOriginalName();
                try {
                    $file->move(self::$path, $fileName);
                } catch (Exception $e) {
                    dd($e->getMessage());
                }
                $stored = self::$path . "/" . $fileName;
                array_push($picture, $stored);
            endif;
        endforeach;
        return $picture;
    }

    /*
     * Metodo encargado de crear un thumbnail
     * @parametros (ruta del archive)
     * @type void
     */
    public static function thumbnail($picture)
    {
        $img = Image::make($picture);

        $data = explode("/",$picture);



        // resize the image to a width of 325 and constrain aspect ratio (auto height)
        $img->resize(325, null, function ($constraint) {
            $constraint->aspectRatio();
        });
        // finally we save the image as a new file

        $img->save("img/thumb/".$data[2]);

        return "img/thumb/".$data[2];

    }

}