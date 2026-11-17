<?php

return [
    'resource' => [
        'label' => 'Fornecedor',
        'plural_label' => 'Fornecedores',
    ],

    'fields' => [
        'name' => 'Nome',
        'document' => 'Número de registo',
        'role' => 'Papel',
        'risk' => 'Risco',
        'services' => 'Serviços',
        'data_categories' => 'Dados partilhados',
        'country' => 'País (código ISO)',
        'transfer_mechanism' => 'Mecanismo de transferência (capítulo V)',
        'contact' => 'Contacto',
        'dpa_signed_at' => 'Contrato assinado em',
        'dpa_expires_at' => 'Contrato expira em',
        'dpa_checklist' => 'O contrato abrange',
        'notes' => 'Notas',
        'issues' => 'Pendências',
        'no_issues' => 'Nenhuma',
        'next_review' => 'Próxima revisão',
    ],

    'sections' => [
        'agreement' => 'Contrato com o subcontratante (art. 28.º)',
    ],

    'help' => [
        'country' => 'Os fornecedores fora do EEE precisam de um mecanismo de transferência do capítulo V.',
        'agreement' => 'Os subcontratantes devem estar vinculados por um contrato que cubra o art. 28.º, n.º 3; os responsáveis conjuntos, por um acordo do art. 26.º.',
        'terminate' => 'O fornecedor ficará obrigado a apagar ou devolver os dados (art. 28.º, n.º 3, al. g)).',
    ],

    'filters' => [
        'active' => 'Ativos',
    ],

    'roles' => [
        'processor' => 'Subcontratante',
        'controller' => 'Responsável independente',
        'joint_controller' => 'Responsável conjunto',
    ],

    'risks' => [
        'low' => 'Baixo',
        'medium' => 'Médio',
        'high' => 'Alto',
    ],

    'mechanisms' => [
        'adequacy' => 'Decisão de adequação (art. 45.º)',
        'standard_clauses' => 'Cláusulas contratuais-tipo (art. 46.º, n.º 2, al. c))',
        'binding_corporate_rules' => 'Regras vinculativas aplicáveis às empresas (art. 47.º)',
        'codes_certification' => 'Código de conduta ou certificação (art. 46.º, n.º 2, als. e)-f))',
        'ad_hoc_clauses' => 'Cláusulas contratuais ad hoc (art. 46.º, n.º 3, al. a))',
        'administrative_arrangements' => 'Acordos administrativos (art. 46.º, n.º 3, al. b))',
        'derogation' => 'Derrogação para situações específicas (art. 49.º)',
    ],

    'issues' => [
        'agreement_missing' => 'Sem contrato assinado',
        'agreement_expired' => 'Contrato expirado',
        'agreement_incomplete' => 'Contrato incompleto',
        'transfer_mechanism_missing' => 'Sem mecanismo de transferência',
        'review_due' => 'Revisão em falta',
        'data_return_pending' => 'Devolução dos dados pendente',
    ],

    'checklist' => [
        'instructions' => 'Trata os dados apenas mediante as nossas instruções documentadas (art. 28.º, n.º 3, al. a))',
        'confidentiality' => 'As pessoas autorizadas a tratar os dados estão sujeitas a confidencialidade (art. 28.º, n.º 3, al. b))',
        'security_measures' => 'Adota as medidas de segurança do art. 32.º (art. 28.º, n.º 3, al. c))',
        'sub_processors' => 'Subcontratantes ulteriores apenas com a nossa autorização e as mesmas obrigações (art. 28.º, n.ºs 2 e 4)',
        'data_subject_rights' => 'Ajuda-nos a responder aos pedidos dos titulares (art. 28.º, n.º 3, al. e))',
        'compliance_assistance' => 'Ajuda com a segurança, notificação de violações, AIPD e consulta prévia (art. 28.º, n.º 3, al. f))',
        'international_transfers' => 'Transferências para fora do EEE apenas com um mecanismo do capítulo V',
        'deletion_on_termination' => 'Apaga ou devolve os dados no fim dos serviços (art. 28.º, n.º 3, al. g))',
        'audits' => 'Disponibiliza informações e permite auditorias (art. 28.º, n.º 3, al. h))',
    ],

    'actions' => [
        'review' => 'Marcar como revisto',
        'terminate' => 'Terminar relação',
        'data_returned' => 'Dados apagados ou devolvidos',
    ],

    'notifications' => [
        'reviewed' => 'Fornecedor revisto',
    ],
];
