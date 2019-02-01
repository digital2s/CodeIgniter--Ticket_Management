
    <!-- jQuery -->
    <script src="<?=  base_url()  ?>assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=  base_url()  ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?=  base_url()  ?>assets/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?=  base_url()  ?>assets/vendor/raphael/raphael.min.js"></script>
    <script src="<?=  base_url()  ?>assets/vendor/morrisjs/morris.min.js"></script>
    <script src="<?=  base_url()  ?>assets/data/morris-data.js"></script>

        <!-- DataTables JavaScript -->
    <script src="<?=  base_url()  ?>assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?=  base_url()  ?>assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?=  base_url()  ?>assets/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?=  base_url()  ?>assets/dist/js/scripts.js"></script>

        <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="<?= base_url()  ?>assets/source/jquery.fancybox.pack.js?v=2.1.5"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url()  ?>assets/source/jquery.fancybox.css?v=2.1.5" media="screen" />



</body>

  <script>
    $(function(){
        $('.check').parent().parent().css("background-color", "#fffff");

        $('#dataTables').DataTable({
            responsive: true
        });

        $('.fancybox').fancybox();
       
    });

</script>
<script type="text/javascript">
     $(function(){
        
        $('#modal').modal();
  
$("#selectAll").change(function(){  //"select all" change 
    var status = this.checked; // "select all" checked status
    $('.checkbox').each(function(){ //iterate all listed checkbox items
        this.checked = status; //change ".checkbox" checked status        
    });
});

$("button#delete").click(function(){ 
  if($('.checkbox:checked').length==0){ //if this item is unchecked
        alert('Please, check a checkbox !');
        return false;
    }else{
        confirm('I want to remove this/these speciality(ies) .');
    }
});
  


    $('.checkbox').on('click', function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#selectAll').prop('checked',true);
        }else{
            $('#selectAll').prop('checked',false);
        }
    });


     });




 </script>

 

</html>
