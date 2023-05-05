 <!-- TODO KÉTFÉLE MIVEL HA TRUE AKKOR EZ HA FALSE AKKOR MÁSIK -->
 <div class="toast-container position-fixed bottom-0 end-0 p-3">
     <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
         <div class="toast-header">
             <!-- <img src="..." class="rounded me-2" alt="..."> -->
             <strong class="me-auto">Shoosh</strong>
             <small><?= date("H:i") ?></small>
             <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
         </div>
         <div class="toast-body">
             <?= $response['message'], 
             var_export($response);
             ?>
         </div>
     </div>
 </div>


 <script>
     const toastTrigger = document.getElementById('liveToastBtn')
     const toastLiveExample = document.getElementById('liveToast')

     if (toastTrigger) {
         const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
         toastTrigger.addEventListener('click', () => {
             toastBootstrap.show()
         })
     }
 </script>

<script>
    setTimeout(function() {
        $(".toast").toast("hide");
        <?php if ($response["success"]) { ?>
            window.location.replace("<?php echo $response["redirect"]; ?>");
        <?php } ?>
    }, 3000);
</script>