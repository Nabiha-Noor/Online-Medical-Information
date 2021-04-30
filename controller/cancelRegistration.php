<?php
							include('../config.php');
							error_reporting(0);

							$dates =$_GET['dates'];
							$query ="DELETE FROM booking WHERE dates='$dates'";

							$data=mysqli_query($conn,$query);
							if($data)
							{
								echo "Cancelled";
							}
							else{
								echo "Failed";
							}
					?> 
