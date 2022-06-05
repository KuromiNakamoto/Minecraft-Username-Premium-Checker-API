# PHP - Minecraft Username Premium Checker API

### `This API using Mojang simple method.`

## Github Documention

### API Url : `https://web4.nankaji-dev.tk/api/checkmc/{minecraft_username}`

### METHOD SUPPORT : `GET`

Example ajax code (jQuery) :

```javascript
$.get(`https://web4.nankaji-dev.tk/api/checkmc/${username}`, function (data, status) {
    if (status == "success") {
      if (data.status == 200) {
        // Is premium
      } else if (data.status == 404) {
        // Not premium
      }
    } else {
      // Error
    }
});
```

Example curl (PHP) :

```php
$ch = curl_init();

curl_setopt_array($ch, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => "https://web4.nankaji-dev.tk/api/checkmc/$username",
    CURLOPT_SSL_VERIFYPEER => false
));

$response = curl_exec($ch);

$result = json_decode($response, true);

curl_close($ch);

if ($result['status'] == 200) {
    // Is premium
} else if ($result['status'] == 404) {
    // Not premium
}
```
