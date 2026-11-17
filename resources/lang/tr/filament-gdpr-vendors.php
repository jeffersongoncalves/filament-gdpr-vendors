<?php

return [
    'resource' => [
        'label' => 'Tedarikçi',
        'plural_label' => 'Tedarikçiler',
    ],

    'fields' => [
        'name' => 'Ad',
        'document' => 'Sicil numarası',
        'role' => 'Rol',
        'risk' => 'Risk',
        'services' => 'Hizmetler',
        'data_categories' => 'Paylaşılan veriler',
        'country' => 'Ülke (ISO kodu)',
        'transfer_mechanism' => 'Aktarım mekanizması (Bölüm V)',
        'contact' => 'İletişim',
        'dpa_signed_at' => 'Sözleşme imza tarihi',
        'dpa_expires_at' => 'Sözleşme bitiş tarihi',
        'dpa_checklist' => 'Sözleşme kapsamı',
        'notes' => 'Notlar',
        'issues' => 'Eksikler',
        'no_issues' => 'Yok',
        'next_review' => 'Sonraki inceleme',
    ],

    'sections' => [
        'agreement' => 'Veri işleyen sözleşmesi (md. 28)',
    ],

    'help' => [
        'country' => 'AEA dışındaki tedarikçiler Bölüm V kapsamında bir aktarım mekanizması gerektirir.',
        'agreement' => 'Veri işleyenler md. 28(3)\'ü kapsayan bir sözleşmeyle, ortak veri sorumluları md. 26 kapsamında bir düzenlemeyle bağlı olmalıdır.',
        'terminate' => 'Tedarikçi bundan sonra verileri silmek veya iade etmek zorundadır (md. 28(3)(g)).',
    ],

    'filters' => [
        'active' => 'Aktif',
    ],

    'roles' => [
        'processor' => 'Veri işleyen',
        'controller' => 'Bağımsız veri sorumlusu',
        'joint_controller' => 'Ortak veri sorumlusu',
    ],

    'risks' => [
        'low' => 'Düşük',
        'medium' => 'Orta',
        'high' => 'Yüksek',
    ],

    'mechanisms' => [
        'adequacy' => 'Yeterlilik kararı (md. 45)',
        'standard_clauses' => 'Standart sözleşme maddeleri (md. 46(2)(c))',
        'binding_corporate_rules' => 'Bağlayıcı şirket kuralları (md. 47)',
        'codes_certification' => 'Davranış kuralları veya sertifikasyon (md. 46(2)(e)-(f))',
        'ad_hoc_clauses' => 'Özel sözleşme maddeleri (md. 46(3)(a))',
        'administrative_arrangements' => 'İdari düzenlemeler (md. 46(3)(b))',
        'derogation' => 'Özel durum için istisna (md. 49)',
    ],

    'issues' => [
        'agreement_missing' => 'İmzalı sözleşme yok',
        'agreement_expired' => 'Sözleşmenin süresi doldu',
        'agreement_incomplete' => 'Sözleşme eksik',
        'transfer_mechanism_missing' => 'Aktarım mekanizması yok',
        'review_due' => 'İnceleme zamanı geldi',
        'data_return_pending' => 'Veri iadesi bekleniyor',
    ],

    'checklist' => [
        'instructions' => 'Verileri yalnızca belgelenmiş talimatlarımızla işler (md. 28(3)(a))',
        'confidentiality' => 'Verileri işlemeye yetkili kişiler gizlilik yükümlülüğü altındadır (md. 28(3)(b))',
        'security_measures' => 'Md. 32 güvenlik önlemlerini alır (md. 28(3)(c))',
        'sub_processors' => 'Alt veri işleyenler yalnızca iznimizle ve aynı yükümlülüklerle (md. 28(2) ve (4))',
        'data_subject_rights' => 'İlgili kişi taleplerini yanıtlamamıza yardımcı olur (md. 28(3)(e))',
        'compliance_assistance' => 'Güvenlik, ihlal bildirimi, VKED ve ön danışmada yardımcı olur (md. 28(3)(f))',
        'international_transfers' => 'AEA dışına aktarımlar yalnızca Bölüm V mekanizmasıyla',
        'deletion_on_termination' => 'Hizmetlerin sonunda verileri siler veya iade eder (md. 28(3)(g))',
        'audits' => 'Bilgileri sağlar ve denetimlere izin verir (md. 28(3)(h))',
    ],

    'actions' => [
        'review' => 'İncelendi olarak işaretle',
        'terminate' => 'İlişkiyi sonlandır',
        'data_returned' => 'Veriler silindi veya iade edildi',
    ],

    'notifications' => [
        'reviewed' => 'Tedarikçi incelendi',
    ],
];
