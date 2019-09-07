
# Fusio SDK

This Javascript library helps to talk to the Fusio (https://www.fusio-project.org/)
API. It uses the automatically generated typescript definition of the Fusio
backend. The following code contains some samples how to use the SDK: 

## Authorization

For most endpoints you need to obtain an access token. Fusio provides multiple
ways to obtain such an access token. The access token is always a JWT, which you
should store i.e. at the local storage so that you can simply reuse the token.
Note every token has an expire time, if the token is expired you either need to
obtain a new token or use the refresh token.

### Simple login

Provides a simple way to obtain an access token using simply the username and
password. If you need more fine control over the access token it is recommended
to use an OAuth2 endpoint

```javascript
Fusio.init({
    baseUrl: "https://myapi.com"
});

Fusio.consumer.login.do().post({username: "", password: ""}).then((resp) => {
    console.log("obtained token " + resp.data.token);
});
```

### OAuth2 endpoints:

#### Backend: `Fusio.backend.token`  

To obtain an access token to call the backend API, which can be used to
configure Fusio

```javascript
Fusio.init({
    baseUrl: "https://myapi.com"
});

Fusio.backend.token.do().clientCredentials("[username]", "[password]").then((resp) => {
    console.log("obtained token " + resp.data.access_token);
});
```

#### Consumer: `Fusio.consumer.token`  

To obtain an access token to call the consumer API, which can be used to build a
developer portal for the consumers of your API

```javascript
Fusio.init({
    baseUrl: "https://myapi.com"
});

Fusio.consumer.token.do().clientCredentials("[username]", "[password]").then((resp) => {
    console.log("obtained token " + resp.data.access_token);
});
```

#### App: `Fusio.authorization.token`

To obtain an access token for the API you are building with Fusio. Mostly you
want to use the `authorization_code` flow.

To initiate the flow you need to redirect the user to the login i.e.:
`/developer/auth?response_type=code&client_id=[app_key]&redirect_uri=[url]&scope=authorization`

After the user has authenticated and approved the app access, the user gets
redirected to the `redirect_uri`. At the `redirect_uri` you need to exchange the
code for an access token:

```javascript
Fusio.init({
    baseUrl: "https://myapi.com"
});

Fusio.auth.token.do().authorizationCode("[code]", "[redirect_uri]", "[client_id]").then((resp) => {
    console.log("obtained token " + resp.data.access_token);
});
```

## Usage

### Backend

```javascript
Fusio.init({
    baseUrl: "https://myapi.com",
    accessToken: "[token]"
});

// output all configured backend routes
Fusio.backend.routes.collection().get({}).then((res) => {
    res.data.entry.forEach((entry) => {
        console.log("route " + entry.path);
    });
});

```

### Consumer

```javascript
Fusio.init({
    baseUrl: "https://myapi.com",
    accessToken: "[token]"
});

// exchange the password of the authenticated user
Fusio.consumer.account.changePassword().put({newPassword: "", oldPassword: "", verifyPassword: ""}).then((resp) => {
    console.log(resp.data.message);
});

```

