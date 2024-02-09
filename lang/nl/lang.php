<?php return [
  'plugin' => [
    'tab' => 'Gebruikers',
    'access_users' => 'Beheer Gebruikers',
    'access_groups' => 'Beheer Groepen',
    'access_settings' => 'Gebruikersinstellingen beheren',
    'impersonate_user' => 'Inloggen als gebruikers',
  ],
  'users' => [
    'menu_label' => 'Gebruikers',
    'all_users' => 'Alle gebruikers',
    'new_user' => 'Nieuwe gebruiker',
    'list_title' => 'Beheer gebruikers',
    'trashed_hint_title' => 'Gebruiker heeft zijn account gedeactiveerd',
    'trashed_hint_desc' => 'Deze gebruiker heeft zijn account gedeactiveerd en wil niet meer op de site verschijnen. Hij kan zijn account op elk moment herstellen door opnieuw in te loggen.',
    'banned_hint_title' => 'Gebruiker is verbannen',
    'banned_hint_desc' => 'Deze gebruiker is verbannen door een beheerder en kan niet meer inloggen.',
    'guest_hint_title' => 'Dit is een gastgebruiker',
    'guest_hint_desc' => 'Deze gebruiker wordt alleen voor referentiedoeleinden opgeslagen en moet zich registreren voordat hij zich aanmeldt.',
    'activate_warning_title' => 'Gebruiker is niet geactiveerd!',
    'activate_warning_desc' => 'Deze gebruiker is niet geactiveerd en kan niet inloggen.',
    'activate_confirm' => 'Weet u zeker dat u het gebruikersaccount wilt activeren?',
    'activated_success' => 'Gebruikersaccount succesvol geactiveerd!',
    'activate_manually' => 'Deze gebruiker handmatig activeren',
    'convert_guest_confirm' => 'Deze gast omzetten naar een gebruiker?',
    'convert_guest_manually' => 'Omzetten naar geregistreerde gebruiker',
    'convert_guest_success' => 'Gebruiker is omgezet naar een geregistreerd account',
    'impersonate_user' => 'Inloggen als',
    'impersonate_confirm' => 'Als deze gebruiker inloggen? U kunt terugkeren naar uw oorspronkelijke staat door uit te loggen.',
    'impersonate_success' => 'Je bent nu ingelogd als deze gebruiker',
    'delete_confirm' => 'Weet u zeker dat u deze gebruiker wilt verwijderen?',
    'unban_user' => 'Deblokkeer deze gebruiker',
    'unban_confirm' => 'Wil je deze gebruiker echt deblokkeren?',
    'unbanned_success' => 'Gebruiker is gedeblokkeerd',
    'return_to_list' => 'Terug naar overzicht',
    'update_details' => 'Details bijwerken',
    'bulk_actions' => 'Bulk acties',
    'delete_selected' => 'Geselecteerde verwijderen',
    'delete_selected_confirm' => 'Verwijder geselecteerde gebruikers?',
    'delete_selected_empty' => 'Er zijn geen geselecteerde gebruikers om te verwijderen.',
    'delete_selected_success' => 'Geselecteerde gebruikers verwijderd.',
    'activate_selected' => 'Activeer geselecteerde',
    'activate_selected_confirm' => 'De geselecteerde gebruikers activeren?',
    'activate_selected_empty' => 'Er zijn geen geselecteerde gebruikers om te activeren.',
    'activate_selected_success' => 'Geselecteerde gebruikers zijn succesvol geactiveerd.',
    'deactivate_selected' => 'Deactiveer geselecteerde',
    'deactivate_selected_confirm' => 'De geselecteerde gebruikers deactiveren?',
    'deactivate_selected_empty' => 'There are no selected users to deactivate.',
    'deactivate_selected_success' => 'Geselecteerde gebruikers zijn succesvol gedeactiveerd.',
    'restore_selected' => 'Herstel geselecteerde',
    'restore_selected_confirm' => 'De geselecteerde gebruikers herstellen?',
    'restore_selected_empty' => 'Er zijn geen geselecteerde gebruikers om te herstellen.',
    'restore_selected_success' => 'Geselecteerde gebruikers zijn succesvol hersteld.',
    'ban_selected' => 'Blokkeer geselecteerde',
    'ban_selected_confirm' => 'De geselecteerde gebruikers blokkeren?',
    'ban_selected_empty' => 'Er zijn geen gebruikers geselecteerd om te blokkeren.',
    'ban_selected_success' => 'Geselecteerde gebruikers zijn succesvol geblokkeerd.',
    'unban_selected' => 'Deblokkeer geselecteerde',
    'unban_selected_confirm' => 'De geselecteerde gebruikers deblokkeren?',
    'unban_selected_empty' => 'Er zijn geen gebruikers geselecteerd om te deblokkeren.',
    'unban_selected_success' => 'Geselecteerde gebruikers zijn succesvol gedeblokkeerd.',
    'unsuspend' => 'Blokkade opheffen',
    'unsuspend_success' => 'Blokkade voor de gebruiker is opgeheven.',
    'unsuspend_confirm' => 'Blokkade voor deze gebruiker opheffen?',
  ],
  'settings' => [
    'users' => 'Gebruikers',
    'menu_label' => 'Instellingen',
    'menu_description' => 'Beheer de instellingen voor gebruikers.',
    'activation_tab' => 'Activatie',
    'signin_tab' => 'Inloggen',
    'registration_tab' => 'Registratie',
    'profile_tab' => 'Profiel',
    'notifications_tab' => 'Notificaties',
    'allow_registration' => 'Gebruikersregistratie toestaan',
    'allow_registration_comment' => 'Als deze optie is uitgeschakeld kunnen alleen beheerders gebruikers aanmaken.',
    'activate_mode' => 'Activatie modus',
    'activate_mode_comment' => 'Selecteer de wijze waarop een gebruikersaccount geactiveerd moet te worden.',
    'activate_mode_auto' => 'Automatisch',
    'activate_mode_auto_comment' => 'Het gebruikersaccount wordt meteen geactiveerd na registratie.',
    'activate_mode_user' => 'Gebruiker',
    'activate_mode_user_comment' => 'De gebruiker activeert het account d.m.v. e-mail.',
    'activate_mode_admin' => 'Beheerder',
    'activate_mode_admin_comment' => 'Alleen de beheerder kan het gebruikersaccount activeren.',
    'require_activation' => 'Inloggen vereist activatie',
    'require_activation_comment' => 'Gebruikers moeten een geactiveerd account hebben.',
    'use_throttle' => 'Beperk inlogpogingen',
    'use_throttle_comment' => 'Meerdere mislukte inlog pogingen resulteren in een tijdelijk uitgeschakeld gebruikersaccount.',
    'use_register_throttle' => 'Registraties beperken',
    'use_register_throttle_comment' => 'Voorkomen dat meerdere registraties van hetzelfde IP kort na elkaar plaatsvinden.',
    'block_persistence' => 'Voorkom gelijktijdige sessies ',
    'block_persistence_comment' => 'Indien ingeschakeld kunnen gebruikers zich niet aanmelden op meerdere apparaten tegelijk.',
    'login_attribute' => 'Inlog attribuut',
    'login_attribute_comment' => 'Selecteer het attribuut wat moet worden gebruikt om in te loggen.',
    'remember_login' => 'Onthoud inlogmodus',
    'remember_login_comment' => 'Selecteer of de gebruikerslogin onthouden moet worden.',
    'remember_always' => 'Altijd',
    'remember_never' => 'Nooit',
    'remember_ask' => 'Vraag de gebruiker bij het inloggen',
  ],
  'user' => [
    'label' => 'Gebruiker',
    'id' => 'ID',
    'username' => 'Gebruikersnaam',
    'name' => 'Voornaam',
    'name_empty' => 'Anoniem',
    'surname' => 'Achternaam',
    'email' => 'E-mailadres',
    'created_at' => 'Geregistreerd op',
    'last_seen' => 'Laatste login',
    'is_guest' => 'Gast',
    'joined' => 'Geregistreerd op',
    'is_online' => 'Momenteel online',
    'is_offline' => 'Momenteel offline',
    'send_invite' => 'Uitnodiging per e-mail sturen',
    'send_invite_comment' => 'Stuurt een welkomstbericht met login en wachtwoord informatie.',
    'create_password' => 'Wachtwoord aanmaken',
    'create_password_comment' => 'Voer een nieuw wachtwoord in dat wordt gebruikt om in te loggen.',
    'reset_password' => 'Reset wachtwoord',
    'reset_password_comment' => 'Voer een nieuw wachtwoord in om het wachtwoord te resetten.',
    'confirm_password' => 'Herhaal wachtwoord',
    'confirm_password_comment' => 'Voer het wachtwoord nogmaals in.',
    'groups' => 'Groep',
    'empty_groups' => 'Er zijn geen gebruikersgroepen beschikbaar.',
    'avatar' => 'Profielfoto',
    'details' => 'Details',
    'account' => 'Account',
    'block_mail' => 'Blokkeert alle uitgaande mail die naar deze gebruiker wordt gestuurd.',
    'status_guest' => 'Gast',
    'status_activated' => 'Geactiveerd',
    'status_registered' => 'Geregistreerd',
    'created_ip_address' => 'Registratie IP-address',
    'last_ip_address' => 'Laatste IP-address',
  ],
  'group' => [
    'label' => 'Groep',
    'id' => 'ID',
    'name' => 'Naam',
    'description_field' => 'Omschrijving',
    'code' => 'Code',
    'code_comment' => 'Voer een unieke code in als je deze groep wilt gebruiken met de API.',
    'created_at' => 'Aangemaakt op',
    'users_count' => 'Gebruikers',
    'is_new_user_default_field' => 'Voeg nieuwe beheerders automatisch toe aan deze groep.',
  ],
  'groups' => [
    'menu_label' => 'Groepen',
    'all_groups' => 'Groepen',
    'new_group' => 'Nieuwe groep',
    'delete_selected_confirm' => 'Weet u zeker dat u de geselecteerde groepen wilt verwijderen?',
    'list_title' => 'Beheer groepen',
    'delete_confirm' => 'Weet u zeker dat u deze groep wilt verwijderen?',
    'delete_selected_success' => 'De geselecteerde groepen zijn verwijderd.',
    'delete_selected_empty' => 'Er zijn geen groepen geselecteerd om te verwijderen.',
    'return_to_list' => 'Terug naar overzicht',
    'return_to_users' => 'Back to users list',
    'create_title' => 'Groep aanmaken',
    'update_title' => 'Wijzig groep',
    'preview_title' => 'Voorbeeldweergave groep',
  ],
  'login' => [
    'attribute_email' => 'E-mailadres',
    'attribute_username' => 'Gebruikersnaam',
  ],
  'account' => [
    'account' => 'Account',
    'account_desc' => 'Gebruikersaccount formulier.',
    'redirect_to' => 'Redirect naar',
    'redirect_to_desc' => 'Pagina om naar te redirecten na het bijwerken, inloggen of registreren.',
    'code_param' => 'Activatie Code parameter',
    'code_param_desc' => 'De pagina URL parameter die gebruikt wordt voor de registratie activatie code.',
    'force_secure' => 'Forceer beveiligd protocol',
    'force_secure_desc' => 'Stuur de URL altijd door naar HTTPS.',
    'invalid_user' => 'Geen gebruiker gevonden.',
    'invalid_activation_code' => 'Onjuiste activatie code',
    'invalid_deactivation_pass' => 'Het ingevoerde wachtwoord is ongeldig.',
    'invalid_current_pass' => 'Het ingevoerde huidige wachtwoord is ongeldig.',
    'success_activation' => 'Uw account is succesvol geactiveerd.',
    'success_deactivation' => 'Succesvol je account gedeactiveerd. Jammer dat je weggaat!',
    'success_saved' => 'Instellingen zijn opgeslagen.',
    'login_first' => 'U moet ingelogd zijn om deze pagina te bekijken.',
    'already_active' => 'Uw gebruikersaccount is reeds geactiveerd.',
    'activation_email_sent' => 'Een e-mailbericht met een activatie link is naar uw e-mailadres verzonden.',
    'activation_by_admin' => 'U bent succesvol geregistreerd. Uw account is nog niet actief en moet worden goedgekeurd door een beheerder.',
    'registration_disabled' => 'Registratie is momenteel uitgeschakeld.',
    'registration_throttled' => 'Registratie is geblokkeerd. Probeer het later nog eens.',
    'sign_in' => 'Inloggen',
    'register' => 'Registreren',
    'full_name' => 'Volledige naam',
    'email' => 'E-mailadres',
    'password' => 'Wachtwoord',
    'login' => 'Inloggen',
    'new_password' => 'Nieuw wachtwoord',
    'new_password_confirm' => 'Herhaal nieuw wachtwoord',
    'update_requires_password' => 'Bevestig wachtwoord bij update',
    'update_requires_password_comment' => 'Vereis het huidige wachtwoord van de gebruiker wanneer hij zijn profiel wijzigt.',
  ],
  'reset_password' => [
    'reset_password' => 'Reset wachtwoord',
    'reset_password_desc' => 'Wachtwoord vergeten formulier.',
    'code_param' => 'Reset Code parameter',
    'code_param_desc' => 'De pagina URL parameter die gebruikt wordt voor de reset code.',
  ],
  'session' => [
    'session' => 'Sessie',
    'session_desc' => 'Voegt de gebruikerssessie toe aan een pagina om pagina toegang te beperken.',
    'security_title' => 'Alleen toegestaan voor',
    'security_desc' => 'Wie toegestaan is om de pagina te bekijken.',
    'all' => 'Alle',
    'users' => 'Gebruikers',
    'guests' => 'Gasten',
    'allowed_groups_title' => 'Toegestane groepen',
    'allowed_groups_description' => 'Kies toegelaten groepen of geen om alle groepen toe te laten',
    'redirect_title' => 'Redirect naar',
    'redirect_desc' => 'Pagina om naar te redirecten als toegang is afgewezen.',
    'logout' => 'U bent succesvol uitgelogd.',
    'stop_impersonate_success' => 'Je doet je niet langer voor als een gebruiker.',
  ],
];
