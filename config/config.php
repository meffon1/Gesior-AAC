<?PHP
// ----Config Shop----
$outfits_list = array();
$loyalty_title = array(50 => 'Scout', 100 => 'Sentinel', 200 => 'Steward', 400 => 'Warden', 1000 => 'Squire', 2000 => 'Warrior', 3000 => 'Keeper', 4000 => 'Guardian', 5000 => 'Sage');
$config['shop']['newitemdays'] = 1; #days to item be new in shop

# Pagseguro configs
$config['pagseguro']['testing'] = false;
$config['pagseguro']['tokentest'] = "";
$config['pagseguro']['email'] = '';
$config['pagseguro']['apitoken'] = '';

# Bank transfer data
$config['banktransfer']['bank'] = "Caixa Econômica";
$config['banktransfer']['agency'] = "";
$config['banktransfer']['account'] = "";
$config['banktransfer']['name'] = "";
$config['banktransfer']['operation'] = 003; // 0 = no operation

# PayPal configs
$config['paypal']['email'] = "";

# Social Networks
$config['social']['status'] = true;
$config['social']['facebook'] = "https://www.facebook.com/tibia";

# PAGE: characters.php
$config['site']['quests'] = array(
"Demon Helmet" => 0,
"In Service of Yalahar" => 0,
"Pits Of Inferno" => 0,
"The Ancient Tombs" => 0,
"The Annihilator" => 0,
"The Demon Oak" => 0,
"Wrath Of The Emperor" => 0);

# time in days to show the former names
$config['site']['formerNames'] = 10;
$config['site']['formerNames_amount'] = 10;

# Account Maker Config
$config['site']['serverPath'] = "G:\Forgotten Server/";
$config['site']['useServerConfigCache'] = false;
$towns_list = array(
1 => 'Ab\'Dendriel', 
2 => 'Ankrahmun', 
3 => 'Carlin', 
4 => 'Darashia', 
5 => 'Edron', 
6 => 'Farmine', 
7 => 'Gray Beach', 
8 => 'Kazordoon', 
9 => ' Liberty Bay', 
10 => 'Port Hope', 
11 => 'Rathleton', 
12 => 'Svargrond', 
13 => 'Thais', 
14 => 'Venore', 
15 => 'Yalahar',
);
# this is important if you want to use ajax check in your create account
$config['site']['sqlHost'] = "localhost";
$config['site']['sqlUser'] = "root";
$config['site']['sqlPass'] = "";
$config['site']['sqlBD'] = "";

# Create Account Options
$config['site']['one_email'] = false;
$config['site']['create_account_verify_mail'] = false;
$config['site']['verify_code'] = true;
$config['site']['email_days_to_change'] = 3;
$config['site']['newaccount_premdays'] = 0;
$config['site']['send_register_email'] = false;

# Create Character Options
$config['site']['newchar_vocations'] = array(0 => 'Rook Sample');
$config['site']['newchar_towns'] = array(1);
$config['site']['max_players_per_account'] = 7;

# Emails Config
$config['site']['send_emails'] = true;
$config['site']['mail_address'] = "";
$config['site']['mail_senderName'] = "";
$config['site']['smtp_enabled'] = true;
$config['site']['smtp_host'] = "";
$config['site']['smtp_port'] = 465;
$config['site']['smtp_auth'] = true;
$config['site']['smtp_user'] = "";
$config['site']['smtp_pass'] = "";
$config['site']['smtp_secure'] = true;

# PAGE: accountmanagement.php
$config['site']['send_mail_when_change_password'] = true;
$config['site']['send_mail_when_generate_reckey'] = true;
$config['site']['email_time_change'] = 7;
$config['site']['daystodelete'] = 7;
$config['site']['flash_client_enabled'] = false;

# PAGE: guilds.php
$config['site']['guild_need_level'] = 1;
$config['site']['guild_need_pacc'] = false;
$config['site']['guild_image_size_kb'] = 50;
$config['site']['guild_description_chars_limit'] = 2000;
$config['site']['guild_description_lines_limit'] = 6;
$config['site']['guild_motd_chars_limit'] = 250;

# PAGE: adminpanel.php
$config['site']['access_admin_panel'] = 3;

# PAGE: latestnews.php
$config['site']['news_limit'] = 6;

# PAGE: killstatistics.php
$config['site']['last_deaths_limit'] = 40;

# PAGE: team.php
$config['site']['groups_support'] = array(2, 3, 4, 5, 6);

# PAGE: highscores.php
$config['site']['groups_hidden'] = array(3, 4, 5, 6);
$config['site']['accounts_hidden'] = array(1);

# PAGE: lostaccount.php
$config['site']['email_lai_sec_interval'] = 180;

#  Pagseguro offers
// ValorR$ => Qtd_coins
$config['pagseguro']['offers'] = array(
    500=>75,
    800=>125,
    1500=>250,
    2800=>500,
    4900=>1000
);
// Nome do produto
$config['pagseguro']['produtoNome'] = 'Tibia Coins';

$config['pagseguro']['urlRedirect'] =  'https://127.0.0.1/';
$config['pagseguro']['urlNotification'] = 'http://127.0.0.1/retpagseguro.php';

# Layout Config
$config['site']['layout'] = 'tibiarl';
$config['site']['vdarkborder'] = '#505050';
$config['site']['darkborder'] = '#D4C0A1';
$config['site']['lightborder'] = '#F1E0C6';
$config['site']['download_page'] = false;
$config['site']['serverinfo_page'] = true;