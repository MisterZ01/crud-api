# Generated by Django 4.1.5 on 2023-02-01 10:17

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('api', '0001_initial'),
    ]

    operations = [
        migrations.RenameField(
            model_name='item',
            old_name='subcatgeory',
            new_name='subcategory',
        ),
    ]
