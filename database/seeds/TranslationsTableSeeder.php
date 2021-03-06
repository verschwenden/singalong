<?php

use Illuminate\Database\Seeder;

class TranslationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('translations')->insert([
            'song_id' => 1,
            'tr_code' => 'en',
            'title_tr1' => "Sammy v'Somo",
            'title_tr2' => "Sammy and Somo",
            'lyrics_tr1' => "Sammy v'Somo\nzug avaryanim\nal dodge dart nosim\narsim v'muchbasim\nhem osim seder ba'olam ha'tachton\nkol milah shelahem hu ha'mishpat ha'elyon\nsichsuch ha'vetah\nv'sulchah kibalta\nmilah lo ba'makom\nv'tagid shalom\nki Sammy v'Somo\nba'aski ha'bniah\nv'yesh la'hem ksharim amok ba'adamah\n\nim l'Sammy titchatsef\nkedai shetitchafef\nki somo yashev aleicha\nad shetetzah b'yetzah\naz dirbalak achi\nv'tzfeh pgiah\nkibalta panas ba'achat\nmi'yad tavi et ha'shniyah\naz dag katan\ntizaher mikreshim shel dam\nsho'alim la'moach\nv'ein le'an livroach\nhem medabrim ba'koach\nad she'pokea varid\n\nad she'disko manayak magia la'schunah\nhineh disko menayek oseh kan mesibah\nim orot kchulim v'azikim me'mitachet\nv'hajamah muzmenet me'habaitim nishpechet\n\nv'Sammy v'Somo rokdim\net ha'tango mishtarah\nhem kol kach mishtolelim\nmaki-im al ha'ritzpah\n\nv'disko manayak me'arpel et ha'chushim\nzeh disko menayek al sefer ha'khukim\nv'Sammy v'Somo omrim kosomo\nv'rokdim al ha'dodge dart\nb'tnuot shel motzart\n\ndisko manayak magia la'schunah\nhineh disko menayek oseh kan mesibah\nim orot kchulim v'azikim me'mitachet\nv'hajamah muzmenet me'habaitim nishpechet",
            'lyrics_tr2' => "Sammy and Somo\nA couple of criminals\nThey drive in a Dodge Dart\nArsim and freshly laundered\nThey set the lower world straight\nEvery one of their words is the high law\nYou brought along a dispute\nAnd you got a peacemaking ceremony\nAn impolite word\nAnd you'll say goodbye\nCause Sammy and Somo\nAre in the construction business\nAnd they have connections deep in the ground\n\nIf you talk back to Sammy,\nYou'd better \"beat it\"\nCause Somo will sit on you\nUntil you come out an egg\nSo be very aware my brother,\nAnd expect a punch\nYou got one black eye\nVery soon you'll bring the second one\nSo, small fish\nBe careful around sharks of blood\nThat come up to the brain\nAnd there's nowhere to run away to\nThey speak with force\nUntil a vein bursts\n\nUntil Disco Maniac arrives in the neighbourhood\nHey, Disco Maniac is making a party here\nWith blue lights and metal handcuffs\nAnd the gang is invited, spilled from the houses\n\nAnd Sammy and Somo dance\nThe police tango\nThey go so wild\nVomiting on the floor\n\nAnd Disco Maniac dulls the senses\nIt's Disco Maniac on the law book\nAnd Sammy and Somo say \"dammit!\"\nAnd they dance on the Dodge Dart\nTo Mozart's movements\n\nDisco Maniac arrives in the neighbourhood\nHey, Disco Maniac is making a party here\nWith blue lights and metal handcuffs\nAnd the gang is invited, spilled from the houses"
        ]);

        DB::table('translations')->insert([
            'song_id' => 2,
            'tr_code' => 'en',
            'title_tr1' => "99 Balloons",
            'title_tr2' => "",
            'lyrics_tr1' => "",
            'lyrics_tr2' => "Have you some time for me,\nthen I'll sing a song for you\nabout 99 balloons\non their way to the horizon.\nIf you're perhaps thinking about me right now\nthen I'll sing a song for you\nabout 99 balloons\nand that such a thing comes from such a thing.\n\n99 balloons\non their way to the horizon\nPeople think they're UFO's from space\nso a general sent up\na fighter squadron after them\nSound the alarm if it's so\nbut there on the horizon were\nonly 99 balloons.\n\n99 fighter jets\nEach one's a great warrior\nThought they were Captain Kirk\nthen came a lot of fireworks\nthe neighbors didn't understand anything\nand felt like they were being provoked\nso they shot at the horizon\nat 99 balloons.\n\n99 war ministers\nmatches and gasoline canisters\nThey thought they were clever people\nalready smelled a nice bounty\nCalled for war and wanted power.\nMan, who would've thought\nthat things would someday go so far\nbecause of 99 balloons.\nbecause of 99 balloons.\n99 balloons.\n\n99 years of war\nleft no room for victors.\nThere are no more war ministers\nnor any jet fighters.\nToday I'm making my rounds\nsee the world lying in ruins.\nI found a balloon,\nthink of you and let it fly (away).",
        ]);

        DB::table('translations')->insert([
            'song_id' => 3,
            'tr_code' => 'en',
            'title_tr1' => "shuv levad",
            'title_tr2' => "Alone Again",
            'lyrics_tr1' => "shuv levad\nein lach af echad\nyoshevet at ba'dad\nu'mezila dma-ot rabot\n\nkmo chalom\nhu azav pitom\nlo amar shalom\no afilu lo le'hit-ra-ot\n\nal tik-chi et ze le'lev\ntit-ga-bri al ha'ke-ev\nlo kedai le'hitz-ta-er\nyesh tamid echad acher\n\nnevucha\nafilu metucha\nke-ilu ein motza\nv'et nimtza-et be'toch ha'sbach\n\nein davar\ntamid yashno machar\nahavatech tivar\nv'ha'shemesh lach tamid tizrach\n\nal tik-chi et ze le'lev\ntit-ga-bri al ha'ke-ev\nlo kedai le'hitz-ta-er\nyesh tamid echad acher\n\nal tik-chi et ze le'lev\ntit-ga-bri al ha'ke-ev\nlo kedai le'hitz-ta-er\nyesh tamid echad acher\nechad acher\n\nal tik-chi et ze le'lev\ntit-ga-bri al ha'ke-ev\nlo kedai le'hitz-ta-er\nyesh tamid echad acher\nechad acher",
            'lyrics_tr2' => "Alone again\nYou have nobody\nSitting alone\nAnd shedding many tears\n\nLike a dream\nHe left suddenly\nDidn't say goodbye\nOr even \"see you later\"\n\nDo not take it to heart\nGet over the pain\nYou should not be sorry\nThere is always another one\n\nEmbarrassed\nEven tense\nAs if there is no way out\nAnd it is located in the thicket\n\nNo problem,\nThere is always tomorrow\nLove will burn\nAnd the sun will always burn for you\n\nDo not take it to heart\nGet over the pain\nYou should not be sorry\nThere is always another one\n\nDo not take it to heart\nGet over the pain\nYou should not be sorry\nThere is always another one\nanother one\n\nDo not take it to heart\nGet over the pain\nYou should not be sorry\nThere is always another one\nanother one",
        ]);

        DB::table('translations')->insert([
            'song_id' => 4,
            'tr_code' => 'en',
            'title_tr1' => "Pariz",
            'title_tr2' => "Paris",
            'lyrics_tr1' => "barachti le'makom acher kol kach maher \nhachi rachok sherak hitslachti ve'ani \nbe'pariz\n\nha'orot dolkim afor ve'ananim \nani smecha ve'tov li aval kol kach kar li \nbe'pariz\n\nmistovevet schor uschor \nbe'simtaot ksumot mechushafot \nbol'ot oti ani \nbe'pariz\n\nbinyanim yafim atem zkenim \nve'atsilim kol kach aval ha'im techamemu oti \nbe'pariz\n\nbati ad lekan lehistanver ktsat \nashlaya yafa sheli nasi litfos oti ani \nbe'pariz\n\nshuv holechet leibud chalom atsuv \nani kvar mefursemet ve'shom-im alay kan \nbepariz\n\nachshav ha'kol shelcha lochesh li merachok \nani mitgaagea boi tachzeri elay kvar \nmi'pariz\n\nani ohev otach ani ohev otach \nani ohev otach ani ohev otach \nvepariz\n\nim kol kach tov li po \naz lama shuv ani bocha ve'mishtagaat\nmitgaagaat \nbepariz\n\nshemesh meira oti me'hachalon \nve'od meat argish kvar et hachom\n\nha'matos nochet ve'eyn kvar ananim \nha'osher mechalchel shuv letochi \nshalom pariz",
            'lyrics_tr2' => "I ran away to a different place, so fast, \nas far as I could get, and I'm \nin Paris\n\nThe lights are shining, grey, and clouds, \nI'm happy and feel good, but I'm so cold \nin Paris\n\nTurning round and round \nin magical enchanted alleys, \nswallowing me, I'm \nin Paris\n\nBeautiful buildings, you are so old \nand noble, but will you warm me up \nin Paris\n\nI came all the way here to get a bit dazed and blinded, my \nbeautiful illusion, try and catch me, \nI'm in Paris\n\nGetting lost again, a sad dream, \nI'm already famous and they hear of me here \nin Paris\n\nNow your voice whispers to me from afar \nI miss you, come, return to me already\nfrom Paris\n\nI love you, I love you\nI love you, I love you\nand Paris\n\nIf I feel so good here\nthen why am I again crying and going crazy?\nLonging, \nin Paris\n\nThe sun lights me through the window \nand soon I'll feel the heat\n\nThe plane lands and there are no more clouds, \njoy flows into me again, \ngoodbye Paris",
        ]);

        DB::table('translations')->insert([
            'song_id' => 5,
            'tr_code' => 'en',
            'title_tr1' => "aruchat yom shishi",
            'title_tr2' => "Friday Dinner",
            'lyrics_tr1' => "horadati et ha'tziurim me'ha'kirot\nnatati et ha'sapah ha'levanah\nha'pilim ha'ktanim me'ha'etz adayin omdim be'shurah\nha'ginah shelach mi'tapart be'adinut\nani gozemet et ha'vradim\nbe'karov katif acharon shel tut v'te-ini\n\nani ycholah lirot otach rak be'einayim atzumot\nat olah dma-ot yordot\nulai rak na-sat le'chutz la'aretz be'karov tachzeri\nmizvadah me'le-ah matanot le'kulam v'aruchat yom shishi\n\nbentayim ani kotevet ba'cheder she'haya shelach\nv'ha-oach she'ma-gia kol kaitz\nacharav ya-vo ha'stav\nv'tatchil od shanah biladayich\n\nani ycholah lirot otach rak be'einayim atzumot\nat olah dma-ot yordot\nulai rak na-sat le'chutz la'aretz be'karov tachzeri\nmizvadah me'le-ah matanot le'kulam v'aruchat yom shishi\n\nani ycholah lirot otach rak be'einayim atzumot\nat olah dma-ot yordot\nulai rak na-sat le'chutz la'aretz be'karov tachzeri\nmizvadah me'le-ah matanot le'kulam v'aruchat yom shishi\n\nlo yiyeh tziltzol shel telefon\nlo michtav lo gluyah\nlo bikur chatuf\nlo neshikah\n\nlo yiyeh tziltzol shel telefon\nlo michtav lo gluyah\nlo bikur chatuf\nlo neshikah\n\nlo yiyeh tziltzol shel telefon\nlo michtav lo gluyah\nlo bikur chatuf\nlo neshikah\n\nyeveshah",
            'lyrics_tr2' => "I took down the paintings from the wall\nI gave away the white sofa\nThe little wooden elephants are still standing in a line\nYour garden gently grows wild\nI am pruning the roses\nSoon will be the last picking of strawberries and figs\n\nI can only see you with closed eyes\nYou rise and the tears fall\nMaybe you just went abroad and will be back soon\nThe suitcase filled with presents for everyone, and Friday dinner\n\nIn the meantime I write in the room that was once yours\nAnd the heaviness that comes every summer\nIt will be followed by fall\nAnd start another year without you\n\nI can only see you with closed eyes\nYou rise and the tears fall\nMaybe you just went abroad and will be back soon\nThe suitcase filled with presents for everyone, and Friday dinner\n\nI can only see you with closed eyes\nYou rise and the tears fall\nMaybe you just went abroad and will be back soon\nThe suitcase filled with presents for everyone, and Friday dinner\n\nThere won't be a ring of a telephone\nNot a letter or a postcard\nNot a quick visit\nNot a kiss\n\nThere won't be a ring of a telephone\nNot a letter or a postcard\nNot a quick visit\nNot a kiss\n\nThere won't be a ring of a telephone\nNot a letter or a postcard\nNot a quick visit\nNot a kiss\n\nA dry one"
        ]);

        DB::table('translations')->insert([
            'song_id' => 6,
            'tr_code' => 'en',
            'title_tr1' => "im telech",
            'title_tr2' => "If You Go",
            'lyrics_tr1' => "im telech mi yechabek oti kacha\nmi yishma oti ba'sof ha'yom\nmi yeneche v'yargia\nrak atah yodea\n\nv'im telech le'mi achake ba'chalon be'simla shel chag\nshe'yagia yechabek oti kacha kmo she'atah magia\n\nkshe'telech le'shemesh etze, basadeh ha'muzahav, boker v'ever\nyareach ye-ir et panai she'cholmot kol ha'yom rak aleicha\n\nv'ksheta-vo tisa oti bi'shtei yadecha, \nmi'sade la'na-har\ntirchutz et panai v'tagid li milim\nkmo she'rak atah yodea\n\nim telech mi yechabek oti kacha\nmi yishma oti ba'sof ha'yom\nmi yeneche v'yargia\nrak atah yodea\n\nv'im telech le'mi achake ba'chalon be'simla shel chag\nshe'yagia yechabek oti kacha kmo she'atah magia\n\nim telech mi yechabek oti kacha\nmi yishma oti ba'sof ha'yom\nmi yeneche v'yargia\nrak atah yodea\n\nv'im telech le'mi achake ba'chalon be'simla shel chag\nshe'yagia yechabek oti kacha kmo she'atah magia",
            'lyrics_tr2' => "If you go, who will hold me like that?\nWho will listen to me at the end of the day?\nWho will comfort and relax me?\nOnly you know how\n\nAnd if you go, for whom will I wait in the window in a festive dress?\nTo come hug me so, when you arrive\n\nWhen you go, I'll be in the sun, in a golden field, morning and evening,\nThe moon will light up my face, which dreams all day only of you \n\nand when you come back you'll carry me in both hands, \nfrom the field to the river\nyou'll wash my face and tell me words\nas only you know how\n\nIf you go, who will hold me like that?\nWho will listen to me at the end of the day?\nWho will comfort and relax me?\nOnly you know how\n\nAnd if you go, who will I wait for in the window in a festive dress?\nTo come hug me so, when you arrive\n\nIf you go, who will hold me like that?\nWho will listen to me at the end of the day?\nWho will comfort and relax me?\nOnly you know how\n\nAnd if you go, who will I wait for in the window in a festive dress?\nTo come hug me so, when you arrive"
        ]);

        DB::table('translations')->insert([
            'song_id' => 7,
            'tr_code' => 'en',
            'title_tr1' => "al tomar",
            'title_tr2' => "Don't say",
            'lyrics_tr1' => "kol haleilot shehayu li itkha \nagarti et khom gufkha \nlakhoref hamar \nkhiukh ekhad shezokheret l'kha \nnitze'akh et hashikhekha \nbageshem hakar\nal tomar al tomar al tomar li bo'i\nal tomar al tomar al tomar li lo \nal tomar al tomar al tomar li bo'i \nal tomar al tomar al tomar li lavo\nlavo lavo \nsama et harosh bein ananim \ntikva lekhalom naim \nb'emtza hayom \nkol shniya melukha shel levad \nhi psik besipur ekhad \nsheyiyeh rak sof tov\nal tomar al tomar al tomar li bo'i\nal tomar al tomar al tomar li lo \nal tomar al tomar al tomar li bo'i \nal tomar al tomar al tomar li lavo\nlavo lavo\nal tomar al tomar al tomar li bo'i \nal tomar al tomar al tomar li lavo\nlavo lavo \nkol haleilot shehayu li itkha \nme'irim li et hakhashikha \nbareyakh shelkha",
            'lyrics_tr2' => "All the nights that I spent with you\nI saved up your bodyheat\nFor the bitter winter\nA smile that I remember, to your credit\nOvercame forgetfulness\nIn the cold rain\nDon't say don't say don't say to me \"come\"\nDon't say don't say don't say to me \"no\"\nDon't say don't say don't say \"come\"\nDon't say don't say don't tell me to come\nto come, to come\nI put my head in the clouds\nHope for a pleasant dream\nIn the middle of the day\nEvery second is salty with aloneness\nThey're commas in a story\nLet there be only a happy ending...\nDon't say don't say don't say to me \"come\"\nDon't say don't say don't say to me \"no\"\nDon't say don't say don't say \"come\"\nDon't say don't say don't tell me to come\nto come, to come\nDon't say don't say don't say \"come\"\nDon't say don't say don't tell me to come\nto come, to come\nEvery night I spent with you\nThey light up the darkness\nIn your scent"
        ]);

