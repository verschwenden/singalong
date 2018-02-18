<?php

use Illuminate\Database\Seeder;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->insert([
        	'lang_code' => 'he',
            'times' => '4.36,8.21,15,19.72',
            'title' => 'SONG TITLE #1',
            'videocode' => 'kT39_f_4bgs',
            'lyrics' => "Line1\nLine2\nLine3\nLine4"
        ]);

        DB::table('songs')->insert([
        	'lang_code' => 'he',
            'times' => '4.11,11.04,19.14,26.3,34.32,41.4,49.43,56.4,64.07,67.86,71.37,74.99,83.43,90.51,98.38,105.71,113.21,116.91,120.68,124.16,158.55,162.28,166,169.53,181.15,184.56',
            'title' => 'חשבתי שיהיה רומנטי',
            'videocode' => 'NQP1wut2kWc',
            'lyrics' => "חשבתי שיהיה רומנטי - נשב לבד בבית קפה, \nכשמישהו סביבנו כבר הופך את הכיסאות. \nחשבתי שיהיה רומנטי - נראה איך שכוכב נופל \nורוח על פנינו תסחרר את השעות \n\nחשבתי שיהיה רומנטי - נשיר חזק עם אנקורים, \nשירים של ברל ופיאף על בורגנים ואספסוף. \nחשבתי שיהיה רומנטי - נמות כמו משוררים, \nלשתי דקות קדושות ושוב יהיה לנו עצוב. \n\nהעלים על הבולוואר ירחפו למים, \nקו האופק של העיר יתרחץ מול השמיים, \nשלוש בבוקר סלה וי בלילה צרפתי, \nקיוויתי שהאהבה שבחיי היא הדבר האמיתי. \n\nחשבתי שיהיה רומנטי - נעיף ביחד עפיפון, \nאל שמש שקרנית ונתעטף במעילים. \nחשבתי שיהיה רומנטי - נאהב חזק עד עילפון, \nאבל הזמן כבר התאבד כמו נשימות בין המילים. \n\nהעלים על הבולוואר ירחפו למים, \nקו האופק של העיר יתרחץ מול השמיים, \nשלוש בבוקר סלה וי בלילה צרפתי, \nקיוויתי שהאהבה שבחיי היא הדבר האמיתי. \n\nהעלים על הבולוואר ירחפו למים, \nקו האופק של העיר יתרחץ מול השמיים, \nשלוש בבוקר סלה וי בלילה צרפתי, \nקיוויתי שהאהבה שבחיי היא הדבר האמיתי. \n\nשלוש בבוקר סלה וי בלילה צרפתי, \nקיוויתי שהאהבה שבחיי היא הדבר האמיתי"
        ]);

        DB::table('songs')->insert([
        	'lang_code' => 'he',
            'times' => '23.22,25.42,28.92,33.35,36.46,39.43,43.21,44.93,49.62,53.11,55.22,59.62,63.22,65.31,70.17,72.25,76.94,78.42,83.23,86.66,88.81,93.22,96.66,98.85,103.25,109.97',
            'title' => 'רוצה להישאר',
            'videocode' => '4PlSJ130OIk',
            'lyrics' => "להרדם\nמתחת לשמיכות להעלם\nתמיד הולכת באותו המעגל\nאני מוצאת ומחזיקה חזק\nעד שישבר\nהלב המתעורר\nצועק בקול\nהאם אתה עדיין ער\n\nוכמה שיותר קשה\nכמה שיותר קשה\nאני רוצה להשאר כאן\n\nוכמה שיותר קשה\nכמה שיותר קשה\nאני רוצה להשאר כאן\n\nתצעק בקול\nתגיד שאין ממה כאן לפחד\nצריך לנשוך,\nלנשוך חזק כשפחד מתקרב\n\nוכמה שיותר קשה\nכמה שיותר קשה\nאני רוצה להשאר כאן\n\nוכמה שיותר קשה\nכמה שיותר קשה\nאני רוצה להשאר כאן\n\nרוצה להשאר...\nרוצה להשאר..."
        ]);

        DB::table('songs')->insert([
        	'lang_code' => 'he',
            'times' => '4.3,7.64,10.08,18.79,22.75,25.2,32.74,36.43,40.21,43.97,47.74,55.37,68.22,74.26,78.46,83.03,86.99,89.5,96.92,100.57,104.54,108.31,112.18,119.5,130.97,145.99,153.7,157.45,161.08,164.86,168.72,176.15,184.02,191.26,204.47',
            'title' => 'טיול לילי',
            'videocode' => 'KehLSFZQBFs',
            'lyrics' => "כמה אמת עוד תוכל לשאת \nיותר לא אומר \nאם היית שלה אז אולי היית מאושר \nועכשיו האור שונא אותי \nהחושך משקר \nכל חלומותי השותקים התחילו לדבר \n\nובמקום ללטף \nמתחשק לי לשנוא \nכל חיוך שחולף \nרק מזכיר לי אותו \nוהעצב הזה רק נותן לי עוד כוח \nכשהיום יגמר כבר לא נהיה יותר \n\nבוא נצא לטיול לילי ברוח הקרירה \nנמלא עצמנו בשקרים \nנשכח שזה קרה \nוכל מיני חלומות פתוחים שהשארנו מאחור \nידלקו בסערה \nהנה כבר החושך מתרחק - השמש מאירה \n\nובמקום ללטף \nמתחשק לי לשנוא \nכל חיוך שחולף \nרק מזכיר לי אותו \nוהעצב הזה רק נותן לי עוד כוח \nכשהיום יגמר כבר לא נהיה יותר \n\nנמלא עצמנו בשקרים \n\nהנה כבר החושך מתרחק - השמש מאירה\n\nובמקום ללטף \nמתחשק לי לשנוא \nכל חיוך שחולף \nרק מזכיר לי אותו \nוהעצב הזה רק נותן לי עוד כוח \nכשהיום יגמר כבר לא נהיה יותר\n\nוהעצב הזה רק נותן לי עוד כוח \nכשהיום יגמר כבר לא נהיה יותר\n\nכמה אמת עוד תוכל לשאת"
        ]);
