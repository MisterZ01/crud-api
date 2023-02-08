const express = require('express')
const ClientController = require('../controllers/clients_controller')

const router = express.Router()


router.get('/', ClientController.getAllClient)
router.post('/cree_client', ClientController.createClient)
router.delete('/supprimer_client/:id', ClientController.deleteClient)

//router.put('/modifier_membre/:id', ClientController.updateOneMemberProject)
//router.get('/:id', ClientController.getOneMemberProject)

module.exports = router