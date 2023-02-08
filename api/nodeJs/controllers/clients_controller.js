const Clients = require('../models/client_model.js')
const Contrats = require('../models/contrat_model.js')


//Création d'une équipe
const createClient = (req, res) => {
  const Client = new Clients({
    ...req.body
  });
  Client.save()
      .then((result) => res.status(201).json({result}))
      .catch((error) => {res.status(error).json({error})});
};


//Afficher tous les projets
const getAllClient = (req, res) => {

   Clients.count()
    .then(

      (results) => res.status(200).json( {results }))
    .catch((error) => {res.status(error).json({error})});
  };
const getAllClientByMonth = (req, res) => {

  db_con.query(query, (err, rows) => {
    if(err) throw err;

    console.log(rows);
});
  };

//Supprimer une équipe
const deleteClient = (req, res) => {
    Clients.destroy({
      where: {
        equipe_id: req.params.id
      }
    })
    .then(() => res.status(200).json({ message: 'Client supprimer !'}))
    .catch((error) => {res.status(400).json({error})});
  };


module.exports = { createClient, deleteClient, getAllClient }
