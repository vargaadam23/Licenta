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
                <h2>Inmatriculare</h2>
                <div class="row">
                    <form style="width: 100%;padding:10px;" action="/inmatricularesender" method="POST">
                        @csrf
                        <label style="font-size: 20px;color:black;" for="persoana1row">Detalii persoana</label>

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
                        </div>

                        <div style="margin-top: 20px;" class="row">
                            <div class="col-12 col-md-4">
                                
                            </div>
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