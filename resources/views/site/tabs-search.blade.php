 <div class="tabs" id="tabs-option" >
                <ul>
                    <li><a href="#alugar">Alugar</a></li>
                    <li><a href="#comprar">Comprar</a></li>
                    
                    <li class="hidden-xs"><a href="#codigo">Código</a></li>

                </ul>
                <div id="alugar" class="ui-tabs-hide">                    
                   <div class="col-md-12">
                        {{ Form::open(['url' => 'search' , 'method' => 'GET']) }} 
                        <div class="col-md-1"></div>                       
                        <div class="col-md-3">
                             <select id="" class="form-control typefilteradvanced"  data-placeholder="Tipo de imóvel" 
                             multiple="multiple" name="typeImmobile[]">
                            @foreach($type as $types)
                                <option value="{{ $types->immobiles_type_immobiles }}">{{ $types->immobiles_type_immobiles }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="col-md-7">
                            @include('site.form')   
                        </div>
                        <div class="col-md-1">
                            <button type="submit" class="btn btn-buscar"> Buscar </button>
                        </div>
                        {{ Form::hidden('opcao' , 'alugar') }}
                        {{ Form::close() }}
                    
                   </div>

                </div>
                <div id="comprar" class="ui-tabs-hide">
                    <div class="col-md-12">
                        {{ Form::open(['url' => 'search', 'method' => 'GET']) }}
                        <div class="col-md-1"></div>                       
                        <div class="col-md-3">
                             <select id="" class="form-control typefilteradvanced"  data-placeholder="Tipo de imóvel" 
                             multiple="multiple" name="typeImmobile[]">
                            @foreach($type as $types)
                                <option value="{{ $types->immobiles_type_immobiles }}">{{ $types->immobiles_type_immobiles }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="col-md-7">
                            @include('site.form')   
                        </div>
                        <div class="col-md-1">
                            <button type="submit" class="btn btn-buscar"> Buscar </button>
                        </div>
                        {{ Form::hidden('opcao' , 'comprar') }}
                        {{ Form::close() }}
                    </div>
                </div>
                <div id="todos" class="ui-tabs-hide">
                    <div class="col-md-12">
                        {{ Form::open(['url' => 'search', 'method' => 'GET']) }}
                        <div class="col-md-1">
                            {{ Form::hidden('opcao' , 'ambos') }}
                        </div>
                        <div class="col-md-11">
                            <select id="type-immobile-all" class="form-control"  data-placeholder="Tipo de imóvel" multiple="multiple" name="typeImmobile[]">
                                @foreach($type as $types)
                                <option value="{{ $types->immobiles_type_immobiles }}">{{ $types->immobiles_type_immobiles }}</option>
                                @endforeach
                            </select>
                            @include('site.form')
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
                <div class="" id="codigo">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            {{ Form::open(['url' => 'searchCode', 'method' => 'GET']) }}
                            <input type="text" name="immobiles_code" style="width: 82.5% !important;" placeholder='Digite o código. (Ex: CA0001,CA0002)'>
                            <button type="submit" class="btn btn-success btn-buscar"> Buscar </button>                           
                            {{ Form::close() }}
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>

             <div class="col-md-12 ">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="slider-simple-buttons" id="filterAdvanced" >
                   
                        <a href="#filterAdvancedImmobile" class="btn_search_advanced button-icon" tabindex="0">
                            <i class="fa fa-search"></i>Busca Avançada</a>
                    </div>
                    
                </div>
                <div class="col-md-4"></div>
            </div>