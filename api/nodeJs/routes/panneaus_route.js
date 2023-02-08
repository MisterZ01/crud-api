const express = require('express')
const PanneausController = require('../controllers/panneaus_controller')

const router = express.Router()


router.get('/', PanneausController.getAllPanneau)
// router.post('/cree_Panneaus', PanneausController.createPanneaus)
// router.delete('/supprimer_Panneaus/:id', PanneausController.deletePanneaus)



module.exports = router