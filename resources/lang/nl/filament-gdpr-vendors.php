<?php

return [
    'resource' => [
        'label' => 'Leverancier',
        'plural_label' => 'Leveranciers',
    ],

    'fields' => [
        'name' => 'Naam',
        'document' => 'Registratienummer',
        'role' => 'Rol',
        'risk' => 'Risico',
        'services' => 'Diensten',
        'data_categories' => 'Gedeelde gegevens',
        'country' => 'Land (ISO-code)',
        'transfer_mechanism' => 'Doorgiftemechanisme (hoofdstuk V)',
        'contact' => 'Contact',
        'dpa_signed_at' => 'Contract getekend op',
        'dpa_expires_at' => 'Contract verloopt op',
        'dpa_checklist' => 'Het contract omvat',
        'notes' => 'Notities',
        'issues' => 'Openstaande punten',
        'no_issues' => 'Geen',
        'next_review' => 'Volgende beoordeling',
    ],

    'sections' => [
        'agreement' => 'Verwerkersovereenkomst (art. 28)',
    ],

    'help' => [
        'country' => 'Leveranciers buiten de EER hebben een doorgiftemechanisme uit hoofdstuk V nodig.',
        'agreement' => 'Verwerkers moeten gebonden zijn door een overeenkomst die art. 28(3) dekt; gezamenlijke verwerkingsverantwoordelijken door een regeling volgens art. 26.',
        'terminate' => 'De leverancier moet de gegevens dan wissen of teruggeven (art. 28(3)(g)).',
    ],

    'filters' => [
        'active' => 'Actief',
    ],

    'roles' => [
        'processor' => 'Verwerker',
        'controller' => 'Zelfstandige verwerkingsverantwoordelijke',
        'joint_controller' => 'Gezamenlijke verwerkingsverantwoordelijke',
    ],

    'risks' => [
        'low' => 'Laag',
        'medium' => 'Gemiddeld',
        'high' => 'Hoog',
    ],

    'mechanisms' => [
        'adequacy' => 'Adequaatheidsbesluit (art. 45)',
        'standard_clauses' => 'Modelcontractbepalingen (art. 46(2)(c))',
        'binding_corporate_rules' => 'Bindende bedrijfsvoorschriften (art. 47)',
        'codes_certification' => 'Gedragscode of certificering (art. 46(2)(e)-(f))',
        'ad_hoc_clauses' => 'Ad-hoccontractbepalingen (art. 46(3)(a))',
        'administrative_arrangements' => 'Administratieve regelingen (art. 46(3)(b))',
        'derogation' => 'Afwijking voor een specifieke situatie (art. 49)',
    ],

    'issues' => [
        'agreement_missing' => 'Geen getekend contract',
        'agreement_expired' => 'Contract verlopen',
        'agreement_incomplete' => 'Contract onvolledig',
        'transfer_mechanism_missing' => 'Geen doorgiftemechanisme',
        'review_due' => 'Beoordeling nodig',
        'data_return_pending' => 'Teruggave van gegevens openstaand',
    ],

    'checklist' => [
        'instructions' => 'Verwerkt de gegevens alleen op onze gedocumenteerde instructies (art. 28(3)(a))',
        'confidentiality' => 'Personen die de gegevens mogen verwerken zijn tot geheimhouding verplicht (art. 28(3)(b))',
        'security_measures' => 'Neemt de beveiligingsmaatregelen van art. 32 (art. 28(3)(c))',
        'sub_processors' => 'Subverwerkers alleen met onze toestemming en dezelfde verplichtingen (art. 28(2) en (4))',
        'data_subject_rights' => 'Helpt ons verzoeken van betrokkenen te beantwoorden (art. 28(3)(e))',
        'compliance_assistance' => 'Helpt bij beveiliging, melding van inbreuken, DPIA\'s en voorafgaande raadpleging (art. 28(3)(f))',
        'international_transfers' => 'Doorgiften buiten de EER alleen met een mechanisme uit hoofdstuk V',
        'deletion_on_termination' => 'Wist of retourneert de gegevens aan het einde van de diensten (art. 28(3)(g))',
        'audits' => 'Stelt informatie beschikbaar en staat audits toe (art. 28(3)(h))',
    ],

    'actions' => [
        'review' => 'Markeren als beoordeeld',
        'terminate' => 'Relatie beëindigen',
        'data_returned' => 'Gegevens verwijderd of teruggegeven',
    ],

    'notifications' => [
        'reviewed' => 'Leverancier beoordeeld',
    ],
];
