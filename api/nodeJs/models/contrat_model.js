const { Sequelize, DataTypes } = require("sequelize");
const sequelize = require('../config/mysqlConn');
const Panneau = require('./panneau_model')


//Création du modèle projet
const Contrat = sequelize.define("contrat", {


  id:{
    type: DataTypes.BIGINT,
    autoIncrement: true,
    primaryKey: true,
    allowNull: false,
  },
  nom_contrat: {
      type: DataTypes.STRING,
      allowNull: false
    },
    dateDebut_contrat: {
      type: DataTypes.STRING,
      allowNull: false
    },
    dateFin_contrat: {
      type: DataTypes.STRING,
      allowNull: false
    }
  });

  Contrat.hasMany(Panneau,
    {
    foreignKey: 'contrat_id',
    onDelete: 'CASCADE',
    onUpdate: 'CASCADE'
  });

  sequelize.sync().then(() => {
    console.log('Equipe table created successfully!');
  }).catch((error) => {
    console.error('Unable to create table : ', error);
  });

module.exports = Contrat;