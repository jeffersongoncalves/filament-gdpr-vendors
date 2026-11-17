<?php

return [
    'resource' => [
        'label' => 'Dienstleister',
        'plural_label' => 'Dienstleister',
    ],

    'fields' => [
        'name' => 'Name',
        'document' => 'Registernummer',
        'role' => 'Rolle',
        'risk' => 'Risiko',
        'services' => 'Leistungen',
        'data_categories' => 'Geteilte Daten',
        'country' => 'Land (ISO-Code)',
        'transfer_mechanism' => 'Übermittlungsmechanismus (Kapitel V)',
        'contact' => 'Kontakt',
        'dpa_signed_at' => 'Vertrag unterzeichnet am',
        'dpa_expires_at' => 'Vertrag läuft ab am',
        'dpa_checklist' => 'Der Vertrag umfasst',
        'notes' => 'Notizen',
        'issues' => 'Mängel',
        'no_issues' => 'Keine',
        'next_review' => 'Nächste Prüfung',
    ],

    'sections' => [
        'agreement' => 'Auftragsverarbeitungsvertrag (Art. 28)',
    ],

    'help' => [
        'country' => 'Anbieter außerhalb des EWR brauchen einen Übermittlungsmechanismus nach Kapitel V.',
        'agreement' => 'Auftragsverarbeiter müssen durch einen Vertrag nach Art. 28 Abs. 3 gebunden sein, gemeinsam Verantwortliche durch eine Vereinbarung nach Art. 26.',
        'terminate' => 'Der Anbieter muss die Daten dann löschen oder zurückgeben (Art. 28 Abs. 3 lit. g).',
    ],

    'filters' => [
        'active' => 'Aktiv',
    ],

    'roles' => [
        'processor' => 'Auftragsverarbeiter',
        'controller' => 'Eigenständiger Verantwortlicher',
        'joint_controller' => 'Gemeinsam Verantwortlicher',
    ],

    'risks' => [
        'low' => 'Niedrig',
        'medium' => 'Mittel',
        'high' => 'Hoch',
    ],

    'mechanisms' => [
        'adequacy' => 'Angemessenheitsbeschluss (Art. 45)',
        'standard_clauses' => 'Standardvertragsklauseln (Art. 46 Abs. 2 lit. c)',
        'binding_corporate_rules' => 'Verbindliche interne Datenschutzvorschriften (Art. 47)',
        'codes_certification' => 'Verhaltensregeln oder Zertifizierung (Art. 46 Abs. 2 lit. e-f)',
        'ad_hoc_clauses' => 'Individuelle Vertragsklauseln (Art. 46 Abs. 3 lit. a)',
        'administrative_arrangements' => 'Verwaltungsvereinbarungen (Art. 46 Abs. 3 lit. b)',
        'derogation' => 'Ausnahme für bestimmte Fälle (Art. 49)',
    ],

    'issues' => [
        'agreement_missing' => 'Kein unterzeichneter Vertrag',
        'agreement_expired' => 'Vertrag abgelaufen',
        'agreement_incomplete' => 'Vertrag unvollständig',
        'transfer_mechanism_missing' => 'Kein Übermittlungsmechanismus',
        'review_due' => 'Prüfung fällig',
        'data_return_pending' => 'Datenrückgabe ausstehend',
    ],

    'checklist' => [
        'instructions' => 'Verarbeitet die Daten nur auf unsere dokumentierte Weisung (Art. 28 Abs. 3 lit. a)',
        'confidentiality' => 'Zur Verarbeitung befugte Personen sind zur Vertraulichkeit verpflichtet (Art. 28 Abs. 3 lit. b)',
        'security_measures' => 'Trifft die Sicherheitsmaßnahmen nach Art. 32 (Art. 28 Abs. 3 lit. c)',
        'sub_processors' => 'Unterauftragsverarbeiter nur mit unserer Genehmigung und denselben Pflichten (Art. 28 Abs. 2 und 4)',
        'data_subject_rights' => 'Unterstützt uns bei Anfragen betroffener Personen (Art. 28 Abs. 3 lit. e)',
        'compliance_assistance' => 'Unterstützt bei Sicherheit, Meldung von Verletzungen, DSFA und vorheriger Konsultation (Art. 28 Abs. 3 lit. f)',
        'international_transfers' => 'Übermittlungen außerhalb des EWR nur mit einem Mechanismus nach Kapitel V',
        'deletion_on_termination' => 'Löscht oder gibt die Daten nach Ende der Leistungen zurück (Art. 28 Abs. 3 lit. g)',
        'audits' => 'Stellt Informationen bereit und ermöglicht Überprüfungen (Art. 28 Abs. 3 lit. h)',
    ],

    'actions' => [
        'review' => 'Als geprüft markieren',
        'terminate' => 'Beziehung beenden',
        'data_returned' => 'Daten gelöscht oder zurückgegeben',
    ],

    'notifications' => [
        'reviewed' => 'Dienstleister geprüft',
    ],
];
