<?php

return [
    'resource' => [
        'label' => '供应商',
        'plural_label' => '供应商',
    ],

    'fields' => [
        'name' => '名称',
        'document' => '注册号',
        'role' => '角色',
        'risk' => '风险',
        'services' => '服务',
        'data_categories' => '共享的数据',
        'country' => '国家（ISO 代码）',
        'transfer_mechanism' => '传输机制（第五章）',
        'contact' => '联系方式',
        'dpa_signed_at' => '合同签署日期',
        'dpa_expires_at' => '合同到期日期',
        'dpa_checklist' => '合同涵盖',
        'notes' => '备注',
        'issues' => '问题',
        'no_issues' => '无',
        'next_review' => '下次审查',
    ],

    'sections' => [
        'agreement' => '处理者合同（第28条）',
    ],

    'help' => [
        'country' => '欧洲经济区以外的供应商需要第五章规定的传输机制。',
        'agreement' => '处理者必须受涵盖第28(3)条的合同约束；共同控制者须有第26条规定的安排。',
        'terminate' => '此后供应商须删除或返还数据（第28(3)(g)条）。',
    ],

    'filters' => [
        'active' => '有效',
    ],

    'roles' => [
        'processor' => '处理者',
        'controller' => '独立控制者',
        'joint_controller' => '共同控制者',
    ],

    'risks' => [
        'low' => '低',
        'medium' => '中',
        'high' => '高',
    ],

    'mechanisms' => [
        'adequacy' => '充分性决定（第45条）',
        'standard_clauses' => '标准合同条款（第46(2)(c)条）',
        'binding_corporate_rules' => '有约束力的公司规则（第47条）',
        'codes_certification' => '行为准则或认证（第46(2)(e)-(f)条）',
        'ad_hoc_clauses' => '临时合同条款（第46(3)(a)条）',
        'administrative_arrangements' => '行政安排（第46(3)(b)条）',
        'derogation' => '特定情况下的例外（第49条）',
    ],

    'issues' => [
        'agreement_missing' => '没有已签署的合同',
        'agreement_expired' => '合同已过期',
        'agreement_incomplete' => '合同不完整',
        'transfer_mechanism_missing' => '无传输机制',
        'review_due' => '需要审查',
        'data_return_pending' => '数据返还待处理',
    ],

    'checklist' => [
        'instructions' => '仅根据我们的书面指示处理数据（第28(3)(a)条）',
        'confidentiality' => '获授权处理数据的人员负有保密义务（第28(3)(b)条）',
        'security_measures' => '采取第32条规定的安全措施（第28(3)(c)条）',
        'sub_processors' => '仅在我们授权并承担相同义务时使用次级处理者（第28(2)和(4)条）',
        'data_subject_rights' => '协助我们答复数据主体的请求（第28(3)(e)条）',
        'compliance_assistance' => '协助处理安全、违规通知、数据保护影响评估和事先咨询（第28(3)(f)条）',
        'international_transfers' => '仅依据第五章机制向欧洲经济区以外传输',
        'deletion_on_termination' => '服务结束时删除或返还数据（第28(3)(g)条）',
        'audits' => '提供信息并允许审计（第28(3)(h)条）',
    ],

    'actions' => [
        'review' => '标记为已审查',
        'terminate' => '终止合作',
        'data_returned' => '数据已删除或返还',
    ],

    'notifications' => [
        'reviewed' => '供应商已审查',
    ],
];
