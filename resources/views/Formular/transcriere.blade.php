@extends('master')
@section('content')
<script>
    $(document).ready(function() {
        $('#persoana1').change(function() {
            var optiune = $('option:selected', this).val();
            console.log(optiune);
            if (optiune == 'pf') {
                $('#persoanafizica1').removeAttr('hidden').removeAttr('disabled');
                $('#persoanajuridica1').attr('hidden', '').attr('disabled', '');
            } else {
                $('#persoanajuridica1').removeAttr('hidden').removeAttr('disabled');
                $('#persoanafizica1').attr('hidden', '').attr('disabled', '');
            }
        });
        $('#persoana2').change(function() {
            var optiune = $('option:selected', this).val();
            console.log(optiune);
            if (optiune == 'pf') {
                $('#persoanafizica2').removeAttr('hidden').removeAttr('disabled');
                $('#persoanajuridica2').attr('hidden', '').attr('disabled', '');
            } else {
                $('#persoanajuridica2').removeAttr('hidden').removeAttr('disabled');
                $('#persoanafizica2').attr('hidden', '').attr('disabled', '');
            }
        });
    });
</script>

<!-- ============================================================== -->
<!-- main wrapper -->
<!-- ============================================================== -->
<div class="dashboard-main-wrapper">
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <h2>Transcriere</h2>
                <div class="row">
                    <form style="width: 100%;padding:10px;" action="/transcrieresender" method="POST">
                        @csrf
                        <label style="font-size: 20px;color:black;" for="persoana1row">Detalii vanzator</label>

                        <div id="persoana1row" class="form-row">
                            <div class="col-9 col-md-3 form-group">
                                <label for="persoana1">Alegeti tipul de persoana</label>
                                <select style="width: 70%;" id="persoana1" class="form-control" name="persoana1">
                                    <option selected="selected" value="pf">Persoana fizica</option>
                                    <option value="pj">Persoana juridica</option>
                                </select>
                            </div>

                            <fieldset id="persoanafizica1" class="col-md-9">
                                <div class="form-row">
                                    <div class="col-6 col-md-3 form-group">
                                        <label for="nume1">Nume</label>
                                        <input class="form-control" id="nume1" name="nume1" type="text">
                                    </div>
                                    <div class="col-6 col-md-3 form-group">
                                        <label for="prenume1">Prenume</label>
                                        <input class="form-control" id="prenume1" name="prenume1" type="text">
                                    </div>
                                    <div class="col-5 col-md-3 form-group">
                                        <label for="serie1">Serie si numar CI</label>
                                        <input class="form-control" id="serie1" name="serie1" type="text">
                                    </div>
                                    <div class="col-7 col-md-3 form-group">
                                        <label for="cnp1">CNP</label>
                                        <input class="form-control" id="cnp1" name="cnp1" type="text">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset id="persoanajuridica1" class="col-md-9" hidden disabled>
                                <div class="form-row">
                                    <div class="col-12 col-md-4 form-group">
                                        <label for="numep1">Denumire</label>
                                        <input class="form-control" id="numep1" name="numep1" type="text">
                                    </div>
                                    <div class="col col-md-3"></div>
                                    <div class="col-12 col-md-3 form-group">
                                        <label for="seriep1">CUI</label>
                                        <input class="form-control" id="seriep1" name="seriep1" type="text">
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <div class="row">
                            <div class="col-6 col-md-2 form-group">
                                
                                <label for="country1"> Țară </label>
                                <!--span style=" color: red! important; display: inline; float: none; "> * </span-->

                                <select id="country1" name="country1" class=" form-control ">
                                    <option value=" Afghanistan "> Afganistan </option>
                                    <option value=" Insulele Åland "> Insulele Åland </option>
                                    <option value=" Albania "> Albania </option>
                                    <option value=" Algeria "> Algeria </option>
                                    <option value=" American Samoa "> American Samoa </option>
                                    <option value=" Andorra "> Andorra </option>
                                    <option value=" Angola "> Angola </option>
                                    <option value=" Anguilla "> Anguilla </option>
                                    <option value=" Antarctica "> Antarctica </option>
                                    <option value=" Antigua și Barbuda "> Antigua și Barbuda </option>
                                    <option value=" Argentina "> Argentina </option>
                                    <option value=" Armenia "> Armenia </option>
                                    <option value=" Aruba "> Aruba </option>
                                    <option value=" Australia "> Australia </option>
                                    <option value=" Austria "> Austria </option>
                                    <option value=" Azerbaijan "> Azerbaidjan </option>
                                    <option value=" Bahamas "> Bahamas </option>
                                    <option value=" Bahrain "> Bahrain </option>
                                    <option value=" Bangladesh "> Bangladesh </option>
                                    <option value=" Barbados "> Barbados </option>
                                    <option value=" Belarus "> Belarus </option>
                                    <option value=" Belgia "> Belgia </option>
                                    <option value=" Belize "> Belize </option>
                                    <option value=" Benin "> Benin </option>
                                    <option value=" Bermuda "> Bermuda </option>
                                    <option value=" Bhutan "> Bhutan </option>
                                    <option value=" Bolivia "> Bolivia </option>
                                    <option value=" Bosnia si Herzegovina "> Bosnia si Herzegovina </option>
                                    <option value=" Botswana "> Botswana </option>
                                    <option value=" Bouvet Island "> Bouvet Island </option>
                                    <option value=" Brazilia "> Brazilia </option>
                                    <option value=" British Indian Ocean Territory "> British Indian Ocean Territory </option>
                                    <option value=" Brunei Darussalam "> Brunei Darussalam </option>
                                    <option value=" Bulgaria "> Bulgaria </option>
                                    <option value=" Burkina Faso "> Burkina Faso </option>
                                    <option value=" Burundi "> Burundi </option>
                                    <option value=" Cambodia "> Cambodgia </option>
                                    <option value=" Cameroon "> Camerun </option>
                                    <option value=" Canada "> Canada </option>
                                    <option value=" Cape Verde "> Cape Verde </option>
                                    <option value=" Insulele Cayman "> Insulele Cayman </option>
                                    <option value=" Republica Centrafricană "> Republica Centrafricană </option>
                                    <option value=" Chad "> Chad </option>
                                    <option value=" Chile "> Chile </option>
                                    <option value=" China "> China </option>
                                    <option value=" Christmas Island "> Christmas Island </option>
                                    <option value=" Insulele Cocos (Keeling) "> Insulele Cocos (Keeling) </option>
                                    <option value=" Columbia "> Columbia </option>
                                    <option value=" Comoros "> Comore </option>
                                    <option value=" Congo "> Congo </option>
                                    <option value=" Congo, Republica Democrată "> Congo, Republica Democrată </option>
                                    <option value=" Insulele Cook "> Insulele Cook </option>
                                    <option value=" Costa Rica "> Costa Rica </option>
                                    <option value=" Cote D'ivoire "> Coasta de Fildeș </option>
                                    <option value=" Croatia "> Croația </option>
                                    <option value=" Cuba "> Cuba </option>
                                    <option value=" Cipru "> Cyprus </option>
                                    <option value=" Republica Ceha "> Republica Cehă </option>
                                    <option value=" Danemarca "> Danemarca </option>
                                    <option value=" Djibouti "> Djibouti </option>
                                    <option value=" Dominica "> Dominica </option>
                                    <option value=" Dominican Republic "> Republica Dominicană </option>
                                    <option value=" Ecuador "> Ecuador </option>
                                    <option value=" Egipt "> Egipt </option>
                                    <option value=" El Salvador "> El Salvador </option>
                                    <option value=" Guinea Ecuatorială "> Guinea Ecuatorială </option>
                                    <option value=" Eritrea "> Eritrea </option>
                                    <option value=" Estonia "> Estonia </option>
                                    <option value=" Ethiopia "> Etiopia </option>
                                    <option value=" Insulele Falkland (Malvinas) "> Insulele Falkland (Malvinas) </option>
                                    <option value=" Insulele Feroe "> Insulele Feroe </option>
                                    <option value=" Fiji "> Fiji </option>
                                    <option value=" Finlanda "> Finlanda </option>
                                    <option value=" Franta "> Franța </option>
                                    <option value=" Guyana Franceză "> Guyana Franceză </option>
                                    <option value=" Polinezia Franceză "> Polinezia Franceză </option>
                                    <option value=" French Southern Territories "> Teritoriile franceze de sud </option>
                                    <option value=" Gabon "> Gabon </option>
                                    <option value=" Gambia "> Gambia </option>
                                    <option value=" Georgia "> Georgia </option>
                                    <option value=" Germania "> Germania </option>
                                    <option value=" Ghana "> Ghana </option>
                                    <option value=" Gibraltar "> Gibraltar </option>
                                    <option value=" Grecia "> Grecia </option>
                                    <option value=" Greenland "> Groenlanda </option>
                                    <option value=" Grenada "> Grenada </option>
                                    <option value=" Guadeloupe "> Guadelupa </option>
                                    <option value=" Guam "> Guam </option>
                                    <option value=" Guatemala "> Guatemala </option>
                                    <option value=" Guernsey "> Guernsey </option>
                                    <option value=" Guinea "> Guinea </option>
                                    <option value=" Guinea-bissau "> Guinea-bissau </option>
                                    <option value=" Guyana "> Guyana </option>
                                    <option value=" Haiti "> Haiti </option>
                                    <option value=" Insula Heard și Insulele Mcdonald "> Insula Heard și Insulele Mcdonald </option>
                                    <option value=" Sfântul Scaun (Statul Vaticanului) "> Sfântul Scaun (Statul Vaticanului) </option>
                                    <option value=" Honduras "> Honduras </option>
                                    <option value=" Hong Kong "> Hong Kong </option>
                                    <option value=" Ungaria "> Ungaria </option>
                                    <option value=" Iceland "> Islanda </option>
                                    <option value=" India "> India </option>
                                    <option value=" Indonesia "> Indonezia </option>
                                    <option valoare=" Iran, Republica Islamică "> Iran, Republica Islamică </option>
                                    <option value=" Iraq "> Iraq </option>
                                    <option value=" Irlanda "> Irlanda </option>
                                    <option value=" Isle of Man "> Isle of Man </option>
                                    <option value=" Israel "> Israel </option>
                                    <option value=" Italia "> Italia </option>
                                    <option value=" Jamaica "> Jamaica </option>
                                    <option value=" Japan "> Japonia </option>
                                    <option value=" Jersey "> Jersey </option>
                                    <option value=" Jordan "> Jordan </option>
                                    <option value=" Kazahstan "> Kazahstan </option>
                                    <option value=" Kenya "> Kenya </option>
                                    <option value=" Kiribati "> Kiribati </option>
                                    <option value=" Coreea"> Coreea de Sud</option>
                                    <option value=" Korea, Republic of "> Coreea, Republic of </option>
                                    <option value=" Kuwait "> Kuweit </option>
                                    <option value=" Kyrgyzstan "> Kârgâzstan </option>
                                    <option value=" Republica Democrată Populară Lao "> Republica Democrată Populară Lao </option>
                                    <option value=" Latvia "> Letonia </option>
                                    <option value=" Lebanon "> Lebanon </option>
                                    <option value=" Lesotho "> Lesotho </option>
                                    <option value=" Liberia "> Liberia </option>
                                    <option value=" Libyan Arab Jamahiriya "> Libyan Arab Jamahiriya </option>
                                    <option value=" Liechtenstein "> Liechtenstein </option>
                                    <option value=" Lituania "> Lituania </ opțiune>
                                    <option value=" Luxembourg "> Luxemburg </option>
                                    <option value=" Macao "> Macao </option>
                                    <option value=" Macedonia">Macedonia</option>
                                    <option value=" Madagascar "> Madagascar </option>
                                    <option value=" Malawi "> Malawi </option>
                                    <option value=" Malaysia "> Malaysia </option>
                                    <option value=" Maldives "> Maldive </option>
                                    <option value=" Mali "> Mali </option>
                                    <option value=" Malta "> Malta </option>
                                    <option value=" Insulele Marshall "> Insulele Marshall </option>
                                    <option value=" Martinique "> Martinica </option>
                                    <option value=" Mauritania "> Mauritania </option>
                                    <option value=" Mauritius "> Mauritius </option>
                                    <option value=" Mayotte "> Mayotte </option>
                                    <option value=" Mexic "> Mexic </option>
                                    <option value=" Micronesia, Statele Federate din "> Micronesia</option>
                                    <option value="Republica Moldova"> Moldova</option>
                                    <option value=" Monaco "> Monaco </option>
                                    <option value=" Mongolia "> Mongolia </option>
                                    <option value=" Muntenegru "> Muntenegru </option>
                                    <option value=" Montserrat "> Montserrat </option>
                                    <option value=" Morocco "> Maroc </option>
                                    <option value=" Mozambique "> Mozambic </option>
                                    <option value=" Myanmar "> Myanmar </option>
                                    <option value=" Namibia "> Namibia </option>
                                    <option value=" Nauru "> Nauru </option>
                                    <option value=" Nepal "> Nepal </option>
                                    <option value=" Olanda "> Olanda </option>
                                    <option value=" Antilele Olandeze "> Antilele Olandeze </option>
                                    <option value=" New Caledonia "> Noua Caledonie </option>
                                    <option value=" Noua Zeelanda "> Noua Zeelandă </option>
                                    <option value=" Nicaragua "> Nicaragua </option>
                                    <option value=" Niger "> Niger </option>
                                    <option value=" Nigeria "> Nigeria </option>
                                    <option value=" Niue "> Niue </option>
                                    <option value=" Norfolk Island "> Insula Norfolk </option>
                                    <option value=" Northern Mariana Islands "> Insulele Mariana de Nord </option>
                                    <option value=" Norvegia "> Norvegia </option>
                                    <option value=" Oman "> Oman </option>
                                    <option value=" Pakistan "> Pakistan </option>
                                    <option value=" Palau "> Palau </option>
    
                                    <option value=" Panama "> Panama </option>
                                    <option value=" Papua Noua Guinee "> Papua Noua Guinee </option>
                                    <option value=" Paraguay "> Paraguay </option>
                                    <option value=" Peru "> Peru </option>
                                    <option value=" Philippines "> Filipine </option>
                                    <option value=" Pitcairn "> Pitcairn </option>
                                    <option value=" Poland "> Polonia </option>
                                    <option value=" Portugal "> Portugalia </option>
                                    <option value=" Puerto Rico "> Puerto Rico </option>
                                    <option value=" Qatar "> Qatar </option>
                                    <option value=" Reunion "> Reunion </option>
                                    <option selected value=" Romania "> Romania </option>
                                    <option value=" Russian Federation "> Federația Rusă </option>
                                    <option value=" Rwanda "> Rwanda </option>
                                    <option value=" Saint Helena "> Saint Helena </option>
                                    <option value=" Saint Kitts and Nevis "> Saint Kitts și Nevis </option>
                                    <option value=" Saint Lucia "> Saint Lucia </option>
                                    <option value=" Saint Pierre și Miquelon "> Saint Pierre și Miquelon </option>
                                    <option value=" Saint Vincent și Grenadine "> Saint Vincent și Grenadine </option>
                                    <option value=" Samoa "> Samoa </option>
                                    <option value=" San Marino "> San Marino </option>
                                    <option value=" Sao Tome and Principe "> Sao Tome and Principe </option>
                                    <option value=" Arabia Saudită "> Arabia Saudită </option>
                                    <option value=" Senegal "> Senegal </option>
                                    <option value=" Serbia "> Serbia </option>
                                    <option value=" Seychelles "> Seychelles </option>
                                    <option value=" Sierra Leone "> Sierra Leone </option>
                                    <option value=" Singapore "> Singapore </option>
                                    <option value=" Slovacia "> Slovacia </option>
                                    <option value=" Slovenia "> Slovenia </option>
                                    <option value=" Insulele Solomon "> Insulele Solomon </option>
                                    <option value=" Somalia "> Somalia </option>
                                    <option value=" Africa de Sud "> Africa de Sud </option>
                                    <option value=" Georgia de Sud și Insulele Sandwich de Sud "> Georgia de Sud și Insulele Sandwich de Sud </option>
                                    <option value=" Spania "> Spania </option>
                                    <option value=" Sri Lanka "> Sri Lanka </option>
                                    <option value=" Sudan "> Sudan </option>
                                    <option value=" Suriname "> Suriname </option>
                                    <option value=" Svalbard and Jan Mayen "> Svalbard și Jan Mayen </option>
                                    <option value=" Swaziland "> Swaziland </option>
                                    <option value=" Suedia "> Suedia </option>
                                    <option value=" Elveția "> Elveția </option>
                                    <option value=" Republica Arabă Siriană "> Republica Arabă Siriană </option>
                                    <option value=" Taiwan, provincia China "> Taiwan, provincia China </option>
                                    <option value=" Tadjikistan "> Tadjikistan </option>
                                    <option value=" Tanzania, Republica Unită a "> Tanzania, Republica Unită a </option>
                                    <option value=" Thailanda "> Thailanda </option>
                                    <option value=" Timor-leste "> Timor-leste </option>
                                    <option value=" Togo "> Togo </option>
                                    <option value=" Tokelau "> Tokelau </option>
                                    <option value=" Tonga "> Tonga </option>
                                    <option value=" Trinidad și Tobago "> Trinidad și Tobago </option>
                                    <option value=" Tunisia "> Tunisia </option>
                                    <option value=" Turcia "> Turcia </option>
                                    <option value=" Turkmenistan "> Turkmenistan </option>
                                    <option value=" Insulele Turks și Caicos "> Insulele Turks și Caicos </option>
                                    <option value=" Tuvalu "> Tuvalu </option>
                                    <option value=" Uganda "> Uganda </option>
                                    <option value=" Ucraina "> Ucraina </option>
                                    <option value=" Emiratele Arabe Unite "> Emiratele Arabe Unite </option>
                                    <option value=" Marea Britanie "> Marea Britanie </option>
                                    <option value=" Statele unite "> Statele Unite </option>
                                    <option value=" Insulele minore periferice ale Statelor Unite "> Insulele minore periferice ale Statelor Unite </option>
                                    <option value=" Uruguay "> Uruguay </option>
                                    <option value=" Uzbekistan "> Uzbekistan </option>
                                    <option value=" Vanuatu "> Vanuatu </option>
                                    <option value=" Venezuela "> Venezuela </option>
                                    <option value=" Viet Nam "> Viet Nam </option>
                                    <option value=" Virgin Islands, British "> Insulele Virgin, British </option>
                                    <option value=" Insulele Virgine, SUA "> Insulele Virgine, SUA </option>
                                    <option value=" Wallis and Futuna "> Wallis și Futuna </option>
                                    <option value=" Western Sahara "> Western Sahara </option>
                                    <option value=" Yemen "> Yemen </option>
                                    <option value=" Zambia "> Zambia </option>
                                    <option value=" Zimbabwe "> Zimbabwe </option>
                                </select>
                            </div>
                            <div class="col-6 col-md-2 form-group">
                                <label for="localitate1">Localitate</label>
                                <input class="form-control" id="localitate1" name="localitate1" type="text">
                            </div>
                            <div class="col-6 col-md-2 form-group">
                                <label for="sat1">Sat</label>
                                <input class="form-control" id="sat1" name="sat1" type="text">
                            </div>
                            <div class="col-9 col-md-3 form-group">
                                <label for="str1">Strada</label>
                                <input class="form-control" id="str1" name="str1" type="text">
                            </div>
                            <div class="col-3 col-md-1 form-group">
                                <label for="nr1">Nr</label>
                                <input class="form-control" id="nr1" name="nr1" type="text">
                            </div>
                            <div class="col-3 col-md-1  form-group">
                                <label for="bl1">Bl</label>
                                <input class="form-control" id="bl1" name="bl1" type="text">
                            </div>
                            <div class="col-3 col-md-1  form-group">
                                <label for="sc1">Sc</label>
                                <input class="form-control" id="sc1" name="sc1" type="text">
                            </div>
                            <div class="col-3 col-md-1  form-group">
                                <label for="et1">Et</label>
                                <input class="form-control" id="et1" name="et1" type="text">
                            </div>
                            <div class="col-3 col-md-1  form-group">
                                <label for="ap1">Ap</label>
                                <input class="form-control" id="ap1" name="ap1" type="text">
                            </div>
                            <div class="col-6 col-md-2  form-group">
                                <label for="jud1">Judet</label>
                                <input class="form-control" id="jud1" name="jud1" type="text">
                            </div>
                        </div>




                        <label style="font-size: 20px;color:black;" for="persoana2row">Detalii cumparator</label>

                        <div id="persoana2row" class="form-row">
                            <div class="col-9 col-md-3 form-group">
                                <label for="persoana2">Alegeti tipul de persoana</label>
                                <select style="width: 70%;" id="persoana2" class="form-control" name="persoana2">
                                    <option selected="selected" value="pf">Persoana fizica</option>
                                    <option value="pj">Persoana juridica</option>
                                </select>
                            </div>

                            <fieldset id="persoanafizica2" class="col-md-9">
                                <div class="form-row">
                                    <div class="col-6 col-md-3 form-group">
                                        <label for="nume2">Nume</label>
                                        <input class="form-control" id="nume2" name="nume2" type="text">
                                    </div>
                                    <div class="col-6 col-md-3 form-group">
                                        <label for="prenume2">Prenume</label>
                                        <input class="form-control" id="prenume2" name="prenume2" type="text">
                                    </div>
                                    <div class="col-5 col-md-3 form-group">
                                        <label for="serie2">Serie si numar CI</label>
                                        <input class="form-control" id="serie2" name="serie2" type="text">
                                    </div>
                                    <div class="col-7 col-md-3 form-group">
                                        <label for="cnp2">CNP</label>
                                        <input class="form-control" id="cnp2" name="cnp2" type="text">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset id="persoanajuridica2" class="col-md-9" hidden disabled>
                                <div class="form-row">
                                    <div class="col-12 col-md-4 form-group">
                                        <label for="numep2">Denumire</label>
                                        <input class="form-control" id="numep2" name="numep2" type="text">
                                    </div>
                                    <div class="col col-md-3"></div>
                                    <div class="col-12 col-md-3 form-group">
                                        <label for="seriep2">CUI</label>
                                        <input class="form-control" id="seriep2" name="seriep2" type="text">
                                    </div>
                                </div>
                            </fieldset>
                        </div>




                        <div class="row">
                        <div class="col-6 col-md-2 form-group">
                                
                                <label for="country2"> Țară </label>
                                <!--span style=" color: red! important; display: inline; float: none; "> * </span-->

                                <select id="country2" name="country2" class=" form-control ">
                                    <option value=" Afghanistan "> Afganistan </option>
                                    <option value=" Insulele Åland "> Insulele Åland </option>
                                    <option value=" Albania "> Albania </option>
                                    <option value=" Algeria "> Algeria </option>
                                    <option value=" American Samoa "> American Samoa </option>
                                    <option value=" Andorra "> Andorra </option>
                                    <option value=" Angola "> Angola </option>
                                    <option value=" Anguilla "> Anguilla </option>
                                    <option value=" Antarctica "> Antarctica </option>
                                    <option value=" Antigua și Barbuda "> Antigua și Barbuda </option>
                                    <option value=" Argentina "> Argentina </option>
                                    <option value=" Armenia "> Armenia </option>
                                    <option value=" Aruba "> Aruba </option>
                                    <option value=" Australia "> Australia </option>
                                    <option value=" Austria "> Austria </option>
                                    <option value=" Azerbaijan "> Azerbaidjan </option>
                                    <option value=" Bahamas "> Bahamas </option>
                                    <option value=" Bahrain "> Bahrain </option>
                                    <option value=" Bangladesh "> Bangladesh </option>
                                    <option value=" Barbados "> Barbados </option>
                                    <option value=" Belarus "> Belarus </option>
                                    <option value=" Belgia "> Belgia </option>
                                    <option value=" Belize "> Belize </option>
                                    <option value=" Benin "> Benin </option>
                                    <option value=" Bermuda "> Bermuda </option>
                                    <option value=" Bhutan "> Bhutan </option>
                                    <option value=" Bolivia "> Bolivia </option>
                                    <option value=" Bosnia si Herzegovina "> Bosnia si Herzegovina </option>
                                    <option value=" Botswana "> Botswana </option>
                                    <option value=" Bouvet Island "> Bouvet Island </option>
                                    <option value=" Brazilia "> Brazilia </option>
                                    <option value=" British Indian Ocean Territory "> British Indian Ocean Territory </option>
                                    <option value=" Brunei Darussalam "> Brunei Darussalam </option>
                                    <option value=" Bulgaria "> Bulgaria </option>
                                    <option value=" Burkina Faso "> Burkina Faso </option>
                                    <option value=" Burundi "> Burundi </option>
                                    <option value=" Cambodia "> Cambodgia </option>
                                    <option value=" Cameroon "> Camerun </option>
                                    <option value=" Canada "> Canada </option>
                                    <option value=" Cape Verde "> Cape Verde </option>
                                    <option value=" Insulele Cayman "> Insulele Cayman </option>
                                    <option value=" Republica Centrafricană "> Republica Centrafricană </option>
                                    <option value=" Chad "> Chad </option>
                                    <option value=" Chile "> Chile </option>
                                    <option value=" China "> China </option>
                                    <option value=" Christmas Island "> Christmas Island </option>
                                    <option value=" Insulele Cocos (Keeling) "> Insulele Cocos (Keeling) </option>
                                    <option value=" Columbia "> Columbia </option>
                                    <option value=" Comoros "> Comore </option>
                                    <option value=" Congo "> Congo </option>
                                    <option value=" Congo, Republica Democrată "> Congo, Republica Democrată </option>
                                    <option value=" Insulele Cook "> Insulele Cook </option>
                                    <option value=" Costa Rica "> Costa Rica </option>
                                    <option value=" Cote D'ivoire "> Coasta de Fildeș </option>
                                    <option value=" Croatia "> Croația </option>
                                    <option value=" Cuba "> Cuba </option>
                                    <option value=" Cipru "> Cyprus </option>
                                    <option value=" Republica Ceha "> Republica Cehă </option>
                                    <option value=" Danemarca "> Danemarca </option>
                                    <option value=" Djibouti "> Djibouti </option>
                                    <option value=" Dominica "> Dominica </option>
                                    <option value=" Dominican Republic "> Republica Dominicană </option>
                                    <option value=" Ecuador "> Ecuador </option>
                                    <option value=" Egipt "> Egipt </option>
                                    <option value=" El Salvador "> El Salvador </option>
                                    <option value=" Guinea Ecuatorială "> Guinea Ecuatorială </option>
                                    <option value=" Eritrea "> Eritrea </option>
                                    <option value=" Estonia "> Estonia </option>
                                    <option value=" Ethiopia "> Etiopia </option>
                                    <option value=" Insulele Falkland (Malvinas) "> Insulele Falkland (Malvinas) </option>
                                    <option value=" Insulele Feroe "> Insulele Feroe </option>
                                    <option value=" Fiji "> Fiji </option>
                                    <option value=" Finlanda "> Finlanda </option>
                                    <option value=" Franta "> Franța </option>
                                    <option value=" Guyana Franceză "> Guyana Franceză </option>
                                    <option value=" Polinezia Franceză "> Polinezia Franceză </option>
                                    <option value=" French Southern Territories "> Teritoriile franceze de sud </option>
                                    <option value=" Gabon "> Gabon </option>
                                    <option value=" Gambia "> Gambia </option>
                                    <option value=" Georgia "> Georgia </option>
                                    <option value=" Germania "> Germania </option>
                                    <option value=" Ghana "> Ghana </option>
                                    <option value=" Gibraltar "> Gibraltar </option>
                                    <option value=" Grecia "> Grecia </option>
                                    <option value=" Greenland "> Groenlanda </option>
                                    <option value=" Grenada "> Grenada </option>
                                    <option value=" Guadeloupe "> Guadelupa </option>
                                    <option value=" Guam "> Guam </option>
                                    <option value=" Guatemala "> Guatemala </option>
                                    <option value=" Guernsey "> Guernsey </option>
                                    <option value=" Guinea "> Guinea </option>
                                    <option value=" Guinea-bissau "> Guinea-bissau </option>
                                    <option value=" Guyana "> Guyana </option>
                                    <option value=" Haiti "> Haiti </option>
                                    <option value=" Insula Heard și Insulele Mcdonald "> Insula Heard și Insulele Mcdonald </option>
                                    <option value=" Sfântul Scaun (Statul Vaticanului) "> Sfântul Scaun (Statul Vaticanului) </option>
                                    <option value=" Honduras "> Honduras </option>
                                    <option value=" Hong Kong "> Hong Kong </option>
                                    <option value=" Ungaria "> Ungaria </option>
                                    <option value=" Iceland "> Islanda </option>
                                    <option value=" India "> India </option>
                                    <option value=" Indonesia "> Indonezia </option>
                                    <option valoare=" Iran, Republica Islamică "> Iran, Republica Islamică </option>
                                    <option value=" Iraq "> Iraq </option>
                                    <option value=" Irlanda "> Irlanda </option>
                                    <option value=" Isle of Man "> Isle of Man </option>
                                    <option value=" Israel "> Israel </option>
                                    <option value=" Italia "> Italia </option>
                                    <option value=" Jamaica "> Jamaica </option>
                                    <option value=" Japan "> Japonia </option>
                                    <option value=" Jersey "> Jersey </option>
                                    <option value=" Jordan "> Jordan </option>
                                    <option value=" Kazahstan "> Kazahstan </option>
                                    <option value=" Kenya "> Kenya </option>
                                    <option value=" Kiribati "> Kiribati </option>
                                    <option value=" Coreea"> Coreea de Sud</option>
                                    <option value=" Korea, Republic of "> Coreea, Republic of </option>
                                    <option value=" Kuwait "> Kuweit </option>
                                    <option value=" Kyrgyzstan "> Kârgâzstan </option>
                                    <option value=" Republica Democrată Populară Lao "> Republica Democrată Populară Lao </option>
                                    <option value=" Latvia "> Letonia </option>
                                    <option value=" Lebanon "> Lebanon </option>
                                    <option value=" Lesotho "> Lesotho </option>
                                    <option value=" Liberia "> Liberia </option>
                                    <option value=" Libyan Arab Jamahiriya "> Libyan Arab Jamahiriya </option>
                                    <option value=" Liechtenstein "> Liechtenstein </option>
                                    <option value=" Lituania "> Lituania </ opțiune>
                                    <option value=" Luxembourg "> Luxemburg </option>
                                    <option value=" Macao "> Macao </option>
                                    <option value=" Macedonia">Macedonia</option>
                                    <option value=" Madagascar "> Madagascar </option>
                                    <option value=" Malawi "> Malawi </option>
                                    <option value=" Malaysia "> Malaysia </option>
                                    <option value=" Maldives "> Maldive </option>
                                    <option value=" Mali "> Mali </option>
                                    <option value=" Malta "> Malta </option>
                                    <option value=" Insulele Marshall "> Insulele Marshall </option>
                                    <option value=" Martinique "> Martinica </option>
                                    <option value=" Mauritania "> Mauritania </option>
                                    <option value=" Mauritius "> Mauritius </option>
                                    <option value=" Mayotte "> Mayotte </option>
                                    <option value=" Mexic "> Mexic </option>
                                    <option value=" Micronesia, Statele Federate din "> Micronesia</option>
                                    <option value="Republica Moldova"> Moldova</option>
                                    <option value=" Monaco "> Monaco </option>
                                    <option value=" Mongolia "> Mongolia </option>
                                    <option value=" Muntenegru "> Muntenegru </option>
                                    <option value=" Montserrat "> Montserrat </option>
                                    <option value=" Morocco "> Maroc </option>
                                    <option value=" Mozambique "> Mozambic </option>
                                    <option value=" Myanmar "> Myanmar </option>
                                    <option value=" Namibia "> Namibia </option>
                                    <option value=" Nauru "> Nauru </option>
                                    <option value=" Nepal "> Nepal </option>
                                    <option value=" Olanda "> Olanda </option>
                                    <option value=" Antilele Olandeze "> Antilele Olandeze </option>
                                    <option value=" New Caledonia "> Noua Caledonie </option>
                                    <option value=" Noua Zeelanda "> Noua Zeelandă </option>
                                    <option value=" Nicaragua "> Nicaragua </option>
                                    <option value=" Niger "> Niger </option>
                                    <option value=" Nigeria "> Nigeria </option>
                                    <option value=" Niue "> Niue </option>
                                    <option value=" Norfolk Island "> Insula Norfolk </option>
                                    <option value=" Northern Mariana Islands "> Insulele Mariana de Nord </option>
                                    <option value=" Norvegia "> Norvegia </option>
                                    <option value=" Oman "> Oman </option>
                                    <option value=" Pakistan "> Pakistan </option>
                                    <option value=" Palau "> Palau </option>
    
                                    <option value=" Panama "> Panama </option>
                                    <option value=" Papua Noua Guinee "> Papua Noua Guinee </option>
                                    <option value=" Paraguay "> Paraguay </option>
                                    <option value=" Peru "> Peru </option>
                                    <option value=" Philippines "> Filipine </option>
                                    <option value=" Pitcairn "> Pitcairn </option>
                                    <option value=" Poland "> Polonia </option>
                                    <option value=" Portugal "> Portugalia </option>
                                    <option value=" Puerto Rico "> Puerto Rico </option>
                                    <option value=" Qatar "> Qatar </option>
                                    <option value=" Reunion "> Reunion </option>
                                    <option selected value=" Romania "> Romania </option>
                                    <option value=" Russian Federation "> Federația Rusă </option>
                                    <option value=" Rwanda "> Rwanda </option>
                                    <option value=" Saint Helena "> Saint Helena </option>
                                    <option value=" Saint Kitts and Nevis "> Saint Kitts și Nevis </option>
                                    <option value=" Saint Lucia "> Saint Lucia </option>
                                    <option value=" Saint Pierre și Miquelon "> Saint Pierre și Miquelon </option>
                                    <option value=" Saint Vincent și Grenadine "> Saint Vincent și Grenadine </option>
                                    <option value=" Samoa "> Samoa </option>
                                    <option value=" San Marino "> San Marino </option>
                                    <option value=" Sao Tome and Principe "> Sao Tome and Principe </option>
                                    <option value=" Arabia Saudită "> Arabia Saudită </option>
                                    <option value=" Senegal "> Senegal </option>
                                    <option value=" Serbia "> Serbia </option>
                                    <option value=" Seychelles "> Seychelles </option>
                                    <option value=" Sierra Leone "> Sierra Leone </option>
                                    <option value=" Singapore "> Singapore </option>
                                    <option value=" Slovacia "> Slovacia </option>
                                    <option value=" Slovenia "> Slovenia </option>
                                    <option value=" Insulele Solomon "> Insulele Solomon </option>
                                    <option value=" Somalia "> Somalia </option>
                                    <option value=" Africa de Sud "> Africa de Sud </option>
                                    <option value=" Georgia de Sud și Insulele Sandwich de Sud "> Georgia de Sud și Insulele Sandwich de Sud </option>
                                    <option value=" Spania "> Spania </option>
                                    <option value=" Sri Lanka "> Sri Lanka </option>
                                    <option value=" Sudan "> Sudan </option>
                                    <option value=" Suriname "> Suriname </option>
                                    <option value=" Svalbard and Jan Mayen "> Svalbard și Jan Mayen </option>
                                    <option value=" Swaziland "> Swaziland </option>
                                    <option value=" Suedia "> Suedia </option>
                                    <option value=" Elveția "> Elveția </option>
                                    <option value=" Republica Arabă Siriană "> Republica Arabă Siriană </option>
                                    <option value=" Taiwan, provincia China "> Taiwan, provincia China </option>
                                    <option value=" Tadjikistan "> Tadjikistan </option>
                                    <option value=" Tanzania, Republica Unită a "> Tanzania, Republica Unită a </option>
                                    <option value=" Thailanda "> Thailanda </option>
                                    <option value=" Timor-leste "> Timor-leste </option>
                                    <option value=" Togo "> Togo </option>
                                    <option value=" Tokelau "> Tokelau </option>
                                    <option value=" Tonga "> Tonga </option>
                                    <option value=" Trinidad și Tobago "> Trinidad și Tobago </option>
                                    <option value=" Tunisia "> Tunisia </option>
                                    <option value=" Turcia "> Turcia </option>
                                    <option value=" Turkmenistan "> Turkmenistan </option>
                                    <option value=" Insulele Turks și Caicos "> Insulele Turks și Caicos </option>
                                    <option value=" Tuvalu "> Tuvalu </option>
                                    <option value=" Uganda "> Uganda </option>
                                    <option value=" Ucraina "> Ucraina </option>
                                    <option value=" Emiratele Arabe Unite "> Emiratele Arabe Unite </option>
                                    <option value=" Marea Britanie "> Marea Britanie </option>
                                    <option value=" Statele unite "> Statele Unite </option>
                                    <option value=" Insulele minore periferice ale Statelor Unite "> Insulele minore periferice ale Statelor Unite </option>
                                    <option value=" Uruguay "> Uruguay </option>
                                    <option value=" Uzbekistan "> Uzbekistan </option>
                                    <option value=" Vanuatu "> Vanuatu </option>
                                    <option value=" Venezuela "> Venezuela </option>
                                    <option value=" Viet Nam "> Viet Nam </option>
                                    <option value=" Virgin Islands, British "> Insulele Virgin, British </option>
                                    <option value=" Insulele Virgine, SUA "> Insulele Virgine, SUA </option>
                                    <option value=" Wallis and Futuna "> Wallis și Futuna </option>
                                    <option value=" Western Sahara "> Western Sahara </option>
                                    <option value=" Yemen "> Yemen </option>
                                    <option value=" Zambia "> Zambia </option>
                                    <option value=" Zimbabwe "> Zimbabwe </option>
                                </select>
                            </div>
                            <div class="col-6 col-md-2 form-group">
                                <label for="localitate2">Localitate</label>
                                <input class="form-control" id="localitate2" name="localitate2" type="text">
                            </div>
                            <div class="col-6 col-md-2 form-group">
                                <label for="sat2">Sat</label>
                                <input class="form-control" id="sat2" name="sat2" type="text">
                            </div>
                            <div class="col-9 col-md-3 form-group">
                                <label for="str2">Strada</label>
                                <input class="form-control" id="str2" name="str2" type="text">
                            </div>
                            <div class="col-3 col-md-1 form-group">
                                <label for="nr2">Nr</label>
                                <input class="form-control" id="nr2" name="nr2" type="text">
                            </div>
                            <div class="col-3 col-md-1  form-group">
                                <label for="bl2">Bl</label>
                                <input class="form-control" id="bl2" name="bl2" type="text">
                            </div>
                            <div class="col-3 col-md-1  form-group">
                                <label for="sc2">Sc</label>
                                <input class="form-control" id="sc2" name="sc2" type="text">
                            </div>
                            <div class="col-3 col-md-1  form-group">
                                <label for="et2">Et</label>
                                <input class="form-control" id="et2" name="et2" type="text">
                            </div>
                            <div class="col-3 col-md-1  form-group">
                                <label for="ap2">Ap</label>
                                <input class="form-control" id="ap2" name="ap2" type="text">
                            </div>
                        
                        
                            <div class="col-6 col-md-2  form-group">
                                <label for="jud2">Judet</label>
                                <input class="form-control" id="jud2" name="jud2" type="text">
                            </div>
                        </div>

                        <label style="font-size: 20px;color:black;" for="masinarow">Detalii automobil</label>
                        <div id="masinarow" class=" row">
                            <div class="col-5 col-md-2  form-group">
                                <label for="cat">Categoria</label>
                                <input class="form-control" id="cat" name="cat" type="text">
                            </div>
                            <div class="col-7 col-md-2 form-group">
                                <label for="car">Caroseria</label>
                                <input class="form-control" id="car" name="car" type="text">
                            </div>
                            <div class="col-6 col-md-2 form-group">
                                <label for="mar">Marca</label>
                                <input class="form-control" id="mar" name="mar" type="text">
                            </div>
                            <div class="col-6 col-md-2 form-group">
                                <label for="tip">Tip</label>
                                <input class="form-control" id="tip" name="tip" type="text">
                            </div>
                            <div class="col-12 col-md-2 form-group">
                                <label for="iden">Nr de identificare</label>
                                <input class="form-control" id="iden" name="iden" type="text">
                            </div>
                            <div class="col-12 col-md-2 form-group">
                                <label for="om">Numar de omologare</label>
                                <input class="form-control" id="om" name="om" type="text">
                            </div>
                            <div class="col-6 col-md-1 form-group">
                                <label for="anfb">An fb.</label>
                                <input class="form-control" id="anfb" name="anfb" type="text">
                            </div>
                            <div class="col-6 col-md-1 form-group">
                                <label for="seriemoto">Serie motor</label>
                                <input class="form-control" id="seriemoto" name="seriemoto" type="text">
                            </div>
                            <div class="col-6 col-md-1 form-group">
                                <label for="cil">Cilindree</label>
                                <input class="form-control" id="cil" name="cil" type="text">
                            </div>
                            <div class="col-6 col-md-2 form-group">
                                <label for="sursa">Sursa de energie</label>
                                <input class="form-control" id="sursa" name="sursa" type="text">
                            </div>
                            <div class="col-6 col-md-1 form-group">
                                <label for="col">Culoare</label>
                                <input class="form-control" id="col" name="col" type="text">
                            </div>
                            <div class="col-12 col-md-2 form-group">
                                <label for="civ">Seria si nr CI vehiculului</label>
                                <input class="form-control" id="civ" name="civ" type="text">
                            </div>

                            <div class="col-12 col-md-2 form-group">
                                <label for="pret">Pret</label>
                                <input class="form-control" id="pret" name="pret" type="text">
                            </div>
                            <div class="col-12 col-md-1 form-group">
                                <label for="mon">Moneda</label>
                                <input class="form-control" id="mon" name="mon" type="text">
                            </div>
                            <div class="col-12 col-md-2 form-group">
                                <label for="data">Data incheierii contractului</label>
                                <input class="form-control" id="data" name="data" type="date">
                            </div>
                            <div class="col-12 col-md-2 form-group">
                                <label for="locul">Locul incheierii cotractului</label>
                                <input class="form-control" id="locul" name="locul" type="text">
                            </div>

                        </div>

                        <div style="margin-top: 20px;" class="row">
                            
                            <div class="col-12 col-md-3">
                                <button style="width:100%;font-size:20px;" type="submit" class="btn btn-primary">Trimite</button>
                            </div>
                            <div class="col-5">

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end main wrapper  -->
<!-- ============================================================== -->
@stop