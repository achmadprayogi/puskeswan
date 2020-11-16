<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<select id="kota">
    <option value="">Select kota</option>
    <?php
    if(!empty($countries)){
        foreach($countries as $row){ 
            echo '<option value="'.$row['kota_id'].'">'.$row['nama_kota'].'</option>';
        }
    }else{
        echo '<option value="">kota not available</option>';
    }
    ?>
</select>

<!-- State dropdown -->
<select id="state">
    <option value="">Select kota first</option>
</select>

<!-- City dropdown -->
<select id="city">
    <option value="">Select state first</option>
</select>

<script type="text/javascript">
$(document).ready(function(){
    /* Populate data to state dropdown */
    $('#kota').on('change',function(){
        var kotaID = $(this).val();
        if(kotaID){
            $.ajax({
                type:'POST',
                url:'<?php echo base_url('dropdowns/getStates'); ?>',
                data:'kota_id='+kotaID,
                success:function(data){
                    $('#state').html('<option value="">Select State</option>'); 
                    var dataObj = jQuery.parseJSON(data);
                    if(dataObj){
                        $(dataObj).each(function(){
                            var option = $('<option />');
                            option.attr('value', this.kecamatan_id).text(this.nama_kecamatan);           
                            $('#state').append(option);
                        });
                    }else{
                        $('#state').html('<option value="">State not available</option>');
                    }
                }
            }); 
        }else{
            $('#state').html('<option value="">Select kota first</option>');
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
    
    /* Populate data to city dropdown */
    $('#state').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'<?php echo base_url('dropdowns/getCities'); ?>',
                data:'kecamatan_id='+stateID,
                success:function(data){
                    $('#city').html('<option value="">Select City</option>'); 
                    var dataObj = jQuery.parseJSON(data);
                    if(dataObj){
                        $(dataObj).each(function(){
                            var option = $('<option />');
                            option.attr('value', this.kelurahan_id).text(this.nama_kelurahan);           
                            $('#city').append(option);
                        });
                    }else{
                        $('#city').html('<option value="">City not available</option>');
                    }
                }
            }); 
        }else{
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
});
</script>   