/*
        DB::table('songs')->insert([
            'times' => '4.3,7.64,10.08,18.79,22.75,25.2,32.74,36.43,40.21,43.97,47.74,55.37,68.22,74.26,78.46,83.03,86.99,89.5,96.92,100.57,104.54,108.31,112.18,119.5,130.97,145.99,153.7,157.45,161.08,164.86,168.72,176.15,184.02,191.26,204.47',
            'title' => 'טיול לילי',
            'videocode' => 'KehLSFZQBFs',
            'lyrics' => "כמה אמת עוד תוכל לשאת \nיותר לא אומר \nאם היית שלה אז אולי היית מאושר \nועכשיו האור שונא אותי \nהחושך משקר \nכל חלומותי השותקים התחילו לדבר \n\nובמקום ללטף \nמתחשק לי לשנוא \nכל חיוך שחולף \nרק מזכיר לי אותו \nוהעצב הזה רק נותן לי עוד כוח \nכשהיום יגמר כבר לא נהיה יותר \n\nבוא נצא לטיול לילי ברוח הקרירה \nנמלא עצמנו בשקרים \nנשכח שזה קרה \nוכל מיני חלומות פתוחים שהשארנו מאחור \nידלקו בסערה \nהנה כבר החושך מתרחק - השמש מאירה \n\nובמקום ללטף \nמתחשק לי לשנוא \nכל חיוך שחולף \nרק מזכיר לי אותו \nוהעצב הזה רק נותן לי עוד כוח \nכשהיום יגמר כבר לא נהיה יותר \n\nנמלא עצמנו בשקרים \n\nהנה כבר החושך מתרחק - השמש מאירה\n\nובמקום ללטף \nמתחשק לי לשנוא \nכל חיוך שחולף \nרק מזכיר לי אותו \nוהעצב הזה רק נותן לי עוד כוח \nכשהיום יגמר כבר לא נהיה יותר\n\nוהעצב הזה רק נותן לי עוד כוח \nכשהיום יגמר כבר לא נהיה יותר\n\nכמה אמת עוד תוכל לשאת"
        ]);
*/

        DB::table('songs')->insert([
        	'lang_code' => 'de',
            'times' => '3.73,6.8,9.71,12.99,16.52,19.92,22.67,26.25,70.54,73,75.35,78,80.37,82.84,85.4,87.86,100.78,102.82,105.29,107.73,110.09,112.64,115.21,117.56,149.9,152.46,154.91,157.35,159.91,162.36,164.82,167.36,172.01,182.55,192.99,196.25,199.64,202.84,206.13,209.72,213.23,217.23',
            'title' => '99 Luftballons',
            'videocode' => 'LsU8fRvTeCI',
            'lyrics' => "Hast du etwas Zeit für mich\nDann singe ich ein Lied für dich\nVon 99 Luftballons\nAuf ihrem Weg zum Horizont\nDenkst du vielleicht g''rad an mich\nDann singe ich ein Lied für dich\nVon 99 Luftballons\nUnd dass so was von so was kommt\n\n99 Luftballons\nAuf ihrem Weg zum Horizont\nHielt man für Ufos aus dem All\nDarum schickte ein General\n''ne Fliegerstaffel hinterher\nAlarm zu geben, wenn es so wär\nDabei war''n da am Horizont\nNur 99 Luftballons\n\n99 Düsenjäger\nJeder war ein großer Krieger\nHielten sich für Captain Kirk\nDas gab ein großes Feuerwerk\nDie Nachbarn haben nichts gerafft\nUnd fühlten sich gleich angemacht\nDabei schoss man am Horizont\nAuf 99 Luftballons\n\n99 Kriegsminister -\nStreichholz und Benzinkanister -\nHielten sich für schlaue Leute\nWitterten schon fette Beute\nRiefen Krieg und wollten Macht\nMann, wer hätte das gedacht\nDass es einmal soweit kommt\nWegen 99 Luftballons\nWegen 99 Luftballons\n99 Luftballons\n\n99 Jahre Krieg\nLießen keinen Platz für Sieger\nKriegsminister gibt''s nicht mehr\nUnd auch keine Düsenflieger\nHeute zieh'' ich meine Runden\nSeh'' die Welt in Trümmern liegen\nHab'' ''nen Luftballon gefunden\nDenk'' an dich und lass'' ihn fliegen"
        ]);


        DB::table('songs')->insert([
        	'lang_code' => 'he',
            'times' => '29.51,31.85,34.41,36.91,37.61,38.81,41.96,43.56,44.37,46.46,48.18,51.58,56.38,58.18,61.19,64.72,66.51,68.36,69.42,70.93,71.51,73.2,74.4,76.48,78.17,83.91,90.5,92.68,93.87,96.09,97.37,98.48,100.94,102.51,103.12,104.51,105.91,106.44,107.65,110.55,112.35,115.44,117.25,120.45,122.45,157.27',
            'title' => 'אני הולכת',
            'videocode' => '07B8egsMjTU',
            'lyrics' => "אני הולכת.\nכבר כתבתי עלינו אינספור שירי פרידה.\nאני הולכת\nוכשהולכים,\nאין דרך חזרה.\nטרקתי את הדלת!\nחושבת על זה עוד רגע,\nמורידה את המים\nוחוזרת.\n\nאתה יודע כמה פעמים ביום אני זורקת אותך?!\nאבל אני - קוסמת\nכל פעם שאתה מחזיר מבט, אני אתו חוזרת.\nאתה עובר ומביא לי נשיקה,\nאיי כמה מחזרת... טפשה...\n\nואז תצלום אשה על השדה מזכיר לי שאני\nבוגדת.\nזו פעם ראשונה שאני מעזה להשתמש במלה הזאת,\nאבל לכל דבר יש שם\nולזה קוראים מאהבת.\n\nתגיד,\nאתה באמת חושב שאתה האחד שלי?\nושאני האחת שלך?\nכי אם לא, זה משחק ממש מוזר\n\nובכלל אני\nבדרך אל הדלת!\nאל הדלת\n\nנו, שמת לב שהלכתי?\nמרגיש בחסרוני?\nמול הטלויזיה?\nשעזבתי הכל ושכחתי הכל\nונתקתי מכל הכבלים\nואני אתפוגג לנגד עינייך.\nאני הכי טובה בלהגיד שאני הולכת\nכשאני עומדת.\n\nלא, בעצם מהספה\nזה נשמע הכי טוטאלי,\nפטאלי,\nבלי דרך חזרה,\nאני הולכת!\nאני נשכבת רגע...\nלא, אני הולכת!\nאני אוהבת רגע...\nלא, אני הולכת!\nאני חושבת יותר מדי\nאני הולכת!\n\nאני הולכת!",
        ]);

        DB::table('songs')->insert([
        	'lang_code' => 'he',
            'times' => '34.37,38.56,42.83,47.25,52.1,56.54,60.42,64.59,68.79,73.5,78.19,82.69,86.74,93.56,97.71,103.69,110.31,114.48,136.61,140.76,145.28,149.73,154.32,158.86,162.88,169.81,173.97,179.65,186.42,190.5',
            'title' => 'מורה לחיים',
            'videocode' => '1pFa5UAOfro',
            'lyrics' => "כל חיי אתה היית לי מורה \nאת הדרך בחסדך הראית לי \nהאמת שלך תמיד אצלי בלב \nגם אם לפעמים זה נחלש \nלא אשכח אותך, לא אשכח אותך \nלעולם היא לי דרכך \n\nמנסה לצעוד בלי למעוד שנית \nגם אם לפעמים קשה קצת בשבילי \nבתוך ים של פיתוי שוחה אני \nאז דמותך למולי \nלחזק אותי ולשמור עלי \nלכוון מלמעלה את חיי \n\nרק אל תפגע בשום אדם, גם לא בעצמך \nוהישמר תמיד על נפשך \nתגרום גם נחת והמון שמחה לאוהביך \n\nואל תאמר נואש ואל תשכח אמונתך \nהאל ישמור עליך אם תמשיך \nלבדוק את צעדיך בודאי תשאף וגם תגיע \n\nהלוואי בבוא היום ידעו כולם \nקצת על תום ועל אמת פה בעולם \nעל אדון מרום שוכן שמיים \nעל אהבה בשניים \nהלוואי בבוא היום ידעו כולם \nעל תום וצדק בעולם \n\nרק אל תפגע בשום אדם, גם לא בעצמך \nוהישמר תמיד על נפשך \nתגרום גם נחת והמון שמחה לאוהביך \n\nואל תאמר נואש ואל תשכח אמונתך \nהאל ישמור עליך אם תמשיך \nלבדוק את צעדיך בודאי תשאף וגם תגיע",
        ]);


        DB::table('songs')->insert([
        	'lang_code' => 'he',
            'times' => '15.93,18.93,22.93,25.74,31.53,34.53,38.34,41.63,49,53.11,57.11,60.7,78.3,81.31,85.3,88.11,93.91,96.9,100.71,103.9,111.58,115.54,119.55,123.15,127.15,131.25,135.05,138.75,148.05,189.79,193.63,197.64,201.34,210.63',
            'title' => 'שוב לבד',
            'videocode' => '6-tEpxmk3QQ',
            'lyrics' => "שוב לבד\nאין לך אף אחד\nיושבת את בדד\nומזילה דמעות רבות\n\nכמו חלום\nהוא עזב פתאום\nולא אמר שלום\nאו אפילו לא להתראות\n\nאל תקחי את זה ללב\nתתגברי על הכאב\nלא כדאי להצטער\nיש תמיד אחד אחר\n\nנבוכה\nאפילו מתוחה\nכאילו אין מוצא\nואת נמצאת בתוך הסבך\n\nאין דבר\nתמיד ישנו מחר\nאהבתך תבער\nהשמש לך תמיד תזרח\n\nאל תקחי את זה ללב\nתתגברי על הכאב\nלא כדאי להצטער\nיש תמיד אחד אחר\n\nאל תקחי את זה ללב\nתתגברי על הכאב\nלא כדאי להצטער\nיש תמיד אחד אחר\nאחד אחר\n\nאל תקחי את זה ללב\nתתגברי על הכאב\nלא כדאי להצטער\nיש תמיד אחד אחר\nאחד אחר",
        ]);












