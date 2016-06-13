@if (session()->has('flash_message'))
<div class="alert {{ session('flash_message_level') }}" role="alert">
    <span class="sr-only">Error:</span>
    {{ session('flash_message') }}
</div>
@endif