```php
function processData(array $data): array {
  foreach ($data as &$item) {
    // ... some processing ...
    if (/* some condition */) {
      unset($item);
    }
  }
  return $data;
}

$data = [1, 2, 3, 4, 5];
$result = processData($data);
print_r($result);
```