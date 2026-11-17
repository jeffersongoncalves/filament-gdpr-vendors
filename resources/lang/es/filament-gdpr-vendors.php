<?php

return [
    'resource' => [
        'label' => 'Proveedor',
        'plural_label' => 'Proveedores',
    ],

    'fields' => [
        'name' => 'Nombre',
        'document' => 'Número de registro',
        'role' => 'Rol',
        'risk' => 'Riesgo',
        'services' => 'Servicios',
        'data_categories' => 'Datos compartidos',
        'country' => 'País (código ISO)',
        'transfer_mechanism' => 'Mecanismo de transferencia (capítulo V)',
        'contact' => 'Contacto',
        'dpa_signed_at' => 'Contrato firmado el',
        'dpa_expires_at' => 'Contrato vence el',
        'dpa_checklist' => 'El contrato cubre',
        'notes' => 'Notas',
        'issues' => 'Pendientes',
        'no_issues' => 'Ninguno',
        'next_review' => 'Próxima revisión',
    ],

    'sections' => [
        'agreement' => 'Contrato de encargo (art. 28)',
    ],

    'help' => [
        'country' => 'Los proveedores fuera del EEE necesitan un mecanismo de transferencia del capítulo V.',
        'agreement' => 'Los encargados deben estar vinculados por un contrato que cubra el art. 28(3); los corresponsables, por un acuerdo del art. 26.',
        'terminate' => 'El proveedor deberá entonces suprimir o devolver los datos (art. 28(3)(g)).',
    ],

    'filters' => [
        'active' => 'Activos',
    ],

    'roles' => [
        'processor' => 'Encargado',
        'controller' => 'Responsable independiente',
        'joint_controller' => 'Corresponsable',
    ],

    'risks' => [
        'low' => 'Bajo',
        'medium' => 'Medio',
        'high' => 'Alto',
    ],

    'mechanisms' => [
        'adequacy' => 'Decisión de adecuación (art. 45)',
        'standard_clauses' => 'Cláusulas contractuales tipo (art. 46(2)(c))',
        'binding_corporate_rules' => 'Normas corporativas vinculantes (art. 47)',
        'codes_certification' => 'Código de conducta o certificación (art. 46(2)(e)-(f))',
        'ad_hoc_clauses' => 'Cláusulas contractuales ad hoc (art. 46(3)(a))',
        'administrative_arrangements' => 'Acuerdos administrativos (art. 46(3)(b))',
        'derogation' => 'Excepción para situaciones específicas (art. 49)',
    ],

    'issues' => [
        'agreement_missing' => 'Sin contrato firmado',
        'agreement_expired' => 'Contrato vencido',
        'agreement_incomplete' => 'Contrato incompleto',
        'transfer_mechanism_missing' => 'Sin mecanismo de transferencia',
        'review_due' => 'Revisión pendiente',
        'data_return_pending' => 'Devolución de datos pendiente',
    ],

    'checklist' => [
        'instructions' => 'Trata los datos solo siguiendo nuestras instrucciones documentadas (art. 28(3)(a))',
        'confidentiality' => 'Las personas autorizadas a tratar los datos están obligadas a la confidencialidad (art. 28(3)(b))',
        'security_measures' => 'Adopta las medidas de seguridad del art. 32 (art. 28(3)(c))',
        'sub_processors' => 'Subencargados solo con nuestra autorización y las mismas obligaciones (art. 28(2) y (4))',
        'data_subject_rights' => 'Nos ayuda a responder a las solicitudes de los interesados (art. 28(3)(e))',
        'compliance_assistance' => 'Ayuda con la seguridad, la notificación de brechas, las EIPD y la consulta previa (art. 28(3)(f))',
        'international_transfers' => 'Transferencias fuera del EEE solo con un mecanismo del capítulo V',
        'deletion_on_termination' => 'Suprime o devuelve los datos al final de los servicios (art. 28(3)(g))',
        'audits' => 'Pone a disposición la información y permite auditorías (art. 28(3)(h))',
    ],

    'actions' => [
        'review' => 'Marcar como revisado',
        'terminate' => 'Terminar relación',
        'data_returned' => 'Datos eliminados o devueltos',
    ],

    'notifications' => [
        'reviewed' => 'Proveedor revisado',
    ],
];
