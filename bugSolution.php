```php
function processData(array $data): array {
  $keysToRemove = [];
  foreach ($data as $key => &$item) {
    // ... some processing ...
    if (/* some condition */) {
      $keysToRemove[] = $key;
    }
  }

  foreach ($keysToRemove as $key) {
    unset($data[$key]);
  }
  return $data;
}

$data = [1, 2, 3, 4, 5];
$result = processData($data);
print_r($result);
```