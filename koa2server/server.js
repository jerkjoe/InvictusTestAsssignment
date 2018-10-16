const Koa = require('koa')
const server = new Koa()

server.listen(8080, () => {
  console.log('Server is running now at port 8080!')
})

server.use(a)