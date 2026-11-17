<?php

return [
    'resource' => [
        'label' => 'Prestataire',
        'plural_label' => 'Prestataires',
    ],

    'fields' => [
        'name' => 'Nom',
        'document' => 'Numéro d\'immatriculation',
        'role' => 'Rôle',
        'risk' => 'Risque',
        'services' => 'Services',
        'data_categories' => 'Données partagées',
        'country' => 'Pays (code ISO)',
        'transfer_mechanism' => 'Mécanisme de transfert (chapitre V)',
        'contact' => 'Contact',
        'dpa_signed_at' => 'Contrat signé le',
        'dpa_expires_at' => 'Contrat expire le',
        'dpa_checklist' => 'Le contrat couvre',
        'notes' => 'Notes',
        'issues' => 'Points en suspens',
        'no_issues' => 'Aucun',
        'next_review' => 'Prochaine revue',
    ],

    'sections' => [
        'agreement' => 'Contrat de sous-traitance (art. 28)',
    ],

    'help' => [
        'country' => 'Les prestataires hors de l\'EEE ont besoin d\'un mécanisme de transfert du chapitre V.',
        'agreement' => 'Les sous-traitants doivent être liés par un contrat couvrant l\'art. 28(3) ; les responsables conjoints, par un accord au titre de l\'art. 26.',
        'terminate' => 'Le prestataire devra alors supprimer ou restituer les données (art. 28(3)(g)).',
    ],

    'filters' => [
        'active' => 'Actifs',
    ],

    'roles' => [
        'processor' => 'Sous-traitant',
        'controller' => 'Responsable indépendant',
        'joint_controller' => 'Responsable conjoint',
    ],

    'risks' => [
        'low' => 'Faible',
        'medium' => 'Moyen',
        'high' => 'Élevé',
    ],

    'mechanisms' => [
        'adequacy' => 'Décision d\'adéquation (art. 45)',
        'standard_clauses' => 'Clauses contractuelles types (art. 46(2)(c))',
        'binding_corporate_rules' => 'Règles d\'entreprise contraignantes (art. 47)',
        'codes_certification' => 'Code de conduite ou certification (art. 46(2)(e)-(f))',
        'ad_hoc_clauses' => 'Clauses contractuelles ad hoc (art. 46(3)(a))',
        'administrative_arrangements' => 'Arrangements administratifs (art. 46(3)(b))',
        'derogation' => 'Dérogation pour une situation particulière (art. 49)',
    ],

    'issues' => [
        'agreement_missing' => 'Aucun contrat signé',
        'agreement_expired' => 'Contrat expiré',
        'agreement_incomplete' => 'Contrat incomplet',
        'transfer_mechanism_missing' => 'Aucun mécanisme de transfert',
        'review_due' => 'Revue à faire',
        'data_return_pending' => 'Restitution des données en attente',
    ],

    'checklist' => [
        'instructions' => 'Traite les données uniquement sur nos instructions documentées (art. 28(3)(a))',
        'confidentiality' => 'Les personnes autorisées à traiter les données sont tenues à la confidentialité (art. 28(3)(b))',
        'security_measures' => 'Prend les mesures de sécurité de l\'art. 32 (art. 28(3)(c))',
        'sub_processors' => 'Sous-traitants ultérieurs uniquement avec notre autorisation et les mêmes obligations (art. 28(2) et (4))',
        'data_subject_rights' => 'Nous aide à répondre aux demandes des personnes concernées (art. 28(3)(e))',
        'compliance_assistance' => 'Aide pour la sécurité, la notification des violations, les AIPD et la consultation préalable (art. 28(3)(f))',
        'international_transfers' => 'Transferts hors de l\'EEE uniquement avec un mécanisme du chapitre V',
        'deletion_on_termination' => 'Supprime ou restitue les données à la fin des services (art. 28(3)(g))',
        'audits' => 'Met les informations à disposition et permet les audits (art. 28(3)(h))',
    ],

    'actions' => [
        'review' => 'Marquer comme revu',
        'terminate' => 'Mettre fin à la relation',
        'data_returned' => 'Données supprimées ou restituées',
    ],

    'notifications' => [
        'reviewed' => 'Prestataire revu',
    ],
];
