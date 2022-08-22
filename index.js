const http = require('http');
var fs = require('fs');
var url = 'https://youtu.be/mZYGsiFKqzI';

function requestListener(req, res) {
  let forwarded = req.headers['x-forwarded-for']
  let ip = forwarded ? forwarded.split(/, /)[0] : req.connection.remoteAddress;
  res.writeHead(200);
  fs.appendFile('ip.txt', `ip - ${ip} | url - ${url} \n`, 'utf-8', (err) => {
  if (err) throw err;
  console.log('IP written');
});
	res.writeHead(302,  {Location: url});
	res.end();
}

const server = http.createServer(requestListener);
server.listen(3000);

console.log('Server listening at http://localhost:3000');
