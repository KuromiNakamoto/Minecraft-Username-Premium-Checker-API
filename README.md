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

## Example JSON Response :

Status code : 200 (Premium Minecraft User)

```json
{
    "username": "Kuromi_Nakamoto",
    "message": "This username is premium !",
    "status": 200,
    "uuid": "f8d0bc21808e4e57a17b806f8a0a948f"
}
```

Status code : 404 (Not Premium Minecraft User)

```json
{
    "message": "This username is not premium !",
    "status": 404
}
```

Status code : 0 (Missing Information)

```json
{
    "message": "MISSING_INFORMATION",
    "status": 0
}
```

## Contact me

Facebook : [`Facebook`](https://www.facebook.com/Nankaji.Minato/)

Email : `kuromi.dev@tokovn.com`
