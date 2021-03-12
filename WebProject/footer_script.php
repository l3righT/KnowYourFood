<script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.sidenav').sidenav(); 
            $('.modal').modal(); 
            $('.materialboxed').materialbox(); 
            $('.tabs').tabs();
            $('.datepicker').datepicker({
                //disableWeekends:true
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 15, // Creates a dropdown of 15 years to control year
                format: 'yyyy-mm-dd'
            });
            $('.tooltipped').tooltip();
            $('.dropdown-trigger').dropdown();
            $('select').formSelect();
        })        
    </script>