            <div class="mixin-container d-xl-flex d-none">
                <div class="drop-container">
                <div class="wrapper-dropdown" id="dropdown3">

                        <span class="selected-display black fw-500" id="destination3">{{ !$getCategory ? $defaultContent['lang019'] : $getCategory->getName() }}</span>
                                    <svg id="drp-arrow3" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="arrow transition-all ml-auto rotate-180">
                                        <path d="M7 14.5l5-5 5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>


                        <ul class="topbar-dropdown bg-lightest-gray box-shadow-1" style="max-height:200px;overflow-y:auto;">
                        
                                                            @foreach($getCategories->where('id','!=',$getCategory?->id) as $searchCategory)
                                                                <li class="item dark-gray" wire:click="getCategoryId('{{ $searchCategory->id }}')">{{ $searchCategory->getName() }}</li>
                                                            @endforeach
                                                                
                        </ul>
                        @if($searchResults)
                            <div class="autocomplete" style="display:block; max-height:300px;overflow-y:auto; position:absolute; min-width:100%; margin-top:20px; background-color: #fff; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); z-index: 1000;">
                                @foreach($searchResults as $result)
                                    <div class="result-item" style="min-width:100%; padding:10px; border-bottom: 1px solid #eee;">
                                        <div class="d-flex align-items-center" style="overflow:hidden; width:100%;">
                                            <img src="{{ asset('requisites/logo.png') }}" alt="Logo" style="width: 50px; height: 50px; margin-right: 10px; object-fit: cover;">
                                            <span style="font-size: 14px; color: #333; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $result->getName(). 'dkjlfakjfldas fdsafsada dfsafasd'}}</span>
                                        </div>
                                        <span class="mt-2 mb-2">Price : 20$</span>
                                        <span>Price: 20 $</span>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                </div>
                </div>
                        <div class="vr-line vr-line-2"></div>
                                <form action="index.html" method="post">
                                    <div class="input-field">
                                        <x-front.forms.form-components.input type="test" is_model="true" is_live="true" model="searchProducts" debounce_time="300ms" id="searchInput" />
                                        <button type="submit" class="cus-btn">{{ $defaultContent['lang018'] }}</button>
                                    </div>
                                </form>
            </div>