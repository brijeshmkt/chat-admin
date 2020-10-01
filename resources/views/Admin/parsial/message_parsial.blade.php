 
 	<script>
 		
		    const Toast = Swal.mixin({
		      toast: true,
		      position: 'top-end',
		      showConfirmButton: false,
		      timer: 3000
		    });
		     @if (\Session::has('danger'))
			    Toast.fire({
	        		icon: 'error',
	        		title: '{{ Session::get("danger") }}'
	      		});
      		 @endif
      		 @if (\Session::has('success'))
			    Toast.fire({
	        		icon: 'success',
	        		title: '{{ Session::get("success") }}'
	      		});
      		 @endif
      		 @if (\Session::has('info'))
			    Toast.fire({
	        		icon: 'info',
	        		title: '{{ Session::get("info") }}'
	      		});
      		 @endif

 	</script>   

