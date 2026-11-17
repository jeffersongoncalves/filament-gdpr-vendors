<?php

return [
    'resource' => [
        'label' => 'Təchizatçı',
        'plural_label' => 'Təchizatçılar',
    ],

    'fields' => [
        'name' => 'Ad',
        'document' => 'Qeydiyyat nömrəsi',
        'role' => 'Rol',
        'risk' => 'Risk',
        'services' => 'Xidmətlər',
        'data_categories' => 'Paylaşılan məlumatlar',
        'country' => 'Ölkə (ISO kodu)',
        'transfer_mechanism' => 'Ötürmə mexanizmi (V fəsil)',
        'contact' => 'Əlaqə',
        'dpa_signed_at' => 'Müqavilə imzalanıb',
        'dpa_expires_at' => 'Müqavilənin bitmə tarixi',
        'dpa_checklist' => 'Müqavilə əhatə edir',
        'notes' => 'Qeydlər',
        'issues' => 'Problemlər',
        'no_issues' => 'Yoxdur',
        'next_review' => 'Növbəti yoxlama',
    ],

    'sections' => [
        'agreement' => 'Emalçı ilə müqavilə (maddə 28)',
    ],

    'help' => [
        'country' => 'AİZ-dən kənar təchizatçılara V fəsil üzrə ötürmə mexanizmi lazımdır.',
        'agreement' => 'Emalçılar 28(3) maddəsini əhatə edən müqavilə ilə, birgə nəzarətçilər isə 26-cı maddə üzrə razılaşma ilə bağlı olmalıdır.',
        'terminate' => 'Təchizatçı bundan sonra məlumatları silməli və ya qaytarmalıdır (maddə 28(3)(g)).',
    ],

    'filters' => [
        'active' => 'Aktiv',
    ],

    'roles' => [
        'processor' => 'Emalçı',
        'controller' => 'Müstəqil nəzarətçi',
        'joint_controller' => 'Birgə nəzarətçi',
    ],

    'risks' => [
        'low' => 'Aşağı',
        'medium' => 'Orta',
        'high' => 'Yüksək',
    ],

    'mechanisms' => [
        'adequacy' => 'Adekvatlıq qərarı (maddə 45)',
        'standard_clauses' => 'Standart müqavilə şərtləri (maddə 46(2)(c))',
        'binding_corporate_rules' => 'Məcburi korporativ qaydalar (maddə 47)',
        'codes_certification' => 'Davranış kodeksi və ya sertifikatlaşdırma (maddə 46(2)(e)-(f))',
        'ad_hoc_clauses' => 'Xüsusi müqavilə şərtləri (maddə 46(3)(a))',
        'administrative_arrangements' => 'İnzibati razılaşmalar (maddə 46(3)(b))',
        'derogation' => 'Xüsusi hal üçün istisna (maddə 49)',
    ],

    'issues' => [
        'agreement_missing' => 'İmzalanmış müqavilə yoxdur',
        'agreement_expired' => 'Müqavilənin müddəti bitib',
        'agreement_incomplete' => 'Müqavilə natamamdır',
        'transfer_mechanism_missing' => 'Ötürmə mexanizmi yoxdur',
        'review_due' => 'Yoxlama vaxtı çatıb',
        'data_return_pending' => 'Məlumatların qaytarılması gözlənilir',
    ],

    'checklist' => [
        'instructions' => 'Məlumatları yalnız sənədləşdirilmiş təlimatlarımıza əsasən emal edir (maddə 28(3)(a))',
        'confidentiality' => 'Məlumatları emal etməyə icazəsi olan şəxslər məxfiliklə bağlıdır (maddə 28(3)(b))',
        'security_measures' => '32-ci maddənin təhlükəsizlik tədbirlərini görür (maddə 28(3)(c))',
        'sub_processors' => 'Alt emalçılar yalnız icazəmizlə və eyni öhdəliklərlə (maddə 28(2) və (4))',
        'data_subject_rights' => 'Məlumat subyektlərinin sorğularını cavablandırmaqda kömək edir (maddə 28(3)(e))',
        'compliance_assistance' => 'Təhlükəsizlik, pozuntu bildirişi, DPIA və ilkin məsləhətləşmədə kömək edir (maddə 28(3)(f))',
        'international_transfers' => 'AİZ-dən kənara ötürmələr yalnız V fəsil mexanizmi ilə',
        'deletion_on_termination' => 'Xidmətlər bitdikdə məlumatları silir və ya qaytarır (maddə 28(3)(g))',
        'audits' => 'Məlumatları təqdim edir və auditlərə icazə verir (maddə 28(3)(h))',
    ],

    'actions' => [
        'review' => 'Yoxlanılmış kimi qeyd et',
        'terminate' => 'Əlaqəni bitir',
        'data_returned' => 'Məlumatlar silindi və ya qaytarıldı',
    ],

    'notifications' => [
        'reviewed' => 'Təchizatçı yoxlanıldı',
    ],
];
