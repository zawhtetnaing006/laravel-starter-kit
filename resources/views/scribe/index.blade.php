<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Mentors Mentee Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean(1);
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.20.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.20.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-auth" class="tocify-header">
                <li class="tocify-item level-1" data-unique="auth">
                    <a href="#auth">Auth</a>
                </li>
                                    <ul id="tocify-subheader-auth" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="auth-POSTapi-user-login">
                                <a href="#auth-POSTapi-user-login">User LogIn</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="auth-POSTapi-user-register">
                                <a href="#auth-POSTapi-user-register">User Register</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETsanctum-csrf-cookie">
                                <a href="#endpoints-GETsanctum-csrf-cookie">Return an empty response simply to trigger the storage of the CSRF cookie in the browser.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-topics" class="tocify-header">
                <li class="tocify-item level-1" data-unique="topics">
                    <a href="#topics">Topics</a>
                </li>
                                    <ul id="tocify-subheader-topics" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="topics-GETapi-topic">
                                <a href="#topics-GETapi-topic">Topic listing</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: May 30, 2023</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="auth">Auth</h1>

    

                                <h2 id="auth-POSTapi-user-login">User LogIn</h2>

<p>
</p>



<span id="example-requests-POSTapi-user-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/user/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"brekke.garfield@example.com\",
    \"password\": \"g(p2\\\"H|s[jmPAJIi7b\",
    \"device_name\": \"iure\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "brekke.garfield@example.com",
    "password": "g(p2\"H|s[jmPAJIi7b",
    "device_name": "iure"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-user-login">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;token&quot;: &quot;generate token&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-user-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-user-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-user-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-user-login" data-method="POST"
      data-path="api/user/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-user-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-user-login"
                    onclick="tryItOut('POSTapi-user-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-user-login"
                    onclick="cancelTryOut('POSTapi-user-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-user-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/user/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-user-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-user-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="email"                data-endpoint="POSTapi-user-login"
               value="brekke.garfield@example.com"
               data-component="body">
    <br>
