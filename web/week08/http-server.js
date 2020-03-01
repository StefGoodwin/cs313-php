const http = require('http')
const url = require('url')
const fs = require('fs')


http.createServer(onRequest).listen(8888)

function onRequest(response) {
  const path = url.parse(response.url).path;

  if (path == '/home') {
    response.writeHead(200, {'Content-Type': 'text/html'});
    response.write("<h1>Welcome to the Home Page</h1>");
    response.end();
    }
    else if (path == '/getData') {
      const json = '{"name":"Stefnie Goodwin","class": "cs313"}';
      response.writeHead(200, {'Content-Type': 'application/json'});
      response.end(json);

    }
    else {
      response.write("<h1>Error 404</h2>");
    }

}
console.log('Server running at http://localhost:8888/');
