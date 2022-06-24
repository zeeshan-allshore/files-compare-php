<?php
require_once "classes/fileSystem.php";

$fileSystem = new FileSystem;

// Passing the files to method to get the strings in the form of arrays
$first_file_array = $fileSystem->fileToArray("input_files/first.txt");
$second_file_array = $fileSystem->fileToArray("input_files/second.txt");

// Using the method from the FileSystem class to compare two files and save the resulted files in downloads folder.
$fileSystem->saveDiffernceFile($first_file_array, $second_file_array, 'first_file');
$fileSystem->saveDiffernceFile($second_file_array, $first_file_array, 'second_file');

echo 'Files are saved in output_files folder';

exit;
