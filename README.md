# PHP Unset() in Foreach Loop Bug

This repository demonstrates a subtle bug in PHP related to using `unset()` within a `foreach` loop when iterating over an array by reference.  The issue arises because `unset()` modifies the array's internal pointer in an unpredictable way. 

The `bug.php` file shows the problematic code and the resulting unexpected output. The `bugSolution.php` file provides a corrected version.