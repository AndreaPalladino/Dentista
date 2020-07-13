<header>
    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-12">
                <div id="clock"></div>
            </div>
        </div>
    </div>
</header>


@push('script')
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
<script src="/java/countdown.js"></script>
<script>
    $('#clock').countdown('2020/07/14', function(event){
        var $this = $(this).html(event.strftime('02 Settimane 15 Giorni %H:%M:%S'));
    });
</script>