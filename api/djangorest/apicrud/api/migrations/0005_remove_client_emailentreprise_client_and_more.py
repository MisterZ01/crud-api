# Generated by Django 4.0.2 on 2023-02-06 11:31

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('api', '0004_client_contrat_panneau'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='client',
            name='emailEntreprise_client',
        ),
        migrations.RemoveField(
            model_name='client',
            name='logoEntreprise_client',
        ),
        migrations.RemoveField(
            model_name='client',
            name='nomEntreprise_client',
        ),
        migrations.RemoveField(
            model_name='client',
            name='numeroEntreprise_client',
        ),
    ]