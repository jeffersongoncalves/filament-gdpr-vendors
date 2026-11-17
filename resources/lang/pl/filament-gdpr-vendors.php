<?php

return [
    'resource' => [
        'label' => 'Dostawca',
        'plural_label' => 'Dostawcy',
    ],

    'fields' => [
        'name' => 'Nazwa',
        'document' => 'Numer rejestrowy',
        'role' => 'Rola',
        'risk' => 'Ryzyko',
        'services' => 'Usługi',
        'data_categories' => 'Udostępniane dane',
        'country' => 'Kraj (kod ISO)',
        'transfer_mechanism' => 'Mechanizm przekazywania (rozdział V)',
        'contact' => 'Kontakt',
        'dpa_signed_at' => 'Umowa podpisana',
        'dpa_expires_at' => 'Umowa wygasa',
        'dpa_checklist' => 'Umowa obejmuje',
        'notes' => 'Notatki',
        'issues' => 'Braki',
        'no_issues' => 'Brak',
        'next_review' => 'Następny przegląd',
    ],

    'sections' => [
        'agreement' => 'Umowa powierzenia (art. 28)',
    ],

    'help' => [
        'country' => 'Dostawcy spoza EOG wymagają mechanizmu przekazywania z rozdziału V.',
        'agreement' => 'Podmioty przetwarzające muszą być związane umową obejmującą art. 28 ust. 3, a współadministratorzy uzgodnieniem z art. 26.',
        'terminate' => 'Dostawca będzie wtedy zobowiązany usunąć lub zwrócić dane (art. 28 ust. 3 lit. g).',
    ],

    'filters' => [
        'active' => 'Aktywni',
    ],

    'roles' => [
        'processor' => 'Podmiot przetwarzający',
        'controller' => 'Niezależny administrator',
        'joint_controller' => 'Współadministrator',
    ],

    'risks' => [
        'low' => 'Niskie',
        'medium' => 'Średnie',
        'high' => 'Wysokie',
    ],

    'mechanisms' => [
        'adequacy' => 'Decyzja stwierdzająca odpowiedni stopień ochrony (art. 45)',
        'standard_clauses' => 'Standardowe klauzule umowne (art. 46 ust. 2 lit. c)',
        'binding_corporate_rules' => 'Wiążące reguły korporacyjne (art. 47)',
        'codes_certification' => 'Kodeks postępowania lub certyfikacja (art. 46 ust. 2 lit. e-f)',
        'ad_hoc_clauses' => 'Klauzule umowne ad hoc (art. 46 ust. 3 lit. a)',
        'administrative_arrangements' => 'Porozumienia administracyjne (art. 46 ust. 3 lit. b)',
        'derogation' => 'Wyjątek w szczególnej sytuacji (art. 49)',
    ],

    'issues' => [
        'agreement_missing' => 'Brak podpisanej umowy',
        'agreement_expired' => 'Umowa wygasła',
        'agreement_incomplete' => 'Umowa niekompletna',
        'transfer_mechanism_missing' => 'Brak mechanizmu przekazywania',
        'review_due' => 'Wymagany przegląd',
        'data_return_pending' => 'Oczekuje na zwrot danych',
    ],

    'checklist' => [
        'instructions' => 'Przetwarza dane wyłącznie na nasze udokumentowane polecenie (art. 28 ust. 3 lit. a)',
        'confidentiality' => 'Osoby upoważnione do przetwarzania są zobowiązane do zachowania poufności (art. 28 ust. 3 lit. b)',
        'security_measures' => 'Stosuje środki bezpieczeństwa z art. 32 (art. 28 ust. 3 lit. c)',
        'sub_processors' => 'Dalsze podmioty przetwarzające tylko za naszą zgodą i z tymi samymi obowiązkami (art. 28 ust. 2 i 4)',
        'data_subject_rights' => 'Pomaga nam odpowiadać na żądania osób, których dane dotyczą (art. 28 ust. 3 lit. e)',
        'compliance_assistance' => 'Pomaga w zakresie bezpieczeństwa, zgłaszania naruszeń, DPIA i uprzednich konsultacji (art. 28 ust. 3 lit. f)',
        'international_transfers' => 'Przekazywanie poza EOG wyłącznie na podstawie mechanizmu z rozdziału V',
        'deletion_on_termination' => 'Usuwa lub zwraca dane po zakończeniu usług (art. 28 ust. 3 lit. g)',
        'audits' => 'Udostępnia informacje i umożliwia audyty (art. 28 ust. 3 lit. h)',
    ],

    'actions' => [
        'review' => 'Oznacz jako sprawdzony',
        'terminate' => 'Zakończ współpracę',
        'data_returned' => 'Dane usunięte lub zwrócone',
    ],

    'notifications' => [
        'reviewed' => 'Dostawca sprawdzony',
    ],
];
