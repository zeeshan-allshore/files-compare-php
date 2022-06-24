# files-compare-php

Build in core PHP. This Repo takes two files consist of lexicographically sorted in the same order ASCII strings, compares them, and Saves two files in Downloads folder.

First File contain only strings which were found in first file, but not in the second one.
Second File contain strings found in the second input file, but not in the first one.

**Classes:**
**FileSystem:**
FileSystem is the class created having method to load files, get the difference of two files, and Save the file in the downloads folder in root directory.

**Files Folder:**
Files Folder has the two files lexicographically sorted in the same order ASCII strings. The system loads those files and compares them

**Downloads Folder:**
After comparing the two files the resulted two files are saved in this folder.
