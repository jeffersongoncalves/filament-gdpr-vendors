<?php

return [
    'resource' => [
        'label' => 'Fornitore',
        'plural_label' => 'Fornitori',
    ],

    'fields' => [
        'name' => 'Nome',
        'document' => 'Numero di registrazione',
        'role' => 'Ruolo',
        'risk' => 'Rischio',
        'services' => 'Servizi',
        'data_categories' => 'Dati condivisi',
        'country' => 'Paese (codice ISO)',
        'transfer_mechanism' => 'Meccanismo di trasferimento (capo V)',
        'contact' => 'Contatto',
        'dpa_signed_at' => 'Contratto firmato il',
        'dpa_expires_at' => 'Contratto scade il',
        'dpa_checklist' => 'Il contratto copre',
        'notes' => 'Note',
        'issues' => 'Criticità',
        'no_issues' => 'Nessuna',
        'next_review' => 'Prossima revisione',
    ],

    'sections' => [
        'agreement' => 'Contratto con il responsabile del trattamento (art. 28)',
    ],

    'help' => [
        'country' => 'I fornitori fuori dal SEE richiedono un meccanismo di trasferimento del capo V.',
        'agreement' => 'I responsabili del trattamento devono essere vincolati da un contratto conforme all\'art. 28(3); i contitolari da un accordo ai sensi dell\'art. 26.',
        'terminate' => 'Il fornitore dovrà quindi cancellare o restituire i dati (art. 28(3)(g)).',
    ],

    'filters' => [
        'active' => 'Attivi',
    ],

    'roles' => [
        'processor' => 'Responsabile del trattamento',
        'controller' => 'Titolare autonomo',
        'joint_controller' => 'Contitolare',
    ],

    'risks' => [
        'low' => 'Basso',
        'medium' => 'Medio',
        'high' => 'Alto',
    ],

    'mechanisms' => [
        'adequacy' => 'Decisione di adeguatezza (art. 45)',
        'standard_clauses' => 'Clausole contrattuali tipo (art. 46(2)(c))',
        'binding_corporate_rules' => 'Norme vincolanti d\'impresa (art. 47)',
        'codes_certification' => 'Codice di condotta o certificazione (art. 46(2)(e)-(f))',
        'ad_hoc_clauses' => 'Clausole contrattuali ad hoc (art. 46(3)(a))',
        'administrative_arrangements' => 'Accordi amministrativi (art. 46(3)(b))',
        'derogation' => 'Deroga per situazioni specifiche (art. 49)',
    ],

    'issues' => [
        'agreement_missing' => 'Nessun contratto firmato',
        'agreement_expired' => 'Contratto scaduto',
        'agreement_incomplete' => 'Contratto incompleto',
        'transfer_mechanism_missing' => 'Nessun meccanismo di trasferimento',
        'review_due' => 'Revisione da fare',
        'data_return_pending' => 'Restituzione dei dati in sospeso',
    ],

    'checklist' => [
        'instructions' => 'Tratta i dati solo su nostra istruzione documentata (art. 28(3)(a))',
        'confidentiality' => 'Le persone autorizzate al trattamento sono vincolate alla riservatezza (art. 28(3)(b))',
        'security_measures' => 'Adotta le misure di sicurezza dell\'art. 32 (art. 28(3)(c))',
        'sub_processors' => 'Sub-responsabili solo con la nostra autorizzazione e gli stessi obblighi (art. 28(2) e (4))',
        'data_subject_rights' => 'Ci aiuta a rispondere alle richieste degli interessati (art. 28(3)(e))',
        'compliance_assistance' => 'Aiuta con sicurezza, notifica delle violazioni, DPIA e consultazione preventiva (art. 28(3)(f))',
        'international_transfers' => 'Trasferimenti fuori dal SEE solo con un meccanismo del capo V',
        'deletion_on_termination' => 'Cancella o restituisce i dati al termine dei servizi (art. 28(3)(g))',
        'audits' => 'Mette a disposizione le informazioni e consente le verifiche (art. 28(3)(h))',
    ],

    'actions' => [
        'review' => 'Segna come revisionato',
        'terminate' => 'Chiudi il rapporto',
        'data_returned' => 'Dati cancellati o restituiti',
    ],

    'notifications' => [
        'reviewed' => 'Fornitore revisionato',
    ],
];
