<?php

return [
    'title' => 'لوحة التحكم',
    'grid' => [
        'char-list' => 'قائمة الشخصيات',
        'char-list-desc' => 'هنا يمكنك رؤية الشخصيات الخاصة بك بمعلومات إضافية.',
        'settings' => 'إعدادات',
        'settings-desc' => 'في الإعدادات ، يمكنك تغيير كلمات المرور والبريد الإلكتروني والتغييرات الأخرى. إذا فاتك شيء ، أخبرنا بذلك.',
        'donation' => 'الشحن',
        'donation-desc' => 'تحت هذه النقطة يمكنك أن تفعل شيئًا جيدًا وتدعمنا! كشكر لك سوف تحصل على :silk في اللعبة.',
        'other' => 'منوعات',
        'other-desc' => 'كل ما لم يتم وضعه بعد بالضبط ، يمكن العثور عليه تحت هذه النقطة.',
        'ref' => 'الأحالة',
        'ref-desc' => 'لمعرفة من قمت بدعوته بالفعل والمبلغ الذي ربحته ، انقر هنا.',
        'tickets' => 'تذاكر الدعم',
        'tickets-desc' => 'لديك مشكلة او طلب؟ هنا يمكنك إنشاء تذكرة وسنتولى أمرها.',
        'voucher' => 'قسايم الشحن',
        'voucher-desc' => 'لديك قسيمة شحن وتريد استبدالها بـ :silk? ثم يمكنك استرداد هذا',
        'web-inventory' => 'حقيبة الويب',
        'web-inventory-help' => 'هنا يمكنك العثور على "المخزون" حيث توجد العناصر التي تم شراؤها أو بيعها.',
        'voteforsilk' => 'Vote for silk',
        'voteforsilk-help' => 'You want to gain easy silk? Here you can vote for our Server and gain some.',
        'web-mall' => 'Web Mall',
        'web-mall-help' => 'Here you can buy items from "Web Mall" using silk, it will be added instantly to your storage.',
    ],

    'chars-list' => [
        'title' => 'قائمة الشخصيات',
        'no-chars' => 'يرجى إنشاء شخصية لمزيد من الخدمات و الوظائف.',
        'last-logout' => 'آخر Logout:',
        'level' => 'Level:',
        'gold' => 'Gold:',
        'guild' => 'Guild:',
        'logged-in' => 'تم الدخول',
        'logged-out' => 'تم الخروج',
    ],

    'donations' => [
        'title' => 'الشحن',
        'text' => ' فى السيرفر الخاص بنا ' . config('siteSettings.sro_silk_name', 'Silk') . 'يمكنك اختيار واحد من عدة مقدمين الخدمة حيث يمكنك الشحن بالمال. في المقابل تحصل على ',
        'no_methods' => 'لم يتم العثور على أي طرق للدفع ، لم يقم المسؤول بتنشيط أحدهها.',
    ],

    'settings' => [
        'title' => 'إعدادات',
        'form' => [
            'name' => 'الإ سم',
            'email' => 'البريد الإلكتروني',
            'map' => 'الخريطة',
            'referral' => 'رابط الإحالة',
            'show-map' => 'اعرض حساباتك على الخريطة',
            'silkroad-password' => 'كلمة سر جديدة لـ Silkroad',
            'silkroad-password-confirmation' => 'تأكيد كلمة سر لـ Silkroad',
            'web-password' => 'كلمة سر الويب',
            'web-password-confirmation' => 'تأكيد كلمة سر الويب',
            'current-web-password' => 'كلمة السر الحالية للويب',
            'current-web-password-help' => 'تحتاج إلى ملء هذا لتغيير أي بيانات!',
            'submit' => 'حفط الإعدادات',
            'wrong-current-web-password' => 'كلمة المرور المدخلة خاطئة',
            'successfully' => 'لقد تغيرت البيانات الخاصة بك بنجاح.',
        ]
    ],

    'ref' => [
        'title' => 'الإحالة',
        'signature' => 'التوقيع',
        'no-signature' => 'حاليا لا يوجد توقيع مضاف.',
        'your-ref' => 'الإحالات الخاصة بك',
        'table' => [
            'name' => 'أسم الحساب',
            'date' => 'التاريخ',
        ]
    ],

    'voucher' => [
        'title' => 'استرداد القسيمة',
        'table' => [
            'voucher' => 'القسيمة',
            'amount' => 'المبلغ',
            'used-at' => 'متى استخدمت',
        ],
        'form' => [
            'voucher' => 'القسيمة',
            'voucher-help' => 'هنا يمكنك استرداد القسيمة عن طريق الرمز الخاص بك',
            'submit' => 'استرداد'
        ],
    ],

    'tickets' => [
        'title' => 'تذاكر الدعم',
        'create-new' => 'تذكرة جديدة',
        'table' => [
            'title' => 'العنوان',
            'state' => 'الحالة',
            'priority' => 'الأولية',
            'updated-at' => 'تم التحديث في',
            'action' => 'أجراءات'
        ],

        'new' => [
            'title' => 'تذكرة جديدة',
            'form' => [
                'title' => 'العنوان',
                'category' => 'الفئة',
                'no-categories' => 'حاليا لا توجد فئات حتى الآن',
                'priority' => 'الأولية',
                'no-priorities' => 'حاليا لا توجد أولويات بعد',
                'body' => 'النص',
                'body-placeholder' => 'هنا يمكنك وصف طلبك',
                'submit' => 'إنشاء تذكرة',
                'successfully' => 'لقد تم إنشاء التذكرة بنجاح.',
            ]
        ],
        'show' => [
            'title' => 'عرض التذكرة',
            'form' => [
                'title' => 'العنوان:',
                'category' => 'الفئة:',
                'priority' => 'الأولية:',
                'state' => 'الحالة:',
                'reply' => 'نص الرد',
                'reply-placeholder' => 'هنا يمكنك كتابة إجابتك',
                'submit' => 'الرد على التذكرة',
                'submit-close' => 'تم إغلاق التذكرة!',
                'closed-state' => 'عند الرد عليك إعادة فتح التذكرة',
                'wrong-owner' => 'هناك خطأ ما ، يبدو أنك لست صاحب التذكرة.',
                'successfully' => 'لقد نجحت في الرد على هذه التذكرة.',
            ],
        ]
    ]
];
