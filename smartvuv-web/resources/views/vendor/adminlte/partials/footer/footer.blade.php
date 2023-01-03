<footer class="main-footer">
    {{ env('APP_COPYRIGTH') }} {{ date("Y"); }}
    <a href="https://www.it-adjusts.com/" target="_blank" rel="noopener noreferrer">{{ env('APP_POWEREDBY') }}</a>
    {{ env('APP_ALL_RIGHTS') }}
    <div class="float-right d-none d-sm-inline-block">
        {{ env('APP_VERSION') }}
    </div>
</footer>
