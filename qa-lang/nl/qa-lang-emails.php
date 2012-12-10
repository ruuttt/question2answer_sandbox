<?php
	
/*
	Question2Answer 1.4.1 (c) 2011, Gideon Greenspan

	http://www.question2answer.org/

	
	File: qa-include/qa-lang-emails.php
	Version: 1.4.1
	Date: 2011-07-10 06:58:57 GMT
	Description: Language phrases for email notifications


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

	return array(
		'a_commented_body' => "Je antwoord op ^site_title heeft een nieuwe opmerking ontvangen van ^c_handle:\n\n^open^c_content^close\n\nJe antwoord was:\n\n^open^c_context^close\n\nJe kunt reageren door je eigen opmerking te plaatsen:\n\n^url\n\nMet vriendelijke groet,\n\n^site_title",
		'a_commented_subject' => 'Je antwoord op ^site_title  heeft een nieuwe opmerking',
		'a_followed_body' => "Je antwoord op ^site_title heeft een nieuwe gerelateerde vraag van ^q_handle:\n\n^open^q_title^close\n\nJe antwoord was:\n\n^open^a_content^close\n\nKlik hieronder om de nieuwe vraag te beantwoorden:\n\n^url\n\nMet vriendelijke groet,\n\n^site_title",
		'a_followed_subject' => 'Je antwoord op ^site_title heeft een nieuwe gerelateerde vraag',
		'a_selected_body' => "Gefeliciteerd! Je antwoord op ^site_title is geselecteerd als het beste antwoord door ^s_handle:\n\n^open^a_content^close\n\nDe vraag was:\n\n^open^q_title^close\n\nKlik hieronder om je antwoord te bekijken:\n\n^url\n\nMet vriendelijke groet,\n\n^site_title",
		'a_selected_subject' => 'Je antwoord op ^site_title is geselecteerd als beste!',
		'c_commented_body' => "Een nieuwe opmerking van ^c_handle is toegevoegd na jouw opmerking op ^site_title:\n\n^open^c_content^close\n\nDe discussie gaat als volgt:\n\n^open^c_context^close\n\nJe kunt reageren door nog een opmerking te plaatsen:\n\n^url\n\nMet vriendelijke groet,\n\n^site_title",
		'c_commented_subject' => 'Nieuwe opmerking op ^site_title',
		'confirm_body' => "Klik hieronder om je e-mailadres te bevestigen voor de site ^site_title.\n\n^url\n\nMet vriendelijke groet,\n^site_title",
		'confirm_subject' => '^site_title - E-mail adres bevestigen',
		'feedback_body' => "Opmerkingen:\n^message\n\nNaam:\n^name\n\nE-mail:\n^email\n\nVorige pagina:\n^previous\n\nGebruiker:\n^url\n\nIP adres:\n^ip\n\nBrowser:\n^browser",
		'feedback_subject' => '^ opmerking',
		'flagged_body' => "Een bericht van ^p_handle heeft ^flags:\n\n^open^p_context^close ontvangen.\n\nKlik hieronder om het bericht te bekijken:\n\n^url\n\nMet vriendelijke groet,\n\n^site_title",
		'flagged_subject' => '^site_title heeft een gemarkeerd bericht',
		'new_password_body' => "Je nieuwe wachtwoord voor ^site_title staat hieronder.\n\nWachtwoord: ^password\n\nHet wordt aanbevolen dit wachtwoord direct na het inloggen te wijzigen.\n\nMet vriendelijke groet,\n^site_title\n^url",
		'new_password_subject' => '^site_title - Je nieuwe wachtwoord',
		'private_message_body' => "Je hebt een privéricht ontvangen van ^f_handle op ^site_title:\n\n^open^message^close\n\n^moreMet vriendelijke groet,\n\n^site_title\n\n\nOm privéberichten te blokkeren, bezoek je profiel:\n^a_url",
		'private_message_info' => "Meer informatie over ^f_handle:\n\n^url\n\n",
		'private_message_reply' => "Klik hieronder om te antwoorden op ^f_handle door middel van een privébericht:\n\n^url\n\n",
		'private_message_subject' => 'Bericht van ^f_handle op ^site_title',
		'q_answered_body' => "Je vraag op ^site_title is beantwoord door ^a_handle:\n\n^open^a_content^close\n\nJe vraag was:\n\n^open^q_title^close\n\nAls je dit een goed antwoord vindt, kun je het selecteren als het beste:\n\n^url\n\nMet vriendelijke groet,\n\n^site_title",
		'q_answered_subject' => 'Je vraag op ^site_title is beantwoord',
		'q_commented_body' => "Je vraag op ^site_title heeft een nieuwe opmerking ontvangen van ^c_handle:\n\n^open^c_content^close\n\nJe vraag was:\n\n^open^c_context^close\n\nJe kunt reageren door zelf een opmerking te plaatsen:\n\n^url\n\nMet vriendelijke groet,\n\n^site_title",
		'q_commented_subject' => 'Je vraag op ^site_title heeft een nieuwe opmerking',
		'q_posted_body' => "Een nieuwe vraag is gesteld door ^q_handle:\n\n^open^q_title\n\n^q_content^close\n\nKlik hieronder om de vraag te bekijken:\n\n^url\n\nMet vriendelijke groet,\n\n^site_title",
		'q_posted_subject' => '^site_title heeft een nieuwe vraag',
		'reset_body' => "Klik hieronder om je wachtwoord voor ^site_title opnieuw in te stellen.\n\n^url\n\nAls dat niet lukt, kun je onderstaande code in het veld overnemen.\n\nCode: ^code\n\nAls je geen wachtwoord-herstel verzoek hebt ingediend, kun je dit bericht negeren.\n\nMet vriendelijke groet,\n^site_title",
		'reset_subject' => '^site_title - Vergeten wachtwoord herstellen',
		'welcome_body' => "Bedankt voor je registratie op ^site_title.\n\n^custom^confirmJe logingegevens zijn als volgt:\n\nEmail: ^email\nWachtwoord: ^password\n\nBewaar deze gegevens zorgvuldig.\n\nMet vriendelijke groet,\n\n^site_title\n^url",
		'welcome_confirm' => "Klik hieronder om je e-mailadres te bevestigen.\n\n^url\n\n",
		'welcome_subject' => 'Welkom bij ^site_title!',
        'moderate_body' => "Een bericht door ^p_handle heeft uw toestemming nodig:\n\n^open^p_context^close\n\nKlik hieronder om het bericht te accepteren of weigeren:\n\n^url\n\nBedankt,\n\n^site_title",
		'moderate_subject' => "^site_title moderatie",
		'to_handle_prefix' => "^,\n\n",
	);
	

/*
	Omit PHP closing tag to help avoid accidental output
*/