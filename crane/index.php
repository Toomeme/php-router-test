<h1>THIS IS Crane</h1>
<h2>Kuuru</h2>
<p>Do not mix the use of http_response_code() and manually setting  the response code header because the actual HTTP status code being returned by the web server may not end up as expected. http_response_code() does not work if the response code has previously been set using the header() function. Example:</p>