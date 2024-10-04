<?php
include_once("configuracion.php");
use Stichoza\GoogleTranslate\GoogleTranslate;

//detecta automaticamente el idioma del texto a traducir, y lo convierte al idioma deseado, por defecto espaniol
$datos = datosRecibidos();
if(isset($datos['idioma'])){
    $idioma = $datos['idioma'];
}else{
    $datos['idioma'] = 'es';//definimos idioma por defecto si no se encuentra uno
    $idioma = 'es';
}
$traduccion = new GoogleTranslate($idioma,'es');
$lista = [
    "ab" => "Abjasio", "ace" => "Achenés","ach" => "Acholi","aa" => "Afar", "af" => "Afrikáans","ay" => "Aimara","sq" => "Albanés","de" => "Alemán","alz" => "Alur","am" => "Amhárico","ar" => "Árabe","hy" => "Armenio","as" => "Asamés","awa" => "Avadhi","av" => "Avar","az" => "Azerí","ban" => "Balinés","bal" => "Baluchi","bm" => "Bambara","bci" => "Baoulé","ba" => "Baskir","btx" => "Batak Karo","bts" => "Batak Simalungun","bbc" => "Batak Toba","bem" => "Bemba","bn" => "Bengalí","bew" => "Betawi","bho" => "Bhoyapurí","be" => "Bielorruso","bik" => "Bikol","my" => "Birmano","bs" => "Bosnio","br" => "Bretón","bg" => "Búlgaro","bua" => "Buriato","km" => "Camboyano","kn" => "Canarés","yue" => "Cantonés","ca" => "Catalán","ceb" => "Cebuano","ch" => "Chamorro","ce" => "Checheno","cs" => "Checo","ny" => "Chichewa","zh-CN" => "Chino (simplificado)","zh-TW" => "Chino (tradicional)","cnh" => "Chino Hakka","cv" => "Chuvasio","si" => "Cingalés","ko" => "Coreano","co" => "Corso","ht" => "Criollo Haitiano","mfe" => "Criollo Mauriciano","crs" => "Criollo Seychellense","hr" => "Croata","da" => "Danés","fa-AF" => "Darí","din" => "Dinka","dyu" => "Diula","dv" => "Divehi","doi" => "Dogri","dz" => "Dzongkha","sk" => "Eslovaco","sl" => "Esloveno","es" => "Español","eo" => "Esperanto","et" => "Estonio","eu" => "Euskera","ee" => "Ewé","fo" => "Feroés","tl" => "Filipino","fi" => "Finlandés","fj" => "Fiyiano","fon" => "Fon","fr" => "Francés","fy" => "Frisio","fur" => "Friulano","ff" => "Fulani","gaa" => "Ga","gd" => "Gaélico Escocés","cy" => "Galés","gl" => "Gallego","ka" => "Georgiano","el" => "Griego","gn" => "Guaraní","gu" => "Gujarati","ha" => "Hausa","haw" => "Hawaiano","iw" => "Hebreo","hil" => "Hiligaynon","hi" => "Hindi","hmn" => "Hmong","hu" => "Húngaro","hrx" => "Hunsrik","iba" => "Iban","ig" => "Igbo","ilo" => "Ilocano","id" => "Indonesio","en" => "Inglés","ga" => "Irlandés","is" => "Islandés","it" => "Italiano","ja" => "Japonés","jw" => "Javanés","kac" => "Jingpo","kl" => "Kalaallisut","kr" => "Kanuri","kk" => "Kazajo","kha" => "Khasi","cgg" => "Kiga","kg" => "Kikongo","rw" => "Kinyarwanda","ky" => "Kirguís","rn" => "Kirundi","ktu" => "Kituba","trp" => "Kokborok","kv" => "Komi","gom" => "Konkaní","kri" => "Krio","ku" => "Kurdo (Kurmanyi)","ckb" => "Kurdo (Sorani)","lo" => "Lao","ltg" => "Latgaliano","la" => "Latín","lv" => "Letón","lij" => "Ligur","li" => "Limburgués","ln" => "Lingala","lt" => "Lituano","lmo" => "Lombardo","lg" => "Luganda","luo" => "Luo","lb" => "Luxemburgués","mk" => "Macedonio","mad" => "Madurés","mai" => "Maithili","mak" => "Makassar","ml" => "Malayalam","ms" => "Malayo","ms-Arab" => "Malayo (Jawi)","mg" => "Malgache","mt" => "Maltés","mam" => "Mam","gv" => "Manés","mi" => "Maorí","mr" => "Maratí","chm" => "Marí de las Praderas","mh" => "Marshalés","mwr" => "Marwari","yua" => "Maya Yucateco","mni-Mtei" => "Meiteilon (Manipuri)","min" => "Minangkabau","lus" => "Mizo","mn" => "Mongol","bm-Nkoo" => "N'Ko","nhe" => "Náhuatl (Huasteca Oriental)","ndc-ZW" => "Ndau","nr" => "Ndebele Meridional","dov" => "Ndombe","nl" => "Neerlandés","new" => "Nepalbhasa (Newarí)","ne" => "Nepalí","no" => "Noruego","nus" => "Nuer","oc" => "Occitano","or" => "Oriya","om" => "Oromo","os" => "Osético","pam" => "Pampango","pag" => "Pangasinán","pa" => "Panyabí (Gurmukhi)","pa-Arab" => "Panyabí (Shahmukhi)","pap" => "Papiamento","ps" => "Pastún","jam" => "Patois Jamaiquino","fa" => "Persa","pl" => "Polaco","pt" => "Portugués (Brasil)","pt-PT" => "Portugués (Portugal)","qu" => "Quechua","kek" => "Quekchí","rom" => "Romaní","ro" => "Rumano","ru" => "Ruso","war" => "Samareño","se" => "Sami Septentrional","sm" => "Samoano","sg" => "Sango","sa" => "Sánscrito","sat-Latn" => "Santali","nso" => "Sepedi","sr" => "Serbio","st" => "Sesoto","tn" => "Setsuana","shn" => "Shan","sn" => "Shona","scn" => "Siciliano","szl" => "Silesio","sd" => "Sindhi","so" => "Somalí","sw" => "Suajili","ss" => "Suazi","sv" => "Sueco","su" => "Sundanés","sus" => "Susu","ty" => "Tahitiano","th" => "Tailandés","ber" => "Tamashek (Tifinag)","ber-Latn" => "Tamazight","ta" => "Tamil","tt" => "Tártaro","crh" => "Tártaro de Crimea","tg" => "Tayiko","te" => "Telugu","tet" => "Tetun","bo" => "Tibetano","ti" => "Tigrinya","tiv" => "Tiv","tpi" => "Tok Pisin","to" => "Tongano","chk" => "Trukés","ts" => "Tsonga","tcy" => "Tulu","tum" => "Tumbuka","tr" => "Turco","tk" => "Turkmeno","tyv" => "Tuviniano","ak" => "Twi","uk" => "Ucraniano","udm" => "Udmurto","ug" => "Uigur","ur" => "Urdu","uz" => "Uzbeco","ve" => "Venda","vec" => "Véneto","vi" => "Vietnamita","wo" => "Wólof","xh" => "Xhosa","sah" => "Yakuto","yi" => "Yidis","yo" => "Yoruba","zap" => "Zapoteco","zu" => "Zulú"
];
function encontrarIdioma($sigla, $lista){
    $idioma = "es";//defecto
    if(isset($lista[$sigla])){
        $idioma = $lista[$sigla];
    }
    return $idioma;
}
echo $traduccion->translate('mensaje de prueba en ' . encontrarIdioma($datos['idioma'], $lista));
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="$_GET">
        <button type="submit"><?php echo$traduccion->translate('Cambiar Idioma') ?>
        </button>
        <select id="idioma" name="idioma">
            <?php $select = ""; 
            foreach($lista as $clave => $valor){
                $select .= '<option value="' . $clave . '">' .$valor.'</option>';
            }
            echo $select;
            ?>
        </select>
    </form>
</body>
</html>