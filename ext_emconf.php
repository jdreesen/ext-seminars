<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "seminars".
 *
 * Auto generated 29-08-2014 00:50
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Seminar Manager',
	'description' => 'This extension allows you to create and manage a list of seminars, workshops, lectures, theater performances and other events, allowing front-end users to sign up. FE users also can create and edit events.',
	'category' => 'plugin',
	'shy' => 0,
	'dependencies' => 'cms,css_styled_content,oelib,ameos_formidable,static_info_tables',
	'conflicts' => 'dbal,sourceopt',
	'priority' => '',
	'loadOrder' => '',
	'module' => 'BackEnd',
	'state' => 'beta',
	'internal' => 0,
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => 'be_groups,fe_groups,fe_users',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author' => 'Oliver Klee',
	'author_email' => 'typo3-coding@oliverklee.de',
	'author_company' => 'oliverklee.de',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'version' => '0.9.95',
	'_md5_values_when_last_written' => 'a:301:{s:13:"changelog.txt";s:4:"a2dc";s:20:"class.ext_update.php";s:4:"55ac";s:33:"class.tx_seminars_configcheck.php";s:4:"0935";s:34:"class.tx_seminars_configgetter.php";s:4:"3189";s:37:"class.tx_seminars_EmailSalutation.php";s:4:"8c64";s:31:"class.tx_seminars_flexForms.php";s:4:"a9e9";s:34:"class.tx_seminars_registration.php";s:4:"7b83";s:41:"class.tx_seminars_registrationmanager.php";s:4:"3379";s:29:"class.tx_seminars_seminar.php";s:4:"86a9";s:29:"class.tx_seminars_speaker.php";s:4:"320f";s:29:"class.tx_seminars_tcemain.php";s:4:"b780";s:30:"class.tx_seminars_timeslot.php";s:4:"11cc";s:30:"class.tx_seminars_timespan.php";s:4:"207a";s:16:"ext_autoload.php";s:4:"5255";s:21:"ext_conf_template.txt";s:4:"a043";s:12:"ext_icon.gif";s:4:"35fc";s:17:"ext_localconf.php";s:4:"4278";s:14:"ext_tables.php";s:4:"4d17";s:14:"ext_tables.sql";s:4:"24ec";s:13:"locallang.xml";s:4:"0347";s:16:"locallang_db.xml";s:4:"0c25";s:36:"tx_seminars_modifiedSystemTables.php";s:4:"afbb";s:33:"BackEnd/AbstractEventMailForm.php";s:4:"0817";s:24:"BackEnd/AbstractList.php";s:4:"1643";s:19:"BackEnd/BackEnd.css";s:4:"1893";s:31:"BackEnd/CancelEventMailForm.php";s:4:"9561";s:16:"BackEnd/conf.php";s:4:"ca32";s:32:"BackEnd/ConfirmEventMailForm.php";s:4:"c77d";s:22:"BackEnd/EventsList.php";s:4:"a44b";s:32:"BackEnd/GeneralEventMailForm.php";s:4:"369d";s:17:"BackEnd/index.php";s:4:"05b6";s:21:"BackEnd/locallang.xml";s:4:"298f";s:25:"BackEnd/locallang_mod.xml";s:4:"0cdd";s:18:"BackEnd/Module.php";s:4:"eece";s:22:"BackEnd/moduleicon.gif";s:4:"032e";s:26:"BackEnd/OrganizersList.php";s:4:"9a02";s:29:"BackEnd/RegistrationsList.php";s:4:"89d7";s:24:"BackEnd/SpeakersList.php";s:4:"5c02";s:16:"Bag/Abstract.php";s:4:"a365";s:16:"Bag/Category.php";s:4:"d933";s:13:"Bag/Event.php";s:4:"9fd9";s:17:"Bag/Organizer.php";s:4:"078a";s:20:"Bag/Registration.php";s:4:"2cc8";s:15:"Bag/Speaker.php";s:4:"afbf";s:16:"Bag/TimeSlot.php";s:4:"1a0d";s:23:"BagBuilder/Abstract.php";s:4:"372e";s:23:"BagBuilder/Category.php";s:4:"ba08";s:20:"BagBuilder/Event.php";s:4:"1f18";s:24:"BagBuilder/Organizer.php";s:4:"f448";s:27:"BagBuilder/Registration.php";s:4:"289b";s:22:"BagBuilder/Speaker.php";s:4:"5e5a";s:41:"Configuration/FlexForms/flexforms_pi1.xml";s:4:"a724";s:25:"Configuration/TCA/tca.php";s:4:"0c39";s:38:"Configuration/TypoScript/constants.txt";s:4:"8464";s:34:"Configuration/TypoScript/setup.txt";s:4:"6ca4";s:34:"Csv/AbstractBackEndAccessCheck.php";s:4:"2049";s:24:"Csv/AbstractListView.php";s:4:"fc86";s:36:"Csv/AbstractRegistrationListView.php";s:4:"a319";s:31:"Csv/BackEndEventAccessCheck.php";s:4:"a4ed";s:38:"Csv/BackEndRegistrationAccessCheck.php";s:4:"3172";s:36:"Csv/DownloadRegistrationListView.php";s:4:"a024";s:33:"Csv/EmailRegistrationListView.php";s:4:"14a7";s:21:"Csv/EventListView.php";s:4:"a771";s:39:"Csv/FrontEndRegistrationAccessCheck.php";s:4:"2e3d";s:25:"FrontEnd/AbstractView.php";s:4:"1160";s:25:"FrontEnd/CategoryList.php";s:4:"261c";s:22:"FrontEnd/Countdown.php";s:4:"b2ac";s:30:"FrontEnd/DefaultController.php";s:4:"9d3d";s:19:"FrontEnd/Editor.php";s:4:"0727";s:24:"FrontEnd/EventEditor.php";s:4:"9e82";s:26:"FrontEnd/EventHeadline.php";s:4:"5819";s:25:"FrontEnd/PublishEvent.php";s:4:"6739";s:29:"FrontEnd/RegistrationForm.php";s:4:"8021";s:30:"FrontEnd/RegistrationsList.php";s:4:"a950";s:29:"FrontEnd/RequirementsList.php";s:4:"425c";s:27:"FrontEnd/SelectorWidget.php";s:4:"0fe9";s:23:"FrontEnd/WizardIcon.php";s:4:"a835";s:28:"Interface/CsvAccessCheck.php";s:4:"ea62";s:20:"Interface/Titled.php";s:4:"7a16";s:32:"Interface/Hook/BackEndModule.php";s:4:"8447";s:32:"Interface/Hook/EventListView.php";s:4:"f6d1";s:34:"Interface/Hook/EventSingleView.php";s:4:"4393";s:31:"Interface/Hook/Registration.php";s:4:"ec9a";s:22:"Mapper/BackEndUser.php";s:4:"858b";s:27:"Mapper/BackEndUserGroup.php";s:4:"54dc";s:19:"Mapper/Category.php";s:4:"4ba2";s:19:"Mapper/Checkbox.php";s:4:"1f47";s:16:"Mapper/Event.php";s:4:"7ea0";s:20:"Mapper/EventType.php";s:4:"fe3c";s:15:"Mapper/Food.php";s:4:"be25";s:23:"Mapper/FrontEndUser.php";s:4:"a28b";s:28:"Mapper/FrontEndUserGroup.php";s:4:"3561";s:18:"Mapper/Lodging.php";s:4:"dd82";s:20:"Mapper/Organizer.php";s:4:"000b";s:24:"Mapper/PaymentMethod.php";s:4:"7eb4";s:16:"Mapper/Place.php";s:4:"9f99";s:23:"Mapper/Registration.php";s:4:"987e";s:16:"Mapper/Skill.php";s:4:"86cc";s:18:"Mapper/Speaker.php";s:4:"52f5";s:22:"Mapper/TargetGroup.php";s:4:"6b46";s:19:"Mapper/TimeSlot.php";s:4:"fe62";s:26:"Model/AbstractTimeSpan.php";s:4:"1794";s:21:"Model/BackEndUser.php";s:4:"f9ae";s:26:"Model/BackEndUserGroup.php";s:4:"9bdf";s:18:"Model/Category.php";s:4:"3b02";s:18:"Model/Checkbox.php";s:4:"8416";s:15:"Model/Event.php";s:4:"3742";s:19:"Model/EventType.php";s:4:"d28b";s:14:"Model/Food.php";s:4:"c361";s:22:"Model/FrontEndUser.php";s:4:"2b1c";s:27:"Model/FrontEndUserGroup.php";s:4:"9fb1";s:17:"Model/Lodging.php";s:4:"5ece";s:19:"Model/Organizer.php";s:4:"84ad";s:23:"Model/PaymentMethod.php";s:4:"adba";s:15:"Model/Place.php";s:4:"9de7";s:22:"Model/Registration.php";s:4:"a311";s:15:"Model/Skill.php";s:4:"fbcd";s:17:"Model/Speaker.php";s:4:"2a80";s:21:"Model/TargetGroup.php";s:4:"621d";s:18:"Model/TimeSlot.php";s:4:"7a80";s:21:"OldModel/Abstract.php";s:4:"aca9";s:21:"OldModel/Category.php";s:4:"5e0d";s:22:"OldModel/Organizer.php";s:4:"d56f";s:38:"Resources/Private/CSS/thankYouMail.css";s:4:"4e2b";s:40:"Resources/Private/Language/locallang.xml";s:4:"909d";s:54:"Resources/Private/Language/locallang_csh_fe_groups.xml";s:4:"2c9e";s:53:"Resources/Private/Language/locallang_csh_seminars.xml";s:4:"f521";s:49:"Resources/Private/Language/FrontEnd/locallang.xml";s:4:"672e";s:51:"Resources/Private/Templates/BackEnd/EventsList.html";s:4:"41ea";s:55:"Resources/Private/Templates/BackEnd/OrganizersList.html";s:4:"abb9";s:58:"Resources/Private/Templates/BackEnd/RegistrationsList.html";s:4:"c80e";s:53:"Resources/Private/Templates/BackEnd/SpeakersList.html";s:4:"cf8a";s:53:"Resources/Private/Templates/FrontEnd/EventEditor.html";s:4:"4498";s:50:"Resources/Private/Templates/FrontEnd/FrontEnd.html";s:4:"401e";s:60:"Resources/Private/Templates/FrontEnd/RegistrationEditor.html";s:4:"2a53";s:44:"Resources/Private/Templates/Mail/e-mail.html";s:4:"44b4";s:38:"Resources/Public/CSS/BackEnd/Print.css";s:4:"d41d";s:42:"Resources/Public/CSS/FrontEnd/FrontEnd.css";s:4:"bf1f";s:35:"Resources/Public/Icons/Canceled.png";s:4:"4161";s:35:"Resources/Public/Icons/Category.gif";s:4:"c95b";s:35:"Resources/Public/Icons/Checkbox.gif";s:4:"f1f0";s:36:"Resources/Public/Icons/Confirmed.png";s:4:"77af";s:40:"Resources/Public/Icons/ContentWizard.gif";s:4:"5e60";s:30:"Resources/Public/Icons/Csv.gif";s:4:"414e";s:31:"Resources/Public/Icons/Edit.gif";s:4:"3248";s:40:"Resources/Public/Icons/EventComplete.gif";s:4:"d4db";s:43:"Resources/Public/Icons/EventComplete__h.gif";s:4:"ccf3";s:43:"Resources/Public/Icons/EventComplete__t.gif";s:4:"a5cc";s:36:"Resources/Public/Icons/EventDate.gif";s:4:"7853";s:39:"Resources/Public/Icons/EventDate__h.gif";s:4:"fd86";s:39:"Resources/Public/Icons/EventDate__t.gif";s:4:"acc7";s:37:"Resources/Public/Icons/EventTopic.gif";s:4:"e4b1";s:40:"Resources/Public/Icons/EventTopic__h.gif";s:4:"4689";s:40:"Resources/Public/Icons/EventTopic__t.gif";s:4:"e220";s:36:"Resources/Public/Icons/EventType.gif";s:4:"61a5";s:31:"Resources/Public/Icons/Food.gif";s:4:"1024";s:34:"Resources/Public/Icons/Garbage.gif";s:4:"1426";s:31:"Resources/Public/Icons/Hide.gif";s:4:"fba8";s:34:"Resources/Public/Icons/Lodging.gif";s:4:"5fdf";s:36:"Resources/Public/Icons/Organizer.gif";s:4:"1e7e";s:40:"Resources/Public/Icons/PaymentMethod.gif";s:4:"44bd";s:32:"Resources/Public/Icons/Place.gif";s:4:"2694";s:32:"Resources/Public/Icons/Price.gif";s:4:"61a5";s:32:"Resources/Public/Icons/Print.png";s:4:"2424";s:39:"Resources/Public/Icons/Registration.gif";s:4:"d892";s:42:"Resources/Public/Icons/Registration__h.gif";s:4:"5571";s:32:"Resources/Public/Icons/Skill.gif";s:4:"30a2";s:34:"Resources/Public/Icons/Speaker.gif";s:4:"ddc1";s:38:"Resources/Public/Icons/TargetGroup.gif";s:4:"b5a7";s:31:"Resources/Public/Icons/Test.gif";s:4:"bd58";s:35:"Resources/Public/Icons/TimeSlot.gif";s:4:"bb73";s:33:"Resources/Public/Icons/Unhide.gif";s:4:"fde9";s:48:"Resources/Public/JavaScript/FrontEnd/FrontEnd.js";s:4:"8d5f";s:33:"Service/SingleViewLinkBuilder.php";s:4:"19a6";s:35:"ViewHelper/CommaSeparatedTitles.php";s:4:"127b";s:24:"ViewHelper/Countdown.php";s:4:"2951";s:24:"ViewHelper/DateRange.php";s:4:"07eb";s:24:"ViewHelper/TimeRange.php";s:4:"581d";s:42:"cli/class.tx_seminars_cli_MailNotifier.php";s:4:"0935";s:23:"cli/tx_seminars_cli.php";s:4:"a820";s:20:"doc/dutch-manual.pdf";s:4:"beed";s:21:"doc/german-manual.sxw";s:4:"0f50";s:14:"doc/manual.sxw";s:4:"a675";s:29:"pi2/class.tx_seminars_pi2.php";s:4:"b9b6";s:17:"pi2/locallang.xml";s:4:"ef40";s:25:"tests/ConfigCheckTest.php";s:4:"00eb";s:43:"tests/BackEnd/AbstractEventMailFormTest.php";s:4:"5e18";s:41:"tests/BackEnd/CancelEventMailFormTest.php";s:4:"ca02";s:42:"tests/BackEnd/ConfirmEventMailFormTest.php";s:4:"1022";s:32:"tests/BackEnd/EventsListTest.php";s:4:"7b6c";s:31:"tests/BackEnd/FlexFormsTest.php";s:4:"b5ac";s:42:"tests/BackEnd/GeneralEventMailFormTest.php";s:4:"bb2d";s:28:"tests/BackEnd/ModuleTest.php";s:4:"4f98";s:36:"tests/BackEnd/OrganizersListTest.php";s:4:"d571";s:39:"tests/BackEnd/RegistrationsListTest.php";s:4:"3362";s:34:"tests/BackEnd/SpeakersListTest.php";s:4:"3776";s:26:"tests/Bag/AbstractTest.php";s:4:"8f5e";s:26:"tests/Bag/CategoryTest.php";s:4:"f423";s:23:"tests/Bag/EventTest.php";s:4:"4ee6";s:27:"tests/Bag/OrganizerTest.php";s:4:"037a";s:25:"tests/Bag/SpeakerTest.php";s:4:"bf43";s:33:"tests/BagBuilder/AbstractTest.php";s:4:"1b18";s:33:"tests/BagBuilder/CategoryTest.php";s:4:"cfeb";s:30:"tests/BagBuilder/EventTest.php";s:4:"8348";s:34:"tests/BagBuilder/OrganizerTest.php";s:4:"cdcf";s:37:"tests/BagBuilder/RegistrationTest.php";s:4:"0f7d";s:32:"tests/BagBuilder/SpeakerTest.php";s:4:"afe3";s:46:"tests/Csv/AbstractRegistrationListViewTest.php";s:4:"c0bd";s:41:"tests/Csv/BackEndEventAccessCheckTest.php";s:4:"f691";s:48:"tests/Csv/BackEndRegistrationAccessCheckTest.php";s:4:"004d";s:46:"tests/Csv/DownloadRegistrationListViewTest.php";s:4:"4892";s:43:"tests/Csv/EmailRegistrationListViewTest.php";s:4:"1822";s:31:"tests/Csv/EventListViewTest.php";s:4:"5205";s:49:"tests/Csv/FrontEndRegistrationAccessCheckTest.php";s:4:"99cf";s:35:"tests/FrontEnd/CategoryListTest.php";s:4:"66b7";s:32:"tests/FrontEnd/CountdownTest.php";s:4:"38ea";s:40:"tests/FrontEnd/DefaultControllerTest.php";s:4:"3718";s:29:"tests/FrontEnd/EditorTest.php";s:4:"b87b";s:34:"tests/FrontEnd/EventEditorTest.php";s:4:"3e51";s:36:"tests/FrontEnd/EventHeadlineTest.php";s:4:"cc87";s:35:"tests/FrontEnd/PublishEventTest.php";s:4:"1337";s:39:"tests/FrontEnd/RegistrationFormTest.php";s:4:"14eb";s:40:"tests/FrontEnd/RegistrationsListTest.php";s:4:"5a6d";s:39:"tests/FrontEnd/RequirementsListTest.php";s:4:"a9e8";s:37:"tests/FrontEnd/SelectorWidgetTest.php";s:4:"8af1";s:34:"tests/FrontEnd/TestingViewTest.php";s:4:"3f99";s:37:"tests/Mapper/BackEndUserGroupTest.php";s:4:"41c0";s:32:"tests/Mapper/BackEndUserTest.php";s:4:"5ecd";s:29:"tests/Mapper/CategoryTest.php";s:4:"467a";s:29:"tests/Mapper/CheckboxTest.php";s:4:"8324";s:30:"tests/Mapper/EventDateTest.php";s:4:"d931";s:26:"tests/Mapper/EventTest.php";s:4:"e7fe";s:31:"tests/Mapper/EventTopicTest.php";s:4:"670e";s:30:"tests/Mapper/EventTypeTest.php";s:4:"5a54";s:25:"tests/Mapper/FoodTest.php";s:4:"66d5";s:38:"tests/Mapper/FrontEndUserGroupTest.php";s:4:"0cc9";s:33:"tests/Mapper/FrontEndUserTest.php";s:4:"0762";s:28:"tests/Mapper/LodgingTest.php";s:4:"b491";s:30:"tests/Mapper/OrganizerTest.php";s:4:"1b78";s:34:"tests/Mapper/PaymentMethodTest.php";s:4:"bd45";s:26:"tests/Mapper/PlaceTest.php";s:4:"571a";s:33:"tests/Mapper/RegistrationTest.php";s:4:"1ec7";s:32:"tests/Mapper/SingleEventTest.php";s:4:"9014";s:26:"tests/Mapper/SkillTest.php";s:4:"ecbb";s:28:"tests/Mapper/SpeakerTest.php";s:4:"3b5f";s:32:"tests/Mapper/TargetGroupTest.php";s:4:"cc01";s:29:"tests/Mapper/TimeSlotTest.php";s:4:"4d42";s:36:"tests/Model/AbstractTimeSpanTest.php";s:4:"9b94";s:36:"tests/Model/BackEndUserGroupTest.php";s:4:"ae79";s:31:"tests/Model/BackEndUserTest.php";s:4:"1dce";s:28:"tests/Model/CategoryTest.php";s:4:"f6a0";s:28:"tests/Model/CheckboxTest.php";s:4:"c5fb";s:29:"tests/Model/EventDateTest.php";s:4:"0c83";s:25:"tests/Model/EventTest.php";s:4:"8193";s:30:"tests/Model/EventTopicTest.php";s:4:"b536";s:29:"tests/Model/EventTypeTest.php";s:4:"00a2";s:24:"tests/Model/FoodTest.php";s:4:"d73a";s:37:"tests/Model/FrontEndUserGroupTest.php";s:4:"d4c2";s:32:"tests/Model/FrontEndUserTest.php";s:4:"ac62";s:27:"tests/Model/LodgingTest.php";s:4:"e521";s:29:"tests/Model/OrganizerTest.php";s:4:"8b16";s:33:"tests/Model/PaymentMethodTest.php";s:4:"cdf4";s:25:"tests/Model/PlaceTest.php";s:4:"0f7a";s:32:"tests/Model/RegistrationTest.php";s:4:"5af2";s:31:"tests/Model/SingleEventTest.php";s:4:"ebe4";s:25:"tests/Model/SkillTest.php";s:4:"7295";s:27:"tests/Model/SpeakerTest.php";s:4:"8a45";s:31:"tests/Model/TargetGroupTest.php";s:4:"955f";s:28:"tests/Model/TimeSlotTest.php";s:4:"3e83";s:31:"tests/OldModel/AbstractTest.php";s:4:"7033";s:31:"tests/OldModel/CategoryTest.php";s:4:"7ed8";s:28:"tests/OldModel/EventTest.php";s:4:"f283";s:32:"tests/OldModel/OrganizerTest.php";s:4:"e323";s:35:"tests/OldModel/RegistrationTest.php";s:4:"3f99";s:30:"tests/OldModel/SpeakerTest.php";s:4:"e84b";s:31:"tests/OldModel/TimeSlotTest.php";s:4:"1408";s:31:"tests/OldModel/TimespanTest.php";s:4:"5fa5";s:37:"tests/Service/EMailSalutationTest.php";s:4:"3df4";s:41:"tests/Service/RegistrationManagerTest.php";s:4:"addf";s:43:"tests/Service/SingleViewLinkBuilderTest.php";s:4:"d47d";s:45:"tests/ViewHelper/CommaSeparatedTitlesTest.php";s:4:"257b";s:34:"tests/ViewHelper/CountdownTest.php";s:4:"f087";s:34:"tests/ViewHelper/DateRangeTest.php";s:4:"525c";s:34:"tests/ViewHelper/TimeRangeTest.php";s:4:"875c";s:30:"tests/cli/MailNotifierTest.php";s:4:"6a50";s:54:"tests/fixtures/class.tx_seminars_registrationchild.php";s:4:"9a14";s:49:"tests/fixtures/class.tx_seminars_seminarchild.php";s:4:"de88";s:67:"tests/fixtures/class.tx_seminars_tests_fixtures_TestingTimeSpan.php";s:4:"fd6a";s:50:"tests/fixtures/class.tx_seminars_timeslotchild.php";s:4:"5bd4";s:50:"tests/fixtures/class.tx_seminars_timespanchild.php";s:4:"92d0";s:28:"tests/fixtures/locallang.xml";s:4:"182e";s:47:"tests/fixtures/BackEnd/TestingEventMailForm.php";s:4:"a395";s:30:"tests/fixtures/Bag/Testing.php";s:4:"4414";s:43:"tests/fixtures/BagBuilder/BrokenTesting.php";s:4:"6857";s:37:"tests/fixtures/BagBuilder/Testing.php";s:4:"3a79";s:39:"tests/fixtures/FrontEnd/TestingView.php";s:4:"e9ff";s:43:"tests/fixtures/Model/TitledTestingModel.php";s:4:"9970";s:45:"tests/fixtures/Model/UntitledTestingModel.php";s:4:"eb6c";s:35:"tests/fixtures/OldModel/Testing.php";s:4:"a144";s:55:"tests/fixtures/Service/TestingSingleViewLinkBuilder.php";s:4:"05b6";s:21:"tests/pi2/pi2Test.php";s:4:"93ca";}',
	'constraints' => array(
		'depends' => array(
			'php' => '5.3.0-5.5.99',
			'typo3' => '4.5.0-6.2.99',
			'cms' => '',
			'css_styled_content' => '',
			'oelib' => '0.7.78-',
			'ameos_formidable' => '1.1.563-1.9.99',
			'static_info_tables' => '2.1.0-6.1.99',
		),
		'conflicts' => array(
			'dbal' => '',
			'sourceopt' => '',
		),
		'suggests' => array(
			'onetimeaccount' => '',
			'sr_feuser_register' => '',
		),
	),
	'suggests' => array(
	),
);