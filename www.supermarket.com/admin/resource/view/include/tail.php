<!--footer section start-->
        <footer class="sticky-footer">
            <?php echo date("Y") ?> &copy; All Rights Reversed - SuperMarket.com
        </footer>
        <!--footer section end-->


    </div>
    <!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>

<!--dynamic table-->
<script type="text/javascript" language="javascript" src="js/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="js/data-tables/DT_bootstrap.js"></script>
<!--dynamic table initialization -->
<script src="js/dynamic_table_init.js"></script>

<!--file upload-->
<script type="text/javascript" src="js/bootstrap-fileupload.min.js"></script>

<!--HTML Editor-->
<script type="text/javascript" src="js/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="js/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script>
    jQuery(document).ready(function(){
        $('.wysihtml5').wysihtml5();
    });
</script>

<!--pickers plugins-->
<script type="text/javascript" src="js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="js/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script>
$( document ).ready(function() {
    $(".nirjhor-datepicker").datepicker({ 
        format: 'yyyy-mm-dd'
    });
    $(".nirjhor-datepicker").on("change", function () {
        var fromdate = $(this).val();
    });
}); 
</script>

<!--pickers initialization-->
<script src="js/pickers-init.js"></script>

<!--common scripts for all pages-->
<script src="js/scripts.js"></script>

</body>

<!-- Mirrored from adminex.themebucket.net/blank_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Sep 2015 19:55:06 GMT -->
</html>