<p>Example: <code>brekke.garfield@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="password"                data-endpoint="POSTapi-user-login"
               value="g(p2"H|s[jmPAJIi7b"
               data-component="body">
    <br>
<p>Example: <code>g(p2"H|s[jmPAJIi7b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>device_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="device_name"                data-endpoint="POSTapi-user-login"
               value="iure"
               data-component="body">
    <br>
<p>To identified user login devices. Won't be needed for web. Example: <code>iure</code></p>
        </div>
        </form>

                    <h2 id="auth-POSTapi-user-register">User Register</h2>

<p>
</p>



<span id="example-requests-POSTapi-user-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/user/register" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"incidunt\",
    \"profile_photo\": \"placeat\",
    \"email\": \"ole.hagenes@example.com\",
    \"phone\": \"perspiciatis\",
    \"age\": 4,
    \"degree\": \"accusamus\",
    \"job_title \": \"vel\",
    \"device_name\": \"rerum\",
    \"bio\": \"omnis\",
    \"password\": \"lWk.y^pZ,\",
    \"password_confirmation\": \"officia\",
    \"job_title\": \"tempora\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user/register"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

let body = {
    "name": "incidunt",
    "profile_photo": "placeat",
    "email": "ole.hagenes@example.com",
    "phone": "perspiciatis",
    "age": 4,
    "degree": "accusamus",
    "job_title ": "vel",
    "device_name": "rerum",
    "bio": "omnis",
    "password": "lWk.y^pZ,",
    "password_confirmation": "officia",
    "job_title": "tempora"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-user-register">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{

&quot;id&quot;: 1,
&quot;name&quot;: &quot;ab&quot;,
&quot;email&quot;: &quot;admin@gmail.com&quot;,
&quot;phone&quot;: &quot;temporibus&quot;,
&quot;age&quot;: 18,
&quot;device_name&quot;: &quot;Iphone&quot;,
&quot;degree&quot;: &quot;commodi&quot;,
&quot;job_title&quot;: &quot;Team Lead at google&quot;,
&quot;bio&quot;: &quot;Awesome developer&quot;,
&quot;updated_at&quot;: &quot;2023-05-29:16:06:33&quot;,
&quot;created_at&quot;: &quot;2023-05-29:16:06:33&quot;,
&quot;token&quot;: &quot;1|qo6eJceg77saTfqEl6bJ5SJ8J38uUEgIwgxHYX7m&quot;,
&quot;profile_photo_path&quot;: &quot;path/to/profile_image&quot;
}

will always retrun response in this format. If there&#039;s no value, there&#039;ll be null</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-user-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-user-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-user-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-user-register" data-method="POST"
      data-path="api/user/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-user-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-user-register"
                    onclick="tryItOut('POSTapi-user-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-user-register"
                    onclick="cancelTryOut('POSTapi-user-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-user-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/user/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-user-register"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-user-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="name"                data-endpoint="POSTapi-user-register"
               value="incidunt"
               data-component="body">
    <br>
<p>Example: <code>incidunt</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>profile_photo</code></b>&nbsp;&nbsp;
<small>max:2048kb</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="profile_photo"                data-endpoint="POSTapi-user-register"
               value="placeat"
               data-component="body">
    <br>
<p>Example: <code>placeat</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="email"                data-endpoint="POSTapi-user-register"
               value="ole.hagenes@example.com"
               data-component="body">
    <br>
<p>Must Be Unique Example: <code>ole.hagenes@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="phone"                data-endpoint="POSTapi-user-register"
               value="perspiciatis"
               data-component="body">
    <br>
<p>Example: <code>perspiciatis</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>age</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               name="age"                data-endpoint="POSTapi-user-register"
               value="4"
               data-component="body">
    <br>
<p>min:16 Example: <code>4</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>degree</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="degree"                data-endpoint="POSTapi-user-register"
               value="accusamus"
               data-component="body">
    <br>
<p>Example: <code>accusamus</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>job_title </code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="job_title "                data-endpoint="POSTapi-user-register"
               value="vel"
               data-component="body">
    <br>
<p>Example: <code>vel</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>device_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="device_name"                data-endpoint="POSTapi-user-register"
               value="rerum"
               data-component="body">
    <br>
<p>Example: <code>rerum</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bio</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="bio"                data-endpoint="POSTapi-user-register"
               value="omnis"
               data-component="body">
    <br>
<p>Example: <code>omnis</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="password"                data-endpoint="POSTapi-user-register"
               value="lWk.y^pZ,"
               data-component="body">
    <br>
<p>min:8|confirmed Example: <code>lWk.y^pZ,</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password_confirmation</code></b>&nbsp;&nbsp;
<small>required</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="password_confirmation"                data-endpoint="POSTapi-user-register"
               value="officia"
               data-component="body">
    <br>
<p>min8 Example: <code>officia</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>job_title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="job_title"                data-endpoint="POSTapi-user-register"
               value="tempora"
               data-component="body">
    <br>
<p>Example: <code>tempora</code></p>
        </div>
        </form>

                <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETsanctum-csrf-cookie">Return an empty response simply to trigger the storage of the CSRF cookie in the browser.</h2>

<p>
</p>



<span id="example-requests-GETsanctum-csrf-cookie">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/sanctum/csrf-cookie" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/sanctum/csrf-cookie"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETsanctum-csrf-cookie">
            <blockquote>
            <p>Example response (204):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
vary: Origin
set-cookie: XSRF-TOKEN=eyJpdiI6Ikw3b2NQYVZVQXc4aDR1UFBnRWtEYWc9PSIsInZhbHVlIjoiQlZoelAwSjVEQUhUNC9KTDd2Nnh3VlF0R3dNNUxHNEJwa3hXRzFMakVHOWV1N05QaWNMQUxuQ0tkemY4N2dvdXRveGpxZXppMThFUHIyOFQxTzlmUFdheHp5TzlhcDNzbHgwd1ROZURYRURzdmhKSC9CZlN4QjY2eTIwRDRYazAiLCJtYWMiOiI0ZWQ5MDFkMDJkODVlYmQwMjk4MTZkYzRkZTk0ZWUxZGZkMzUyYzZhMWQ0ZTljNDBlNjVkOGFlOWI4OGQ0NjM5IiwidGFnIjoiIn0%3D; expires=Tue, 30 May 2023 17:49:49 GMT; Max-Age=7200; path=/; samesite=lax; mentors_mentee_session=eyJpdiI6ImxOQjlNUTd6SCt5b1pWZHQ5UCszZmc9PSIsInZhbHVlIjoiVjRDVDN4V2hzK2p3NW9VdmJGazF5Um5JYnVoN3llUE9nOE84UTlqTTdUTU8zNWhqWDNFQkpNV1MvcWJQQzFNMkFxdUpkYnlHWmtPWXN4SXFuam12YndSanF6RnlqcXVhdWpXY3lTK3RlL1d3ZDJwWk1rL1VPZnByUzFQdktCTlciLCJtYWMiOiI0NjFlYzMwZjBlNzA1NzgzNzUwZTUyYTQ3YmZjMDZjNGFjNWJkNzJmMzFlNGU5Njk1OWMzMzZkNDE4MDFhOTE2IiwidGFnIjoiIn0%3D; expires=Tue, 30 May 2023 17:49:49 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>
<code>Empty response</code>
 </pre>
    </span>
<span id="execution-results-GETsanctum-csrf-cookie" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETsanctum-csrf-cookie"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETsanctum-csrf-cookie"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETsanctum-csrf-cookie" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETsanctum-csrf-cookie">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETsanctum-csrf-cookie" data-method="GET"
      data-path="sanctum/csrf-cookie"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETsanctum-csrf-cookie', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETsanctum-csrf-cookie"
                    onclick="tryItOut('GETsanctum-csrf-cookie');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETsanctum-csrf-cookie"
                    onclick="cancelTryOut('GETsanctum-csrf-cookie');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETsanctum-csrf-cookie"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>sanctum/csrf-cookie</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETsanctum-csrf-cookie"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETsanctum-csrf-cookie"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="topics">Topics</h1>

    

                                <h2 id="topics-GETapi-topic">Topic listing</h2>

<p>
</p>



<span id="example-requests-GETapi-topic">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/topic" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/topic"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-topic">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-topic" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-topic"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-topic"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-topic" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-topic">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-topic" data-method="GET"
      data-path="api/topic"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-topic', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-topic"
                    onclick="tryItOut('GETapi-topic');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-topic"
                    onclick="cancelTryOut('GETapi-topic');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-topic"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/topic</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-topic"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-topic"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
