<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @if (session()->has('success'))
                <div class="alert alert-success" role="alert">{{ session()->get('success') }}</div>
                @endif
                <div class="card">
                    <div class="card-header">Welcome to my Site</div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias quasi sunt praesentium sed
                            laudantium corporis minima officiis? Veniam nihil commodi, optio, quae aliquam culpa velit
                            exercitationem iusto animi atque ut.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
