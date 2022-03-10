<?php

function insertCountries(){

    global $wpdb;

    $countriesTableName = "{$wpdb->prefix}sfcwp_countries";

    if (!verifyDataTable($countriesTableName)) {
        
        $insertCountriesQuery = "INSERT INTO {$countriesTableName}
        (countryName, isoCode)
        VALUES
        ('Andorra', 	20 ),
        ('Emiratos Árabes Unidos', 	784 ),
        ('Afganistán', 	4 ),
        ('Antigua y Barbuda', 	28 ),
        ('Anguila', 	660 ),
        ('Albania', 	8 ),
        ('Armenia', 	51 ),
        ('Antillas Neerlandesas', 	530 ),
        ('Angola', 	24 ),
        ('Antártida', 	10 ),
        ('Argentina', 	32 ),
        ('Samoa Americana', 	16 ),
        ('Austria', 	40 ),
        ('Australia', 	36 ),
        ('Aruba', 	533 ),
        ('Islas Áland', 	248 ),
        ('Azerbaiyán', 	31 ),
        ('Bosnia y Herzegovina', 	70 ),
        ('Barbados', 	52 ),
        ('Bangladesh', 	50 ),
        ('Bélgica', 	56 ),
        ('Burkina Faso', 	854 ),
        ('Bulgaria', 	100 ),
        ('Bahréin', 	48 ),
        ('Burundi', 	108 ),
        ('Benin', 	204 ),
        ('San Bartolomé', 	652 ),
        ('Bermudas', 	60 ),
        ('Brunéi', 	96 ),
        ('Bolivia', 	68 ),
        ('Brasil', 	76 ),
        ('Bahamas', 	44 ),
        ('Bhután', 	64 ),
        ('Isla Bouvet', 	74 ),
        ('Botsuana', 	72 ),
        ('Belarús', 	112 ),
        ('Belice', 	84 ),
        ('Canadá', 	124 ),
        ('Islas Cocos', 	166 ),
        ('República Centro-Africana', 	140 ),
        ('Congo', 	178 ),
        ('Suiza', 	756 ),
        ('Costa de Marfil', 	384 ),
        ('Islas Cook', 	184 ),
        ('Chile', 	152 ),
        ('Camerún', 	120 ),
        ('China', 	156 ),
        ('Colombia', 	170 ),
        ('Costa Rica', 	188 ),
        ('Cuba', 	192 ),
        ('Cabo Verde', 	132 ),
        ('Islas Christmas', 	162 ),
        ('Chipre', 	196 ),
        ('República Checa', 	203 ),
        ('Alemania', 	276 ),
        ('Yibuti', 	262 ),
        ('Dinamarca', 	208 ),
        ('Domínica', 	212 ),
        ('República Dominicana', 	214 ),
        ('Argel', 	12 ),
        ('Ecuador', 	218 ),
        ('Estonia', 	233 ),
        ('Egipto', 	818 ),
        ('Sahara Occidental', 	732 ),
        ('Eritrea', 	232 ),
        ('España', 	724 ),
        ('Etiopía', 	231 ),
        ('Finlandia', 	246 ),
        ('Fiji', 	242 ),
        ('Islas Malvinas', 	238 ),
        ('Micronesia', 	583 ),
        ('Islas Faroe', 	234 ),
        ('Francia', 	250 ),
        ('Gabón', 	266 ),
        ('Reino Unido', 	826 ),
        ('Granada', 	308 ),
        ('Georgia', 	268 ),
        ('Guayana Francesa', 	254 ),
        ('Guernsey', 	831 ),
        ('Ghana', 	288 ),
        ('Gibraltar', 	292 ),
        ('Groenlandia', 	304 ),
        ('Gambia', 	270 ),
        ('Guinea', 	324 ),
        ('Guadalupe', 	312 ),
        ('Guinea Ecuatorial', 	226 ),
        ('Grecia', 	300 ),
        ('Georgia del Sur e Islas Sandwich del Sur', 	239 ),
        ('Guatemala', 	320 ),
        ('Guam', 	316 ),
        ('Guinea-Bissau', 	624 ),
        ('Guayana', 	328 ),
        ('Hong Kong', 	344 ),
        ('Islas Heard y McDonald', 	334 ),
        ('Honduras', 	340 ),
        ('Croacia', 	191 ),
        ('Haití', 	332 ),
        ('Hungría', 	348 ),
        ('Indonesia', 	360 ),
        ('Irlanda', 	372 ),
        ('Israel', 	376 ),
        ('Isla de Man', 	833 ),
        ('India', 	356 ),
        ('Territorio Británico del Océano Índico', 	86 ),
        ('Irak', 	368 ),
        ('Irán', 	364 ),
        ('Islandia', 	352 ),
        ('Italia', 	380 ),
        ('Jersey', 	832 ),
        ('Jamaica', 	388 ),
        ('Jordania', 	400 ),
        ('Japón', 	392 ),
        ('Kenia', 	404 ),
        ('Kirguistán', 	417 ),
        ('Camboya', 	116 ),
        ('Kiribati', 	296 ),
        ('Comoros', 	174 ),
        ('San Cristóbal y Nieves', 	659 ),
        ('Corea del Norte', 	408 ),
        ('Corea del Sur', 	410 ),
        ('Kuwait', 	414 ),
        ('Islas Caimán', 	136 ),
        ('Kazajstán', 	398 ),
        ('Laos', 	418 ),
        ('Líbano', 	422 ),
        ('Santa Lucía', 	662 ),
        ('Liechtenstein', 	438 ),
        ('Sri Lanka', 	144 ),
        ('Liberia', 	430 ),
        ('Lesotho', 	426 ),
        ('Lituania', 	440 ),
        ('Luxemburgo', 	442 ),
        ('Letonia', 	428 ),
        ('Libia', 	434 ),
        ('Marruecos', 	504 ),
        ('Mónaco', 	492 ),
        ('Moldova', 	498 ),
        ('Montenegro', 	499 ),
        ('Madagascar', 	450 ),
        ('Islas Marshall', 	584 ),
        ('Macedonia', 	807 ),
        ('Mali', 	466 ),
        ('Myanmar', 	104 ),
        ('Mongolia', 	496 ),
        ('Macao', 	446 ),
        ('Martinica', 	474 ),
        ('Mauritania', 	478 ),
        ('Montserrat', 	500 ),
        ('Malta', 	470 ),
        ('Mauricio', 	480 ),
        ('Maldivas', 	462 ),
        ('Malawi', 	454 ),
        ('México', 	484 ),
        ('Malasia', 	458 ),
        ('Mozambique', 	508 ),
        ('Namibia', 	516 ),
        ('Nueva Caledonia', 	540 ),
        ('Níger', 	562 ),
        ('Islas Norkfolk', 	574 ),
        ('Nigeria', 	566 ),
        ('Nicaragua', 	558 ),
        ('Países Bajos', 	528 ),
        ('Noruega', 	578 ),
        ('Nepal', 	524 ),
        ('Nauru', 	520 ),
        ('Niue', 	570 ),
        ('Nueva Zelanda', 	554 ),
        ('Omán', 	512 ),
        ('Panamá', 	591 ),
        ('Perú', 	604 ),
        ('Polinesia Francesa', 	258 ),
        ('Papúa Nueva Guinea', 	598 ),
        ('Filipinas', 	608 ),
        ('Pakistán', 	586 ),
        ('Polonia', 	616 ),
        ('San Pedro y Miquelón', 	666 ),
        ('Islas Pitcairn', 	612 ),
        ('Puerto Rico', 	630 ),
        ('Palestina', 	275 ),
        ('Portugal', 	620 ),
        ('Islas Palaos', 	585 ),
        ('Paraguay', 	600 ),
        ('Qatar', 	634 ),
        ('Reunión', 	638 ),
        ('Rumanía', 	642 ),
        ('Serbia y Montenegro', 	688 ),
        ('Rusia', 	643 ),
        ('Ruanda', 	646 ),
        ('Arabia Saudita', 	682 ),
        ('Islas Solomón', 	90 ),
        ('Seychelles', 	690 ),
        ('Sudán', 	736 ),
        ('Suecia', 	752 ),
        ('Singapur', 	702 ),
        ('Santa Elena', 	654 ),
        ('Eslovenia', 	705 ),
        ('Islas Svalbard y Jan Mayen', 	744 ),
        ('Eslovaquia', 	703 ),
        ('Sierra Leona', 	694 ),
        ('San Marino', 	674 ),
        ('Senegal', 	686 ),
        ('Somalia', 	706 ),
        ('Surinam', 	740 ),
        ('Santo Tomé y Príncipe', 	678 ),
        ('El Salvador', 	222 ),
        ('Siria', 	760 ),
        ('Suazilandia', 	748 ),
        ('Islas Turcas y Caicos', 	796 ),
        ('Chad', 	148 ),
        ('Territorios Australes Franceses', 	260 ),
        ('Togo', 	768 ),
        ('Tailandia', 	764 ),
        ('Tanzania', 	834 ),
        ('Tayikistán', 	762 ),
        ('Tokelau', 	772 ),
        ('Timor-Leste', 	626 ),
        ('Turkmenistán', 	795 ),
        ('Túnez', 	788 ),
        ('Tonga', 	776 ),
        ('Turquía', 	792 ),
        ('Trinidad y Tobago', 	780 ),
        ('Tuvalu', 	798 ),
        ('Taiwán', 	158 ),
        ('Ucrania', 	804 ),
        ('Uganda', 	800 ),
        ('Estados Unidos de América', 	840 ),
        ('Uruguay', 	858 ),
        ('Uzbekistán', 	860 ),
        ('Ciudad del Vaticano', 	336 ),
        ('San Vicente y las Granadinas', 	670 ),
        ('Venezuela', 	862 ),
        ('Islas Vírgenes Británicas', 	92 ),
        ('Islas Vírgenes de los Estados Unidos de América', 	850 ),
        ('Vietnam', 	704 ),
        ('Vanuatu', 	548 ),
        ('Wallis y Futuna', 	876 ),
        ('Samoa', 	882 ),
        ('Yemen', 	887 ),
        ('Mayotte', 	175 ),
        ('Sudáfrica', 	710 )";
            $wpdb->query($insertCountriesQuery);
    }
}   
    
    
    
    
    
    
    
    






