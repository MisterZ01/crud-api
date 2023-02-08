const express = require('express')
const ContratController = require('../controllers/contrats_controller')

const router = express.Router()


router.get('/', ContratController.getAllContrat)
router.post('/cree_contrat', ContratController.createContrat)
router.delete('/supprimer_contrat/:id', ContratController.deleteContrat)

//router.put('/modifier_membre/:id', ClientController.updateOneMemberProject)
//router.get('/:id', ClientController.getOneMemberProject)

module.exports = router