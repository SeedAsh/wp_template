</div>
            <div class="col-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
<?php if (is_404()) { ?>
    <script>
        function countDown(secs) {
            $("#jump").html(secs);
            if (--secs > 0) {
                setTimeout("countDown(" + secs + ")", 1000);
            } else {
                window.location.href = "<?php bloginfo('url'); ?>";
            }
        }
        countDown(3);
    </script>
<?php } ?>
</body>

</html>