/*


        DB::table('songs')->insert([
            'times' => '8.93,11.08,14.01,17.76,19.75,22.78,26.32,27.62,29.64,31.39,35.1,37,40.34,61.35,63.25,65.6,69.91,71.96,75.09,78.54,80.69,84.28,87.04,89.31,92.49,113.16,114.67,125.33,129.55,150.36,152.55,159.71,162.01,166.01',
            'title' => 'פריז',
            'videocode' => '6R2y_2zQ4_w',
            'lyrics' => "ברחתי למקום אחר כל כך מהר\nהכי רחוק שרק הצלחתי ואני\nבפריז\n\nהאורות דולקים אפור ועננים\nאני שמחה וטוב לי אבל כל כך קר לי\nבפריז\n\nמסתובבת סחור וסחור\nבסמטאות קסומות מכושפות\nבולעות אותי אני\nבפריז\n\nבניינים יפים אתם זקנים\nואצילים כל כך אבל האם תחממו אותי\nבפריז\n\nבאתי עד לכאן להסתנוור קצת\nאשליה יפה שלי נסי לתפוס אותי\nאני בפריז\n\nשוב הולכת לאיבוד חלום עצוב\nאני כבר מפורסמת ושומעים עליי כאן\nבפריז\n\nעכשיו הקול שלך לוחש לי מרחוק\nאני מתגעגע בואי תחזרי אליי כבר\nמפריז\n\nאני אוהב אותך אני אוהב אותך\nאני אוהב אותך אני אוהב אותך\nואת פריז\n\nאם כל כך טוב לי פה\nאז למה שוב אני בוכה ומשתגעת\nמתגעגעת\nבפריז\n\nשמש מעירה אותי מהחלון\nועוד מעט ארגיש כבר את החום\n\nהמטוס נוחת ואין כבר עננים\nהאושר מחלחל שוב לתוכי\nשלום פריז"
        ]);
*/
    }
}