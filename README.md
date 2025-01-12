# PHP Associative Array Access Issue

This repository demonstrates a common, yet subtle, error in PHP when working with associative arrays.  The code showcases how attempting to access elements of an associative array using numerical indices can result in unexpected `null` values or warnings.

The `bug.php` file contains the erroneous code, while `bugSolution.php` provides the corrected approach.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the unexpected output when attempting to access array elements using numerical indices.
4. Compare with the corrected code in `bugSolution.php` to understand the proper way to access associative array elements.

This example highlights the importance of understanding the difference between numerical and associative arrays in PHP and how to correctly access their elements.