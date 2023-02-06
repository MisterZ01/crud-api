from django.db.models import fields
from rest_framework import serializers
from .models import Item, Client, Contrat, Panneau
  
class ItemSerializer(serializers.ModelSerializer):
    class Meta:
        model = Item
        fields = ('category', 'subcategory', 'name', 'amount')
class ClientSerializer(serializers.HyperlinkedModelSerializer):
    class Meta:
        model = Client
        fields = ('nom_client','prenom_client','email_client','numero_client')
            # entreprise ou organisation
            # 'nomEntreprise_client',
            # 'logoEntreprise_client',
            # 'emailEntreprise_client',
            # 'numeroEntreprise_client'
class ContratSerializer(serializers.ModelSerializer):
    class Meta:
        model = Contrat
        fields = (
                'dateDebut_contrat',
                'dateFin_contrat',
                'contractant'
        )
class PanneauSerializer(serializers.ModelSerializer):
    class Meta:
        model = Panneau
        fields = (
            'nom_panneau',
            'commune_panneau',
            'altitude_panneau',
            'longitude_panneau',
            'format_panneau',
            'prix_panneau',
            'contrat_panneau' 
        )