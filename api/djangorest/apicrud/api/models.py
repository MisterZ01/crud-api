from django.db import models

class Item(models.Model):
    category = models.CharField(max_length=255)
    subcategory = models.CharField(max_length=255)
    name = models.CharField(max_length=255)
    amount = models.PositiveIntegerField()

    def __str__(self) -> str:
        return self.name


# date création et date de mise à jour
class timestampe(models.Model):
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)
    # definition de classe abstraite
    class Meta:
        abstract = True 

# classe de clients

class Client(timestampe):
    # cleint
    nom_client = models.TextField(max_length=255)
    prenom_client = models.TextField(max_length=255)
    email_client = models.TextField(max_length=50)
    numero_client = models.TextField(max_length=10)
    # entreprise ou organisation
    # nomEntreprise_client = models.TextField(max_length=255)
    # logoEntreprise_client = models.TextField(max_length=255)
    # emailEntreprise_client = models.TextField(max_length=255)
    # numeroEntreprise_client = models.TextField(max_length=255)
    def __str__(self) -> str:
        return self.name

# classe des Contrats

class Contrat(timestampe):
    dateDebut_contrat = models.DateField()
    dateFin_contrat = models.DateField()
    contractant = models.ForeignKey(Client, on_delete=models.CASCADE) # un client  peut avoir plusieurs contrat

# classe des panneaux

class Panneau(timestampe):
    nom_panneau =models.TextField(max_length=255)
    commune_panneau =models.TextField(max_length=255)
    altitude_panneau =models.TextField(max_length=255)
    longitude_panneau =models.TextField(max_length=255)
    format_panneau =models.TextField(max_length=255)
    prix_panneau =models.TextField(max_length=255)
    contrat_panneau = models.ForeignKey(Contrat, on_delete=models.CASCADE) # un contat  peut avoir plusieurs panneau

# defintion des relations entre les tables
#----un client peut avoir plusieurs contrats
#----un contrat peut avoir plusieurs panneaux
#----un contrat peut avoir un seul client