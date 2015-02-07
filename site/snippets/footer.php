<div class="row large-space-top">
  <footer class="small-12 small-centered medium-12 columns">
    <?php echo kirbytext($site->copyright()) ?>
  </footer>
</div>

<?php echo js('assets/js/vendor/jquery.js') ?>
<?php echo js('assets/js/foundation/foundation.min.js') ?>
<?php echo js('assets/js/foundation/foundation.interchange.js') ?>
<?php echo js('assets/js/foundation/foundation.topbar.js') ?>
<?php echo js('assets/js/vendor/kudos.js') ?>

<script>
    $(function() {

        $(document).foundation();

        var kudos = $.ajax({url: "?kudos",async: false});
        var parts = window.location.pathname.split('/');
        uid = parts[parts.length-1] + parts[parts.length-2];

        $(".num").html(kudos.responseText);
        $("figure.kudoable").kudoable();

        if(localStorage.getItem(uid) == 'true') {
            $("figure.kudoable").addClass("complete");
        }
        $("figure.kudo").bind("kudo:added", function(e)
        {
            localStorage.setItem(uid, 'true');
            var kudos = $.ajax({url: "?kudos=plus"});
        });

        $("figure.kudo").bind("kudo:removed", function(e)
        {
            var kudos = $.ajax({url: "?kudos=minus"});
            localStorage.removeItem(uid);
        });
    });
</script>

</body>

</html>