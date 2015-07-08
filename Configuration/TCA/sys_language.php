<?php
return array(
	'ctrl' => array(
		'label' => 'title',
		'tstamp' => 'tstamp',
		'default_sortby' => 'ORDER BY title',
		'title' => 'LLL:EXT:lang/locallang_tca.xlf:sys_language',
		'adminOnly' => 1,
		'rootLevel' => 1,
		'enablecolumns' => array(
			'disabled' => 'hidden'
		),
		'typeicon_column' => 'flag',
		'typeicon_classes' => array(
			'default' => 'mimetypes-x-sys_language',
			'mask' => 'flags-###TYPE###'
		),
		'versioningWS_alwaysAllowLiveEdit' => TRUE
	),
	'interface' => array(
		'showRecordFieldList' => 'hidden,title'
	),
	'columns' => array(
		'title' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'input',
				'size' => '35',
				'max' => '80',
				'eval' => 'trim,required'
			)
		),
		'hidden' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.disable',
			'exclude' => 1,
			'config' => array(
				'type' => 'check',
				'default' => '0'
			)
		),
		'language_isocode' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_language.language_isocode',
			'config' => array(
				'type' => 'select',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
				// list taken from http://en.wikipedia.org/wiki/List_of_ISO_639-1_codes
				'items' => array(
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ab', 'ab'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.aa', 'aa'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.af', 'af'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ak', 'ak'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.sq', 'sq'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.am', 'am'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ar', 'ar'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.an', 'an'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.hy', 'hy'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.as', 'as'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.av', 'av'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ae', 'ae'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ay', 'ay'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.az', 'az'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.bm', 'bm'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ba', 'ba'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.eu', 'eu'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.be', 'be'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.bn', 'bn'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.bh', 'bh'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.bi', 'bi'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.bs', 'bs'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.br', 'br'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.bg', 'bg'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.my', 'my'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ca', 'ca'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ch', 'ch'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ce', 'ce'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ny', 'ny'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.zh', 'zh'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.cv', 'cv'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.kw', 'kw'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.co', 'co'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.cr', 'cr'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.hr', 'hr'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.cs', 'cs'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.da', 'da'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.dv', 'dv'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.nl', 'nl'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.dz', 'dz'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.en', 'en'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.eo', 'eo'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.et', 'et'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ee', 'ee'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.fo', 'fo'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.fj', 'fj'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.fi', 'fi'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.fr', 'fr'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ff', 'ff'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.gl', 'gl'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ka', 'ka'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.de', 'de'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.el', 'el'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.gn', 'gn'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.gu', 'gu'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ht', 'ht'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ha', 'ha'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.he', 'he'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.hz', 'hz'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.hi', 'hi'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ho', 'ho'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.hu', 'hu'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ia', 'ia'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.id', 'id'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ie', 'ie'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ga', 'ga'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ig', 'ig'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ik', 'ik'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.io', 'io'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.is', 'is'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.it', 'it'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.iu', 'iu'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ja', 'ja'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.jv', 'jv'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.kl', 'kl'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.kn', 'kn'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.kr', 'kr'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ks', 'ks'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.kk', 'kk'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.km', 'km'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ki', 'ki'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.rw', 'rw'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ky', 'ky'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.kv', 'kv'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.kg', 'kg'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ko', 'ko'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ku', 'ku'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.kj', 'kj'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.la', 'la'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.lb', 'lb'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.lg', 'lg'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.li', 'li'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ln', 'ln'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.lo', 'lo'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.lt', 'lt'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.lu', 'lu'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.lv', 'lv'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.gv', 'gv'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.mk', 'mk'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.mg', 'mg'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ms', 'ms'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ml', 'ml'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.mt', 'mt'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.mi', 'mi'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.mr', 'mr'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.mh', 'mh'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.mn', 'mn'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.na', 'na'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.nv', 'nv'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.nd', 'nd'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ne', 'ne'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ng', 'ng'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.nb', 'nb'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.nn', 'nn'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.no', 'no'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ii', 'ii'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.nr', 'nr'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.oc', 'oc'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.oj', 'oj'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.cu', 'cu'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.om', 'om'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.or', 'or'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.os', 'os'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.pa', 'pa'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.pi', 'pi'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.fa', 'fa'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.pl', 'pl'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ps', 'ps'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.pt', 'pt'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.qu', 'qu'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.rm', 'rm'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.rn', 'rn'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ro', 'ro'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ru', 'ru'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.sa', 'sa'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.sc', 'sc'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.sd', 'sd'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.se', 'se'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.sm', 'sm'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.sg', 'sg'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.sr', 'sr'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.gd', 'gd'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.sn', 'sn'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.si', 'si'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.sk', 'sk'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.sl', 'sl'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.so', 'so'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.st', 'st'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.es', 'es'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.su', 'su'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.sw', 'sw'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ss', 'ss'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.sv', 'sv'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ta', 'ta'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.te', 'te'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.tg', 'tg'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.th', 'th'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ti', 'ti'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.bo', 'bo'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.tk', 'tk'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.tl', 'tl'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.tn', 'tn'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.to', 'to'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.tr', 'tr'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ts', 'ts'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.tt', 'tt'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.tw', 'tw'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ty', 'ty'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ug', 'ug'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.uk', 'uk'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ur', 'ur'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.uz', 'uz'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.ve', 've'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.vi', 'vi'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.vo', 'vo'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.wa', 'wa'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.cy', 'cy'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.wo', 'wo'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.fy', 'fy'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.xh', 'xh'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.yi', 'yi'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.yo', 'yo'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.za', 'za'),
					array('LLL:EXT:core/Resources/Private/Language/db.xlf:sys_language.language_isocode.zu', 'zu')
				)
			)
		),
		'static_lang_isocode' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_language.isocode',
			'displayCond' => 'EXT:static_info_tables:LOADED:true',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0)
				),
				'foreign_table' => 'static_languages',
				'foreign_table_where' => 'AND static_languages.pid=0 ORDER BY static_languages.lg_name_en',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1
			)
		),
		'flag' => array(
			'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_language.flag',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0, ''),
					array('multiple', 'multiple', 'EXT:core/Resources/Public/Icons/Flags/multiple.png'),
					array('ad', 'ad', 'EXT:core/Resources/Public/Icons/Flags/ad.png'),
					array('ae', 'ae', 'EXT:core/Resources/Public/Icons/Flags/ae.png'),
					array('af', 'af', 'EXT:core/Resources/Public/Icons/Flags/af.png'),
					array('ag', 'ag', 'EXT:core/Resources/Public/Icons/Flags/ag.png'),
					array('ai', 'ai', 'EXT:core/Resources/Public/Icons/Flags/ai.png'),
					array('al', 'al', 'EXT:core/Resources/Public/Icons/Flags/al.png'),
					array('am', 'am', 'EXT:core/Resources/Public/Icons/Flags/am.png'),
					array('an', 'an', 'EXT:core/Resources/Public/Icons/Flags/an.png'),
					array('ao', 'ao', 'EXT:core/Resources/Public/Icons/Flags/ao.png'),
					array('ar', 'ar', 'EXT:core/Resources/Public/Icons/Flags/ar.png'),
					array('as', 'as', 'EXT:core/Resources/Public/Icons/Flags/as.png'),
					array('at', 'at', 'EXT:core/Resources/Public/Icons/Flags/at.png'),
					array('au', 'au', 'EXT:core/Resources/Public/Icons/Flags/au.png'),
					array('aw', 'aw', 'EXT:core/Resources/Public/Icons/Flags/aw.png'),
					array('ax', 'ax', 'EXT:core/Resources/Public/Icons/Flags/ax.png'),
					array('az', 'az', 'EXT:core/Resources/Public/Icons/Flags/az.png'),
					array('ba', 'ba', 'EXT:core/Resources/Public/Icons/Flags/ba.png'),
					array('bb', 'bb', 'EXT:core/Resources/Public/Icons/Flags/bb.png'),
					array('bd', 'bd', 'EXT:core/Resources/Public/Icons/Flags/bd.png'),
					array('be', 'be', 'EXT:core/Resources/Public/Icons/Flags/be.png'),
					array('bf', 'bf', 'EXT:core/Resources/Public/Icons/Flags/bf.png'),
					array('bg', 'bg', 'EXT:core/Resources/Public/Icons/Flags/bg.png'),
					array('bh', 'bh', 'EXT:core/Resources/Public/Icons/Flags/bh.png'),
					array('bi', 'bi', 'EXT:core/Resources/Public/Icons/Flags/bi.png'),
					array('bj', 'bj', 'EXT:core/Resources/Public/Icons/Flags/bj.png'),
					array('bm', 'bm', 'EXT:core/Resources/Public/Icons/Flags/bm.png'),
					array('bn', 'bn', 'EXT:core/Resources/Public/Icons/Flags/bn.png'),
					array('bo', 'bo', 'EXT:core/Resources/Public/Icons/Flags/bo.png'),
					array('br', 'br', 'EXT:core/Resources/Public/Icons/Flags/br.png'),
					array('bs', 'bs', 'EXT:core/Resources/Public/Icons/Flags/bs.png'),
					array('bt', 'bt', 'EXT:core/Resources/Public/Icons/Flags/bt.png'),
					array('bv', 'bv', 'EXT:core/Resources/Public/Icons/Flags/bv.png'),
					array('bw', 'bw', 'EXT:core/Resources/Public/Icons/Flags/bw.png'),
					array('by', 'by', 'EXT:core/Resources/Public/Icons/Flags/by.png'),
					array('bz', 'bz', 'EXT:core/Resources/Public/Icons/Flags/bz.png'),
					array('ca', 'ca', 'EXT:core/Resources/Public/Icons/Flags/ca.png'),
					array('catalonia', 'catalonia', 'EXT:core/Resources/Public/Icons/Flags/catalonia.png'),
					array('cc', 'cc', 'EXT:core/Resources/Public/Icons/Flags/cc.png'),
					array('cd', 'cd', 'EXT:core/Resources/Public/Icons/Flags/cd.png'),
					array('cf', 'cf', 'EXT:core/Resources/Public/Icons/Flags/cf.png'),
					array('cg', 'cg', 'EXT:core/Resources/Public/Icons/Flags/cg.png'),
					array('ch', 'ch', 'EXT:core/Resources/Public/Icons/Flags/ch.png'),
					array('ci', 'ci', 'EXT:core/Resources/Public/Icons/Flags/ci.png'),
					array('ck', 'ck', 'EXT:core/Resources/Public/Icons/Flags/ck.png'),
					array('cl', 'cl', 'EXT:core/Resources/Public/Icons/Flags/cl.png'),
					array('cm', 'cm', 'EXT:core/Resources/Public/Icons/Flags/cm.png'),
					array('cn', 'cn', 'EXT:core/Resources/Public/Icons/Flags/cn.png'),
					array('co', 'co', 'EXT:core/Resources/Public/Icons/Flags/co.png'),
					array('cr', 'cr', 'EXT:core/Resources/Public/Icons/Flags/cr.png'),
					array('cs', 'cs', 'EXT:core/Resources/Public/Icons/Flags/cs.png'),
					array('cu', 'cu', 'EXT:core/Resources/Public/Icons/Flags/cu.png'),
					array('cv', 'cv', 'EXT:core/Resources/Public/Icons/Flags/cv.png'),
					array('cx', 'cx', 'EXT:core/Resources/Public/Icons/Flags/cx.png'),
					array('cy', 'cy', 'EXT:core/Resources/Public/Icons/Flags/cy.png'),
					array('cz', 'cz', 'EXT:core/Resources/Public/Icons/Flags/cz.png'),
					array('de', 'de', 'EXT:core/Resources/Public/Icons/Flags/de.png'),
					array('dj', 'dj', 'EXT:core/Resources/Public/Icons/Flags/dj.png'),
					array('dk', 'dk', 'EXT:core/Resources/Public/Icons/Flags/dk.png'),
					array('dm', 'dm', 'EXT:core/Resources/Public/Icons/Flags/dm.png'),
					array('do', 'do', 'EXT:core/Resources/Public/Icons/Flags/do.png'),
					array('dz', 'dz', 'EXT:core/Resources/Public/Icons/Flags/dz.png'),
					array('ec', 'ec', 'EXT:core/Resources/Public/Icons/Flags/ec.png'),
					array('ee', 'ee', 'EXT:core/Resources/Public/Icons/Flags/ee.png'),
					array('eg', 'eg', 'EXT:core/Resources/Public/Icons/Flags/eg.png'),
					array('eh', 'eh', 'EXT:core/Resources/Public/Icons/Flags/eh.png'),
					array('england', 'england', 'EXT:core/Resources/Public/Icons/Flags/england.png'),
					array('er', 'er', 'EXT:core/Resources/Public/Icons/Flags/er.png'),
					array('es', 'es', 'EXT:core/Resources/Public/Icons/Flags/es.png'),
					array('et', 'et', 'EXT:core/Resources/Public/Icons/Flags/et.png'),
					array('europeanunion', 'europeanunion', 'EXT:core/Resources/Public/Icons/Flags/europeanunion.png'),
					array('fam', 'fam', 'EXT:core/Resources/Public/Icons/Flags/fam.png'),
					array('fi', 'fi', 'EXT:core/Resources/Public/Icons/Flags/fi.png'),
					array('fj', 'fj', 'EXT:core/Resources/Public/Icons/Flags/fj.png'),
					array('fk', 'fk', 'EXT:core/Resources/Public/Icons/Flags/fk.png'),
					array('fm', 'fm', 'EXT:core/Resources/Public/Icons/Flags/fm.png'),
					array('fo', 'fo', 'EXT:core/Resources/Public/Icons/Flags/fo.png'),
					array('fr', 'fr', 'EXT:core/Resources/Public/Icons/Flags/fr.png'),
					array('ga', 'ga', 'EXT:core/Resources/Public/Icons/Flags/ga.png'),
					array('gb', 'gb', 'EXT:core/Resources/Public/Icons/Flags/gb.png'),
					array('gd', 'gd', 'EXT:core/Resources/Public/Icons/Flags/gd.png'),
					array('ge', 'ge', 'EXT:core/Resources/Public/Icons/Flags/ge.png'),
					array('gf', 'gf', 'EXT:core/Resources/Public/Icons/Flags/gf.png'),
					array('gh', 'gh', 'EXT:core/Resources/Public/Icons/Flags/gh.png'),
					array('gi', 'gi', 'EXT:core/Resources/Public/Icons/Flags/gi.png'),
					array('gl', 'gl', 'EXT:core/Resources/Public/Icons/Flags/gl.png'),
					array('gm', 'gm', 'EXT:core/Resources/Public/Icons/Flags/gm.png'),
					array('gn', 'gn', 'EXT:core/Resources/Public/Icons/Flags/gn.png'),
					array('gp', 'gp', 'EXT:core/Resources/Public/Icons/Flags/gp.png'),
					array('gq', 'gq', 'EXT:core/Resources/Public/Icons/Flags/gq.png'),
					array('gr', 'gr', 'EXT:core/Resources/Public/Icons/Flags/gr.png'),
					array('gs', 'gs', 'EXT:core/Resources/Public/Icons/Flags/gs.png'),
					array('gt', 'gt', 'EXT:core/Resources/Public/Icons/Flags/gt.png'),
					array('gu', 'gu', 'EXT:core/Resources/Public/Icons/Flags/gu.png'),
					array('gw', 'gw', 'EXT:core/Resources/Public/Icons/Flags/gw.png'),
					array('gy', 'gy', 'EXT:core/Resources/Public/Icons/Flags/gy.png'),
					array('hk', 'hk', 'EXT:core/Resources/Public/Icons/Flags/hk.png'),
					array('hm', 'hm', 'EXT:core/Resources/Public/Icons/Flags/hm.png'),
					array('hn', 'hn', 'EXT:core/Resources/Public/Icons/Flags/hn.png'),
					array('hr', 'hr', 'EXT:core/Resources/Public/Icons/Flags/hr.png'),
					array('ht', 'ht', 'EXT:core/Resources/Public/Icons/Flags/ht.png'),
					array('hu', 'hu', 'EXT:core/Resources/Public/Icons/Flags/hu.png'),
					array('id', 'id', 'EXT:core/Resources/Public/Icons/Flags/id.png'),
					array('ie', 'ie', 'EXT:core/Resources/Public/Icons/Flags/ie.png'),
					array('il', 'il', 'EXT:core/Resources/Public/Icons/Flags/il.png'),
					array('in', 'in', 'EXT:core/Resources/Public/Icons/Flags/in.png'),
					array('io', 'io', 'EXT:core/Resources/Public/Icons/Flags/io.png'),
					array('iq', 'iq', 'EXT:core/Resources/Public/Icons/Flags/iq.png'),
					array('ir', 'ir', 'EXT:core/Resources/Public/Icons/Flags/ir.png'),
					array('is', 'is', 'EXT:core/Resources/Public/Icons/Flags/is.png'),
					array('it', 'it', 'EXT:core/Resources/Public/Icons/Flags/it.png'),
					array('jm', 'jm', 'EXT:core/Resources/Public/Icons/Flags/jm.png'),
					array('jo', 'jo', 'EXT:core/Resources/Public/Icons/Flags/jo.png'),
					array('jp', 'jp', 'EXT:core/Resources/Public/Icons/Flags/jp.png'),
					array('ke', 'ke', 'EXT:core/Resources/Public/Icons/Flags/ke.png'),
					array('kg', 'kg', 'EXT:core/Resources/Public/Icons/Flags/kg.png'),
					array('kh', 'kh', 'EXT:core/Resources/Public/Icons/Flags/kh.png'),
					array('ki', 'ki', 'EXT:core/Resources/Public/Icons/Flags/ki.png'),
					array('km', 'km', 'EXT:core/Resources/Public/Icons/Flags/km.png'),
					array('kn', 'kn', 'EXT:core/Resources/Public/Icons/Flags/kn.png'),
					array('kp', 'kp', 'EXT:core/Resources/Public/Icons/Flags/kp.png'),
					array('kr', 'kr', 'EXT:core/Resources/Public/Icons/Flags/kr.png'),
					array('kw', 'kw', 'EXT:core/Resources/Public/Icons/Flags/kw.png'),
					array('ky', 'ky', 'EXT:core/Resources/Public/Icons/Flags/ky.png'),
					array('kz', 'kz', 'EXT:core/Resources/Public/Icons/Flags/kz.png'),
					array('la', 'la', 'EXT:core/Resources/Public/Icons/Flags/la.png'),
					array('lb', 'lb', 'EXT:core/Resources/Public/Icons/Flags/lb.png'),
					array('lc', 'lc', 'EXT:core/Resources/Public/Icons/Flags/lc.png'),
					array('li', 'li', 'EXT:core/Resources/Public/Icons/Flags/li.png'),
					array('lk', 'lk', 'EXT:core/Resources/Public/Icons/Flags/lk.png'),
					array('lr', 'lr', 'EXT:core/Resources/Public/Icons/Flags/lr.png'),
					array('ls', 'ls', 'EXT:core/Resources/Public/Icons/Flags/ls.png'),
					array('lt', 'lt', 'EXT:core/Resources/Public/Icons/Flags/lt.png'),
					array('lu', 'lu', 'EXT:core/Resources/Public/Icons/Flags/lu.png'),
					array('lv', 'lv', 'EXT:core/Resources/Public/Icons/Flags/lv.png'),
					array('ly', 'ly', 'EXT:core/Resources/Public/Icons/Flags/ly.png'),
					array('ma', 'ma', 'EXT:core/Resources/Public/Icons/Flags/ma.png'),
					array('mc', 'mc', 'EXT:core/Resources/Public/Icons/Flags/mc.png'),
					array('md', 'md', 'EXT:core/Resources/Public/Icons/Flags/md.png'),
					array('me', 'me', 'EXT:core/Resources/Public/Icons/Flags/me.png'),
					array('mg', 'mg', 'EXT:core/Resources/Public/Icons/Flags/mg.png'),
					array('mh', 'mh', 'EXT:core/Resources/Public/Icons/Flags/mh.png'),
					array('mk', 'mk', 'EXT:core/Resources/Public/Icons/Flags/mk.png'),
					array('ml', 'ml', 'EXT:core/Resources/Public/Icons/Flags/ml.png'),
					array('mm', 'mm', 'EXT:core/Resources/Public/Icons/Flags/mm.png'),
					array('mn', 'mn', 'EXT:core/Resources/Public/Icons/Flags/mn.png'),
					array('mo', 'mo', 'EXT:core/Resources/Public/Icons/Flags/mo.png'),
					array('mp', 'mp', 'EXT:core/Resources/Public/Icons/Flags/mp.png'),
					array('mq', 'mq', 'EXT:core/Resources/Public/Icons/Flags/mq.png'),
					array('mr', 'mr', 'EXT:core/Resources/Public/Icons/Flags/mr.png'),
					array('ms', 'ms', 'EXT:core/Resources/Public/Icons/Flags/ms.png'),
					array('mt', 'mt', 'EXT:core/Resources/Public/Icons/Flags/mt.png'),
					array('mu', 'mu', 'EXT:core/Resources/Public/Icons/Flags/mu.png'),
					array('mv', 'mv', 'EXT:core/Resources/Public/Icons/Flags/mv.png'),
					array('mw', 'mw', 'EXT:core/Resources/Public/Icons/Flags/mw.png'),
					array('mx', 'mx', 'EXT:core/Resources/Public/Icons/Flags/mx.png'),
					array('my', 'my', 'EXT:core/Resources/Public/Icons/Flags/my.png'),
					array('mz', 'mz', 'EXT:core/Resources/Public/Icons/Flags/mz.png'),
					array('na', 'na', 'EXT:core/Resources/Public/Icons/Flags/na.png'),
					array('nc', 'nc', 'EXT:core/Resources/Public/Icons/Flags/nc.png'),
					array('ne', 'ne', 'EXT:core/Resources/Public/Icons/Flags/ne.png'),
					array('nf', 'nf', 'EXT:core/Resources/Public/Icons/Flags/nf.png'),
					array('ng', 'ng', 'EXT:core/Resources/Public/Icons/Flags/ng.png'),
					array('ni', 'ni', 'EXT:core/Resources/Public/Icons/Flags/ni.png'),
					array('nl', 'nl', 'EXT:core/Resources/Public/Icons/Flags/nl.png'),
					array('no', 'no', 'EXT:core/Resources/Public/Icons/Flags/no.png'),
					array('np', 'np', 'EXT:core/Resources/Public/Icons/Flags/np.png'),
					array('nr', 'nr', 'EXT:core/Resources/Public/Icons/Flags/nr.png'),
					array('nu', 'nu', 'EXT:core/Resources/Public/Icons/Flags/nu.png'),
					array('nz', 'nz', 'EXT:core/Resources/Public/Icons/Flags/nz.png'),
					array('om', 'om', 'EXT:core/Resources/Public/Icons/Flags/om.png'),
					array('pa', 'pa', 'EXT:core/Resources/Public/Icons/Flags/pa.png'),
					array('pe', 'pe', 'EXT:core/Resources/Public/Icons/Flags/pe.png'),
					array('pf', 'pf', 'EXT:core/Resources/Public/Icons/Flags/pf.png'),
					array('pg', 'pg', 'EXT:core/Resources/Public/Icons/Flags/pg.png'),
					array('ph', 'ph', 'EXT:core/Resources/Public/Icons/Flags/ph.png'),
					array('pk', 'pk', 'EXT:core/Resources/Public/Icons/Flags/pk.png'),
					array('pl', 'pl', 'EXT:core/Resources/Public/Icons/Flags/pl.png'),
					array('pm', 'pm', 'EXT:core/Resources/Public/Icons/Flags/pm.png'),
					array('pn', 'pn', 'EXT:core/Resources/Public/Icons/Flags/pn.png'),
					array('pr', 'pr', 'EXT:core/Resources/Public/Icons/Flags/pr.png'),
					array('ps', 'ps', 'EXT:core/Resources/Public/Icons/Flags/ps.png'),
					array('pt', 'pt', 'EXT:core/Resources/Public/Icons/Flags/pt.png'),
					array('pw', 'pw', 'EXT:core/Resources/Public/Icons/Flags/pw.png'),
					array('py', 'py', 'EXT:core/Resources/Public/Icons/Flags/py.png'),
					array('qa', 'qa', 'EXT:core/Resources/Public/Icons/Flags/qa.png'),
					array('qc', 'qc', 'EXT:core/Resources/Public/Icons/Flags/qc.png'),
					array('re', 're', 'EXT:core/Resources/Public/Icons/Flags/re.png'),
					array('ro', 'ro', 'EXT:core/Resources/Public/Icons/Flags/ro.png'),
					array('rs', 'rs', 'EXT:core/Resources/Public/Icons/Flags/rs.png'),
					array('ru', 'ru', 'EXT:core/Resources/Public/Icons/Flags/ru.png'),
					array('rw', 'rw', 'EXT:core/Resources/Public/Icons/Flags/rw.png'),
					array('sa', 'sa', 'EXT:core/Resources/Public/Icons/Flags/sa.png'),
					array('sb', 'sb', 'EXT:core/Resources/Public/Icons/Flags/sb.png'),
					array('sc', 'sc', 'EXT:core/Resources/Public/Icons/Flags/sc.png'),
					array('scotland', 'scotland', 'EXT:core/Resources/Public/Icons/Flags/scotland.png'),
					array('sd', 'sd', 'EXT:core/Resources/Public/Icons/Flags/sd.png'),
					array('se', 'se', 'EXT:core/Resources/Public/Icons/Flags/se.png'),
					array('sg', 'sg', 'EXT:core/Resources/Public/Icons/Flags/sg.png'),
					array('sh', 'sh', 'EXT:core/Resources/Public/Icons/Flags/sh.png'),
					array('si', 'si', 'EXT:core/Resources/Public/Icons/Flags/si.png'),
					array('sj', 'sj', 'EXT:core/Resources/Public/Icons/Flags/sj.png'),
					array('sk', 'sk', 'EXT:core/Resources/Public/Icons/Flags/sk.png'),
					array('sl', 'sl', 'EXT:core/Resources/Public/Icons/Flags/sl.png'),
					array('sm', 'sm', 'EXT:core/Resources/Public/Icons/Flags/sm.png'),
					array('sn', 'sn', 'EXT:core/Resources/Public/Icons/Flags/sn.png'),
					array('so', 'so', 'EXT:core/Resources/Public/Icons/Flags/so.png'),
					array('sr', 'sr', 'EXT:core/Resources/Public/Icons/Flags/sr.png'),
					array('st', 'st', 'EXT:core/Resources/Public/Icons/Flags/st.png'),
					array('sv', 'sv', 'EXT:core/Resources/Public/Icons/Flags/sv.png'),
					array('sy', 'sy', 'EXT:core/Resources/Public/Icons/Flags/sy.png'),
					array('sz', 'sz', 'EXT:core/Resources/Public/Icons/Flags/sz.png'),
					array('tc', 'tc', 'EXT:core/Resources/Public/Icons/Flags/tc.png'),
					array('td', 'td', 'EXT:core/Resources/Public/Icons/Flags/td.png'),
					array('tf', 'tf', 'EXT:core/Resources/Public/Icons/Flags/tf.png'),
					array('tg', 'tg', 'EXT:core/Resources/Public/Icons/Flags/tg.png'),
					array('th', 'th', 'EXT:core/Resources/Public/Icons/Flags/th.png'),
					array('tj', 'tj', 'EXT:core/Resources/Public/Icons/Flags/tj.png'),
					array('tk', 'tk', 'EXT:core/Resources/Public/Icons/Flags/tk.png'),
					array('tl', 'tl', 'EXT:core/Resources/Public/Icons/Flags/tl.png'),
					array('tm', 'tm', 'EXT:core/Resources/Public/Icons/Flags/tm.png'),
					array('tn', 'tn', 'EXT:core/Resources/Public/Icons/Flags/tn.png'),
					array('to', 'to', 'EXT:core/Resources/Public/Icons/Flags/to.png'),
					array('tr', 'tr', 'EXT:core/Resources/Public/Icons/Flags/tr.png'),
					array('tt', 'tt', 'EXT:core/Resources/Public/Icons/Flags/tt.png'),
					array('tv', 'tv', 'EXT:core/Resources/Public/Icons/Flags/tv.png'),
					array('tw', 'tw', 'EXT:core/Resources/Public/Icons/Flags/tw.png'),
					array('tz', 'tz', 'EXT:core/Resources/Public/Icons/Flags/tz.png'),
					array('ua', 'ua', 'EXT:core/Resources/Public/Icons/Flags/ua.png'),
					array('ug', 'ug', 'EXT:core/Resources/Public/Icons/Flags/ug.png'),
					array('um', 'um', 'EXT:core/Resources/Public/Icons/Flags/um.png'),
					array('us', 'us', 'EXT:core/Resources/Public/Icons/Flags/us.png'),
					array('uy', 'uy', 'EXT:core/Resources/Public/Icons/Flags/uy.png'),
					array('uz', 'uz', 'EXT:core/Resources/Public/Icons/Flags/uz.png'),
					array('va', 'va', 'EXT:core/Resources/Public/Icons/Flags/va.png'),
					array('vc', 'vc', 'EXT:core/Resources/Public/Icons/Flags/vc.png'),
					array('ve', 've', 'EXT:core/Resources/Public/Icons/Flags/ve.png'),
					array('vg', 'vg', 'EXT:core/Resources/Public/Icons/Flags/vg.png'),
					array('vi', 'vi', 'EXT:core/Resources/Public/Icons/Flags/vi.png'),
					array('vn', 'vn', 'EXT:core/Resources/Public/Icons/Flags/vn.png'),
					array('vu', 'vu', 'EXT:core/Resources/Public/Icons/Flags/vu.png'),
					array('wales', 'wales', 'EXT:core/Resources/Public/Icons/Flags/wales.png'),
					array('wf', 'wf', 'EXT:core/Resources/Public/Icons/Flags/wf.png'),
					array('ws', 'ws', 'EXT:core/Resources/Public/Icons/Flags/ws.png'),
					array('ye', 'ye', 'EXT:core/Resources/Public/Icons/Flags/ye.png'),
					array('yt', 'yt', 'EXT:core/Resources/Public/Icons/Flags/yt.png'),
					array('za', 'za', 'EXT:core/Resources/Public/Icons/Flags/za.png'),
					array('zm', 'zm', 'EXT:core/Resources/Public/Icons/Flags/zm.png'),
					array('zw', 'zw', 'EXT:core/Resources/Public/Icons/Flags/zw.png')
				),
				'selicon_cols' => 16,
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1
			)
		)
	),
	'types' => array(
		'1' => array('showitem' => '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
										title,language_isocode,flag,
									--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
										hidden')
	)
);
