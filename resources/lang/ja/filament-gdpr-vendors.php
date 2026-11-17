<?php

return [
    'resource' => [
        'label' => '委託先',
        'plural_label' => '委託先',
    ],

    'fields' => [
        'name' => '名称',
        'document' => '登録番号',
        'role' => '役割',
        'risk' => 'リスク',
        'services' => 'サービス',
        'data_categories' => '共有するデータ',
        'country' => '国（ISOコード）',
        'transfer_mechanism' => '移転の仕組み（第5章）',
        'contact' => '連絡先',
        'dpa_signed_at' => '契約締結日',
        'dpa_expires_at' => '契約満了日',
        'dpa_checklist' => '契約の対象',
        'notes' => 'メモ',
        'issues' => '課題',
        'no_issues' => 'なし',
        'next_review' => '次回レビュー',
    ],

    'sections' => [
        'agreement' => '処理者との契約（第28条）',
    ],

    'help' => [
        'country' => 'EEA域外のベンダーには第5章の移転の仕組みが必要です。',
        'agreement' => '処理者は第28条第3項を満たす契約で、共同管理者は第26条の取決めで拘束される必要があります。',
        'terminate' => 'ベンダーはその後、データを削除または返却する必要があります（第28条第3項(g)）。',
    ],

    'filters' => [
        'active' => '有効',
    ],

    'roles' => [
        'processor' => '処理者',
        'controller' => '独立した管理者',
        'joint_controller' => '共同管理者',
    ],

    'risks' => [
        'low' => '低',
        'medium' => '中',
        'high' => '高',
    ],

    'mechanisms' => [
        'adequacy' => '十分性認定（第45条）',
        'standard_clauses' => '標準契約条項（第46条第2項(c)）',
        'binding_corporate_rules' => '拘束的企業準則（第47条）',
        'codes_certification' => '行動規範または認証（第46条第2項(e)-(f)）',
        'ad_hoc_clauses' => '個別の契約条項（第46条第3項(a)）',
        'administrative_arrangements' => '行政上の取決め（第46条第3項(b)）',
        'derogation' => '特定の状況における例外（第49条）',
    ],

    'issues' => [
        'agreement_missing' => '署名済みの契約なし',
        'agreement_expired' => '契約期限切れ',
        'agreement_incomplete' => '契約が不完全',
        'transfer_mechanism_missing' => '移転の根拠なし',
        'review_due' => 'レビュー期限',
        'data_return_pending' => 'データ返却待ち',
    ],

    'checklist' => [
        'instructions' => '文書化された当社の指示にのみ基づいてデータを処理する（第28条第3項(a)）',
        'confidentiality' => 'データ処理を許可された者は守秘義務を負う（第28条第3項(b)）',
        'security_measures' => '第32条のセキュリティ対策を講じる（第28条第3項(c)）',
        'sub_processors' => '再処理者は当社の承認と同一の義務がある場合に限る（第28条第2項・第4項）',
        'data_subject_rights' => 'データ主体の請求への対応を支援する（第28条第3項(e)）',
        'compliance_assistance' => 'セキュリティ、侵害通知、DPIA、事前協議を支援する（第28条第3項(f)）',
        'international_transfers' => 'EEA域外への移転は第5章の仕組みによる場合に限る',
        'deletion_on_termination' => 'サービス終了時にデータを削除または返却する（第28条第3項(g)）',
        'audits' => '情報を提供し、監査を受け入れる（第28条第3項(h)）',
    ],

    'actions' => [
        'review' => 'レビュー済みにする',
        'terminate' => '取引を終了',
        'data_returned' => 'データ削除・返却済み',
    ],

    'notifications' => [
        'reviewed' => '委託先をレビューしました',
    ],
];
