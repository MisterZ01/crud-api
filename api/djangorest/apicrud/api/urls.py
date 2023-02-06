from django.urls import path
from . import views
  
urlpatterns = [
    path('', views.ApiOverview, name='home'),
    # path('contrat/create/', views.Contrat_create, name='Contrat_create'),
    path('contrat/store', views.Contrat_store, name='Contrat_store'),
    path('contrat/all', views.Contrat_view, name='Contrat_view'),
    # path('contrat/<int:pk>/', views.Contrat_show, name='Contrat_show'),
    path('contrat/update/<int:pk>', views.Contrat_update, name='Contrat_update'),
    path('contrat/delete/<int:pk>', views.Contrat_delete, name='Contrat_delete'),
    path('client/store', views.Client_store, name='Client_store'),

    # les clients -------------------------------------
    path('client/store', views.Client_view, name='Client_store'),
    path('client/all', views.Client_view, name='Client_view'),
    path('client/update/<int:pk>', views.Client_update, name='Client_update'),
    path('client/delete/<int:pk>', views.Client_delete, name='Client_delete'),


    # les Panneaus -------------------------------------
    path('panneau/store', views.Panneau_view, name='Panneau_store'),
    path('panneau/all', views.Panneau_view, name='Panneau_view'),
    path('panneau/update/<int:pk>', views.Panneau_update, name='Panneau_update'),
    path('panneau/delete/<int:pk>', views.Panneau_delete, name='Panneau_delete'),

]
