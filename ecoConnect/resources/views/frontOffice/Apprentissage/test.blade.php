<div class="col-lg-6">
    <h1>Filter Acte Volontaire by Categorie</h1>

    <form method="GET" action="{{ route('Acte.searchByCategorie') }}">
        @csrf
        <div class="form-group">
            <label for="categorie">Categorie:</label>
            <select name="categorie" class="form-control" id="categorie">
                @foreach (\App\Enums\CategorieActeEnum::valuesCategories() as $value => $label)
                    <option value="{{ $value }}">{{ $label }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Filter</button>
    </form>

    @if (isset($results))
        <h2>Filtered Results:</h2>
        <ul>
            @foreach ($results as $acte)
                <li>{{ $acte->titre }} - {{ $acte->description }}</li>
            @endforeach
        </ul>
    @endif
</div>


public function searchByCategorie(Request $request)
    {
        $categorie = $request->input('categorie'); // Get the "categorie" parameter from the request

        // Perform a database search based on the "categorie" attribute
        $results = ActeVolontaire::where('categorie', $categorie)->get();

        // You can return the results as a JSON response or in any other format you prefer
        return view('frontOffice.Acte.show', ['actes' => $results]);
    }


Route::get('/Acte/searchByCategorie', [ActeVolontaireController::class, 'searchByCategorie'])->name('Acte.searchByCategorie');;
