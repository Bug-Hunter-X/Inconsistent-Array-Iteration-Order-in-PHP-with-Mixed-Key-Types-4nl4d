The solution is to avoid relying on the order of iteration when mixing string and integer keys.  If a specific order is crucial, convert the array to a numerically indexed array to guarantee predictable iteration:

```php
$myArray = [];
$myArray["some_key"] = "some_value";
$myArray[123] = "another_value";

// Ensure consistent order using array_values
$orderedArray = array_values($myArray);

foreach ($orderedArray as $value) {
    echo "Value: " . $value . "\n";
}
```

Alternatively, use a more structured data type that explicitly defines order, such as an array of objects, or if numerical keys are needed, use a numerically indexed array from the start.
This approach guarantees consistent iteration order regardless of PHP version or environment.