<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageFileController extends Controller
{
    //
 

	public function index($language,$page){

		include(app_path().'/includes/languages/' . $language . '_' . $page . '_lang.php');
		//include page
		$sample = [$language,$page,app_path().'/includes/languages/' . $language . '_' . $page . '_lang.php'];
		
		return response()->json($lang);
		//return response()->json($out);
		//return response()->json($sample);
	}		

	public function index13312(){

$english_lang['title'] = 'About';
$lang['title'] = 'Om22';

$english_lang['btn-submit'] = 'SUBMIT';
$lang['btn-submit'] = 'SKICKA';

$english_lang['btn-new-account'] = 'Add New Account';
$lang['btn-new-account'] = 'Lägg till nytt konto';

$english_lang['btn-start-feedback'] = 'Start Feedback222';
$lang['btn-start-feedback'] = 'Starta feedback222';

$english_lang['btn-read-more'] = 'Read more about LIFO&reg; Styles';
$lang['btn-read-more'] = 'Läs mer om LIFO&reg, stilar';

$english_lang['btn-new-member'] = 'ADD NEW MEMBER';
$lang['btn-new-member'] = 'LÄGG TILL NY MEDLEM';

$english_lang['btn-new-giver'] = 'ADD GIVER ONLY';
$lang['btn-new-giver'] = 'LÄGG ENDAST TILL GIVARE';

$english_lang['btn-new-class'] = 'Add New Class';
$lang['btn-new-class'] = 'Lägg till ny klass';

$english_lang['btn-new-client'] = 'Add New Client/Licensee';
$lang['btn-new-client'] = 'Lägg till ny kund/licensinnehavare';


$english_lang['header-welcome'] = 'Welcome';
$lang['header-welcome'] = 'Välkommen';

$english_lang['admin'] = 'Administrator';
$lang['admin'] = 'Administratör';

$english_lang['account'] = 'account';
$lang['account'] = 'konto';

$english_lang['account-info'] = 'You are signed in as';
$lang['account-info'] = 'Du är inläggad som';

$english_lang['username'] = 'Username';
$lang['username'] = 'Användarnamn';

$english_lang['email'] = 'Email';
$lang['email'] = 'E-postadress';


$english_lang['header-start'] = 'Getting Started.';
$lang['header-start'] = 'Kom igång.';

$english_lang['navbar-info'] = 'Use the navigation bar on the upper right page to manage accounts';
$lang['navbar-info'] = 'Använd navigeringsfältet längst upå till höger på sidan för att hantera konton';


$english_lang['header-accounts'] = 'Manage Accounts.';
$lang['header-accounts'] = 'Hantera konton.';

$english_lang['accounts-info'] = 'Manage contents of account. Click on the button to add new account.';
$lang['accounts-info'] = 'Hantera kontoinnehåll. Klicka på knappen för att lägga till ett nytt konto.';

$english_lang['company-edit-info'] = 'Click on Company name to edit or view complete details.';
$lang['compåny-edit-info'] = 'Klicka på Företagsnamn för att redigera eller visa alla uppgifter.';

$english_lang['company-create-info-1'] = 'Use the form to change data and click';
$lang['compåny-create-info-1'] = 'Använd formuläret för att ändra upågifter och klicka på';

$english_lang['company-create-info-2'] = 'button to save changes.';
$lang['company-create-info-2'] = 'knappen för att spara ändringarna.';



$english_lang['header-corp-accounts'] = 'Manage Corporate Accounts.';
$lang['header-corp-accounts'] = 'Hantera företagskonton.';

$english_lang['corp-add-info-1'] = 'Click on the button ';
$lang['corpåadd-info-1'] = 'Klicka på knapåen';

$english_lang['corp-add-info-2'] = ' to add new account.';
$lang['corp-add-info-2'] = 'för att lägga till ett nytt konto.';

$english_lang['corp-delete-info-1'] = 'Use button ';
$lang['corp-delete-info-1'] = 'Använd knappen';

$english_lang['corp-delete-info-2'] = ' to delete specific account.';
$lang['corp-delete-info-2'] = ' för att radera specifikt konto.Hantera klienter/licensinnehavare.';



$english_lang['header-clients'] = 'Manage Clients/Licensee.';
$lang['header-clients'] = 'Hantera kunder/licensinnehavare';

$english_lang['client-add-info-1'] = 'Click on the button ';
$lang['client-add-info-1'] = 'Klicka på knapåen';

$english_lang['client-add-info-2'] = ' to add new Client or licensee.';
$lang['client-add-info-2'] = ' för att lägga till ny kund eller licensinnehavare.';

$english_lang['client-delete-info-1'] = 'Use button ';
$lang['client-delete-info-1'] = 'Använd knappen';

$english_lang['client-delete-info-2'] = 'to delete specific account.';
$lang['client-delete-info-2'] = 'för att radera specifikt konto.Hantera klienter/licensinnehavare.';


$english_lang['header-classes'] = 'Manage Classes.';
$lang['header-classes'] = 'Hantera klasser.';

$english_lang['class-add-info-1'] = 'Click button ';
$lang['class-add-info-1'] = 'Klicka på knapåen';

$english_lang['class-add-info-2'] = ' to add new class.';
$lang['class-add-info-2'] = 'för att lägga till en ny klass.';

$english_lang['class-edit-info-1'] = 'To edit the class, click the class ';
$lang['class-edit-info-1'] = 'för att redigera klassen, klicka på klassen';

$english_lang['class-edit-info-2'] = 'Name';
$lang['class-edit-info-2'] = 'Namn';

$english_lang['class-people-info-1'] = 'Use this button ';
$lang['class-people-info-1'] = 'Använd den här knappen';

$english_lang['class-people-info-2'] = ' to view members of class.';
$lang['class-people-info-2'] = 'för att visa medlemmar i klassen.';

$english_lang['class-people-info-3'] = 'All members of the class will become feedback givers and receivers.';
$lang['class-people-info-3'] = 'Alla medlemmar i klassen blir feedback-givare och -mottagare.';

$english_lang['class-chat-info-1'] = 'Use this button ';
$lang['class-chat-info-1'] = 'Använd den här knappen';

$english_lang['class-chat-info-2'] = ' to view printable history of chats of this class.';
$lang['class-chat-info-2'] = 'för att visa utskrivbar chatt-historik för den här klassen.';

$english_lang['class-delete-info-1'] = 'Click ';
$lang['class-delete-info-1'] = 'Klicka';

$english_lang['class-delete-info-2'] = ' to delete the class and its records. ';
$lang['class-delete-info-2'] = 'för att radera klassen och dess poster.';



$english_lang['header-users'] = 'Manage eFeedback Users.';
$lang['header-users'] = 'Hantera eFeedback-Användare.';

$english_lang['member-add-info-1'] = 'Click on the ';
$lang['member-add-info-1'] = 'Klicka på';

$english_lang['member-add-info-2'] = ' to add new member on selected class.';
$lang['member-add-info-2'] = 'för att lägga till ny medlem i vald klass.';

$english_lang['member-add-info-3'] = 'All members of the class will become feedback givers and receivers';
$lang['member-add-info-3'] = 'Alla medlemmar i klassen blir feedback-givare och -mottagare.';


$english_lang['giver-add-info-1'] = 'While you can use ';
$lang['giver-add-info-1'] = 'Medan du kan Använda';

$english_lang['giver-add-info-2'] = 'button to add new member who is a feedback giver only.';
$lang['giver-add-info-2'] = 'knappen för att lägga till ny medlem som enbart är feedback-givare.';


$english_lang['feedback-view-info-1'] = 'Use ';
$lang['feedback-view-info-1'] = 'Använd';

$english_lang['feedback-view-info-2'] = ' to view feedback summary of the user.';
$lang['feedback-view-info-2'] = '  för att visa feedback-sammanfattning för användaren.';


$english_lang['user-edit-info-1'] = 'Click on User`s';
$lang['user-edit-info-1'] = 'Klicka på Användare';

$english_lang['user-edit-info-2'] = 'Name';
$lang['user-edit-info-2'] = 'Namn';

$english_lang['user-edit-info-3'] = 'to edit or view complete details.';
$lang['user-edit-info-3'] = 'för att redigera eller visa fullständiga uppgifter.';

$english_lang['user-edit-info-4'] = 'Use the form to change data and click ';
$lang['user-edit-info-4'] = 'Använd formuläret för att ändra upågifter och klicka på';

$english_lang['user-edit-info-5'] = ' button to save changes.';
$lang['user-edit-info-5'] = 'knappen för att spara ändringarna.';


$english_lang['tutorial-info-1'] = 'How to use the feedback-giver form.';
$lang['tutorial-info-1'] = 'Så Använder du feedback-givarformuläret.';

$english_lang['tutorial-info-2'] = 'To accomplish this form';
$lang['tutorial-info-2'] = 'För att fylla i det här formuläret, använd färgkodkolumnerna i rätt sekvens nedan.';

$english_lang['tutorial-info-3'] = 'Firstly';
$lang['tutorial-info-3'] = 'Slutför först';

$english_lang['tutorial-info-4'] = 'Column (CONFIRM)';
$lang['tutorial-info-4'] = 'Kolumn (BEKRÄFTA), följt av';

$english_lang['tutorial-info-5'] = ' column (DO LESS)  and lastly the ';
$lang['tutorial-info-5'] = 'kolumnen (GÖR MINDRE) och till slut';

$english_lang['tutorial-info-6'] = 'column (DO MORE).';
$lang['tutorial-info-6'] = 'kolumnen (GÖR MER).';

$english_lang['tutorial-info-7'] = 'Each of the columns have 10 strengths listed for each of the Four LIFOﾂｮ Productive Styles. Once you are ready to answer the LIFOﾂｮ eFeedback form please put in mind the strengths that the participant have at work. ';
$lang['tutorial-info-7'] = 'Var och en av kolumnerna har 10 styrkor listade för var och en av de fyra LIFOﾂｮ-produktiva stilarna. När du är redo att svara på LIFOﾂｮ eFeedback-formuläret, kom ihåg de styrkor som deltagaren har på jobbet.';

$english_lang['tutorial-info-8'] = 'Please start to answer on a per LIFOﾂｮ Productive Style';
$lang['tutorial-info-8'] = 'Börja svara på en per LIFOﾂｮ-produktiv stil, dvs. först SG-fliken, sedan CT och så vidare.';

$english_lang['tutorial-info-9'] = 'When answering the  ';
$lang['tutorial-info-9'] = 'När du svarar på';

$english_lang['tutorial-info-10'] = 'Column - kindly click the strengths that you feel that the participant has. You are allowed to click as much as the strengths that you feel that he has. Once you have confirmed their strenghts';
$lang['tutorial-info-10'] = 'Kolumn - klicka på styrkorna som du känner att deltagaren har. Du får klicka lika mycket som styrkorna som du känner att han har. När du har bekräftat deltagarens styrka kan du gå vidare till nästa kolumn, som är färgad';

$english_lang['tutorial-info-11'] = 'häre you will suggest to the participant that he moderates or tone down his possible excessive strengths. Your suggestions to moderate his strenghts are not mandatory. However';
$lang['tutorial-info-11'] = 'Här kommer du att föreslå deltagaren att han modererar eller tonar ner sina eventuella överdrivna styrkor. Dina förslag för att moderera hans styrkor är inte obligatoriska. Men om du har upplevt särskilda händelser där du har märkt att styrkorna han använder redan är bra, behöver du inte klicka på';

$english_lang['tutorial-info-12'] = ' column anymore. At this point however';
$lang['tutorial-info-12'] = 'kolumnen mer. Vid den här tidpunkten uppmuntras du dock att kommentera i det utrymme som finns på formulärets högra sida för att förklara varför du föreslår för honom att moderera eller tona ner dessa styrkor.';

$english_lang['tutorial-info-13'] = ' After this';
$lang['tutorial-info-13'] = 'Efter detta kan du fortsätta till';

$english_lang['tutorial-info-14'] = 'Column whärein this time';
$lang['tutorial-info-14'] = 'Kolumn där du nu kommer att föreslå deltagaren att förbättra eller göra mer av de särskilda styrkorna. Du kommer att följa samma process när du besvarar formuläret med LIFO Style först innan du skickar din feedback och lämnar kommentarer samt varför de behöver förbättra dessa styrkor.';


$english_lang['header-reminder'] = 'Additional reminders for sending your feedback.';
$lang['header-reminder'] = 'Ytterligare påminnelser för att skicka din feedback.';

$english_lang['reminder-info-1'] = 'Kindly provide your opinion for each of the participants being assessed per strength per LIFOﾂｮ Productive Style.';
$lang['reminder-info-1'] = 'Ge ge din åsikt för var och en av deltagarna som bedöms per styrka per LIFO-produktiv stil.';

$english_lang['reminder-info-2'] = 'Thäre are no right or wrong answers for this exercise. Simply refer to your answers based on your experiences you had or have with this participant.';
$lang['reminder-info-2'] = 'Det finns inga rätt eller fel svar för den här övningen. Hänvisa helt enkelt till dina svar baserat på dina erfarenheter du haft eller har med den här deltagaren.';

$english_lang['reminder-info-3'] = 'Edit or review first all of your entries from the Supporting-Giving';
$lang['reminder-info-3'] = 'Redigera eller granska först alla dina poster från Stödjande-Lojal, Påverkande-Resultatinriktad, Analytisk-Återhållsam och Optimistisk-Social innan du klickar på SKICKA-knappen.';


$english_lang['tutorial-confirm'] = 'CONFIRM';
$lang['tutorial-confirm'] = 'BEKRÄFTA';

$english_lang['tutorial-do-less'] = 'DO LESS';
$lang['tutorial-do-less'] = 'GÖR MINDRE';

$english_lang['tutorial-do-more'] = 'DO MORE';
$lang['tutorial-do-more'] = 'GÖR MER';

$english_lang['tutorial-yellow'] = 'YELLOW';
$lang['tutorial-yellow'] = 'GUL';

$english_lang['tutorial-green'] = 'GREEN';
$lang['tutorial-green'] = 'GRÖN';

$english_lang['tutorial-red'] = 'RED';
$lang['tutorial-red'] = 'RÖD';


$english_lang['title'] = 'About';
$lang['title'] = 'Om';

$english_lang['btn-submit'] = 'SUBMIT';
$lang['btn-submit'] = 'SKICKA';

$english_lang['btn-all'] = 'All';
$lang['btn-all'] = 'Alla';

$english_lang['btn-yes'] = 'Yes';
$lang['btn-yes'] = 'Ja';

$english_lang['btn-no'] = 'No';
$lang['btn-no'] = 'Nej';

$english_lang['btn-new-account'] = 'Add New Account';
$lang['btn-new-account'] = 'Lägg till nytt konto';



$english_lang['msg-param-missing'] = 'Parameter is missing!';
$lang['msg-param-missing'] = 'Parameter saknas!';

$english_lang['msg-email-taken'] = 'Email is already taken!';
$lang['msg-email-taken'] = 'E-postadressen används redan!';

$english_lang['msg-username-taken'] = 'Username is already taken!';
$lang['msg-username-taken'] = 'Användarnamnet används redan!';


$english_lang['msg-valid-country'] = 'Please select valid counrty!';
$lang['msg-valid-country'] = 'Välj ett giltigt land!';

$english_lang['msg-password-not-match'] = 'Password does not match.';
$lang['msg-password-not-match'] = 'Lösenorden matchar inte.';


$english_lang['msg-delete-account'] = 'Are you sure you want to delete this account?';
$lang['msg-delete-account'] = 'Är du säker på att du vill ta bort det här kontot?';

$english_lang['msg-no-records'] = 'No records found.';
$lang['msg-no-records'] = 'Inga poster hittades.';

$english_lang['msg-no-changes'] = 'No changes were made.';
$lang['msg-no-changes'] = 'Inga ändringar gjordes.';

$english_lang['msg-updated'] = 'Successfully updated account {$username}.';
$lang['msg-updated'] = 'Kontot  {$username} uppdaterades.';

$english_lang['msg-update-failed'] = 'Failed to update {username}. Please contact admin.';
$lang['msg-update-failed'] = 'Kunde inte uppdatera {username}. Kontakta administratören.';

$english_lang['msg-created'] = 'Successfully created account {$username}.';
$lang['msg-created'] = 'Skapade kontot {$username}.';

$english_lang['msg-create-failed'] = 'Failed to create account. Please contact your administrator.';
$lang['msg-create-failed'] = 'Kunde inte skapa konto. Kontakta din administratör.';


$english_lang['title-delete'] = 'Delete';
$lang['title-delete'] = 'Ta bort';

$english_lang['title-account-settings'] = 'Account Settings';
$lang['title-account-settings'] = 'Kontoinställningar';

$english_lang['title-list-account'] = 'List of Accounts';
$lang['title-list-account'] = 'Kontolista';

$english_lang['title-edit-account'] = 'Edit Account';
$lang['title-edit-account'] = 'Redigera konton';

$english_lang['title-create-account'] = 'Create Account';
$lang['title-create-account'] = 'Skapa konton';

$english_lang['title-deleted-accounts'] = 'Deleted Accounts';
$lang['title-deleted-accounts'] = 'Borttagna konton';



$english_lang['title-list-business-partners'] = 'List of Business Partners';
$lang['title-list-business-partners'] = 'Lista över affärspartner';


/* Labels & Actions */
$lang['id']                             = 'Id';
$lang['fail']                           = 'Misslyckas';
$lang['delete']                         = 'Ta bort';
$lang['deleted']                        = 'Raderade';
$lang['remove']                         = 'Avlägsna';
$lang['removed']                        = 'Borttagna';
$lang['add']                            = 'Lägg';
$lang['added']                          = 'Lagt';
$lang['status']                         = 'Status';
$lang['resize']                         = 'Ändra storlek';
$lang['dark_mode']                      = 'Mörkt läge';
$lang['select']                         = 'Välj';
$lang['invalid']                        = 'Ogiltig';
$lang['valid']                          = 'Giltig';
$lang['switch_chat']                    = 'Byt till chatt';
$lang['date']                           = 'Datum';
$lang['show_more']                      = 'Visa mer';
$lang['show_older']                     = 'Visa äldre';
$lang['add_more']                       = 'Lägga till mer';
$lang['action']                         = 'Handling';
$lang['save']                           = 'Spara';
$lang['saved']                          = 'Sparad';
$lang['between']                        = 'Mellan';
$lang['last']                           = 'Sista';
$lang['view']                           = 'Se';
$lang['enable']                         = 'Gör det möjligt';
$lang['disable']                        = 'Inaktivera';
$lang['start']                          = 'Start';
$lang['welcome']                        = 'Välkommen';
$lang['search']                         = 'Sök';
$lang['typing']                         = 'Skriver';
$lang['write']                          = 'Skriva';
$lang['please']                         = 'Snälla du!';

/* Alerts */
$lang['image_upload']                   = 'Endast bild tillåten';
$lang['image_size']                     = 'Maximal bildstorlek';
$lang['access_denied']                  = 'Tillträde beviljas ej';
$lang['not_found']                      = 'Hittades inte';
$lang['login_first']                    = 'Logga in först';
$lang['login_first_chat']               = 'Logga in först för att starta chatten';
$lang['are_you_sure']                   = 'Är du säker?';


/* Users */
$lang['user']                           = 'Användare';
$lang['users']                          = 'Användare';
$lang['group']                          = 'Grupp';
$lang['groups']                         = 'Grupper';
$lang['fullname']                       = 'Fullständiga Namn';
$lang['email']                          = 'E-post';
$lang['guest']                          = 'Gäst';
$lang['guests']                         = 'Gäster';
$lang['customer']                       = 'Kund';
$lang['customers']                      = 'Kunder';
$lang['support']                        = 'Stöd';
$lang['block_reported']                 = 'Blockerad och rapporterad';
$lang['block']                          = 'Blockera';
$lang['report']                         = 'Rapportera';
$lang['blocked']                        = 'Blockerad';
$lang['reported']                       = 'Rapporterad';
$lang['blocked_by']                     = 'Blockerad av';
$lang['permission']                     = 'Tillstånd';
$lang['permissions']                    = 'Behörigheter';
$lang['online']                         = 'Uppkopplad';
$lang['away']                           = 'Bort';
$lang['busy']                           = 'Upptagen';
$lang['offline']                        = 'Off-line';
$lang['member']                         = 'Medlem';
$lang['members']                        = 'Medlemmar';
$lang['profile']                        = 'Profil';

/* Messages */
$lang['member']                         = 'Medlem';
$lang['members']                        = 'Medlemmar';
$lang['conversations']                  = 'Samtal';
$lang['chat']                           = 'Chatt';
$lang['can_chat_with']                  = 'Kan chatta med';
$lang['chat_with']                      = 'Chatta med';
$lang['team']                           = 'Team';
$lang['reply']                          = 'Svar';
$lang['send']                           = 'Skicka';
$lang['unsend']                         = 'Radera för alla';
$lang['unsent']                         = 'Raderad för alla';
$lang['unsent_fail']                    = 'Radera misslyckades. Meddelandet har setts.';


/* Admin Panel */
$lang['admin']                          = 'Administration';
$lang['admin_panel']                    = 'Adminpanel';
$lang['site_name']                      = 'Sidnamn';
$lang['site_logo']                      = 'Webbplatsens logotyp';
$lang['chat_icon']                      = 'Chattikon';
$lang['footer_text']                    = 'Sidfotstext';
$lang['url']                            = 'URL';
$lang['include']                        = 'Omfatta';
$lang['exclude']                        = 'Utesluta';
$lang['include_or_exclude']             = 'Inkludera / exkludera URL';
$lang['chat_show_hide']                 = 'Visa / dölj Lägg till chattwidget på specifika webbadresser';
$lang['include_exclude_note']           = 'Du kan använda antingen Inkludera eller Exkludera URL på en gång.';
$lang['session_user_id']                = 'Användar-ID sessionsnyckel';
$lang['session_user_id_logged']         = 'Inloggad användar-ID-sessionsnyckel';
$lang['pagination_limit']               = 'Pagineringsgräns';
$lang['img_upload_path']                ='Bildöverföringsväg';
$lang['assets_path']                    ='Tillgångar sökväg';
$lang['groups_table']                   ='Grupptabell';
$lang['groups_id']                      ='Grupp-ID';
$lang['groups_name']                    = 'Grupp namn';
$lang['users_table']                    = 'Användartabell';
$lang['users_id']                       = 'Användar ID';
$lang['users_email']                    = 'Användarens e-post';
$lang['pivot_table']                    = 'Pivottabell';
$lang['ug_user_id']                     ='Användar -ID för pivottabell';
$lang['ug_group_id']                    = 'Pivottabellgrupp-ID';
$lang['notification_type']              = 'Typ av meddelande';
$lang['guest_mode']                     = 'Gästläge';
$lang['column_name']                    = 'Kolumnnamn';
$lang['name']                           = 'Namn';
$lang['value']                          = 'Värde';
$lang['enable_disable']                 = 'Aktivera inaktivera';
$lang['on_off']                         = 'På/av';
$lang['settings']                       = 'Inställningar';
$lang['general']                        = 'Allmän';
$lang['widget_config']                  = 'Widget Config';
$lang['realtime']                       = 'Realtid';
$lang['notification']                   = 'Underrättelse';
$lang['logout_login']                   = 'Logga ut och logga in igen';
$lang['hide_email']                     = 'Dölj e-post';
$lang['yes_no']                         = 'Ja/Nej';


$lang['title'] = 'Di';
$lang['btn-submit'] = 'INVIA';
$lang['btn-all'] = 'Tutti';
$lang['btn-yes'] = 'Sì';
$lang['btn-no'] = 'No';
$lang['btn-new-class'] = 'Aggiungi nuova classe';


$lang['msg-param-missing'] = 'Parametro mancante !';
$lang['msg-email-taken'] = 'L`email è già stata presa !';
$lang['msg-username-taken'] = 'Il nome utente è già stato preso !';
$lang['msg-valid-country'] = 'Seleziona un paese valido !';
$lang['msg-password-not-match'] = 'La password non corrisponde.';

$lang['msg-delete-class'] = 'Are you sure you want to delete this class?';
$lang['msg-no-records'] = 'Nessun record trovato.';
$lang['msg-no-changes'] = 'Non sono state apportate modifiche.';
$lang['msg-updated'] = 'Account aggiornato con successo {$username}.';
$lang['msg-update-failed'] = 'Impossibile aggiornare {nome utente}. Si prega di contattare l`amministratore.';
$lang['msg-created'] = 'Account creato con successo {$username}.';
$lang['msg-create-failed'] = 'Impossibile creare l`account. Contatta il tuo amministratore.';

$lang['title-delete'] = 'Elimina';
$lang['title-account-settings'] = 'Impostazioni account';
$lang['title-list-classes'] = 'Elenco delle classi';
$lang['title-edit-classes'] = 'Modifica classi';
$lang['title-create-classes'] = 'Crea classi';
$lang['title-deleted-classes'] = 'Classi eliminate';

$lang['lbl-create-class-name'] = 'Nome ';
$lang['lbl-class-description'] = 'Descrizione';
$lang['lbl-enable-name-on-comments'] = 'Inserisci il nome sul commento';
$lang['lbl-admin-disclaimer'] = 'In qualità di amministratore di questo account, ho il permesso di visualizzare e modificare le informazioni personali di questa classe, inclusi, a titolo esemplificativo, nome ed e-mail. Seleziona questa casella per confermare. ';
 

$english_lang['title'] = 'About';
$lang['title'] = 'Om';

$english_lang['btn-submit'] = 'SUBMIT';
$lang['btn-submit'] = 'SKICKA';

$english_lang['btn-all'] = 'All';
$lang['btn-all'] = 'Alla';

$english_lang['btn-yes'] = 'Yes';
$lang['btn-yes'] = 'Ja';

$english_lang['btn-no'] = 'No';
$lang['btn-no'] = 'Nej';

$english_lang['btn-new-account'] = 'Add New Client/Licensee';
$lang['btn-new-account'] = 'Lägg till ny kund/licensinnehavare';



$english_lang['msg-param-missing'] = 'Parameter is missing!';
$lang['msg-param-missing'] = 'Parameter saknas!';

$english_lang['msg-email-taken'] = 'Email is already taken!';
$lang['msg-email-taken'] = 'E-postadressen används redan!';

$english_lang['msg-username-taken'] = 'Username is already taken!';
$lang['msg-username-taken'] = 'Användarnamnet används redan!';

$english_lang['msg-valid-country'] = 'Please select valid counrty!';
$lang['msg-valid-country'] = 'Välj ett giltigt land!';

$english_lang['msg-password-not-match'] = 'Password does not match.';
$lang['msg-password-not-match'] = 'Lösenorden matchar inte.';


$english_lang['msg-delete-account'] = 'Are you sure you want to delete this account?';
$lang['msg-delete-account'] = 'Är du säker på att du vill ta bort det här kontot?';

$english_lang['msg-no-records'] = 'No records found.';
$lang['msg-no-records'] = 'Inga poster hittades.';

$english_lang['msg-no-changes'] = 'No changes were made.';
$lang['msg-no-changes'] = 'Inga ändringar gjordes.';

$english_lang['msg-updated'] = 'Successfully updated account {$username}.';
$lang['msg-updated'] = 'Kontot  {$username} uppdaterades.';

$english_lang['msg-update-failed'] = 'Failed to update {username}. Please contact admin.';
$lang['msg-update-failed'] = 'Kunde inte uppdatera {username}. Kontakta administratören.';

$english_lang['msg-created'] = 'Successfully created account {$username}.';
$lang['msg-created'] = 'Skapade kontot {$username}.';

$english_lang['msg-create-failed'] = 'Failed to create account. Please contact your administrator.';
$lang['msg-create-failed'] = 'Kunde inte skapa konto. Kontakta din administratör.';


$english_lang['title-delete'] = 'Delete';
$lang['title-delete'] = 'Ta bort';

$english_lang['title-account-settings'] = 'Account Settings';
$lang['title-account-settings'] = 'Kontoinställningar';

$english_lang['title-list-account'] = 'List of Accounts';
$lang['title-list-account'] = 'Kontolista';

$english_lang['title-edit-account'] = 'Edit Account';
$lang['title-edit-account'] = 'Redigera konton';

$english_lang['title-create-account'] = 'Create Account';
$lang['title-create-account'] = 'Skapa konton';

$english_lang['title-deleted-accounts'] = 'Deleted Accounts';
$lang['title-deleted-accounts'] = 'Borttagna konton';



$english_lang['title-list-clients'] = 'List of Clients/Licensee';
$lang['title-list-clients'] = 'Lista över kunder/licensinnehavare';


$english_lang['title'] = 'About';
$lang['title'] = 'Om';

$english_lang['btn-submit'] = 'SUBMIT';
$lang['btn-submit'] = 'SKICKA';

$english_lang['btn-all'] = 'All';
$lang['btn-all'] = 'Alla';

$english_lang['btn-yes'] = 'Yes';
$lang['btn-yes'] = 'Ja';

$english_lang['btn-no'] = 'No';
$lang['btn-no'] = 'Nej';

$english_lang['btn-new-account'] = 'Add New Account';
$lang['btn-new-account'] = 'Lägg till nytt konto';



$english_lang['msg-param-missing'] = 'Parameter is missing!';
$lang['msg-param-missing'] = 'Parameter saknas!';

$english_lang['msg-email-taken'] = 'Email is already taken!';
$lang['msg-email-taken'] = 'E-postadressen används redan!';

$english_lang['msg-username-taken'] = 'Username is already taken!';
$lang['msg-username-taken'] = 'Användarnamnet används redan!';

$english_lang['msg-valid-country'] = 'Please select valid counrty!';
$lang['msg-valid-country'] = 'Välj ett giltigt land!';

$english_lang['msg-password-not-match'] = 'Password does not match.';
$lang['msg-password-not-match'] = 'Lösenorden matchar inte.';


$english_lang['msg-delete-account'] = 'Are you sure you want to delete this account?';
$lang['msg-delete-account'] = 'Är du säker på att du vill ta bort det här kontot?';

$english_lang['msg-no-records'] = 'No records found.';
$lang['msg-no-records'] = 'Inga poster hittades.';

$english_lang['msg-no-changes'] = 'No changes were made.';
$lang['msg-no-changes'] = 'Inga ändringar gjordes.';

$english_lang['msg-updated'] = 'Successfully updated account {$username}.';
$lang['msg-updated'] = 'Kontot  {$username} uppdaterades.';

$english_lang['msg-update-failed'] = 'Failed to update {username}. Please contact admin.';
$lang['msg-update-failed'] = 'Kunde inte uppdatera {username}. Kontakta administratören.';

$english_lang['msg-created'] = 'Successfully created account {$username}.';
$lang['msg-created'] = 'Skapade kontot {$username}.';

$english_lang['msg-create-failed'] = 'Failed to create account. Please contact your administrator.';
$lang['msg-create-failed'] = 'Kunde inte skapa konto. Kontakta din administratör.';


$english_lang['title-delete'] = 'Delete';
$lang['title-delete'] = 'Ta bort';

$english_lang['title-account-settings'] = 'Account Settings';
$lang['title-account-settings'] = 'Kontoinställningar';

$english_lang['title-list-account'] = 'List of Accounts';
$lang['title-list-account'] = 'Kontolista';

$english_lang['title-edit-account'] = 'Edit Account';
$lang['title-edit-account'] = 'Redigera konton';

$english_lang['title-create-account'] = 'Create Account';
$lang['title-create-account'] = 'Skapa konton';

$english_lang['title-deleted-accounts'] = 'Deleted Accounts';
$lang['title-deleted-accounts'] = 'Borttagna konton';


$english_lang['title-list-invite'] = 'List of Corporate Account Invites';
$lang['title-list-invite'] = 'Lista över företagskontoinbjudningar';

$english_lang['title-list-accounts'] = 'List of Corporate Accounts';
$lang['title-list-accounts'] = 'Lista över företagskonton';


$english_lang['go-home'] = 'Go to Home';
$lang['go-home'] = 'Gå till Hem';

$english_lang['go-back'] = 'Go Back';
$lang['go-back'] = 'Gå tillbaka';


$english_lang['forbidden-title'] = 'Access Denied';
$lang['forbidden-title'] = 'Åtkomst nekad';

$english_lang['forbidden-header'] = 'Error 403: Access Denied';
$lang['forbidden-header'] = 'Fel 403: Åtkomst nekad';

$english_lang['forbidden-message'] = 'You are not allowed to access this page.';
$lang['forbidden-message'] = 'Du har inte åtkomst till den här sidan.';

$english_lang['notfound-title'] = 'Not Found';
$lang['notfound-title'] = 'Hittades inte';

$english_lang['notfound-header'] = 'Error 403: Page Not Found';
$lang['notfound-header'] = 'Fel 403: Sidan hittades inte';

$english_lang['notfound-message'] = 'The page you were looking for appears to have been moved';
$lang['notfound-message'] = 'Sidan du sökte verkar ha flyttats, tagits bort eller finns inte.';



$english_lang['internalerror-title'] = 'Error';
$lang['internalerror-title'] = 'Fel';

$english_lang['internalerror-header'] = 'Error 500: Internal Server Error';
$lang['internalerror-header'] = 'Fel 500: Internt serverfel';

$english_lang['internalerror-message'] = 'Ops! Sorry something went wrong. Please try again later.';
$lang['internalerror-message'] = 'Hoppsan! Något gick fel. Försök igen senare.';


$english_lang['title'] = 'About';
$lang['title'] = 'Om';

$english_lang['btn-submit'] = 'SUBMIT';
$lang['btn-submit'] = 'SKICKA';

$english_lang['btn-all'] = 'All';
$lang['btn-all'] = 'Alla';

$english_lang['btn-yes'] = 'Yes';
$lang['btn-yes'] = 'Ja';

$english_lang['btn-no'] = 'No';
$lang['btn-no'] = 'Nej';

$english_lang['btn-cancel'] = 'Cancel';
$lang['btn-cancel'] = '';

$english_lang['btn-invite'] = 'Invite';
$lang['btn-invite'] = 'inbjudan';

$english_lang['btn-new-account'] = 'Add New Account';
$lang['btn-new-account'] = 'Lägg till nytt konto';

$english_lang['btn-add-invite'] = 'Add Invite';
$lang['btn-add-invite'] = 'Lägg till inbjudan';


$english_lang['msg-invalid-username'] = 'Invalid usernmae';
$lang['msg-invalid-username'] = 'Ogiltigt användarnamn';

$english_lang['msg-unchanged'] = 'Blank if unchanged';
$lang['msg-unchanged'] = 'Tom om den är oförändrad';

$english_lang['msg-condition-result-total'] = 'Must be combined total of 90.';
$lang['msg-condition-result-total'] = 'Måste kombineras totalt 90.';

$english_lang['msg-param-missing'] = 'Parameter is missing!';
$lang['msg-param-missing'] = 'Parameter saknas!';

$english_lang['msg-email-taken'] = 'Email is already taken!';
$lang['msg-email-taken'] = 'E-postadressen används redan!';

$english_lang['msg-username-taken'] = 'Username is already taken!';
$lang['msg-username-taken'] = 'Användarnamnet används redan!';

$english_lang['msg-valid-country'] = 'Please select valid counrty!';
$lang['msg-valid-country'] = 'Välj ett giltigt land!';


$english_lang['msg-delete-account'] = 'Are you sure you want to delete this account?';
$lang['msg-delete-account'] = 'Är du säker på att du vill ta bort det här kontot?';

$english_lang['msg-no-records'] = 'No records found.';
$lang['msg-no-records'] = 'Inga poster hittades.';

$english_lang['msg-no-changes'] = 'No changes were made.';
$lang['msg-no-changes'] = 'Inga ändringar gjordes.';

$english_lang['msg-updated'] = 'Successfully updated account {$username}.';
$lang['msg-updated'] = 'Kontot  {$username} uppdaterades.';

$english_lang['msg-update-failed'] = 'Failed to update {username}. Please contact admin.';
$lang['msg-update-failed'] = 'Kunde inte uppdatera {username}. Kontakta administratören.';

$english_lang['msg-created'] = 'Successfully created account {$username}.';
$lang['msg-created'] = 'Skapade kontot {$username}.';

$english_lang['msg-create-failed'] = 'Failed to create account. Please contact your administrator.';
$lang['msg-create-failed'] = 'Kunde inte skapa konto. Kontakta din administratör.';



$english_lang['title-fav-result'] = 'Favorable Results';
$lang['title-fav-result'] = 'Gynnsamma förhållanden';

$english_lang['title-unfav-result'] = 'Unfavorable Results';
$lang['title-unfav-result'] = 'Ogynnsamma förhållanden';


$english_lang['title-helpful-link'] = 'Helpful Links';
$lang['title-helpful-link'] = 'Användbara länkar';

$english_lang['title-language'] = 'Language';
$lang['title-language'] = 'Språk';

$english_lang['title-chat-box'] = 'Chat Box';
$lang['title-chat-box'] = 'Chattlåda';


$english_lang['title-send-invite'] = 'Send Account Invitation';
$lang['title-send-invite'] = 'Skicka inbjudan till konto';

$english_lang['title-delete'] = 'Delete';
$lang['title-delete'] = 'Ta bort';

$english_lang['title-account-settings'] = 'Account Settings';
$lang['title-account-settings'] = 'Kontoinställningar';

$english_lang['title-list-account'] = 'List of Accounts';
$lang['title-list-account'] = 'Kontolista';

$english_lang['title-edit-account'] = 'Edit Account';
$lang['title-edit-account'] = 'Redigera konton';

$english_lang['title-create-account'] = 'Create Account';
$lang['title-create-account'] = 'Skapa konton';

$english_lang['title-deleted-accounts'] = 'Deleted Accounts';
$lang['title-deleted-accounts'] = 'Borttagna konton';

$english_lang['lbl-enter-email'] = 'Enter email address:';
$lang['lbl-enter-email'] = 'Skriv in epostadress:';

$english_lang['lbl-send-invite'] = 'Please enter email address of person you want to invite:';
$lang['lbl-send-invite'] = 'Ange e -postadressen till personen du vill bjuda in:';

$english_lang['lbl-select-country'] = 'Select Country';
$lang['lbl-select-country'] = 'Välj land';

$english_lang['lbl-enter-account-details'] = 'Enter account details:';
$lang['lbl-enter-account-details'] = 'Ange kontouppgifter:';

$english_lang['lbl-account-details'] = 'Account details:';
$lang['lbl-account-details'] = 'Kontouppgifter:';

$english_lang['lbl-description'] = 'Description (optional)';
$lang['lbl-description'] = 'Beskrivning (valfritt)';

$english_lang['lbl-contact-person-optional'] = 'Contact person (optional)';
$lang['lbl-contact-person-optional'] = 'Kontaktperson (valfritt)';

$english_lang['lbl-enter-account-contact-details'] = 'Enter account contact details (optional) :';
$lang['lbl-enter-account-contact-details'] = 'Ange kontokontaktuppgifter (valfritt):';

$english_lang['lbl-choose-option'] = 'Choose your option';
$lang['lbl-choose-option'] = 'Välj ditt alternativ';


$english_ang['lbl-password'] = 'Password';
$lang['lbl-password'] = 'Lösenord';

$english_lang['lbl-confirm-password'] = 'Confirm Password';
$lang['lbl-confirm-password'] = 'Bekräfta lösenord';

$english_lang['lbl-position'] = 'Position';
$lang['lbl-position'] = 'Placera';


$english_lang['lbl-fullname'] = 'Full Name';
$lang['lbl-fullname'] = 'Fullständiga namn';

$english_lang['lbl-company'] = 'Company Name';
$lang['lbl-company'] = 'Företagsnamn';

$english_lang['lbl-username'] = 'Username';
$lang['lbl-username'] = 'Användarnamn';

$english_lang['lbl-credits'] = 'Credits';
$lang['lbl-credits'] = 'Poäng';

$english_lang['lbl-country'] = 'Country';
$lang['lbl-country'] = 'Land';

$english_lang['lbl-contact-person'] = 'Contact Person';
$lang['lbl-contact-person'] = 'Kontaktperson';

$english_lang['lbl-contact-number'] = 'Contact Number';
$lang['lbl-contact-number'] = 'Kontaktnummer';

$english_lang['lbl-type'] = 'Type';
$lang['lbl-type'] = 'Typ';

$english_lang['lbl-more-details'] = 'More Details';
$lang['lbl-more-details'] = 'Fler detaljer';

$english_lang['lbl-actions'] = 'Actions';
$lang['lbl-actions'] = 'Handlingar';

$english_lang['lbl-email'] = 'Email';
$lang['lbl-email'] = 'E-post';

$english_lang['lbl-created'] = 'Created';
$lang['lbl-created'] = 'Skapad';

$english_lang['lbl-created-by'] = 'Created By';
$lang['lbl-created-by'] = 'Skapad av';

$english_lang['lbl-status'] = 'Status';
$lang['lbl-status'] = 'Status';

$english_lang['lbl-name'] = 'Name';
$lang['lbl-name'] = 'Namn';

$english_lang['lbl-num_members'] = 'Number Of Members';
$lang['lbl-num_members'] = 'Antal medlemmar';

$english_lang['lbl-upload'] = 'Upload';
$lang['lbl-upload'] = 'Ladda upp';

$english_lang['lbl-upload-image'] = 'Upload Image';
$lang['lbl-upload-image'] = 'Ladda upp bild';


$english_lang['lbl-footer'] = 'We act as an innovation producer for people in search of solutions for their organizations and talent. In order to achieve their ideal future state in faster and more reliable ways';
$lang['lbl-footer'] = 'Vi fungerar som en innovationsproducent för människor på jakt efter lösningar för sina organisationer och kompetenser. För att uppnå sin ideala framtida status på snabbare och mer tillförlitliga sätt använder vi vår kunskap och erfarenhet inom kompetens- och organisationsutveckling och producerar kontinuerligt innovativa lösningar för att lösa dina problem med deltagande och engagemang.';

$english_lang['lbl-notice'] = 'Notice';
$lang['lbl-notice'] = 'Lägga märke till';

$english_lang['lbl-cookie-info-1'] = 'This website or its third-party tools use cookies';
$lang['lbl-cookie-info-1'] = 'Denna webbplats eller dess tredjepartsverktyg använder cookies som är nödvändiga för att den ska fungera och som krävs för att uppnå de syften som visas i cookiepolicyn. Om du vill lära dig mer eller dra tillbaka ditt samtycke till alla eller några av kakorna';

$english_lang['lbl-cookie-info-2'] = 'You accept the use of cookies by closing or dismissing this banner';
$lang['lbl-cookie-info-2'] = 'Du accepterar användningen av cookies genom att stänga eller avfärda denna banner, genom att klicka på en länk eller knapp eller genom att fortsätta surfa på annat sätt';

$english_lang['btn-accept'] = 'Accept';
$lang['btn-accept'] = 'Acceptera';

$english_lang['btn-later'] = 'Later';
$lang['btn-later'] = 'Senare';


$english_lang['lnk-privacy-policy'] = 'Privacy Policy';
$lang['lnk-privacy-policy'] = 'Integritetspolicy';

$english_lang['lnk-cookie-polocy'] = 'Cookie Policy';
$lang['lnk-cookie-polocy'] = 'Cookie Policy';

$english_lang['lnk-about'] = 'About';
$lang['lnk-about'] = 'Om';

$english_lang['lnk-my-account'] = 'My Account';
$lang['lnk-my-account'] = 'Mitt konto';

$english_lang['lnk-settings'] = 'Settings';
$lang['lnk-settings'] = 'inställningar';

$english_lang['lnk-privacy'] = 'Privacy';
$lang['lnk-privacy'] = 'Integritet';

$english_lang['lnk-logout'] = 'Logout';
$lang['lnk-logout'] = 'Logga ut';

$english_lang['lnk-view-all'] = 'View All';
$lang['lnk-view-all'] = 'Visa alla';

$english_lang['lnk-create-account'] = 'Create Account';
$lang['lnk-create-account'] = 'Skapa konto';

$english_lang['lnk-deleted-accounts'] = 'Deleted Accounts';
$lang['lnk-deleted-accounts'] = 'Borttagna konton';

$english_lang['lnk-create-class'] = 'Create Class';
$lang['lnk-create-class'] = 'skapa klass';

$english_lang['lnk-deleted-class'] = 'Deleted Classes';
$lang['lnk-deleted-class'] = 'Raderad klass';

$english_lang['lnk-my-feedback'] = 'My Feedback';
$lang['lnk-my-feedback'] = 'Min feedback';

$english_lang['lnk-start-feedback'] = 'Start Feedback';
$lang['lnk-start-feedback'] = 'Starta feedback';

$english_lang['lnk-feedback-giver'] = 'Feedback Giver';
$lang['lnk-feedback-giver'] = 'Feedback-givare';

$english_lang['lnk-clients'] = 'Clients/Licensees';
$lang['lnk-clients'] = 'Kunder/licensinnehavare';

$english_lang['lnk-classes'] = 'Classes';
$lang['lnk-classes'] = 'Klasser';

$english_lang['lnk-business-partners'] = 'Business Partners';
$lang['lnk-business-partners'] = 'Affärspartner';

$english_lang['lnk-corporate'] = 'Corporate Accounts';
$lang['lnk-corporate'] = 'Företagskonton.';

//RESET PASSWORD SECTION
$english_lang['lbl-reset-your-password'] = 'Reset Your Password';
$lang['lbl-reset-your-password'] = 'återställ ditt lösenord';

$english_lang['lbl-enter-your-username'] = 'Enter Your Username';
$lang['lbl-enter-your-username'] = 'ange ditt användarnamn';

$english_lang['lbl-reset-submit'] = 'Submit';
$lang['lbl-reset-submit'] = 'Skicka';

$english_lang['lbl-reset-login'] = 'Login';
$lang['lbl-reset-login'] = 'Logga in';


//CREDITS SECTION
$english_lang['lbl-available-credits'] = 'Available credits';
$lang['lbl-available-credits'] = 'Tillgängliga krediter';

$english_lang['lbl-enter-amount-to-transfer'] = 'Enter amount to transfer';
$lang['lbl-enter-amount-to-transfer'] = 'Ange belopp att överföra';

$english_lang['lbl-select-source-account'] = 'Select source account';
$lang['lbl-select-source-account'] = 'Välj källkonto';

$english_lang['lbl-select-target-account'] = 'Select target account';
$lang['lbl-select-target-account'] = 'Välj målkonto';

$english_lang['lbl-own-account'] = 'Own account';
$lang['lbl-own-account'] = 'Eget konto';

$english_lang['lbl-date-of-transfer'] = 'Date of transfer';
$lang['lbl-date-of-transfer'] = 'överföringsdatum';

$english_lang['lbl-from'] = 'From';
$lang['lbl-from'] = 'från';

$english_lang['lbl-to'] = 'To';
$lang['lbl-to'] = 'till';

$english_lang['lbl-amount'] = 'Amount';
$lang['lbl-amount'] = 'belopp';

//EXPORT CSV SECTION
$english_lang['lbl-export-data-to-csv'] = 'Export Data To Csv';
$lang['lbl-export-data-to-csv'] = 'Exportera data till csv';

$english_lang['lbl-select-data-to-export-to-csv'] = 'Select Data To Export To Csv';
$lang['lbl-select-data-to-export-to-csv'] = 'Välj data att exportera till csv';


//START FEEDBACK SECTION
$english_lang['lbl-start-feedback'] = 'Start Feedback';
$lang['lbl-start-feedback'] = 'Starta feedback';

$english_lang['lbl-please-select-from-the-list'] = 'Please Select From The List';
$lang['lbl-please-select-from-the-list'] = 'Välj från listan';

$english_lang['lbl-no-assigned-participant'] = 'No Assigned Participant';
$lang['lbl-no-assigned-participant'] = 'Inga tilldelade deltagare';


//FEEDBACK CHART OF OTHER PARTICIPANTS SECTION
$english_lang['lbl-see-feedback-of-other-participants'] = 'See feedback chart of other participants';
$lang['lbl-see-feedback-of-other-participants'] = 'Se feedback-diagram med andra deltagare';

//CLASS CHAT DISCUSSION
$english_lang['lbl-class-chat-message'] = 'Message';
$lang['lbl-class-chat-message'] = 'Meddelande';

$english_lang['lbl-class-chat-submit'] = 'Submit';
$lang['lbl-class-chat-submit'] = 'Skicka';

$english_lang['title'] = 'Login';
$lang['title'] = 'Inloggning';

$english_lang['btn-signin'] = 'Sign In';
$lang['btn-signin'] = 'Logga in';

$english_lang['btn-forgot-password'] = 'Forgot Password';
$lang['btn-forgot-password'] = 'Glömt lösenord';

$english_lang['title-pls-login'] = 'Please login to your account';
$lang['title-pls-login'] = 'Logga in på ditt konto';

$english_lang['txt-login-notice'] = 'By ticking this box';
$lang['txt-login-notice'] = 'Genom att markera den här rutan samtycker du till att de personuppgifter du lämnar till <br> Business Consultants, Inc. behandlas, överförs och lagras på servrar som finns i Filippinerna <br> och att du samtycker till vår';


$english_lang['title'] = 'About';
$lang['title'] = 'Om';

$english_lang['btn-delete-account'] = 'Delete Account';
$lang['btn-delete-account'] = 'Ta bort konto';

$english_lang['btn-download'] = 'Download';
$lang['btn-download'] = 'Hämta';

$english_lang['lbl-chart-visibility'] = 'Chart Visibility';
$lang['lbl-chart-visibility'] = 'Diagramsynlighet';

$english_lang['lbl-fbcs-01'] = 'Public';
$lang['lbl-fbcs-01'] = 'Offentlig';

$english_lang['lbl-fbcs-02'] = 'Me and Class Members Only';
$lang['lbl-fbcs-02'] = 'Endast jag och klassmedlemmar';

$english_lang['lbl-fbcs-03'] = 'Me and Admin Only';
$lang['lbl-fbcs-03'] = 'Endast jag och administratör';

$english_lang['lbl-fbcs-04'] = 'Only Me';
$lang['lbl-fbcs-04'] = 'Endast jag';

$english_lang['lbl-enter-password'] = 'Enter Your Password';
$lang['lbl-enter-password'] = 'Ange ditt lösenord';

$english_lang['title-feedback-chart-settings'] = 'Feedback Chart Settings';
$lang['title-feedback-chart-settings'] = 'Inställningar för feedbackdiagram';

$english_lang['title-delete-account-warning'] = 'Warning! This is permanent!';
$lang['title-delete-account-warning'] = 'Varning! Detta är permanent!';

$english_lang['title-account-privacy'] = 'Account Privacy';
$lang['title-account-privacy'] = 'Kontosekretess';

$english_lang['title-account-settings'] = 'Account Settings';
$lang['title-account-settings'] = 'Kontoinställningar';

$english_lang['title-delete-account'] = 'Delete Your Account';
$lang['title-delete-account'] = 'Ta bort ditt konto';

$english_lang['title-download-data'] = 'Download Account Data';
$lang['title-download-data'] = 'Hämta kontodata';

$english_lang['title-upload-image'] = 'Upload Image:';
$lang['title-upload-image'] = 'Ladda upp bild';

$english_lang['txt-delete-account-warning'] = 'Are you sure you want to delete your account?<br>Please enter your password to proceed:';
$lang['txt-delete-account-warning'] = 'Är du säker på att du vill ta bort ditt konto?<br>Ange ditt lösenord för att fortsätta:';


$english_lang['txt-delete-account'] = 'Deleting an account will remove it from our servers entirely in accordance to our Privacy Policy.';
$lang['txt-delete-account'] = 'Om du tar bort ett konto tas det bort från våra servrar helt i enlighet med vår sekretesspolicy.';

$english_lang['txt-download-data'] = 'You can export and download your data from your account to keep as an archive.';
$lang['txt-download-data'] = 'Du kan exportera och hämta din data från ditt konto för att spara som ett arkiv.';

		return response()->json($lang);
		/*
		return response()->json([
    			'name' => 'Abigail',
    			'state' => 'CA',
		]);
		*/
	}


}