/*
        DB::table('translations')->insert([
            'song_id' => 1,
            'tr_code' => 'en',
            'title_tr1' => "SONG TITLE #1 (ENGLISH)",
            'title_tr2' => "SONG TITLE #1 (ROMANIZATION)",
            'lyrics_tr1' => "line1.en\nline2.en\nline3.en\nline4.en\n",
            'lyrics_tr2' => "line1.rom(en)\nline2.rom(en)\nline3.rom(en)\nline4.rom(en)\n"
        ]);

        DB::table('translations')->insert([
            'song_id' => 1,
            'tr_code' => 'de',
            'title_tr1' => "SONG TITLE #1 (GERMAN)",
            'title_tr2' => "SONG TITLE #1 (ROMANIZATION)",
            'lyrics_tr1' => "line1.de\nline2.de\nline3.de\nline4.de\n",
            'lyrics_tr2' => "line1.rom(de)\nline2.rom(de)\nline3.rom(de)\nline4.rom(de)\n"
        ]);

        DB::table('translations')->insert([
            'song_id' => 1,
            'tr_code' => 'fr',
            'title_tr1' => "SONG TITLE #1 (FRENCH)",
            'title_tr2' => "SONG TITLE #1 (ROMANIZATION)",
            'lyrics_tr1' => "line1.de\nline2.de\nline3.de\nline4.de\n",
            'lyrics_tr2' => "line1.rom(de)\nline2.rom(de)\nline3.rom(de)\nline4.rom(de)\n"
        ]);

        DB::table('translations')->insert([
            'song_id' => 1,
            'tr_code' => 'ar',
            'title_tr1' => "SONG TITLE #1 (ARABIC)",
            'title_tr2' => "SONG TITLE #1 (ROMANIZATION)",
            'lyrics_tr1' => "line1.ar\nline2.ar\nline3.ar\nline4.ar\n",
            'lyrics_tr2' => "line1.rom(ar)\nline2.rom(ar)\nline3.rom(ar)\nline4.rom(ar)\n"
        ]);

        DB::table('translations')->insert([
            'song_id' => 1,
            'tr_code' => 'bg',
            'title_tr1' => "SONG TITLE #1 (BELGIAN)",
            'title_tr2' => "SONG TITLE #1 (ROMANIZATION)",
            'lyrics_tr1' => "line1.bg\nline2.bg\nline3.bg\nline4.bg\n",
            'lyrics_tr2' => "line1.rom(bg)\nline2.rom(bg)\nline3.rom(bg)\nline4.rom(bg)\n"
        ]);


        DB::table('translations')->insert([
            'song_id' => 2,
            'tr_code' => 'en',
            'title_tr1' => "I Thought it Would Be Romantic",
            'title_tr2' => "chashavti she'hi-ye romanti",
            'lyrics_tr1' => "I thought it would be romantic - we sit alone in a cafe,\nWhen someone around us has been making chairs.\nI thought it would be romantic - see how the shooting star\nAnd wind on our faces Tshrr the hours\n\nI thought it would be romantic - sing loud with sparrows,\nBurl's songs and Piaf on the \"bourgeoisie and the mob.\"\nI thought it would be romantic - die like poets,\nHoly two minutes and again we will be sad\n\nThe leaves on the boulevard float water,\nThe city's skyline against the sky wash,\nThree in the morning Sala Joy French night,\nI was hoping that the love of my life is the real thing.\n\nI thought it would be romantic - take a kite together,\nTo the sun, lying and wrapped in coats.\nI thought it would be romantic - love strong wits,\nBut time had committed suicide as breaths between words.\n\nThe leaves on the boulevard float water,\nThe city's skyline against the sky wash,\nThree in the morning Sala Joy French night,\nI was hoping that the love of my life is the real thing.\n\nThe leaves on the boulevard float water,\nThe city's skyline against the sky wash,\nThree in the morning Sala Joy French night,\nI was hoping that the love of my life is the real thing.\n\nThree in the morning Sala Joy French night,\nI was hoping that the love of my life is the real thing.",
            'lyrics_tr2' => "chashavti she'hiyeh romanti - neshev levad be'veit kafeh\nkshe'mishehu sviveinu kvar ha'ofech et ha'kisot\nchashavti she'hiyeh romanti - nireh eich she'kochav nofel\nv'ruach al panenu tesachrer et ha'sha-ot\n\nchashavti she'hiyeh romanti - nashir chazak im ankorim\nshirim shel Burl v'Piaf al burganim v'asafasuf\nchashavti she'hiyeh romanti - namut kmo me'shorerim\nla'shtei dakot kdoshot v'shuv yihyeh lanu atzuv\n\nha'elim al ha'bullvar yarechafu la'mayim\nko ha'ofek shel ha'ir yitrachetz mul ha'shamayim\nshalosh ba'boker salah vi b'lailah tzarfati\nkiviti she'ha-ahava she'be-chayai hi ha'davar ha'amiti\n\nchashavti she'hiyeh romanti - na-if be'yachad afifon\nal shemesh shekranit v'nitatef be'me-ilim\nchashavti she'hiyeh romanti - nohav chazak ad ilafon\naval hazman kvar hitabez kmo neshimot bein ha'milim\n\nha'elim al ha'bullvar yarechafu la'mayim\nko ha'ofek shel ha'ir yitrachetz mul ha'shamayim\nshalosh ba'boker salah vi b'lailah tzarfati\nkiviti she'ha-ahava she'be-chayai hi ha'davar ha'amiti\n\nha'elim al ha'bullvar yarechafu la'mayim\nko ha'ofek shel ha'ir yitrachetz mul ha'shamayim\nshalosh ba'boker salah vi b'lailah tzarfati\nkiviti she'ha-ahava she'be-chayai hi ha'davar ha'amiti\n\nshalosh ba'boker salah vi b'lailah tzarfati\nkiviti she'ha-ahava she'be-chayai hi ha'davar ha'amiti",
        ]);
        

        DB::table('translations')->insert([
            'song_id' => 3,
            'tr_code' => 'en',
            'title_tr1' => "I Want to Stay",
            'title_tr2' => "rotzah le'hi-sha-er",
            'lyrics_tr1' => "Sleep\nDisappear under the covers\nAlways walk the same circle\nI find and hold a strong\nTo break\nAwakening heart\nShout out\nAre you still awake\n\nAnd the more difficult\nThe harder\nI want to stay here\n\nAnd the more difficult\nThe harder\nI want to stay here\n\nShout out\nSay there's nothing here to fear\nTo bite,\nStrong bite when fear comes\n\nAnd the more difficult\nThe harder\nI want to stay here\n\nAnd the more difficult\nThe harder\nI want to stay here\n\nWant to stay ...\nWant to stay ...",
            'lyrics_tr2' => "le'her-adem\nmitachat le'smichot le'he-alem\ntamid holechet b'oto ha'ma-agal\nani motzet u'machizikah chazak\nad she'hi-sha-ver\nha'lev ha'mitorer\ntzo-ek b'kol\nha'im atah adayin er\n\nv'kamah she'yoter kasheh\nkamah she'yoter kasheh\nani rotzah le'hisha-er kan\n\nv'kamah she'yoter kasheh\nkamah she'yoter kasheh\nani rotzah le'hisha-er kan\n\ntitzak b'kol\ntagid she'ein mi'mah kan lefached\ntzarich linshoch\nlinshoch chazak kshe'pachad mitkarev\n\nv'kamah she'yoter kasheh\nkamah she'yoter kasheh\nani rotzah le'hisha-er kan\n\nv'kamah she'yoter kasheh\nkamah she'yoter kasheh\nani rotzah le'hisha-er kan\n\nrotzah le'hisha-er\nrotzah le'hisha-er",
        ]);

        DB::table('translations')->insert([
            'song_id' => 4,
            'tr_code' => 'en',
            'title_tr1' => "Night hike",
            'title_tr2' => "tiyul lili",
            'lyrics_tr1' => "How much truth can carry more\nMore does not mean\nIf you were her then maybe you would happy\nAnd the light hates me now\nThe darkness is lying\nAll my silent dreams began to talk\n\nAnd instead of stroking\nI want to hate\nEvery smile that passes\nOnly reminds me of him\nAnd this sadness only gives me more power\nWhen the day ends we will not be more\n\nLet's take an evening stroll in the cool breeze\nFill ourselves with lies\nForget it happened\nOpen to all kinds of dreams we left behind\nWill be lit by storm\nHere the darkness is already moving away - the sun shines\n\nAnd instead of stroking\nI want to hate\nEvery smile that passes\nOnly reminds me of him\nAnd this sadness only gives me more power\nWhen the day ends we will not be more\n\nFill ourselves with lies\n\nHere the darkness is has been moving away - the sun shines\n\nAnd instead of stroking\nI want to hate\nEvery smile that passes\nOnly reminds me of him\nAnd this sadness only gives me more power\nWhen the day ends we will not be more\n\nAnd this sadness only gives me more power\nWhen the day ends we will not be more\n\nHow much truth can carry more",
            'lyrics_tr2' => "kama emet od tuchal la'set\nyoter lo omar\nim hayita shela az ulai hayita me'ushar\nv'achshav ha'or sone oti\nha'choshech meshaker\nkol chalomotai ha'shotkim hitchilu le'daber\n\nv'bimkom le'latef\nmitchashek li lisno\nkol chiyuch she'cholef\nrak mazkir li oto\nv'ha'etzev hazeh rak noten li od koach\nkshe'ha'yom yigamer kvar lo niyeh yoter\n\nbo netze le'tiyul leili ba'ruach ha'krira\nnemalei atzmeinu bishkarim\nnishkach she'zeh kara\nv'kol minei chalomot ptuchim she'hisharnu me'achor\nyidalku b'se-arah\nhineh kvar ha'choshech mitrachek ha'shemesh me'irah\n\nv'bimkom le'latef\nmitchashek li lisno\nkol chiyuch she'cholef\nrak mazkir li oto\nv'ha'etzev ha'zeh rak noten li od koach\nkshe'ha'yom yigamer kvar lo niyeh yoter\n\nnemalei atzmeinu bishkarim\n\nhineh kvar ha'choshech mitrachek ha'shemesh me'irah\n\nv'bimkom le'latef\nmitchashek li lisno\nkol chiyuch she'cholef\nrak mazkir li oto\nv'ha'etzev hazeh rak noten li od koach\nkshe'ha'yom yigamer kvar lo niyeh yoter\n\nv'ha'etzev ha'zeh rak noten li od koach\nkshe'ha'yom yigamer kvar lo niyeh yoter\n\nkama emet od tuchal la'set",
        ]);



        DB::table('translations')->insert([
            'song_id' => 6,
            'tr_code' => 'en',
            'title_tr1' => "I'm Going",
            'title_tr2' => "ani holechet",
            'lyrics_tr1' => "I'm leaving.\nI've written so many goodbye songs about us.\nI'm leaving,\nand when you leave,\nthere's no way back.\nI slammed the door shut!\nI think about it for a moment,\nflush the water down\nand go back.\n\nDo you have any idea how many times a day I break up with you?\nBut I'm - a magician.\nEvery time you give a look back, I come back with it.\nYou come and give me a quick kiss\nOh, I'm so flattered... Stupid...\n\nThen the photo of a woman on the chest of drawers reminds me that I'm\na cheater.\nThis is the first time I dare to use this word,\nbut everything has a name\nand this is called lover.\n\nTell me,\ndo you really think that you're my \"one\"?\nAnd that I'm yours?\n'Cause if not, this is a really weird game.\n\nAnd anyway I'm\non my way to the door!\nto the door!\n\nWell, have you noticed that I'm gone?\nDo you miss my presence?\nIn front of the tv?\nThat I left everything and forgot everything\nand cut all my strings\nand that I'll disappear in front of your eyes.\nSaying I'm leaving is what I do best\nwhen I stand.\n\nNo, actually from the couch\nit sounds more total,\nfatal,\nno way back,\nI'm leaving!\nI lie down for a moment...\nNo, I'm leaving!\nI love for a moment...\nNo, I'm leaving!\nI think too much...\nI'm leaving!\n\nI'm leaving!",
            'lyrics_tr2' => "ani holechet.\nkvar katavti aleinu einsfor shirei preidah.\nani holechet\nu'kshe'holchim,\nein derech chazara.\ntarakti et ha'delet!\nchoshevet al zeh od rega,\nmorida et ha'mayim\nv'chozeret\n\natah yodea kama pe'amim be'yom ani zoreket otcha!?\naval ani - kosemet\nkol pa-am she'atah machzir mabat, ani ito chozeret.\natah over v'mavi li neshika,\nay kama mechuzeret... tipsha...\n\nv'az tatzlum isha al ha'shida mazkir li she'ani \nbogedet.\nzo pa-am reshuna she'ani me-aza le'hishtamesh be'mila ha'zot,\naval le'chol davar yesh shem\nv'le'ze kor-im me'ahevet.\n\ntagid,\natah be'emet choshev she'atah ha'echad sheli?\nv'she'ani ha'achat shelcha?\nki im lo, zeh mischak mamash muzar\n\nv'bichlal ani\nba'derech al ha'delet!\nel ha'delet\n\nnu, samta lev she'halachti?\nmargish be'chasaroni?\nmul ha'televizia?\nshe'azavti ha'kol v'shachachti ha'kol\nv'nitakti mi'kol ha'kvalim\nv'ani etpogeg le'neged einecha.\nani ha'chi tova ba'la'hagid she'ani holechet\nkshe'ani omedet\n\nlo be'etzem me'ha'sapa\nzeh nishma ha'chi totali,\nfatali,\nbli derech chazara,\nani holechet!\nani nishkevet rega...\nlo, ani holechet!\nani ohevet rega...\nlo, ani holechet!!!\nani choshevet yoter midai\nani holechet!\n\nani holechet!",
        ]);

        DB::table('translations')->insert([
            'song_id' => 7,
            'tr_code' => 'en',
            'title_tr1' => "Teacher for Life",
            'title_tr2' => "moreh le'chaim",
            'lyrics_tr1' => "All my life you were my teacher\nThe grace you've shown me the way\nYour truth is always in my heart\nEven if it weakens\nI will never forget you, do not forget you\nNever is my way\n\nTrying to walk without stumbling again\nEven if sometimes a little difficult for me\nIn a sea of ​​temptation swims I\nSo your character Molly\nStrengthen me and keep me\nSet down my life\n\nJust do not hurt anybody, not even yourself\nAnd be careful always on your mind\nWill also landed and lots of happy admirers\n\nDo not despair and do not forget your faith\nGod save you if you continue\nCheck your steps and will certainly strive\n\nI wish everyone knew one day\nBit on the end and the real world here\n_Merom_ is the master of Heaven\nOn love in two\nI wish everyone knew one day\nInnocence and justice in the world\n\nJust do not hurt anybody, not even yourself\nAnd be careful always on your mind\nWill also landed and lots of happy admirers\n\nDo not despair and do not forget your faith\nGod save you if you continue\nCheck your steps and will certainly strive",
            'lyrics_tr2' => "kol chayai atah hayit li moreh\net ha'derech be'chas-decha ha're-ata li\nha'emet shelcha tamid etzli ba'lev\ngam im lifamim zeh nechlash\nlo eshkach otcha, lo eshkach otcha\nle'olam hi li darkecha\n\nmenaseh litzod bli li'mod shenit\ngam im lifamim kasheh ktzat bishvili\nbetoch yam shel pitui socheh ani\naz dmutcha le'muli\nlechazek oti v'lishmor alai\nlechaven me'la-ma-alah et chaiyai\n\nrak al tifga b'shum adam, gam lo be'atzmecha\nv'hi-shomer tamid al nafshecha\ntigrom gam nachat v'hamon simcha le'ohavetcha\n\nv'al tomar no-esh v'al tishkach emunetcha\nha'al yishmor alaich im tamshich\nlivdok et tze-odecha bevadai tishaf v'gam tagia\n\nha'levai ba'vo ha'yom yado kulam\nktzat al tom v'al atah po ba'olam\nal adon marom shachon sha-mayim\nal ahava bi'shnayim\nha'levai ba'vo ha'yom yadu kulam\nal tom v'tzedek ba'olam\n\nrak al tifga b'shum adam, gam lo be'atzmecha\nv'hi-shomer tamid al nafshecha\ntigrom gam nachat v'hamon simcha le'ohavetcha\n\nv'al tomar no-esh v'al tishkach emunetcha\nha'al yishmor alaich im tamshich\nlivdok et tze-odecha bevadai tishaf v'gam tagia",
        ]);

        
*/





