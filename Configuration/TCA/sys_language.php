<?php
return [
    'ctrl' => [
        'label' => 'title',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_language',
        'adminOnly' => true,
        'rootLevel' => 1,
        'enablecolumns' => [
            'disabled' => 'hidden'
        ],
        'typeicon_column' => 'flag',
        'typeicon_classes' => [
            'default' => 'mimetypes-x-sys_language',
            'mask' => 'flags-###TYPE###'
        ],
        'versioningWS_alwaysAllowLiveEdit' => true
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden,title'
    ],
    'columns' => [
        'title' => [
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'input',
                'size' => 35,
                'max' => 80,
                'eval' => 'trim,required'
            ]
        ],
        'hidden' => [
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.disable',
            'exclude' => true,
            'config' => [
                'type' => 'check',
                'default' => 0
            ]
        ],
        'language_isocode' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_language.language_isocode',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
                'items' => [],
                'itemsProcFunc' => \TYPO3\CMS\Core\Service\IsoCodeService::class . '->renderIsoCodeSelectDropdown',
            ]
        ],
        'flag' => [
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_language.flag',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0, ''],
                    ['multiple', 'multiple', 'flags-multiple'],
                    ['ad', 'ad', 'flags-ad'],
                    ['ae', 'ae', 'flags-ae'],
                    ['af', 'af', 'flags-af'],
                    ['ag', 'ag', 'flags-ag'],
                    ['ai', 'ai', 'flags-ai'],
                    ['al', 'al', 'flags-al'],
                    ['am', 'am', 'flags-am'],
                    ['an', 'an', 'flags-an'],
                    ['ao', 'ao', 'flags-ao'],
                    ['ar', 'ar', 'flags-ar'],
                    ['as', 'as', 'flags-as'],
                    ['at', 'at', 'flags-at'],
                    ['au', 'au', 'flags-au'],
                    ['aw', 'aw', 'flags-aw'],
                    ['ax', 'ax', 'flags-ax'],
                    ['az', 'az', 'flags-az'],
                    ['ba', 'ba', 'flags-ba'],
                    ['bb', 'bb', 'flags-bb'],
                    ['bd', 'bd', 'flags-bd'],
                    ['be', 'be', 'flags-be'],
                    ['bf', 'bf', 'flags-bf'],
                    ['bg', 'bg', 'flags-bg'],
                    ['bh', 'bh', 'flags-bh'],
                    ['bi', 'bi', 'flags-bi'],
                    ['bj', 'bj', 'flags-bj'],
                    ['bm', 'bm', 'flags-bm'],
                    ['bn', 'bn', 'flags-bn'],
                    ['bo', 'bo', 'flags-bo'],
                    ['br', 'br', 'flags-br'],
                    ['bs', 'bs', 'flags-bs'],
                    ['bt', 'bt', 'flags-bt'],
                    ['bv', 'bv', 'flags-bv'],
                    ['bw', 'bw', 'flags-bw'],
                    ['by', 'by', 'flags-by'],
                    ['bz', 'bz', 'flags-bz'],
                    ['ca', 'ca', 'flags-ca'],
                    ['catalonia', 'catalonia', 'flags-catalonia'],
                    ['cc', 'cc', 'flags-cc'],
                    ['cd', 'cd', 'flags-cd'],
                    ['cf', 'cf', 'flags-cf'],
                    ['cg', 'cg', 'flags-cg'],
                    ['ch', 'ch', 'flags-ch'],
                    ['ci', 'ci', 'flags-ci'],
                    ['ck', 'ck', 'flags-ck'],
                    ['cl', 'cl', 'flags-cl'],
                    ['cm', 'cm', 'flags-cm'],
                    ['cn', 'cn', 'flags-cn'],
                    ['co', 'co', 'flags-co'],
                    ['cr', 'cr', 'flags-cr'],
                    ['cs', 'cs', 'flags-cs'],
                    ['cu', 'cu', 'flags-cu'],
                    ['cv', 'cv', 'flags-cv'],
                    ['cx', 'cx', 'flags-cx'],
                    ['cy', 'cy', 'flags-cy'],
                    ['cz', 'cz', 'flags-cz'],
                    ['de', 'de', 'flags-de'],
                    ['dj', 'dj', 'flags-dj'],
                    ['dk', 'dk', 'flags-dk'],
                    ['dm', 'dm', 'flags-dm'],
                    ['do', 'do', 'flags-do'],
                    ['dz', 'dz', 'flags-dz'],
                    ['ec', 'ec', 'flags-ec'],
                    ['ee', 'ee', 'flags-ee'],
                    ['eg', 'eg', 'flags-eg'],
                    ['eh', 'eh', 'flags-eh'],
                    ['en-us-gb', 'en-us-gb', 'flags-en-us-gb'],
                    ['england', 'england', 'flags-gb-eng'],
                    ['er', 'er', 'flags-er'],
                    ['es', 'es', 'flags-es'],
                    ['et', 'et', 'flags-et'],
                    ['europeanunion', 'europeanunion', 'flags-eu'],
                    ['fam', 'fam', 'flags-fam'],
                    ['fi', 'fi', 'flags-fi'],
                    ['fj', 'fj', 'flags-fj'],
                    ['fk', 'fk', 'flags-fk'],
                    ['fm', 'fm', 'flags-fm'],
                    ['fo', 'fo', 'flags-fo'],
                    ['fr', 'fr', 'flags-fr'],
                    ['ga', 'ga', 'flags-ga'],
                    ['gb', 'gb', 'flags-gb'],
                    ['gd', 'gd', 'flags-gd'],
                    ['ge', 'ge', 'flags-ge'],
                    ['gf', 'gf', 'flags-gf'],
                    ['gh', 'gh', 'flags-gh'],
                    ['gi', 'gi', 'flags-gi'],
                    ['gl', 'gl', 'flags-gl'],
                    ['gm', 'gm', 'flags-gm'],
                    ['gn', 'gn', 'flags-gn'],
                    ['gp', 'gp', 'flags-gp'],
                    ['gq', 'gq', 'flags-gq'],
                    ['gr', 'gr', 'flags-gr'],
                    ['gs', 'gs', 'flags-gs'],
                    ['gt', 'gt', 'flags-gt'],
                    ['gu', 'gu', 'flags-gu'],
                    ['gw', 'gw', 'flags-gw'],
                    ['gy', 'gy', 'flags-gy'],
                    ['hk', 'hk', 'flags-hk'],
                    ['hm', 'hm', 'flags-hm'],
                    ['hn', 'hn', 'flags-hn'],
                    ['hr', 'hr', 'flags-hr'],
                    ['ht', 'ht', 'flags-ht'],
                    ['hu', 'hu', 'flags-hu'],
                    ['id', 'id', 'flags-id'],
                    ['ie', 'ie', 'flags-ie'],
                    ['il', 'il', 'flags-il'],
                    ['in', 'in', 'flags-in'],
                    ['io', 'io', 'flags-io'],
                    ['iq', 'iq', 'flags-iq'],
                    ['ir', 'ir', 'flags-ir'],
                    ['is', 'is', 'flags-is'],
                    ['it', 'it', 'flags-it'],
                    ['jm', 'jm', 'flags-jm'],
                    ['jo', 'jo', 'flags-jo'],
                    ['jp', 'jp', 'flags-jp'],
                    ['ke', 'ke', 'flags-ke'],
                    ['kg', 'kg', 'flags-kg'],
                    ['kh', 'kh', 'flags-kh'],
                    ['ki', 'ki', 'flags-ki'],
                    ['km', 'km', 'flags-km'],
                    ['kn', 'kn', 'flags-kn'],
                    ['kp', 'kp', 'flags-kp'],
                    ['kr', 'kr', 'flags-kr'],
                    ['kw', 'kw', 'flags-kw'],
                    ['ky', 'ky', 'flags-ky'],
                    ['kz', 'kz', 'flags-kz'],
                    ['la', 'la', 'flags-la'],
                    ['lb', 'lb', 'flags-lb'],
                    ['lc', 'lc', 'flags-lc'],
                    ['li', 'li', 'flags-li'],
                    ['lk', 'lk', 'flags-lk'],
                    ['lr', 'lr', 'flags-lr'],
                    ['ls', 'ls', 'flags-ls'],
                    ['lt', 'lt', 'flags-lt'],
                    ['lu', 'lu', 'flags-lu'],
                    ['lv', 'lv', 'flags-lv'],
                    ['ly', 'ly', 'flags-ly'],
                    ['ma', 'ma', 'flags-ma'],
                    ['mc', 'mc', 'flags-mc'],
                    ['md', 'md', 'flags-md'],
                    ['me', 'me', 'flags-me'],
                    ['mg', 'mg', 'flags-mg'],
                    ['mh', 'mh', 'flags-mh'],
                    ['mk', 'mk', 'flags-mk'],
                    ['ml', 'ml', 'flags-ml'],
                    ['mm', 'mm', 'flags-mm'],
                    ['mn', 'mn', 'flags-mn'],
                    ['mo', 'mo', 'flags-mo'],
                    ['mp', 'mp', 'flags-mp'],
                    ['mq', 'mq', 'flags-mq'],
                    ['mr', 'mr', 'flags-mr'],
                    ['ms', 'ms', 'flags-ms'],
                    ['mt', 'mt', 'flags-mt'],
                    ['mu', 'mu', 'flags-mu'],
                    ['mv', 'mv', 'flags-mv'],
                    ['mw', 'mw', 'flags-mw'],
                    ['mx', 'mx', 'flags-mx'],
                    ['my', 'my', 'flags-my'],
                    ['mz', 'mz', 'flags-mz'],
                    ['na', 'na', 'flags-na'],
                    ['nc', 'nc', 'flags-nc'],
                    ['ne', 'ne', 'flags-ne'],
                    ['nf', 'nf', 'flags-nf'],
                    ['ng', 'ng', 'flags-ng'],
                    ['ni', 'ni', 'flags-ni'],
                    ['nl', 'nl', 'flags-nl'],
                    ['no', 'no', 'flags-no'],
                    ['np', 'np', 'flags-np'],
                    ['nr', 'nr', 'flags-nr'],
                    ['nu', 'nu', 'flags-nu'],
                    ['nz', 'nz', 'flags-nz'],
                    ['om', 'om', 'flags-om'],
                    ['pa', 'pa', 'flags-pa'],
                    ['pe', 'pe', 'flags-pe'],
                    ['pf', 'pf', 'flags-pf'],
                    ['pg', 'pg', 'flags-pg'],
                    ['ph', 'ph', 'flags-ph'],
                    ['pk', 'pk', 'flags-pk'],
                    ['pl', 'pl', 'flags-pl'],
                    ['pm', 'pm', 'flags-pm'],
                    ['pn', 'pn', 'flags-pn'],
                    ['pr', 'pr', 'flags-pr'],
                    ['ps', 'ps', 'flags-ps'],
                    ['pt', 'pt', 'flags-pt'],
                    ['pw', 'pw', 'flags-pw'],
                    ['py', 'py', 'flags-py'],
                    ['qa', 'qa', 'flags-qa'],
                    ['qc', 'qc', 'flags-qc'],
                    ['re', 're', 'flags-re'],
                    ['ro', 'ro', 'flags-ro'],
                    ['rs', 'rs', 'flags-rs'],
                    ['ru', 'ru', 'flags-ru'],
                    ['rw', 'rw', 'flags-rw'],
                    ['sa', 'sa', 'flags-sa'],
                    ['sb', 'sb', 'flags-sb'],
                    ['sc', 'sc', 'flags-sc'],
                    ['scotland', 'scotland', 'flags-scotland'],
                    ['sd', 'sd', 'flags-sd'],
                    ['se', 'se', 'flags-se'],
                    ['sg', 'sg', 'flags-sg'],
                    ['sh', 'sh', 'flags-sh'],
                    ['si', 'si', 'flags-si'],
                    ['sj', 'sj', 'flags-sj'],
                    ['sk', 'sk', 'flags-sk'],
                    ['sl', 'sl', 'flags-sl'],
                    ['sm', 'sm', 'flags-sm'],
                    ['sn', 'sn', 'flags-sn'],
                    ['so', 'so', 'flags-so'],
                    ['sr', 'sr', 'flags-sr'],
                    ['st', 'st', 'flags-st'],
                    ['sv', 'sv', 'flags-sv'],
                    ['sy', 'sy', 'flags-sy'],
                    ['sz', 'sz', 'flags-sz'],
                    ['tc', 'tc', 'flags-tc'],
                    ['td', 'td', 'flags-td'],
                    ['tf', 'tf', 'flags-tf'],
                    ['tg', 'tg', 'flags-tg'],
                    ['th', 'th', 'flags-th'],
                    ['tj', 'tj', 'flags-tj'],
                    ['tk', 'tk', 'flags-tk'],
                    ['tl', 'tl', 'flags-tl'],
                    ['tm', 'tm', 'flags-tm'],
                    ['tn', 'tn', 'flags-tn'],
                    ['to', 'to', 'flags-to'],
                    ['tr', 'tr', 'flags-tr'],
                    ['tt', 'tt', 'flags-tt'],
                    ['tv', 'tv', 'flags-tv'],
                    ['tw', 'tw', 'flags-tw'],
                    ['tz', 'tz', 'flags-tz'],
                    ['ua', 'ua', 'flags-ua'],
                    ['ug', 'ug', 'flags-ug'],
                    ['um', 'um', 'flags-um'],
                    ['us', 'us', 'flags-us'],
                    ['uy', 'uy', 'flags-uy'],
                    ['uz', 'uz', 'flags-uz'],
                    ['va', 'va', 'flags-va'],
                    ['vc', 'vc', 'flags-vc'],
                    ['ve', 've', 'flags-ve'],
                    ['vg', 'vg', 'flags-vg'],
                    ['vi', 'vi', 'flags-vi'],
                    ['vn', 'vn', 'flags-vn'],
                    ['vu', 'vu', 'flags-vu'],
                    ['wales', 'wales', 'flags-wales'],
                    ['wf', 'wf', 'flags-wf'],
                    ['ws', 'ws', 'flags-ws'],
                    ['ye', 'ye', 'flags-ye'],
                    ['yt', 'yt', 'flags-yt'],
                    ['za', 'za', 'flags-za'],
                    ['zm', 'zm', 'flags-zm'],
                    ['zw', 'zw', 'flags-zw']
                ],
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
                'fieldWizard' => [
                    'selectIcons' => [
                        'disabled' => false,
                    ],
                ],
            ]
        ]
    ],
    'types' => [
        '1' => ['showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    title,language_isocode,flag,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    hidden,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ']
    ]
];
