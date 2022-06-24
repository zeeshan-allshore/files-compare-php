# files-compare-php

Build in core PHP. This Repo takes two files consist of lexicographically sorted in the same order ASCII strings, compares them, and Saves two files in output_files folder.

First File contain only strings which were found in first file, but not in the second one.
Second File contain strings found in the second input file, but not in the first one.

**Classes:**

**FileSystem:**
FileSystem is the class created having method to load files, get the difference of two files, and Save the file in the output_files folder in root directory.

**input_files Folder:**
Files Folder has the two files lexicographically sorted in the same order ASCII strings. The system loads those files and compares them

**output_files Folder:**
After comparing the two files the resulted two files are saved in this folder.
