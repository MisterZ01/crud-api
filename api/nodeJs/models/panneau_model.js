const { Sequelize, DataTypes } = require("sequelize");
const sequelize = require('../config/mysqlConn');



//Création du modèle projet
const Panneau = sequelize.define("panneau", {

    nom_panneau: {
      type: DataTypes.STRING,
      allowNull: false
    },
    longitude: {
      type: DataTypes.STRING,
      allowNull: false
    },
    latitude: {
      type: DataTypes.STRING,
      allowNull: false
    }
  });



  sequelize.sync().then(() => {
    console.log('Equipe table created successfully!');
  }).catch((error) => {
    console.error('Unable to create table : ', error);
  });

module.exports = Panneau;