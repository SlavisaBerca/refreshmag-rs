
        <!-- Main Sections -->
        <main class="main-wrapper">

            @foreach($pageSections as $section)
            {!! view('components.front.version-pages.version1.home-components.'.$section->parentSection->file,[
                    'getComponents'=>$section->myComponents,
                    'sectionData'=>$section??[],
                    'wholeCategories'=>$getCategories??[],
            ]) !!}
            @endforeach

        </main>

          