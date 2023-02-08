
const Sequelize = require("sequelize");

const sequelize = new Sequelize(
   'apitest',
   'root',
   'root',
    {
      host: 'localhost',
      dialect: 'mysql',
      port:8889
    }
  );

sequelize.authenticate().then(() => {
   console.log('Connection has been established successfully.');
}).catch((error) => {
   console.error('Unable to connect to the database: ', error);
});

module.exports = sequelize

