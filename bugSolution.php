The solution is to use strict comparison (`===`) instead of loose comparison (`==`) to ensure both type and value are compared.

```php
<?php
$value = "10";

if ($value === 10) {
    echo "Value is equal to 10";
} else {
    echo "Value is not equal to 10";
}
?>
```

Using `===` will correctly identify that the string "10" is not strictly equal to the integer 10 and produce the correct output: "Value is not equal to 10".