@extends('painel.template')
@section('content')

<div class="container-fluid">
    <div class="side-body">
        <div class="page-title">
            <span class="title">Matrículas</span>
            <div class="description">Cadastre novas matrículas no sistema</div>
        </div>    
        <div class="row">
            <div class="col-lg-8 col-md-12 col-xs-12">
                <div class="card">
                    <div class="card-body">

                        <div class="sub-title">Informações pessoais</div>

                        <div class="row">
                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Nome Completo">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Telefone Fixo (DDD)">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Celular (DDD)">
                            </div>                                                                                      
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <input type="text" class="form-control" placeholder="CPF">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" placeholder="RG">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" placeholder="Orgão Emissor">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" placeholder="Data de Nascimento">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" placeholder="Nome da mãe">
                            </div>                                                                                                    
                            <div class="col-md-2">
                                <input type="text" class="form-control" placeholder="Nome do pai">
                            </div>                                            
                        </div>

                        <div class="sub-title">Endereço</div>

                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Logradouro">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" placeholder="Número">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Complemento">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Bairro">
                            </div>                        
                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Cidade">
                            </div>                                                                                                    
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="CEP">
                            </div>
                            <div class="col-md-2">
                                <select class="form-control" placeholder="UF">
                                    <option selected="selected" disabled="disabled">UF</option>
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AP">AP</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="AC">AC</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MT">MT</option>
                                    <option value="MS">MS</option>
                                    <option value="MG">MG</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PR">PR</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SP">SP</option>
                                    <option value="SE">SE</option>
                                    <option value="TO">TO</option>
                                </select>
                            </div>                                                                            
                        </div>                        


                        <div class="sub-title">Cursos e Categorias</div>

                        <div class="row">     
                            <div class="col-md-12">
                                <div class="checkbox3 checkbox-success checkbox-check checkbox-round ">
                                    <input type="checkbox" id="hab-a-moto" checked="">
                                    <label for="hab-a-moto">Habilitação Categoria A (Moto)</label>
                                </div>
                                <div class="checkbox3 checkbox-success checkbox-check checkbox-round">
                                    <input type="checkbox" id="hab-b-carro" checked="">
                                    <label for="hab-b-carro">Habilitação Categoria B (Carro)</label>
                                </div> 
                                <div class="checkbox3 checkbox-success checkbox-check checkbox-round">
                                    <input type="checkbox" id="hab-ab-moto-carro" checked="">
                                    <label for="hab-ab-moto-carro">Habilitação Categoria A/B (Moto e Carro)</label>
                                </div> 
                                <div class="checkbox3 checkbox-success checkbox-check checkbox-round">
                                    <input type="checkbox" id="hab-b-pne-carroespecial" checked="">
                                    <label for="hab-b-pne-carroespecial">Habilitação Categoria B - PNE (Carro Especial)</label>
                                </div>
                                <div class="checkbox3 checkbox-success checkbox-check checkbox-round">
                                    <input type="checkbox" id="checkbox-fa-light-2" checked="">
                                    <label for="checkbox-fa-light-2">Inclusão Categoria A (Moto)</label>
                                </div>
                                <div class="checkbox3 checkbox-success checkbox-check checkbox-round">
                                    <input type="checkbox" id="checkbox-fa-light-2" checked="">
                                    <label for="checkbox-fa-light-2">Inclusão Categoria B (Carro)</label>
                                </div>
                                <div class="checkbox3 checkbox-success checkbox-check checkbox-round">
                                    <input type="checkbox" id="checkbox-fa-light-2" checked="">
                                    <label for="checkbox-fa-light-2">Aulas Práticas Avulsas</label>
                                </div>
                                <div class="checkbox3 checkbox-success checkbox-check checkbox-round">
                                    <input type="checkbox" id="checkbox-fa-light-2" checked="">
                                    <label for="checkbox-fa-light-2">Reciclagem</label>
                                </div>
                            </div>  
                        </div>             



                        <div class="sub-title">Como conheceu a Auto Escola Parada Certa?</div>



                    </div>
                </div>
            </div>
        </div>
    </div>

    @stop