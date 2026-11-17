<?php

return [
    'resource' => [
        'label' => 'Yetkazib beruvchi',
        'plural_label' => 'Yetkazib beruvchilar',
    ],

    'fields' => [
        'name' => 'Nomi',
        'document' => 'Ro\'yxatdan o\'tish raqami',
        'role' => 'Rol',
        'risk' => 'Xavf',
        'services' => 'Xizmatlar',
        'data_categories' => 'Ulashilgan ma\'lumotlar',
        'country' => 'Mamlakat (ISO kodi)',
        'transfer_mechanism' => 'Uzatish mexanizmi (V bob)',
        'contact' => 'Aloqa',
        'dpa_signed_at' => 'Shartnoma imzolangan',
        'dpa_expires_at' => 'Shartnoma tugaydi',
        'dpa_checklist' => 'Shartnoma qamrab oladi',
        'notes' => 'Izohlar',
        'issues' => 'Muammolar',
        'no_issues' => 'Yo\'q',
        'next_review' => 'Keyingi tekshiruv',
    ],

    'sections' => [
        'agreement' => 'Ishlovchi bilan shartnoma (28-modda)',
    ],

    'help' => [
        'country' => 'YIH dan tashqaridagi yetkazib beruvchilarga V bob bo\'yicha uzatish mexanizmi kerak.',
        'agreement' => 'Ishlovchilar 28(3)-moddani qamrab oluvchi shartnoma bilan, birgalikdagi nazoratchilar esa 26-modda bo\'yicha kelishuv bilan bog\'langan bo\'lishi kerak.',
        'terminate' => 'Yetkazib beruvchi ma\'lumotlarni o\'chirishi yoki qaytarishi kerak bo\'ladi (28(3)(g)-modda).',
    ],

    'filters' => [
        'active' => 'Faol',
    ],

    'roles' => [
        'processor' => 'Ishlov beruvchi',
        'controller' => 'Mustaqil nazoratchi',
        'joint_controller' => 'Qo\'shma nazoratchi',
    ],

    'risks' => [
        'low' => 'Past',
        'medium' => 'O\'rta',
        'high' => 'Yuqori',
    ],

    'mechanisms' => [
        'adequacy' => 'Adekvatlik qarori (45-modda)',
        'standard_clauses' => 'Standart shartnoma bandlari (46(2)(c)-modda)',
        'binding_corporate_rules' => 'Majburiy korporativ qoidalar (47-modda)',
        'codes_certification' => 'Xulq-atvor kodeksi yoki sertifikatlash (46(2)(e)-(f)-modda)',
        'ad_hoc_clauses' => 'Maxsus shartnoma bandlari (46(3)(a)-modda)',
        'administrative_arrangements' => 'Ma\'muriy kelishuvlar (46(3)(b)-modda)',
        'derogation' => 'Muayyan holat uchun istisno (49-modda)',
    ],

    'issues' => [
        'agreement_missing' => 'Imzolangan shartnoma yo\'q',
        'agreement_expired' => 'Shartnoma muddati tugagan',
        'agreement_incomplete' => 'Shartnoma to\'liq emas',
        'transfer_mechanism_missing' => 'Uzatish mexanizmi yo\'q',
        'review_due' => 'Tekshiruv vaqti keldi',
        'data_return_pending' => 'Ma\'lumotlarni qaytarish kutilmoqda',
    ],

    'checklist' => [
        'instructions' => 'Ma\'lumotlarni faqat hujjatlashtirilgan ko\'rsatmalarimiz bo\'yicha qayta ishlaydi (28(3)(a)-modda)',
        'confidentiality' => 'Ma\'lumotlarni qayta ishlashga ruxsat etilgan shaxslar maxfiylikka rioya qiladi (28(3)(b)-modda)',
        'security_measures' => '32-modda xavfsizlik choralarini ko\'radi (28(3)(c)-modda)',
        'sub_processors' => 'Quyi ishlovchilar faqat ruxsatimiz va bir xil majburiyatlar bilan (28(2) va (4)-modda)',
        'data_subject_rights' => 'Ma\'lumot subyektlarining so\'rovlariga javob berishda yordam beradi (28(3)(e)-modda)',
        'compliance_assistance' => 'Xavfsizlik, buzilish haqida xabar berish, DPIA va oldindan maslahatlashuvda yordam beradi (28(3)(f)-modda)',
        'international_transfers' => 'YIH dan tashqariga uzatish faqat V bob mexanizmi bilan',
        'deletion_on_termination' => 'Xizmatlar tugagach ma\'lumotlarni o\'chiradi yoki qaytaradi (28(3)(g)-modda)',
        'audits' => 'Ma\'lumot taqdim etadi va auditlarga ruxsat beradi (28(3)(h)-modda)',
    ],

    'actions' => [
        'review' => 'Tekshirilgan deb belgilash',
        'terminate' => 'Hamkorlikni tugatish',
        'data_returned' => 'Ma\'lumotlar o\'chirildi yoki qaytarildi',
    ],

    'notifications' => [
        'reviewed' => 'Yetkazib beruvchi tekshirildi',
    ],
];
