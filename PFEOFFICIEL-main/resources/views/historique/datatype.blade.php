<x-app-layout>

    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
        <title>RBAM Importation</title>
        
        <style>
             a {
         text-decoration: none;
         color: #337ab7;
         }
        </style>
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-5">
            
            <div class="card">
                <div class="card-body">
                    <hr>
                    <ul class="nav nav-tabs scroll-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('historique.system',  ['filename' => $filename, 'importDateTime' => $importDateTime]) }}">System</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('historique.stgtables',  ['filename' => $filename, 'importDateTime' => $importDateTime]) }}">STG tables</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  active" href="{{ route('historique.datatype', ['filename' => $filename, 'importDateTime' => $importDateTime]) }}">Data type</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('historique.supplements', ['filename' => $filename, 'importDateTime' => $importDateTime]) }}">Supplements</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('historique.bkey', ['filename' => $filename, 'importDateTime' => $importDateTime]) }}">BKEY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('historique.bmap', ['filename' => $filename, 'importDateTime' => $importDateTime]) }}">BMAP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('historique.bmapvalues', ['filename' => $filename, 'importDateTime' => $importDateTime]) }}">BMAP values</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('historique.coretables', ['filename' => $filename, 'importDateTime' => $importDateTime]) }}">Core tables</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('historique.tablemapping', ['filename' => $filename, 'importDateTime' => $importDateTime]) }}">Table mapping</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('historique.columnmapping', ['filename' => $filename, 'importDateTime' => $importDateTime]) }}">Column mapping</a>
                        </li>
                    </ul>
                    
                    <div class="search-bar">
                        <select id="search-column">
                                      <option value="source_data_type">Source Data type</option>
                                      <option value="ok_flg">OK FLG</option>
                                      <option value="column1">Column1</option>
                                      <option value="column2">Column2</option>
                                      <option value="teradata_data_type">TERADATA data type</option>
                                      <option value="validation_comment">Validation Comment</option>
                        </select>
                        <input type="text" id="search-input" placeholder="Rechercher...">
                      </div>
                    <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Source Data type</th>
                                                            <th>OK FLG</th>
                                                            <th>Column1</th>
                                                            <th>Column2</th>
                                                            <th>TERADATA data type</th>
                                                            <th>Validation Comment</th>
                                                            <th>Imported at </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                     @foreach($feuille3Data as $item)
                                                     <tr>
                                                        <td>{{$item->source_data_type}}</td>
                                                        <td>{{$item->ok_flg}}</td>
                                                        <td>{{$item->column1}}</td>
                                                        <td>{{$item->column2}}</td>
                                                        <td>{{$item->teradata_data_type}}</td>
                                                        <td>{{$item->validation_comment}}</td>
                                                       <td>{{ \Carbon\Carbon::parse( $item->imported_at)->format('H:i:s') }}</td>
                                                  </tr>
                                                   @endforeach
                                                    </tbody> 
                                                </table>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </table>
                  </div>
            </div>
        </div>
    </div>
</div>
    </x-app-layout>