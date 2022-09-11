<script src="{{ mix('js/app.js') }}"></script>

<script src="{{ asset('/vendors/tinymce/tinymce.min.js') }}"></script>

<script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>

@livewireScripts
<script src="{{ asset('/js/main.js') }}"></script>

{{ $script ?? ''}}