<div class="social-wrap">
    language
    <ul id="change_bahasa">
        <li data-lang="en" class="{{ session()->get('locale') == 'en' ? 'selected' : '' }}">
            <a href="#" class="cursor-link">
                <img src="{{ asset('frontend/img/icons8-great-britain-96.png') }}" alt="indonesia" class="img-fluid" />
            </a>
        </li>
        <li data-lang="id" class="{{ session()->get('locale') == 'id' ? 'selected' : '' }}">
            <a href="#" class="cursor-link">
                <img src="{{ asset('frontend/img/icons8-indonesia-96.png') }}" alt="indonesia" class="img-fluid" />
            </a>
        </li>
    </ul>

    <script type="text/javascript">
        // Define the URL to which the request should be sent
        var url = "{{ route('changeLang') }}";

        // Add an event listener to the list items
        document.querySelectorAll("#change_bahasa li").forEach(function(element) {
            element.addEventListener("click", function() {
                // Redirect to the URL with the selected language
                window.location.href = url + "?lang=" + this.getAttribute("data-lang");
            });
        });
    </script>
</div>

@push('scripts')
    <script type="text/javascript">
        // Define the URL to which the request should be sent
        var url = "{{ route('changeLang') }}";

        // Add an event listener to the dropdown menu
        $("#change_bahasa").change(function() {
            // Redirect to the URL with the selected language
            window.location.href = url + "?lang=" + $(this).val();
        });
    </script>
@endpush
