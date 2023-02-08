const Panneaus = require('../models/panneau_model.js')

// //Création d'une équipe
// const createContrat = (req, res) => {
//   const Contrat = new Contrats({
//     ...req.body
//   });
//   Contrat.save()
//       .then((result) => res.status(201).json({result}))
//       .catch((error) => {res.status(error).json({error})});
// };

//Afficher tous les projets
const getAllPanneau = (req, res) => {
    Panneaus.count()
    .then((results) => res.status(200).json({results }))
    .catch((error) => {res.status(error).json({error})});
  };
  
// //Supprimer une équipe
// const deleteContrat = (req, res) => {
//     Contrats.destroy({
//       where: {
//         equipe_id: req.params.id
//       }
//     })
//     .then(() => res.status(200).json({ message: 'Contrat supprimer !'}))
//     .catch((error) => {res.status(400).json({error})});
//   };

module.exports = { getAllPanneau }