/*
        DB::table('translations')->insert([
            'song_id' => 5,
            'tr_code' => 'en',
            'title_tr1' => "99 Balloons",
            'title_tr2' => "",
            'lyrics_tr1' => "Have you some time for me,\nthen I'll sing a song for you\nabout 99 balloons\non their way to the horizon.\nIf you're perhaps thinking about me right now\nthen I'll sing a song for you\nabout 99 balloons\nand that such a thing comes from such a thing.\n\n99 balloons\non their way to the horizon\nPeople think they're UFO's from space\nso a general sent up\na fighter squadron after them\nSound the alarm if it's so\nbut there on the horizon were\nonly 99 balloons.\n\n99 fighter jets\nEach one's a great warrior\nThought they were Captain Kirk\nthen came a lot of fireworks\nthe neighbors didn't understand anything\nand felt like they were being provoked\nso they shot at the horizon\nat 99 balloons.\n\n99 war ministers\nmatches and gasoline canisters\nThey thought they were clever people\nalready smelled a nice bounty\nCalled for war and wanted power.\nMan, who would've thought\nthat things would someday go so far\nbecause of 99 balloons.\nbecause of 99 balloons.\n99 balloons.\n\n99 years of war\nleft no room for victors.\nThere are no more war ministers\nnor any jet fighters.\nToday I'm making my rounds\nsee the world lying in ruins.\nI found a balloon,\nthink of you and let it fly (away).",
            'lyrics_tr2' => "",
        ]);
*/


/*



        
*/
    }
}