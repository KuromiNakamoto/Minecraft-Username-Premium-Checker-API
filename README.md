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
