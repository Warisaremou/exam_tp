 @php
     $routeName = request()
         ->route()
         ->getName();
 @endphp

 <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
     <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="{{ route('marche.index') }}">Marche</a></li>
         <li class="breadcrumb-item active" aria-current="page">
             @if ($routeName == 'marche.create')
                 Ajouter un marché
             @else
                 Modifier un marché
             @endif
         </li>
     </ol>
