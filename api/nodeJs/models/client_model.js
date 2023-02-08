const { Sequelize, DataTypes } = require("sequelize");
const sequelize = require('../config/mysqlConn');
const Contrat = require('./contrat_model')


//Création du modèle projet
const Client = sequelize.define("client", {

    id:{
        type: DataTypes.BIGINT,
        autoIncrement: true,
        primaryKey: true,
        allowNull: false,
      },
    nom_client: {
      type: DataTypes.STRING,
      allowNull: false
    },
    prenom_client: {
      type: DataTypes.STRING,
      allowNull: false
    },
    entreprise_client: {
      type: DataTypes.STRING,
      allowNull: false
    },
    password_client: {
      type: DataTypes.STRING,
      allowNull: false
    },
    email_client: {
      type: DataTypes.STRING,
      allowNull: false
    }
  });

  Client.hasMany(Contrat,
    {
    foreignKey: 'client_id',
    onDelete: 'CASCADE',
    onUpdate: 'CASCADE'
  });

  sequelize.sync().then(() => {
    console.log('Equipe table created successfully!');
  }).catch((error) => {
    console.error('Unable to create table : ', error);
  });

module.exports = Client;