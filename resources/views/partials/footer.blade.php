<div class="agileits_w3layouts-footer">
    <div class="copy-right text-center">
        <p>&copy; 2017 Medicate. All rights reserved | Design by <a href="http://www.natmatech.co.tz/">High hub</a></p>
    </div>  
</div> 
<!-- Classie -->
        <script src="../../jss/classie.js"></script>
        <script>
            var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
                showLeftPush = document.getElementById( 'showLeftPush' ),
                body = document.body;
                
            showLeftPush.onclick = function() {
                classie.toggle( this, 'active' );
                classie.toggle( body, 'cbp-spmenu-push-toright' );
                classie.toggle( menuLeft, 'cbp-spmenu-open' );
                disableOther( 'showLeftPush' );
            };
            

            function disableOther( button ) {
                if( button !== 'showLeftPush' ) {
                    classie.toggle( showLeftPush, 'disabled' );
                }
            }
        </script>
    <!--scrolling js-->
    <script src="../../jss/jquery.nicescroll.js"></script>
    <script src="../../jss/scripts.js"></script>
    <!--//scrolling js-->
    <!-- Bootstrap Core JavaScript -->
   <script src="../../jss/bootstrap.js"> </script>
</body>
</html>
    </div>
</div>
{{-- @endsection --}}
