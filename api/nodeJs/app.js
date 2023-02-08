const express = require('express')
const cors = require('cors')

const clientsRoutes = require('./routes/clients_route')
const contratsRoutes = require('./routes/contrats_route')
const panneausRoutes = require('./routes/panneaus_route')

const app = express()
app.use(function(req, res, next) {
  console.log('request', req.url, req.body, req.method);
  res.header("Access-Control-Allow-Origin", "*");
  res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept, x-token");
  if(req.method === 'OPTIONS') {
      res.end();
  }
  else {
      next();
  }
});

app.use(cors())
app.use(express.json())

app.use('/api/clients', clientsRoutes)
app.use('/api/contrats', contratsRoutes)
app.use('/api/panneaus', panneausRoutes)

module.exports = app
