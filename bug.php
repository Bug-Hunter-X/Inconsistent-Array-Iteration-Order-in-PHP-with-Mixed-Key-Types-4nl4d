In PHP, a common yet subtle issue arises when dealing with array keys that are not explicitly defined.  Consider this example:

```php
$myArray = [];
$myArray["some_key"] = "some_value";
$myArray[123] = "another_value";

foreach ($myArray as $key => $value) {
    echo "Key: " . $key . ", Value: " . $value . "\n";
}
```

While seemingly straightforward, the order of iteration might be unexpected. PHP's internal handling of array keys doesn't guarantee a specific sequence when mixing string and integer keys.   You might anticipate "some_key" followed by 123, but the output is implementation-dependent and could vary between PHP versions or even different server setups.  This behavior can lead to hard-to-debug inconsistencies.

This problem is particularly difficult because the seemingly benign indexing does not immediately alert the programmer that this behavior may be non-deterministic.
