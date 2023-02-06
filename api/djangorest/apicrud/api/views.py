from django.shortcuts import render, get_object_or_404
from rest_framework.decorators import api_view
from rest_framework.response import Response
from .models import Item, Client, Contrat, Panneau
from .serializers import ItemSerializer, ContratSerializer, ClientSerializer, PanneauSerializer
from django.views.decorators.csrf import csrf_exempt

from rest_framework import serializers
from rest_framework import status
  
@api_view(['GET'])
def ApiOverview(request):
    api_urls = {
        'all_items': '/',
        'Search by Category': '/?category=category_name',
        'Search by Subcategory': '/?subcategory=category_name',
        'Add': '/create',
        'Update': '/update/pk',
        'Delete': '/item/pk/delete'
    }
  
    return Response(api_urls)

# contrat -----------------------------------------------------------
@api_view(['POST'])
def Contrat_store(request):
    contrat = ContratSerializer(data=request.data)
    print(contrat.is_valid() , contrat.errors)
    # validating for already existing data
    if Contrat.objects.filter(**request.data).exists():
        raise serializers.ValidationError('existe déjà')
  
    if contrat.is_valid():
        contrat.save()
        return Response(contrat.data)
    else:
        return Response(status=status.HTTP_404_NOT_FOUND)

@api_view(['GET'])
def Contrat_view(request):
    
    # checking for the parameters from the URL
    if request.query_params:
        contrats = Contrat.objects.filter(**request.query_param.dict())
    else:
        contrats = Contrat.objects.all()
  
    # if there is something in Contrats else raise error
    if contrats:
        serializer = ContratSerializer(contrats, many=True)
        return Response(serializer.data)
    else:
        return Response(status=status.HTTP_404_NOT_FOUND)

@api_view(['POST'])
def Contrat_update(request, pk):
    contrat = Contrat.objects.get(pk=pk)
    data = ContratSerializer(instance=contrat, data=request.data)
    print(data.is_valid(), data.errors)
    if data.is_valid():
        data.save()
        return Response(data.data)
    else:
        return Response(status=status.HTTP_404_NOT_FOUND)

@api_view(['DELETE'])
def Contrat_delete(request, pk):
    contrat = get_object_or_404(Contrat, pk=pk)
    contrat.delete()
    return Response(status=status.HTTP_202_ACCEPTED)


# Client -----------------------------------------------------------
@api_view(['POST'])
def Client_store(request):
    client = ClientSerializer(data=request.data)
    # validating for already existing data
    if Client.objects.filter(**request.data).exists():
        raise serializers.ValidationError('existe déjà')
    if client.is_valid():
        client.save()
        return Response(client.data)
    else:
        return Response(status=status.HTTP_404_NOT_FOUND)

@api_view(['GET'])
def Client_view(request):
    
    # checking for the parameters from the URL
    if request.query_params:
        clients = Client.objects.filter(**request.query_param.dict())
    else:
        clients = Client.objects.all()
  
    # if there is something in clients else raise error
    if clients:
        serializer = ClientSerializer(clients, many=True)
        return Response(serializer.data)
    else:
        return Response(status=status.HTTP_404_NOT_FOUND)

@api_view(['POST'])
def Client_update(request, pk):
    client = Client.objects.get(pk=pk)
    data = ClientSerializer(instance=client, data=request.data)
    print(data.is_valid(), data.errors)
    if data.is_valid():
        data.save()
        return Response(data.data)
    else:
        return Response(status=status.HTTP_404_NOT_FOUND)

@api_view(['DELETE'])
def Client_delete(request, pk):
    client = get_object_or_404(Client, pk=pk)
    client.delete()
    return Response(status=status.HTTP_202_ACCEPTED)

# panneau -----------------------------------------------------------
@api_view(['POST'])
def Panneau_store(request):
    panneau = PanneauSerializer(data=request.data)
    # validating for already existing data
    if Panneau.objects.filter(**request.data).exists():
        raise serializers.ValidationError('existe déjà')
    if panneau.is_valid():
        panneau.save()
        return Response(panneau.data)
    else:
        return Response(status=status.HTTP_404_NOT_FOUND)

@api_view(['GET'])
def Panneau_view(request):
    
    # checking for the parameters from the URL
    if request.query_params:
        panneaus = Panneau.objects.filter(**request.query_param.dict())
    else:
        panneaus = Panneau.objects.all()
  
    # if there is something in Panneaus else raise error
    if panneaus:
        serializer = PanneauSerializer(panneaus, many=True)
        return Response(serializer.data)
    else:
        return Response(status=status.HTTP_404_NOT_FOUND)

@api_view(['POST'])
def Panneau_update(request, pk):
    panneau = Panneau.objects.get(pk=pk)
    data = PanneauSerializer(instance=Panneau, data=request.data)
    print(data.is_valid(), data.errors)
    if data.is_valid():
        data.save()
        return Response(data.data)
    else:
        return Response(status=status.HTTP_404_NOT_FOUND)

@api_view(['DELETE'])
def Panneau_delete(request, pk):
    panneau = get_object_or_404(Panneau, pk=pk)
    panneau.delete()
    return Response(status=status.HTTP_202_ACCEPTED)


# @api_view(['POST'])
# def add_items(request):
#     item = ItemSerializer(data=request.data)
  
#     # validating for already existing data
#     if Item.objects.filter(**request.data).exists():
#         raise serializers.ValidationError('This data already exists')
  
#     if item.is_valid():
#         item.save()
#         return Response(item.data)
#     else:
#         return Response(status=status.HTTP_404_NOT_FOUND)

# @api_view(['GET'])
# def view_items(request):
    
#     # checking for the parameters from the URL
#     if request.query_params:
#         items = Item.objects.filter(**request.query_param.dict())
#     else:
#         items = Item.objects.all()
  
#     # if there is something in items else raise error
#     if items:
#         serializer = ItemSerializer(items, many=True)
#         return Response(serializer.data)
#     else:
#         return Response(status=status.HTTP_404_NOT_FOUND)

# @api_view(['POST'])
# def update_items(request, pk):
#     item = Item.objects.get(pk=pk)
#     data = ItemSerializer(instance=item, data=request.data)
  
#     if data.is_valid():
#         data.save()
#         return Response(data.data)
#     else:
#         return Response(status=status.HTTP_404_NOT_FOUND)

# @api_view(['DELETE'])
# def delete_items(request, pk):
#     item = get_object_or_404(Item, pk=pk)
#     item.delete()
#     return Response(status=status.HTTP_202_ACCEPTED)




