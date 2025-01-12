In PHP, a common yet subtle error arises when dealing with array keys that are not strictly numeric.  Consider this scenario:

```php
<?php
$data = array('a' => 1, 'b' => 2, 'c' => 3);

foreach ($data as $key => $value) {
  echo "Key: $key, Value: $value\n";
}

// Attempting to access with an integer index can lead to unexpected results
echo "Value at index 0: " . $data[0] . "\n";
?>
```

While the foreach loop correctly iterates through the associative array, attempting to access elements using numerical indices (like `$data[0]`) will likely return `null` or generate a warning, depending on the PHP version. This happens because the array is associative, and numerical indices don't correspond to the keys 'a', 'b', 'c'.