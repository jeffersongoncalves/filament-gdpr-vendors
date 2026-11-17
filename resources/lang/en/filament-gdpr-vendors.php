<?php

return [
    'resource' => [
        'label' => 'Vendor',
        'plural_label' => 'Vendors',
    ],

    'fields' => [
        'name' => 'Name',
        'document' => 'Registration number',
        'role' => 'Role',
        'risk' => 'Risk',
        'services' => 'Services',
        'data_categories' => 'Data shared',
        'country' => 'Country (ISO code)',
        'transfer_mechanism' => 'Transfer mechanism (Chapter V)',
        'contact' => 'Contact',
        'dpa_signed_at' => 'Contract signed on',
        'dpa_expires_at' => 'Contract expires on',
        'dpa_checklist' => 'The contract covers',
        'notes' => 'Notes',
        'issues' => 'Issues',
        'no_issues' => 'None',
        'next_review' => 'Next review',
    ],

    'sections' => [
        'agreement' => 'Processor contract (Art. 28)',
    ],

    'help' => [
        'country' => 'Vendors outside the EEA need a Chapter V transfer mechanism.',
        'agreement' => 'Processors must be bound by a contract covering Art. 28(3); joint controllers by an Art. 26 arrangement.',
        'terminate' => 'The vendor will then owe the deletion or return of the data (Art. 28(3)(g)).',
    ],

    'filters' => [
        'active' => 'Active',
    ],

    'roles' => [
        'processor' => 'Processor',
        'controller' => 'Independent controller',
        'joint_controller' => 'Joint controller',
    ],

    'risks' => [
        'low' => 'Low',
        'medium' => 'Medium',
        'high' => 'High',
    ],

    'mechanisms' => [
        'adequacy' => 'Adequacy decision (Art. 45)',
        'standard_clauses' => 'Standard contractual clauses (Art. 46(2)(c))',
        'binding_corporate_rules' => 'Binding corporate rules (Art. 47)',
        'codes_certification' => 'Code of conduct or certification (Art. 46(2)(e)-(f))',
        'ad_hoc_clauses' => 'Ad hoc contractual clauses (Art. 46(3)(a))',
        'administrative_arrangements' => 'Administrative arrangements (Art. 46(3)(b))',
        'derogation' => 'Derogation for a specific situation (Art. 49)',
    ],

    'issues' => [
        'agreement_missing' => 'No signed contract',
        'agreement_expired' => 'Contract expired',
        'agreement_incomplete' => 'Contract incomplete',
        'transfer_mechanism_missing' => 'No transfer mechanism',
        'review_due' => 'Review due',
        'data_return_pending' => 'Data return pending',
    ],

    'checklist' => [
        'instructions' => 'Processes the data only on our documented instructions (Art. 28(3)(a))',
        'confidentiality' => 'People authorised to process the data are bound to confidentiality (Art. 28(3)(b))',
        'security_measures' => 'Takes the Art. 32 security measures (Art. 28(3)(c))',
        'sub_processors' => 'Sub-processors only with our authorisation and the same obligations (Art. 28(2) and (4))',
        'data_subject_rights' => 'Helps us answer data subject requests (Art. 28(3)(e))',
        'compliance_assistance' => 'Helps with security, breach notification, DPIAs and prior consultation (Art. 28(3)(f))',
        'international_transfers' => 'Transfers outside the EEA only under a Chapter V mechanism',
        'deletion_on_termination' => 'Deletes or returns the data at the end of the services (Art. 28(3)(g))',
        'audits' => 'Makes information available and allows audits (Art. 28(3)(h))',
    ],

    'actions' => [
        'review' => 'Mark as reviewed',
        'terminate' => 'End relationship',
        'data_returned' => 'Data deleted or returned',
    ],

    'notifications' => [
        'reviewed' => 'Vendor reviewed',
    ],
];
