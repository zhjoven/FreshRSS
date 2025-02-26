<?php

/******************************************************************************/
/* Each entry of that file can be associated with a comment to indicate its   */
/* state. When there is no comment, it means the entry is fully translated.   */
/* The recognized comments are (comment matching is case-insensitive):        */
/*   + TODO: the entry has never been translated.                             */
/*   + DIRTY: the entry has been translated but needs to be updated.          */
/*   + IGNORE: the entry does not need to be translated.                      */
/* When a comment is not recognized, it is discarded.                         */
/******************************************************************************/

return array(
	'archiving' => array(
		'_' => 'Arkistointi',
		'exception' => 'Poiston poikkeukset',
		'help' => 'Lisäasetuksia on yksittäisen syötteen asetuksissa',
		'keep_favourites' => 'Älä koskaan poista suosikkeja',
		'keep_labels' => 'Älä koskaan poista merkintöjä',
		'keep_max' => 'Enimmäismäärä säilytettäviä artikkeleita syötettä kohti',
		'keep_min_by_feed' => 'Vähimmäismäärä säilytettäviä artikkeleita syötettä kohti',
		'keep_period' => 'Vanhimmat säilytettävät artikkelit',
		'keep_unreads' => 'Älä koskaan poista lukemattomia artikkeleita',
		'maintenance' => 'Ylläpito',
		'optimize' => 'Optimoi tietokanta',
		'optimize_help' => 'Voit pienentää tietokannan kokoa ajamalla toiminnon silloin tällöin',
		'policy' => 'Poistokäytäntö',
		'policy_warning' => 'Jos poistokäytäntöä ei ole valittu, kaikki artikkelit säilytetään.',
		'purge_now' => 'Poista artikkelit nyt',
		'title' => 'Arkistointi',
		'ttl' => 'Älä päivitä automaattisesti useammin kuin',
	),
	'display' => array(
		'_' => 'Näkymä',
		'darkMode' => array(
			'_' => 'Automaattinen tumma tila',
			'auto' => 'Automaattinen',
			'help' => 'Toimii vain yhteensopivissa teemoissa',
			'no' => 'Ei',
		),
		'icon' => array(
			'bottom_line' => 'Alin rivi',
			'display_authors' => 'Kirjoittajat',
			'entry' => 'Artikkelien kuvakkeet',
			'publication_date' => 'Julkaisupäivä',
			'related_tags' => 'Artikkelin tunnisteet',
			'sharing' => 'Jakaminen',
			'summary' => 'Yhteenveto',
			'top_line' => 'Ylin rivi',
		),
		'language' => 'Kieli',
		'notif_html5' => array(
			'seconds' => 'sekuntia (0 - ei taukoa)',
			'timeout' => 'Tauko HTML5-ilmoitusten välissä',
		),
		'show_nav_buttons' => 'Näytä siirtymispainikkeet',
		'theme' => array(
			'_' => 'Teema',
			'deprecated' => array(
				'_' => 'Vanhentunut',
				'description' => 'Teema ei ole enää tuettu, eikä se ole enää käytettävissä <a href="https://freshrss.github.io/FreshRSS/en/users/05_Configuration.html#theme" target="_blank">tulevissa FreshRSS-versioissa</a>',
			),
		),
		'theme_not_available' => 'Teema “%s” ei ole enää käytettävissä. Valitse toinen teema.',
		'thumbnail' => array(
			'label' => 'Pikkukuva',
			'landscape' => 'Vaakasuunta',
			'none' => 'Ei mitään',
			'portrait' => 'Pystysuunta',
			'square' => 'Neliö',
		),
		'timezone' => 'Aikavyöhyke',
		'title' => 'Näkymä',
		'website' => array(
			'full' => 'Kuvake ja nimi',
			'icon' => 'Vain kuvake',
			'label' => 'Siuvsto',
			'name' => 'Vain nimi',
			'none' => 'Ei mitään',
		),
		'width' => array(
			'content' => 'Sisällön leveys',
			'large' => 'Leveä',
			'medium' => 'Keskisuuri',
			'no_limit' => 'Täysi leveys',
			'thin' => 'Kapea',
		),
	),
	'logs' => array(
		'loglist' => array(
			'level' => 'Lokien tarkkuus',
			'message' => 'Lokiviesti',
			'timestamp' => 'Aikaleima',
		),
		'pagination' => array(
			'first' => 'Ensimmäinen',
			'last' => 'Viimeinen',
			'next' => 'Seuraava',
			'previous' => 'Edellinen',
		),
	),
	'privacy' => array(
		'_' => 'Tietosuoja',
		'retrieve_extension_list' => 'Nouda laajennusluettelo',
	),
	'profile' => array(
		'_' => 'Profiilien hallinta',
		'api' => array(
			'_' => 'API-hallinta',
			'check_link' => 'Check API status via: <kbd><a href="../api/" target="_blank">%s</a></kbd>',	// TODO
			'disabled' => 'The API access is disabled.',	// TODO
			'documentation_link' => 'See the <a href="https://freshrss.github.io/FreshRSS/en/users/06_Mobile_access.html#access-via-mobile-app" target="_blank">documentation and list of known apps</a>',	// TODO
			'help' => 'See <a href="http://freshrss.github.io/FreshRSS/en/users/06_Mobile_access.html#access-via-mobile-app" target=_blank>documentation</a>',	// TODO
		),
		'delete' => array(
			'_' => 'Tilin poisto',
			'warn' => 'Tilisi ja kaikki siihen kuuluvat tiedot poistetaan.',
		),
		'email' => 'Sähköpostiosoite',
		'password_api' => 'API-salasana<br /><small>(esimerkiksi kännykkäsovelluksille)</small>',
		'password_form' => 'Salasana<br /><small>(Web-lomakkeella kirjautumista varten)</small>',
		'password_format' => 'Vähintään 7 merkkiä',
		'title' => 'Profiili',
	),
	'query' => array(
		'_' => 'Käyttäjän kyselyt',
		'deprecated' => 'Kysely ei enää kelpaa. Siinä käytetty luokka tai syöte on poistettu.',
		'description' => 'Kuvaus',
		'filter' => array(
			'_' => 'Suodatin käytössä:',
			'categories' => 'Näytä luokan mukaan',
			'feeds' => 'Näytä syötteen mukaan',
			'order' => 'Lajittele päivämäärän mukaan',
			'search' => 'Lauseke',
			'shareOpml' => 'Jaa kyselyä vastaavat luokat ja syötteet OPML-muodossa',
			'shareRss' => 'Jaa HTML &amp; RSS -muodossa',
			'state' => 'Tila',
			'tags' => 'Näytä merkinnän mukaan',
			'type' => 'Laji',
		),
		'get_A' => 'Show all feeds, also those shown in their category',	// TODO
		'get_Z' => 'Show all feeds, also archived ones',	// TODO
		'get_all' => 'Näytä kaikki artikkelit',
		'get_all_labels' => 'Näytä artikkelit, joissa on mikä tahansa merkintä',
		'get_category' => 'Näytä luokka “%s”',
		'get_favorite' => 'Näytä suosikkiartikkelit',
		'get_feed' => 'Näytä syöte “%s”',
		'get_important' => 'Näytä artikkelit tärkeistä syötteistä',
		'get_label' => 'Näytä artikkelit, joissa on merkintä “%s”',
		'help' => 'Lisätietoja <a href="https://freshrss.github.io/FreshRSS/en/users/user_queries.html" target="_blank">käyttäjän kyselyistä ja edelleenjakamisesta HTML/RSS/OPML-muodossa</a> on ohjeessa.',
		'image_url' => 'Kuvan URL',
		'name' => 'Nimi',
		'no_filter' => 'Ei suodatinta',
		'no_queries' => array(
			'_' => 'No user queries are saved yet.',	// TODO
			'help' => 'See <a href="https://freshrss.github.io/FreshRSS/en/users/user_queries.html" target="_blank">documentation</a>',	// TODO
		),
		'number' => 'Kysely %d',
		'order_asc' => 'Näytä vanhimmat artikkelit ensin',
		'order_desc' => 'Näytä uusimmat artikkelit ensin',
		'search' => 'Hae sanaa “%s”',
		'share' => array(
			'_' => 'Jaa kysely linkin avulla',
			'disabled' => array(
				'_' => 'disabled',	// TODO
				'title' => 'Sharing',	// TODO
			),
			'greader' => 'Linkki GReader JSON -muotoon jaettavaksi',
			'help' => 'Voit jakaa kyselyn muiden kanssa antamalle heille tämän linkin',
			'html' => 'Jaettava linkki HTML-sivuun',
			'opml' => 'Jaettava linkki syötteiden OPML-luetteloon',
			'rss' => 'Jaettava linkki RSS-syötteeseen',
		),
		'state_0' => 'Näytä kaikki artikkelit',
		'state_1' => 'Näytä luetut artikkelit',
		'state_2' => 'Näytä lukemattomat artikkelit',
		'state_3' => 'Näytä kaikki artikkelit',
		'state_4' => 'Näytä suosikkiartikkelit',
		'state_5' => 'Näytä luetut suosikkiartikkelit',
		'state_6' => 'Näytä lukemattomat suosikkiartikkelit',
		'state_7' => 'Näytä suosikkiartikkelit',
		'state_8' => 'Näytä muut kuin suosikkiartikkelit',
		'state_9' => 'Näytä luetut muut kuin suosikkiartikkelit',
		'state_10' => 'Näytä lukemattomat muut kuin suosikkiartikkelit',
		'state_11' => 'Näytä muut kuin suosikkiartikkelit',
		'state_12' => 'Näytä kaikki artikkelit',
		'state_13' => 'Näytä luetut artikkelit',
		'state_14' => 'Näytä lukemattomat artikkelit',
		'state_15' => 'Näytä kaikki artikkelit',
		'title' => 'Käyttäjän kyselyt',
	),
	'reading' => array(
		'_' => 'Lukeminen',
		'after_onread' => 'Kun valitset “merkitse kaikki luetuiksi”',
		'always_show_favorites' => 'Näytä oletusarvoisesti kaikki suosikkiartikkelit',
		'apply_to_individual_feed' => 'Asetus vaikuttaa jokaiseen syötteeseen erikseen',
		'article' => array(
			'authors_date' => array(
				'_' => 'Kirjoittajat ja päiväys',
				'both' => 'Ylä- ja alatunnisteessa',
				'footer' => 'Alatunnisteessa',
				'header' => 'Ylätunnisteessa',
				'none' => 'Älä näytä',
			),
			'feed_name' => array(
				'above_title' => 'Otsikon/tunnisteiden yläpuolella',
				'none' => 'Älä näytä',
				'with_authors' => 'Kirjoittajien ja päiväysten rivillä',
			),
			'feed_title' => 'Syötteen otsikko',
			'icons' => array(
				'_' => 'Artikkelin kuvakkeiden asettelu<br /><small>(vain lukunäkymä)</small>',
				'above_title' => 'Otsikon yläpuolella',
				'with_authors' => 'Kirjoittajien ja päiväysten rivillä',
			),
			'tags' => array(
				'_' => '#Tunnisteet',
				'both' => 'Ylä- ja alatunnisteessa',
				'footer' => 'Alatunnisteessa',
				'header' => 'Ylätunnisteessa',
				'none' => 'Älä näytä',
			),
			'tags_max' => array(
				'_' => 'Enimmäismäärä näytettäviä tunnisteita',
				'help' => '0 - näytä kaikki tunnisteet tiivistämättä',
			),
		),
		'articles_per_page' => 'Artikkelien määrä sivulla',
		'auto_load_more' => 'Lataa lisää artikkeleita sivun lopussa',
		'auto_remove_article' => 'Piilota artikkelit lukemisen jälkeen',
		'confirm_enabled' => 'Pyydä vahvistusta “merkitse kaikki luetuiksi” -toiminnoille',
		'display_articles_unfolded' => 'Näytä artikkelit oletusarvoisesti kokonaan',
		'display_categories_unfolded' => 'Luokat, joiden artikkelit näytetään kokonaan',
		'headline' => array(
			'articles' => 'Artikkelit: avaa/sulje',
			'articles_header_footer' => 'Artikkelit: ylätunniste/alatunniste',
			'categories' => 'Vasen siirtymisvalikko: luokat',
			'mark_as_read' => 'Merkitse artikkeli luetuksi',
			'misc' => 'Sekalaista',
			'view' => 'Näkymä',
		),
		'hide_read_feeds' => 'Piilota luokat ja syötteet, joissa ei ole lukemattomia artikkeleita (ei toimi jos “Näytä kaikki artikkelit” on määritetty)',
		'img_with_lazyload' => 'Lataa kuvat <em>vain tarvittaessa</em>',
		'jump_next' => 'siirry seuraavaan lukemattomaan artikkeliin samassa näkymässä',
		'mark_updated_article_unread' => 'Merkitse päivitetyt artikkelit lukemattomiksi',
		'number_divided_when_reader' => 'Jaa kahdella lukunäkymässä.',
		'read' => array(
			'article_open_on_website' => 'kun artikkeli avataan alkuperäisellä sivustolla',
			'article_viewed' => 'kun artikkeli näytetään',
			'focus' => 'kun artikkeli valitaan (paitsi tärkeät syötteet)',
			'keep_max_n_unread' => 'Lukemattomana pidettävien artikkelien enimmäismäärä',
			'scroll' => 'vieritettäessä näkymää (paitsi tärkeät syötteet)',
			'upon_gone' => 'kun artikkeli ei ole enää alkuperäisessä uutissyötteessä',
			'upon_reception' => 'kun artikkeli on vastaanotettu',
			'when' => 'Merkitse artikkeli luetuksi…',
			'when_same_title_in_category' => 'jos jollakin luokan <i>n</i> uusimmalla artikkelilla on sama otsikko',
			'when_same_title_in_feed' => 'jos jollakin syötteen <i>n</i> uusimmalla artikkelilla on sama otsikko',
		),
		'show' => array(
			'_' => 'Näytettävät artikkelit',
			'active_category' => 'Käytössä oleva luokka',
			'adaptive' => 'Show unreads if any, all articles otherwise',	// TODO
			'all_articles' => 'Näytä kaikki artikkelit',
			'all_categories' => 'Kaikki luokat',
			'no_category' => 'Ei luokkaa',
			'remember_categories' => 'Muista avoinna olevat luokat',
			'unread' => 'Näytä vain lukemattomat',
			'unread_or_favorite' => 'Show unreads and favourites',	// TODO
		),
		'show_fav_unread_help' => 'Koskee myös merkintöjä',
		'sides_close_article' => 'Artikkeli sulkeutuu napsauttamalla sen ulkopuolelle',
		'sort' => array(
			'_' => 'Lajittelujärjestys',
			'newer_first' => 'Uusimmat ensin',
			'older_first' => 'Vanhimmat ensin',
		),
		'star' => array(
			'when' => 'Merkitse artikkeli suosikiksi…',
		),
		'sticky_post' => 'Kiinnitä artikkeli ylimmäksi avattaessa',
		'title' => 'Lukeminen',
		'view' => array(
			'default' => 'Oletusnäkymä',
			'global' => 'Yleinen näkymä',
			'normal' => 'Tavallinen näkymä',
			'reader' => 'Lukunäkymä',
		),
	),
	'sharing' => array(
		'_' => 'Jakaminen',
		'add' => 'Lisää jakamistapa',
		'bluesky' => 'Bluesky',	// TODO
		'deprecated' => 'Tämä palvelu on vanhentunut, ja se poistetaan FreshRSS-sovelluksen <a href="https://freshrss.github.io/FreshRSS/en/users/08_sharing_services.html" title="Lisätietoja ohjeissa" target="_blank">tulevasta versiosta</a>.',
		'diaspora' => 'Diaspora*',	// IGNORE
		'email' => 'Sähköposti',
		'facebook' => 'Facebook',	// IGNORE
		'more_information' => 'Lisätietoja',
		'print' => 'Tulostus',
		'raindrop' => 'Raindrop.io',	// IGNORE
		'remove' => 'Poista jakamistapa',
		'shaarli' => 'Shaarli',	// IGNORE
		'share_name' => 'Näytettävä jakamistavan nimi',
		'share_url' => 'Käytettävä jakamistavan URL-osoite',
		'title' => 'Jakaminen',
		'twitter' => 'Twitter',	// IGNORE
		'wallabag' => 'wallabag',	// IGNORE
	),
	'shortcut' => array(
		'_' => 'Pikanäppäimet',
		'article_action' => 'Artikkelitoiminnot',
		'auto_share' => 'Jaa',
		'auto_share_help' => 'Jos jakamistapoja on vain yksi, sitä käytetään automaattisesti. Muussa tapauksessa jakamistavan voi valita numerolla.',
		'close_dropdown' => 'Sulje valikot',
		'collapse_article' => 'Sulje',
		'first_article' => 'Avaa ensimmäinen artikkeli',
		'focus_search' => 'Siirry hakukenttään',
		'global_view' => 'Vaihda yleiseen näkymään',
		'help' => 'Avaa ohje',
		'javascript' => 'Pikanäppäinten käyttö vaatii JavaScriptin',
		'last_article' => 'Avaa viimeinen artikkeli',
		'load_more' => 'Lataa lisää artikkeleita',
		'mark_favorite' => 'Suosikki / Ei suosikki',
		'mark_read' => 'Luettu / Lukematon',
		'navigation' => 'Siirtyminen',
		'navigation_help' => 'Kun <kbd>⇧ Shift</kbd> -näppäin on painettuna, siirtymisen pikanäppäimet koskevat syötteitä.<br/>Kun <kbd>Alt ⎇</kbd> -näppäin on painettuna, siirtymisen pikanäppäimet koskevat luokkia.',
		'navigation_no_mod_help' => 'Seuraavat siirtymisen pikanäppäimet eivät tue Shift/Alt-näppäintoimintoa.',
		'next_article' => 'Avaa seuraava artikkeli',
		'next_unread_article' => 'Avaa seuraava lukematon artikkeli',
		'non_standard' => 'Jotkin näppäimet (<kbd>%s</kbd>) eivät ehkä toimi pikanäppäiminä.',
		'normal_view' => 'Vaihda normaaliin näkymään',
		'other_action' => 'Muut toiminnot',
		'previous_article' => 'Avaa edellinen artikkeli',
		'reading_view' => 'Vaihda lukunäkymään',
		'rss_view' => 'Avaa RSS-syötteenä',
		'see_on_website' => 'Avaa alkuperäiseen sivustoon',
		'shift_for_all_read' => '+ <kbd>Alt ⎇</kbd> - merkitse edelliset artikkelit luetuiksi<br />+ <kbd>⇧ Shift</kbd> - merkitse kaikki artikkelit luetuiksi',
		'skip_next_article' => 'Siirry seuraavaan, mutta älä avaa',
		'skip_previous_article' => 'Siirry edelliseen, mutta älä avaa',
		'title' => 'Pikanäppäimet',
		'toggle_media' => 'Toista/keskeytä media',
		'user_filter' => 'Siirry käyttäjän kyselyihin',
		'user_filter_help' => 'Jos kyselyitä on vain yksi, sitä käytetään automaattisesti. Muussa tapauksessa kyselyn voi valita numerolla.',
		'views' => 'Näkymät',
	),
	'user' => array(
		'articles_and_size' => '%s artikkelia (%s)',
		'current' => 'Nykyinen käyttäjä',
		'is_admin' => 'on pääkäyttäjä',
		'users' => 'Käyttäjät',
	),
);
