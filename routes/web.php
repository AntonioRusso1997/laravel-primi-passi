<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        'title' => 'What is breaking bad?',
        'text' => "Breaking Bad is an American neo-Western crime drama television series created and produced by Vince Gilligan. The show aired on AMC from January 20, 2008, to September 29, 2013, consisting of five seasons for a total of 62 episodes. It was set and filmed in Albuquerque, New Mexico, and tells the story of Walter White (Bryan Cranston), an underpaid, overqualified, and dispirited high school chemistry teacher who is struggling with a recent diagnosis of stage-three lung cancer. White turns to a life of crime, partnering with his former student Jesse Pinkman (Aaron Paul), by producing and distributing crystal meth to secure his family's financial future before he dies, while navigating the dangers of the criminal underworld. According to Gilligan, the title is a Southern colloquialism meaning 'to raise hell'.

        Among the show's co-stars are Anna Gunn and RJ Mitte as Walter's wife Skyler and son Walter Jr., and Betsy Brandt and Dean Norris as Skyler's sister Marie Schrader and her husband Hank, a DEA agent. Others include Bob Odenkirk as White's and Pinkman's sleazy lawyer Saul Goodman, Jonathan Banks as private investigator and fixer Mike Ehrmantraut, and Giancarlo Esposito as drug kingpin Gus Fring. The final season introduces Jesse Plemons as the criminally ambitious Todd Alquist, and Laura Fraser as Lydia Rodarte-Quayle, a cunning business executive secretly managing Walter's global meth sales for her company.
        
        Breaking Bad's first season received generally positive reviews, while the rest of its run received universal acclaim. Since its conclusion, the show has been lauded by critics as one of the greatest television series of all time. It had fair viewership in its first three seasons, but the fourth and fifth seasons saw a moderate rise in viewership when it was made available on Netflix just before the fourth season premiere. Viewership increased more drastically upon the premiere of the second half of the fifth season in 2013. By the time that the series finale aired, it was among the most-watched cable shows on American television. The show received numerous awards, including 16 Primetime Emmy Awards, eight Satellite Awards, two Golden Globe Awards, two Peabody Awards, two Critics' Choice Awards, and four Television Critics Association Awards. Cranston won the Primetime Emmy Award for Outstanding Lead Actor in a Drama Series four times, while Aaron Paul won the Primetime Emmy Award for Outstanding Supporting Actor in a Drama Series three times; Anna Gunn won the Primetime Emmy Award for Outstanding Supporting Actress in a Drama Series twice. In 2013, Breaking Bad entered the Guinness World Records as the most critically acclaimed show of all-time.
        
        Better Call Saul, a prequel series featuring Odenkirk, Banks, and Esposito reprising their Breaking Bad roles, debuted on AMC on February 8, 2015, and has been renewed for a final sixth season. The sequel film El Camino: A Breaking Bad Movie starring Aaron Paul was released on Netflix and in theaters on October 11, 2019.",
        'photo' => 'https://i.ibb.co/DfBZ8kj/bre.png'
    ];
    return view('home', $data);
})->name('home');

Route::get('/characters', function () {
    $charactersData = [
        'title' => 'Characters:',
        'characters' => [
            [
                'photo' => 'https://i.ibb.co/frwrN5N/Walter-White-S5-B.png',
                'name' => 'Walter White',
                'fullname' => 'Walter Hartwell White Jr.',
                'birth' => 'September 7, 1958',
                'actor' => 'Bryan Cranston'
            ],
            [
                'photo' => 'https://i.ibb.co/wwGXkxq/Jesse.png',
                'name' => 'Jesse Pinkman',
                'fullname' => 'Jesse Bruce Pinkman',
                'birth' => 'September 24, 1984',
                'actor' => 'Aaron Paul'
            ],
            [
                'photo' => 'https://i.ibb.co/2vK0hpy/Gud.png',
                'name' => 'Gustavo Fring',
                'fullname' => 'Gustavo Fring',
                'birth' => 'April 26, 1958',
                'actor' => 'Giancarlo Esposito'
            ],
            [
                'photo' => 'https://i.ibb.co/ZLYPcKP/saul.png',
                'name' => 'Saul Goodman',
                'fullname' => 'James Morgan McGill',
                'birth' => 'November 12, 1960',
                'actor' => 'Bob Odenkirk'
            ],
        ]

    ];
    return view('characters', $charactersData);
})->name('personaggi');

Route::get('/seasons', function () {
    $seasonsData = [
        'title' => 'Seasons:',
        'seasons' => [
            [
                'photo' => 'https://i.ibb.co/VQGnfMp/season-1.png',
                'title' => 'Season 1',
                'year' => '2008'
            ],
            [
                'photo' => 'https://i.ibb.co/1KPJHvy/season-2.png',
                'title' => 'Season 2',
                'year' => '2009'
            ],
            [
                'photo' => 'https://i.ibb.co/RBZ0603/season-3.png',
                'title' => 'Season 3',
                'year' => '2010'
            ],
            [
                'photo' => 'https://i.ibb.co/f2fHNWK/season-4.png',
                'title' => 'Season 4',
                'year' => '2011'
            ],
            [
                'photo' => 'https://i.ibb.co/WBwBDfp/season-5.png',
                'title' => 'Season 5',
                'year' => '2012'
            ],
            [
                'photo' => 'https://i.ibb.co/0YMP2Fk/el-camino.png',
                'title' => 'El Camino',
                'year' => '2019'
            ]
            
        ]

    ];
    return view('seasons', $seasonsData);
})->name('stagioni');

Route::get('/boolean', function () {
    $booleanData = [
        'title' => 'What is Boolean?',
        'text' => "Boolean Careers è la prima e più grande accademia totalmente online per diventare web developer professionisti.
        Trasformiamo ragazzi dalle grandi potenzialità in programmatori di livello attraverso un corso intensivo di lezioni a tempo pieno, online, della durata di 6 mesi, aprendo loro nuove opportunità di carriera.
        Abbiamo preso il meglio dell'insegnamento in aula (interazioni, esercitazioni di gruppo, senso di appartenenza tra studenti) e l’abbiamo fuso con il mondo delle lezioni online. Così facendo, abbiamo creato un corso intensivo, in diretta da seguire a tempo pieno senza doversi muovere da casa. Al termine del corso, supportiamo gli studenti nella ricerca del lavoro: ad oggi, il nostro employment rate è orgogliosamente del 98%.
        
        Il nostro team di docenti è formato da più di 30 web developer di alto livello che hanno deciso di unire la passione per la programmazione alla volontà di avere un impatto positivo nella vita delle persone. Far parte del team Boolean vuol dire contribuire a creare un'esperienza di crescita dove lo studente viene al primo posto, dalla fase di selezione fino all'ingresso in azienda. La qualità, la cura e la dedizione con cui ogni giorno aiutiamo i nostri studenti a trovare la loro strada nel mondo sono il nostro più grande orgoglio.",
        'photo' => 'https://i.ibb.co/hg3Bsgr/boolean.png'
    ];
    return view('boolean', $booleanData);
})->name('boolean');
