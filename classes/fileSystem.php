<?php

class FileSystem
{
    /*
        This method opens the file from the given path and returns the array of strings
    */
    public function fileToArray($file_name)
    {
        $path = "input_files/" . $file_name;
        if (file_exists($path)) {

            $file_open  = fopen($path, "r") or die("Unable to open file!");
            $file_data  = fread($file_open, filesize($path));
            $file_array = explode(PHP_EOL, $file_data);
            fclose($file_open);
            return $file_array;
        }
        throw new Exception('The File ' . $file_name . ' does not exist');
    }

    /*
        This method Takes two arrays, compares them, and gives the difference between the two arrays.
        A new file will be created in the downloads folder which will have the difference of two arrays
        and saves with the name given as the third argument in the method.
    */
    public function saveDiffernceFile($first_array, $second_array, $file_name = 'file')
    {

        $arr_difference = array_diff($first_array, $second_array);
        natcasesort($arr_difference);
        $file_write = fopen("output_files/" . $file_name . ".txt", "w") or die("Unable to open file!");
        $implode_array =  implode(PHP_EOL, $arr_difference);
        fwrite($file_write, $implode_array);
    }
}
