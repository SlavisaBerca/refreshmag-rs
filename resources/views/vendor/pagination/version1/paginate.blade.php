@if ($paginator->hasPages())
<ul id="border-pagination">
    @if (!$paginator->onFirstPage())
    <li>
        <a href="{{ $paginator->previousPageUrl() }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                <path
                    d="M12.8047 22.9995C12.8047 19.9995 10.0047 15.9995 6.8047 15.9995M6.8047 15.9995C8.63802 15.9995 12.8047 14.9995 12.8047 8.99951M6.8047 15.9995H25.8047"
                    stroke="#282525" stroke-width="2" />
            </svg>
        </a>
    </li>
    @endif
    @foreach($elements as $element)
    @if (is_string($element))
       <li><a href="" class="disabled">{{ $element }}</a></li>
    @endif  
    @if(is_array($element))
    @foreach ($element as $page => $url)
       <li><a href="{{ $page==$paginator->currentPage() ? '' : $url }}" class="{{ $page==$paginator->currentPage() ? 'active' : '' }}">{{ $page}}</a></li>
    @endforeach
  
    @endif
    @endforeach
   
       @if ($paginator->hasMorePages())
       <li>
           <a  href="{{ $paginator->nextPageUrl() }}">
               <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                   <path
                       d="M20.1953 22.9995C20.1953 19.9995 22.9953 15.9995 26.1953 15.9995M26.1953 15.9995C24.362 15.9995 20.1953 14.9995 20.1953 8.99951M26.1953 15.9995H7.19531"
                       stroke="#282525" stroke-width="2" />
               </svg>
           </a>
       </li>
    @endif 
   </ul>
   @endif