<?php

return [
    'resource' => [
        'label' => 'Fornecedor',
        'plural_label' => 'Fornecedores',
    ],

    'fields' => [
        'name' => 'Nome',
        'document' => 'CNPJ / registro',
        'role' => 'Papel',
        'risk' => 'Risco',
        'services' => 'Serviços',
        'data_categories' => 'Dados compartilhados',
        'country' => 'País (código ISO)',
        'transfer_mechanism' => 'Mecanismo de transferência (capítulo V)',
        'contact' => 'Contato',
        'dpa_signed_at' => 'Contrato assinado em',
        'dpa_expires_at' => 'Contrato expira em',
        'dpa_checklist' => 'O contrato abrange',
        'notes' => 'Observações',
        'issues' => 'Pendências',
        'no_issues' => 'Nenhuma',
        'next_review' => 'Próxima revisão',
    ],

    'sections' => [
        'agreement' => 'Contrato com o subcontratante (art. 28)',
    ],

    'help' => [
        'country' => 'Fornecedores fora do EEE precisam de um mecanismo de transferência do capítulo V.',
        'agreement' => 'Subcontratantes devem estar vinculados por um contrato que cubra o art. 28(3); responsáveis conjuntos, por um acordo do art. 26.',
        'terminate' => 'O fornecedor passará a dever o apagamento ou a devolução dos dados (art. 28(3)(g)).',
    ],

    'filters' => [
        'active' => 'Ativos',
    ],

    'roles' => [
        'processor' => 'Operador',
        'controller' => 'Controlador independente',
        'joint_controller' => 'Controlador conjunto',
    ],

    'risks' => [
        'low' => 'Baixo',
        'medium' => 'Médio',
        'high' => 'Alto',
    ],

    'mechanisms' => [
        'adequacy' => 'Decisão de adequação (art. 45)',
        'standard_clauses' => 'Cláusulas contratuais-tipo (art. 46(2)(c))',
        'binding_corporate_rules' => 'Regras vinculativas aplicáveis às empresas (art. 47)',
        'codes_certification' => 'Código de conduta ou certificação (art. 46(2)(e)-(f))',
        'ad_hoc_clauses' => 'Cláusulas contratuais ad hoc (art. 46(3)(a))',
        'administrative_arrangements' => 'Acordos administrativos (art. 46(3)(b))',
        'derogation' => 'Derrogação para uma situação específica (art. 49)',
    ],

    'issues' => [
        'agreement_missing' => 'Sem contrato assinado',
        'agreement_expired' => 'Contrato vencido',
        'agreement_incomplete' => 'Contrato incompleto',
        'transfer_mechanism_missing' => 'Sem mecanismo de transferência',
        'review_due' => 'Revisão pendente',
        'data_return_pending' => 'Devolução dos dados pendente',
    ],

    'checklist' => [
        'instructions' => 'Trata os dados apenas segundo nossas instruções documentadas (art. 28(3)(a))',
        'confidentiality' => 'As pessoas autorizadas a tratar os dados estão sujeitas a confidencialidade (art. 28(3)(b))',
        'security_measures' => 'Adota as medidas de segurança do art. 32 (art. 28(3)(c))',
        'sub_processors' => 'Subcontratantes ulteriores só com nossa autorização e as mesmas obrigações (art. 28(2) e (4))',
        'data_subject_rights' => 'Nos ajuda a responder aos pedidos dos titulares (art. 28(3)(e))',
        'compliance_assistance' => 'Ajuda com segurança, notificação de violações, AIPD e consulta prévia (art. 28(3)(f))',
        'international_transfers' => 'Transferências para fora do EEE apenas com um mecanismo do capítulo V',
        'deletion_on_termination' => 'Apaga ou devolve os dados ao fim dos serviços (art. 28(3)(g))',
        'audits' => 'Disponibiliza informações e permite auditorias (art. 28(3)(h))',
    ],

    'actions' => [
        'review' => 'Marcar como revisado',
        'terminate' => 'Encerrar relação',
        'data_returned' => 'Dados eliminados ou devolvidos',
    ],

    'notifications' => [
        'reviewed' => 'Fornecedor revisado',
    ],
];
