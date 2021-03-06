<?PHP


// http://en.wikipedia.org/wiki/Devanagari_script#Devan.C4.81gar.C4.AB_in_Unicode
// http://en.wikibooks.org/wiki/Windows_Programming/Unicode/Character_reference/0000-0FFF


$v = "്"; // Virama

/* Main arrays */

$num['tra'] = array(
    60 => "0",
    61 => "1",
    62 => "2",
    63 => "3",
    64 => "4",
    65 => "5",
    66 => "6",
    67 => "7",
    68 => "8",
    69 => "9",
);

$main['tra'] = array(

    //20 => "t ", // t end

    40 => "'", // apostrophe (avagraha)
    41 => "`", // Latin apostrophe (’)
    42 => "#", // Abbreviation

    202 => "r2a",

    205 => "*ga",
    //	206 => "jJa",
    207 => "*ja",
    208 => "*Da",
    209 => "*da",
    210 => "*ba",
    211 => "fa",
    200 => "n2a",

    212 => "qha",
    213 => "khha",
    214 => "ghha",
    215 => "xa",
    216 => "Dhha",
    217 => "rhha",

    116 => "kha",
    115 => "ka",
    118 => "gha",
    117 => "ga",
    119 => "Ga",

    121 => "cha",
    120 => "ca",
    123 => "jha",
    122 => "ja",
    124 => "Ja",

    126 => "Tha",
    125 => "Ta",
    128 => "Dha",
    127 => "Da",
    129 => "Na",

    131 => "tha",
    130 => "ta",
    133 => "dha",
    132 => "da",
    134 => "na",

    136 => "pha",
    135 => "pa",
    138 => "bha",
    137 => "ba",
    139 => "ma",

    141 => "Ya",
    140 => "ya",
    142 => "ra",
    143 => "la",
    144 => "va",

    145 => "za",
    146 => "Sa",
    147 => "sa",

    199 => "K",

    151 => "~",
    149 => "M",
    150 => "H",
    152 => "||", // ||
    153 => "|", // |
    154 => "Q", // Nukta
    155 => "@", // Abbreviation
    //	156 => "", // Udatta
    //	157 => "", // Anudatta (svarita)


    201 => "La",

    203 => "Za",

    148 => "ha",
);

$vow['tra'] = array(

    269 => " aE",
    270 => " AE",
    271 => " aO",

    257 => " R",
    258 => " q",
    259 => " w",
    260 => " W",

    261 => " e",
    262 => " ai",
    263 => " o",
    264 => " au",

    251 => " a",
    252 => " A",
    253 => " i",
    254 => " I",
    255 => " u",
    256 => " U",

    265 => " E",
    266 => " O",

    267 => "oM",
);

$yukta['tra'] = array(

    317 => "aE",
    318 => "AE",
    319 => "aO",

    307 => "R", // joint
    308 => "q", // joint
    309 => "w", // joint
    310 => "W", // joint

    311 => "e", // joint
    312 => "ai", // joint
    313 => "o", // joint
    314 => "au", // joint

    301 => "a", // joint
    302 => "A", // joint
    303 => "i", // joint
    304 => "I", // joint
    305 => "u", // joint
    306 => "U", // joint

    315 => "E",
    316 => "O",
);

$num['scr'] = array(
    60 => "0", // 0
    61 => "1", // 1
    62 => "2", // 2
    63 => "3", // 3
    64 => "4", // 4
    65 => "5", // 5
    66 => "6", // 6
    67 => "7", // 7
    68 => "8", // 8
    69 => "9", // 9
);

$main['scr'] = array(

    //20 => "ৎ", // t end

    40 => "ഽ", // apostrophe (avagraha)
    41 => "’", // Latin apostrophe (’)
    42 => "॰", // Abbreviation

    202 => "റ",

    205 => "ംˆഗ",
    //	206 => "ജ്ഞ",
    207 => "ംˆജ",
    208 => "ംˆഡ",
    209 => "ംˆദ",
    210 => "ംˆബ",
    211 => "ഫ·",
    200 => "ന·",

    212 => "ക·",
    213 => "ഖ·",
    214 => "ഗ·",
    215 => "ജ·",
    216 => "ഡ·",
    217 => "ഢ·",

    116 => "ഖ", // kha
    115 => "ക", // ka
    118 => "ഘ", // gha
    117 => "ഗ", // ga
    119 => "ങ", // Ga

    121 => "ഛ", // cha
    120 => "ച", // ca
    123 => "ഝ", // jha
    122 => "ജ", // ja
    124 => "ഞ", // Ja

    126 => "ഠ", // Tha
    125 => "ട", // Ta
    128 => "ഢ", // Dha
    127 => "ഡ", // Da
    129 => "ണ", // Na

    131 => "ഥ", // tha
    130 => "ത", // ta
    133 => "ധ", // dha
    132 => "ദ", // da
    134 => "ന", // na

    136 => "ഫ", // pha
    135 => "പ", // pa
    138 => "ഭ", // bha
    137 => "ബ", // ba
    139 => "മ", // ma

    141 => "യ·", // Ya
    140 => "യ", // ya
    142 => "ര", // ra
    143 => "ല", // la
    144 => "വ", // va

    145 => "ശ", // za
    146 => "ഷ", // Sa
    147 => "സ", // sa

    199 => "ഃʼ",

    151 => "ം ̐", // ~
    149 => "ം", // M
    150 => "ഃ", // H
    152 => "॥", // ||
    153 => "।", // |
    154 => "·", // . Nukta
    155 => "॰", // Abbreviation
    //	156 => "", // Udatta
    //	157 => "", // Anudatta (svarita)

    201 => "ള",

    203 => "ഴ",

    148 => "ഹ", // ha
);

$vow['scr'] = array(

    269 => " എʼ",
    270 => " ഏʼ",
    271 => " ആʼ",

    257 => " ഋ", // R
    258 => " ൠ", // q
    259 => " ഌ", // L
    260 => " ൡ", // W

    261 => " ഏ", // e
    262 => " ഐ", // ai
    263 => " ഓ", // o
    264 => " ഔ", // au

    251 => " അ", // a
    252 => " ആ", // A
    253 => " ഇ", // i
    254 => " ഈ", // I
    255 => " ഉ", // u
    256 => " ഊ", // U

    265 => " എ",
    266 => " ഒ",

    267 => "ഓം",

);

$yukta['scr'] = array(

    317 => "െʼ",
    318 => "േʼ",
    319 => "ാʼ",

    307 => "ൃ", // R joint
    308 => "ൄ", // q joint
    309 => "ൢ", // L joint
    310 => "ൣ", // W  joint

    311 => "േ", // e joint
    312 => "ൈ", // ai joint
    313 => "ോ", // o joint
    314 => "ൗ", // au joint

    301 => "&#8205;", // a joint
    302 => "ാ", // A joint
    303 => "ി", // i joint
    304 => "ീ", // I joint
    305 => "ു", // u joint
    306 => "ൂ", // U joint

    315 => "െ",
    316 => "ൊ",
);
