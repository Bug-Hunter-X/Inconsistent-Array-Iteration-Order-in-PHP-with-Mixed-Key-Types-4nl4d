# Inconsistent Array Iteration Order in PHP with Mixed Key Types

This repository demonstrates a subtle but potentially problematic behavior in PHP's array iteration when using a mix of string and integer keys. The order of iteration is not guaranteed to be consistent across different PHP versions or environments. This can lead to unexpected results and make debugging difficult.

## Problem
PHP arrays allow mixing string and integer keys.  However, the order in which elements are processed during iteration (using foreach) is not consistently defined when combining these key types. The order can vary based on internal PHP implementation details.

## Solution
The most reliable approach is to avoid relying on iteration order when dealing with mixed key types. If consistent ordering is needed, use a numerically indexed array or an alternative data structure like a SplFixedArray or an array of objects.  The example provided shows how to maintain order by converting to numerically indexed arrays using `array_values()`

## How to reproduce
1. Clone the repository.
2. Run `bug.php`.
3. Observe that the output's order might vary unexpectedly in different PHP versions or configurations.
4. Run `bugSolution.php` and note the consistent output.
